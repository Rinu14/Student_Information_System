<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students=Student::all();
    
        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     **/
    public function create()
    {
        return view('student.create');
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
        $email=$request->get('email');
        $phone=$request->get('phone_no');
        $blood_group=$request->get('blood_group');
        $temp_address=$request->get('temp_address');
        $perm_address=$request->get('perm_address');
        $gender=$request->get('gender');
        $dob=$request->get('dob');
   

    try{

        
        Student::create([
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
            'blood_group'=>$blood_group,
            'temp_address'=>$temp_address,
            'perm_address'=>$perm_address,
            'gender'=>$gender,
            'dob'=>$dob,
            'is_active' => true,
            'is_alumi' => false
        ]);
        return redirect()->route('students.index');

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
        $student=Student::find($id);
        return view ('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=Student::find($id);
        return view ('student.edit',compact('student'));
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
        $students=Student::find($id);

        $name=$request->get('name');
        $email=$request->get('email');
        $phone=$request->get('phone');
        $blood_group=$request->get('blood_group');
        $temp_address=$request->get('temp_address');
        $perm_address=$request->get('perm_address');
        $gender=$request->get('gender');
        $dob=$request->get('dob');

        $students['name']= $name;
        $students['email']=$email;
        $students['phone']=$phone;
        $students['blood_group']=$blood_group;
        $students['temp_address']=$temp_address;
        $students['perm_address']=$perm_address;
        $students['gender']=$gender;
        $students['dob']=$dob;
        $students['is_active'] = true;
        $students['is_alumi'] = false;

        $students->update();
        return redirect()->route('students.index');


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function destroy($id)
    {
        
        $student =Student::find($id);
        $student->delete();
        return redirect()-> route('students.index');

    }
}
