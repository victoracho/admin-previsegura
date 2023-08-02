<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;
use App\Mail\ResetPasswordMail;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class AuthController extends BaseController
{

  public function signIn(Request $request)
  {
    try {
      if (
        !Auth::attempt(['email' => $request->username, 'password' => $request->password]) &&
        !Auth::attempt(['doc' => $request->username, 'password' => $request->password])
      ) {
        return $this->sendError('Desautorizado.', ['error' => 'Desautorizado']);
      }
      $user = Auth::user();
      if ($user) {
        Auth::login($user);
        $authUser = Auth::user();
        $token =  $authUser->createToken('MyAuthApp')->plainTextToken;
        $role = $authUser->firstRole();
        $profile = Profile::where('user_id', $authUser->id)->first();
        $data = $this->getUserData($profile, $token);

        return $this->sendResponse($data, 'El cliente inicia sesion.');
      }
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  public function logOut(Request $request)
  {
    try {
      if (auth()->user()->tokens()->delete()) {
        $user = auth()->user();
        $success['logout'] = true;
        $client = $request->header('User-Agent');
        DB::table('logs')->insert([
          [
            'user_id' => $user->id,
            'log_date' => date('Y-m-d H:i:s'),
            'log_type' => 'lockdown',
            'data' => $client,
            'application' => 'panel de usuarios'
          ]
        ]);
        DB::commit();

        return $this->sendResponse($success, 'el usuario cerro su sesion.');
      } else {
        return $this->sendError('Desautorizado.', ['error' => 'Un error inesperado ocurrio.']);
      }
    } catch (\Throwable $th) {
      throw $th;
    }
  }
  public function resetPasswordView(Request $request)
  {
    $req = (object)[];
    $req->token = $request->token;
    $req->email = $request->email;
    $user = User::where('email', $req->email)->first();
    $req->userType = $user->firstRoleName();
    return Inertia::render('Auth/ResetPassword', ['token' => $req->token, 'email' => $req->email, 'userType' => $req->userType]);
  }

  public function resetPassword(Request $request)
  {
    $validator = Validator::make(
      $request->all(),
      [
        'email' => ['required', 'string', 'email', 'max:255'],
        'password' => ['required', 'string', 'min:8'],
        'token' => ['required', 'string']
      ],
      [
        'email.required' => 'No hay direccion de correo seleccionada!',
        'email.string' => 'El correo debe ser solamente texto!',
        'email.email' => 'El correo tiene que ser correcto!',
        'email.max' => 'El correo tiene que ser maximo 255 caracteres!',
        'password.required' => 'La contrasena es obligatoria!',
        'password.string' => 'La contrasena tiene que se valida!',
        'password.min' => 'La contrasena tiene que ser minimo 8 caracteres!',
        'token.required' => 'El token es requerido!',
        'token.string' => 'El token tiene que ser valido!'
      ]
    );
    if ($request->password != $request->password_confirmation) {
      return Inertia::render(
        'Auth/ResetPassword',
        [
          'success' => false,
          'message' => 'Las claves no coinciden'
        ]
      );
    }

    if ($validator->fails()) {
      return Inertia::render(
        'Auth/ResetPassword'
      );
    }

    $select = DB::table('password_resets')
      ->where('email', $request->email)
      ->where('token', $request->token)
      ->orderBy('id', 'desc')
      ->first();

    if ($select->get()->isEmpty()) {
      return Inertia::render(
        'Auth/ResetPassword',
        [
          'success' => false,
          'message' => 'Este enlace se encuentra vencido, porfavor, solicita otro.',
        ]
      );
    }

    $user = User::where('email', $request->email);
    $user->update([
      'password' => Hash::make($request->password)
    ]);

    $verify2 =  DB::table('password_resets')->where([
      ['email', $request->email]
    ]);

    if ($verify2->exists()) {
      $verify2->delete();
    }

    $token = $user->first()->createToken('myapptoken')->plainTextToken;
    if ($request->userType == 'Rol super admin') {
      $redirect = 'https://admin.previsegura.com';
    }
    if ($request->userType == 'Rol de usuario') {
      $redirect = 'https://user.previsegura.com';
    }

    return Inertia::render(
      'Auth/ResetPassword',
      [
        'success' => false,
        'message' => 'Clave restablecida correctamente.',
        'token' => $token,
        'userType' => $request->userType,
        'redirect' => $redirect,
      ]
    );
  }
  public function forgotPasswordView()
  {
    return Inertia::render('Auth/ForgotPassword');
  }

  public function forgotPassword(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'email' => ['required', 'string', 'email', 'max:255'],
    ]);

    if ($validator->fails()) {
      return new JsonResponse(['success' => false, 'message' => $validator->errors()], 422);
    }

    $verify = User::where('email', $request->all()['email'])->exists();
    $user = User::where('email', $request->all()['email'])->first();
    if ($verify) {
      DB::table('password_resets')->where([
        ['email', $request->email]
      ])->delete();

      $token = app('auth.password.broker')->createToken($user);


      $email = $request->email;

      if (getenv('APP_ENV') == 'staging') {
        $var = "http://profile-dev.fttalent.work/reset-password/?token=$token&email=$email";
      }

      if (getenv('APP_ENV') == 'local') {
        $var = "http://localhost:8000/reset-password/?token=$token&email=$email";
      }

      if (getenv('APP_ENV') == 'production') {
        $var = "https://profile.fttalent.work/reset-password/?token=$token&email=$email";
      }
      Mail::to($request->all()['email'])->send(new ResetPasswordMail($var));
    }
  }

  public function signUp(Request $request)
  {
    try {
      DB::beginTransaction();
      $validator = Validator::make($request->all(), [
        'firstnames' => 'required',
        'lastnames' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'confirm_password' => 'required|same:password',
      ]);

      if ($validator->fails()) {
        return $this->sendError('Error validation', $validator->errors());
      }

      $input = $request->all();
      $input['password'] = bcrypt($input['password']);
      $user = User::create($input);
      $client = $request->header('User-Agent');
      DB::table('logs')->insert([
        [
          'user_id' => $user->id,
          'log_date' => date('Y-m-d H:i:s'),
          'log_type' => 'create',
          'data' => $client
        ]
      ]);
      DB::commit();

      $success['mail'] = 'enviado';
      $success['token'] =  $user->createToken('MyAuthApp')->plainTextToken;
      $success['firstnames'] =  $user->firstnames;
      $success['user'] = $user;
      return $this->sendResponse($success, 'Usuario creado con exito.');
    } catch (\Throwable $th) {
      throw $th;
    }
  }
}
