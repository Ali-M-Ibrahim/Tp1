<?php

namespace App\Http\Controllers;

use App\Services\LoggerService;
use Illuminate\Http\Request;

class DIController extends Controller
{

    public function index(LoggerService $myservice){
        $myservice->log("this is my first example on DI");
        return "ok";
    }

    public function index2(LoggerService $myservice){
        $myservice->log("this is my first example on DI");
        return "ok";
    }
    public function index3(LoggerService $myservice){
        $myservice->log("this is my first example on DI");
        return "ok";
    }
    public function index4(LoggerService $myservice){
        $myservice->log("this is my first example on DI");
        return "ok";
    }
}
