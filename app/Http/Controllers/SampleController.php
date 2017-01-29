<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SensorController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->authenticateUser();
    }

}
