<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education_Info;
class Education_InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $education_infos = Education_Info::all();
    
        return view('education_info.index',compact('education_infos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('education_info.create');
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
        $board=$request->get('board');
        $percentage/cgpa=$request->get('percentage/cgpa');
        $institute_name=$request->get('institute_name');
        
        try{

        
        Education_Info::create([
            'board'=>$board,
            'percentage/cgpa'=>$percentage/cgpa,
            'institute_name'=>$institute_name

        ]);
        return redirect()->route('education_infos.index');

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
         $education_info=Education_Info::find($id);
        return view ('education_info.show',compact('education_info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $education_info=Education_Info::find($id);
        return view ('education_info.edit',compact('education_info'));

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
        $education_info=Education_Info::find($id);

        $board=$request->get('board');
        $percentage/cgpa=$request->get('percentage/cgpa');
        $institute_name=$request->get('institute_name');

        $education_info['board']= $board;
        $education_info['percentage/cpga']=$percentage/cpga;
        $education_info['institute_name']=$institute_name;
       

        $education_info->update();
        return redirect()->route('education_infos.index');
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
