<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\Response as IlluminateResponse;

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
        #$user = JWTAuth::parseToken()->authenticate();
    }

    public function success($data, $code = 200){

        $return = array("data" => $data, "success" => true, "code" => $code);
        return json_encode($return);
    }

    public function fail($message, $code = IlluminateResponse::HTTP_BAD_REQUEST){

        $return = array("message" => $message, "success" => false ,"code" => $code);
        return json_encode($return);
    }

    public function testConnection(Request $request){

        $input = $request->all();
        $input["message"] = "Connection tested successfully";
        return $this->success($input);
    }

    public function authenticateUser(){
        try{
            $this->user = JWTAuth::parseToken()->authenticate();
        }catch(JWTException $exp){}
    }

}
