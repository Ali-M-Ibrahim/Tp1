<?php

namespace App\Http\Controllers;

use App\Models\d;
use Illuminate\Http\Request;

class DController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=d::all();
        return view('list')->with("listdata",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('d');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validating= $request->validate([
            'inputname' => 'required|max:255|min:5',
            'inputdescription' => 'required'
        ],
        [
            'inputname.required'=>"this is my custom message"
        ]);

        $data = new d();
        $data->name=$request->inputname;
//        $data->description=$request->inputdescription;
        $data->description=$request->input('inputdescription');
        $data->save();
        return redirect(route('d.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\d  $department
     * @return \Illuminate\Http\Response
     */
    public function show(d $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\d  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(d $department)
    {
        $data= d::find($department->id);
        return view("Editdepartment")->with("d",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\d  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, d $department)
    {
        $data = d::find($department->id);
         $data->name=$request->inputname;
        $data->description=$request->input('inputdescription');
        $data->save();
        return redirect(route('d.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\d  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(d $department)
    {
        $data = d::find($department->id);
        $data->delete();
        return redirect(route('d.index'));
    }
}
