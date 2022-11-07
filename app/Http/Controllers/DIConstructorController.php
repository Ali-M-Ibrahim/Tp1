<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\logger;
class DIConstructorController extends Controller
{


    private $logService;

    public function __construct(logger $mylog)
    {
        $this->logService=$mylog;
    }

    public function index(){
        $this->logService->log("hi this is my second example in DI");
    }

    public function index2(){
        $this->logService->log("hi this is my second example in DI");
    }
    public function index3(){
        $this->logService->log("hi this is my second example in DI");
    }

    public function index4(){
        $this->logService->log("hi this is my second example in DI");
    }



}
