<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\department;

class bladeController extends Controller
{
    public function index()
    {
//        return view('firstblade',['name'=>'group3']);

//        return view('firstblade')->with("name",'Group3');

         $data= department::all();
        return view('firstblade')->with("data",null);
//        $data2= department::all();
//        return view('firstblade',compact('data','data2'));

//         $test = $this->getmData();
//         $test = $this->getData();
//        return view('firstblade');

    }



    public function index2()
    {

        return view('firstpage');


    }
    public function index3()
    {

        return view('secondpage');


    }

    public function getData(){
        $data= department::all();
        view()->share('johny',$data);
    }


    public function getmData(){
        $data= department::all();
       return $data;
    }
}
