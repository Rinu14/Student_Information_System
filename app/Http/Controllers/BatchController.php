<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Batch;

class BatchController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $batches=Batch::all();
    
        return view('batch.index',compact('batches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('batch.create');
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
        $batch_year=$request->get('batch_year');
        $is_active=$request->get('is_active');
        
   

    try{

        
        Batch::create([
            'batch_year'=>$batch_year,
            'is_active'=>$is_active,

        ]);
        return redirect()->route('batches.index');

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
        $batch=Batch::find($id);
        return view ('batch.edit',compact('batch'));
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
        $batch=Batch::find($id);

        $batch_year=$request->get('batch_year');
        $is_active=$request->get('is_active');
        

        $batch['batch_year']= $batch_year;
        $batch['is_active']=$is_active;
       

        $batch->update();
        return redirect()->route('batches.index');
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
         $batch =Batch::find($id);
         $batch->delete();
        return redirect()-> route('batches.index');
    }
}
