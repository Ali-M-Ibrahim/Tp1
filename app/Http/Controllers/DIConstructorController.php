<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LoggerService;


class DIConstructorController extends Controller
{

    private $mylogservice;
    public function __construct(LoggerService $myservice){
    $this->mylogservice=$myservice;
    }

    public function index(){
        $this->mylogservice->log("this is my second example on DI ");
        return "ok";
    }

    public function index2(){
        $this->mylogservice->log("this is my second example on DI");
        return "ok";
    }
}
