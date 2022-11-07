<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\logger;
class DIController extends Controller
{


    public function index(logger $logService){
        $logService->log("hi this is my first example in DI");
    }

    public function index2(logger $logService){

        $logService->log("hi this is my first example in DI");

    }



}
