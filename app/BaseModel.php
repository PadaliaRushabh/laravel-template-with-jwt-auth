<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    
    public static function success( $result=null, $code = 200){

        $return = array("result" => $result, "success" => true, "code" => $code);
        return $return;
    }

    public static function fail($code = IlluminateResponse::HTTP_BAD_REQUEST){

        $return = array("success" => false ,"code" => $code);
        return $return;
    }
}
