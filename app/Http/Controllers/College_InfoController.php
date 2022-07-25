<?php

namespace App\Http\Controllers;
use App\college_info;

use Illuminate\Http\Request;

class College_InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        //
        $college_infos=College_Info::all();
    
        return view('college_info.index', compact('college_infos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('college_info.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $tu_reg_no=$request->get('tu_reg_no');
        $symbol_no=$request->get('symbol_no');

          try{

        
        College_Info::create([
            'tu_reg_no'=>$tu_reg_no,
            'symbol_no'=>$symbol_no,
            
        ]);
        return redirect()->route('college_infos.index');

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
        $college_info=College_Info::find($id);
        return view ('college_info.show',compact('college_info'));
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
        $college_info=College_Info::find($id);
        return view ('college_info.edit',compact('college_info'));
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
        $college_info=College_Info::find($id);

        $tu_reg_no=$request->get('tu_reg_no');
        $symbol_no=$request->get('symbol_no');
        

        $college_info['tu_reg_no']= $tu_reg_no;
        $college_info['symbol_no']=$symbol_no;
       

        $college_info->update();
        return redirect()->route('college_infos.index');
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
