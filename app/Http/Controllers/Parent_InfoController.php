<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parent_Info;

class Parent_InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $parent_infos=Parent_Info::all();
            return view('parent_info.index',compact('parent_infos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('parent_info.create');
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
        $father_name=$request->get('father_name');
        $mother_name=$request->get('mother_name');
        $parent_name=$request->get('parent_name');
        $mobile=$request->get('mobile');
        $email=$request->get('email');
        
        
   

    try{

        
        Parent_Info::create([
            'father_name'=>$father_name,
            'mother_name'=>$mother_name,
            'parent_name'=>$parent_name,
            'mobile'=>$mobile,
            'email'=>$email

        ]);
        return redirect()->route('parent_infos.index');

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
        $batch=Batch::find($id);
        return view ('batch.show',compact('batch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $parent_info=Parent_Info::find($id);
        return view ('parent_info.edit',compact('parent_info'));
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
        $parent_info=Parent_Info::find($id);

        $father_name=$request->get('father_name');
        $mother_name=$request->get('mother_name');
        $parent_name=$request->get('parent_name');
        $mobile=$request->get('mobile');
        $email=$request->get('email');

        $parent_info['father_name']=$father_name;
        $parent_info['mother_name']=$mother_name;
        $parent_info['parent_name']=$parent_name;
        $parent_info['mobile']=$mobile;
        $parent_info['email']=$email;
        

        $parent_info->update();
        return redirect()->route('parent_infos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
    
