<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index(){
        return view("page1");
    }
    public function parametre($id){
        echo 'The passed id is :' . $id;
    }

    public  function postdata(Request $request){
         return 'name is'. $request->input("name",'mafiesem');
    }
    public  function postdata2(Request $request){
        return 'email is'. $request->email;
    }


}
