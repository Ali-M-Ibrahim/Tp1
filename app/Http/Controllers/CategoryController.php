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
//     //get all data
//        $data = category::all();
//      // get by id
//        $data= category::find(1);
//        // get all rows having category 4
//        $data = category::where("title","Category 4")->get();
//        // get first row having title category 4
//        $data = category::where("title","Category 4")->first();
//        $data = category::whereIn("id",array(1,2,3,4))->get();
//        $data = category::where('id','>',1)->get();
//        $data = category::where("title","Category 4")->where('id',1)->get();
//        $data = category::where("title","Category 4")->Orwhere('id',1)->get();
//        $data = category::whereBetween('id',[2,4])->get();
//        $data = category::where("title","Category 4")->count();
//        $data = category::where("title","Category 4")->max('id');
//        $data = category::where("title","Category 4")->min('id');
//        $data = category::where("title","Category 4")->avg('id');
//        $data= category::select("id","title")->find(1);
//        $data = category::firstWhere("title","Category 4");
//        $data = category::where("title","Category 4")->get()->take(1);
//        $data = category::where("title","Category 4")->orderBy("id","desc")->get();
//        $data = category::select('title', DB::raw("count(*) as CountofData"))
//            ->groupBy("title")->get();

//        $data = category::where("title","Category 101010")->firstOrFail();
//        $data= category::findOrFail(1);

//        $data = category::where("title","Category 101010")->firstOr(function(){
//            return "this record does not exist";
//        });

//        $data= category::findOr(144,function(){
//            return "yoau are trying to find something does not exist";
//        });


//
//         $data2 = category::find(1);
//         $data2->title="Category 1";
//         $data2->save();
//
//        $data = category::where("title","Category 4")->update(["title"=>"Category updated"]);
//
//
//        $data2 = category::find(1);
//        $data2->delete();


        $data = category::where("title","Category updated")->delete();

        return response()->json(["code"=>200]) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // First method
        $data = new category();
        $data->title="Category 4";
        $data->description="This is my second category created using ORM";
        $data->active = true;
        $data->save();


        $data = new category();
        $data->title="Category5";
        $data->description="This is my second category created using ORM";
        $data->active = true;
        $data->save();

        // Second method
        $data2 = category::create(['title'=> 'Category 5', 'description'=> 'Third category', 'active'=> false]);
        return response()->json(["code"=>200]);


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
