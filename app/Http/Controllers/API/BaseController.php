<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Hashids\Hashids;
use App\Models\User;


class BaseController extends Controller
{
  /**
   * success response method.
   *
   * @return \Illuminate\Http\Response
   */
  public function sendResponse($result, $message)
  {
    $response = [
      'success' => true,
      'message' => $message,
    ];

    foreach ($result as $key => $dat) {
      $response[$key] = $dat;
    }


    return response()->json($response,);
  }

  public function getUserData($user, $token)
  {
    if ($user) {
      $hashids = new Hashids('client-helper', 20);
      $objUser = (object)[];
      $objUser = $user->clone();
      $objUser->id = $hashids->encode($user->id);
      $state = null;
      $country = null;
      if ($user->state_id) {
        $state = (object)[];
        $state->name = $user->state->name;
        $state->id = $hashids->encode($user->state->id);
      }
      if ($user->country_id) {
        $country = (object)[];
        $country->name = $user->country->name;
        $country->number_code = $user->country->number_code;
        $country->id = $hashids->encode($user->country->id);
      }
      $objUser->country = $country;
      $objUser->state = $state;
      $objUser->firstnames = $user->firstnames;
      $objUser->lastnames = $user->lastnames;
      $objUser->gender = $user->gender;
      $objUser->email = $user->email;
      $objUser->birthdate = $user->birthdate;
      $objUser->age = $user->getAgeAttribute();
      $objUser->main_phone = $user->main_phone;
      $objUser->mobile_phone = $user->mobile_phone;
      $objUser->optional_phone = $user->optional_phone;
      $objUser->work_phone = $user->work_phone;
      $profileUser = User::find($user->id);
      $role = $profileUser->firstRole();
      $role = $role->only(['slug', 'name']);

      $success['user'] = $objUser;
      $success['role'] = $role;
      $success['token'] = $token;
      return $success;
    }
  }
  /**
   * return error response.
   *
   * @return \Illuminate\Http\Response
   */
  public function sendError($error, $errorMessages = [], $code = 401)
  {
    $response = [
      'success' => false,
      'message' => $error,
    ];

    if (!empty($errorMessages)) {
      $response['data'] = $errorMessages;
    }

    return response()->json($response, $code);
  }
}
