<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;


class BaseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        #$this->middleware('auth');
        $user = JWTAuth::parseToken()->authenticate();
    }

    public function success($data, $code = 200){

        $data = json_decode($data, True);
        $return = array("data" => $data, "success" => true, "code" => $code);
        return json_encode($return);
    }

    public function fail($message, $code){

        $return = array("message" => $message, "success" => false ,"code" => $code);
        return json_encode($return);
    }

}
