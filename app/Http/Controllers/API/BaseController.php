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
      $objUser->id = $hashids->encode($user->user_id);
      $state = null;
      $country = null;
      $profileUser = User::find($user->user_id);
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
