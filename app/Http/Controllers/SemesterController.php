<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $semesters=Semester::all();
    
        return view('semester.index',compact('semesters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     **/
    public function create()
    {
        return view('semester.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $name=$request->get('name');
        $is_active=$request->get('is_active');
        
   

    try{

        
        Semester::create([
            'name'=>$name,
            'is_active'=>$is_active,
            
        ]);
        return redirect()->route('semesters.index');

    }
    catch(\Exception $e){
        dd($e->getMessage());
        return redirect()->back();
    }
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $semester=Semester::find($id);
        return view ('semester.show',compact('semester'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $semester=Semester::find($id);
        return view ('semester.edit',compact('semester'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $semester=Semester::find($id);

        $name=$request->get('name');
        $is_active=$request->get('is_active');
        

        $semester['name']= $name;
        $semester['is_active']=$is_active;
        

        $semester->update();
        return redirect()->route('semesters.index');


        
    }
/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
