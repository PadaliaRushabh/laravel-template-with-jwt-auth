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

    const CODE = array(
        IlluminateResponse::HTTP_BAD_REQUEST => "Something went wrong",
        100 => "Error message 1",
        101 => "Error message 2"
    );

    public function __construct()
    {
        #$this->middleware('auth');
        #$user = JWTAuth::parseToken()->authenticate();
    }

    public function success($data, $code = 200){

        $return = array("data" => $data, "success" => true, "code" => $code);
        return json_encode($return);
    }

    public function fail($code = IlluminateResponse::HTTP_BAD_REQUEST){

        $return = array("message" => self::CODE[$code], "success" => false ,"code" => $code);
        return json_encode($return);
    }

    public function testConnection(Request $request){

        $input = $request->all();
        $input["message"] = "Connection passed successfully";
        return $this->success($input);
    }

    public function authenticateUser(){
        try{
            $this->user = JWTAuth::parseToken()->authenticate();
        }catch(JWTException $exp){}
    }

}
