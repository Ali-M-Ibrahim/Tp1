<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//     $data = category::all();
//     $data = category::find(1);
//
//     $data = category::where("name","Category 2")->get();
//
//     $data = category::where("name","Category 2")->first();
//     $data = category::firstWhere("name","Category 2");
//
//
//     $data = category::where("name","Category 2")->where("id","2")->get();
//
//     $data = category::where("name","Category 2")->Orwhere("name","Category 1")->get();
//
//     $data = category::whereIn("id",array(1,2,3))->get();
//
//     $data = category::whereBetween("id",[1,4])->get();
//
//        $data = category::where("name","Category 2")->count();
//        $data = category::where("name","Category 2")->max('id');
//        $data = category::where("name","Category 2")->min('id');
//        $data = category::where("name","Category 2")->avg('id');
//
//        $data = category::where("name","Category 2")->get()->take(10);
//
////        $data = category::findOrFail(100);
//
//        $data = category::findOr(100,function(){
//            return "there is no data having id 100";
//        });
//
//
//        $data = category::findOr(100,function(){
//            return "there is no data having id 100";
//        });
//
//
//        $data = category::where("name","Category sdadsdsa2")->firstOr(function(){
//            return "you are trying to get data tthat does not exist";
//        });
//
//
//        $data = category::where("name","Category 2")->orderBy("id","desc")->get();
//
//
//        $data = category::where("name","Category 2")->select("id","name")->get();
//
//
//
//        $data = category::select('name', DB::raw("count(*) as CountofData"))
//            ->groupBy("name")->get();
//


//        $data = category::find(1);
//        $data->name="name2";
//        $data->save();
//
//        $data = category::where("name","Category 2")->update(['name'=> 'newname']);

        $data = category::where("name","Category 2")->delete();

        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $data = new Category();
       $data->name="Category 2";
       $data->description="This is my second category";
       $data->save();

       $data2= category::create(['name'=>'category 3', 'description' =>'my description']);


       return response()->json(["code"=>"200"]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        //
    }
}
