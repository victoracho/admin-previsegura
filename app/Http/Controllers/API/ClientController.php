<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hashids\Hashids;
use App\Http\Resources\API\ContractResource;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;

class ClientController extends BaseController
{
  public function getContracts(Request $request)
  {
    try {
      if ($user = $request->user()) {
        $token = $request->bearerToken();
        $profile = Profile::where('user_id', $user->id)->first();
        $success = $this->getUserData($profile, $token);
        $role = $success['role'];
        $success['client'] = $profile;
        $success['contracts'] = ContractResource::collection($user->contracts);
        return $this->sendResponse($success, 'Informacion de cliente entregada.');
      } else {
        return $this->sendError('Desautorizado.', ['error' => 'Error de usuario, desautarizado.']);
      }
    } catch (\Throwable $th) {
      throw $th;
    }
  }
}
