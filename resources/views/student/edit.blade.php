@extends('welcome')
@section('main_content')
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Student Registration Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method ="post"action ="{{route('students.update',$student->id)}}">
                @method('PATCH')
                @csrf 
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputName1">Name</label>
              
                    <input type="text" name="name" value ={{$student->name}} class="form-control" id="exampleInputName1" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputBlood_Group1">Blood Group</label>
                    <input type="" name="blood_group" value ={{$student->blood_group}} class="form-control" id="exampleInputBlood_Group1" placeholder="Enter blood_grp">
                  </div>
                  <div class="form-group">
                    <label for ="exampleInputGender1"> Gender</label>
                    <input type="radio" name="gender" class="form-control" value="male"{{$student->gender=='male'?'checked':''}}>Male 
                    <input type="radio" name="gender" class="form-control" value="female"{{$student->gender=='female'?'checked':''}}>Female
                  </div>  
                  
                  <div class="form-group">
                    <label for="exampleInputPhone1">Phone no.</label>
                    <input type="tel"name="phone" value ={{$student->phone}} class="form-control" id="exampleInputPhone1" placeholder="Enter Phone no.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputTemp-Address1">Temporary Address</label>
                    <input type="text" name="temp_address" value ={{$student->temp_address}} class="form-control" id="exampleInputTemp-Address1" placeholder="Enter Temporary address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPerm_Address1">Permanent Address</label>
                    <input type="text"name="perm_address" value ={{$student->perm_address}} class="form-control" id="exampleInputPerm_Address1" placeholder="Enter Permanent Address">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" value ={{$student->email}} class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputDOB1">DateOfBirth</label>
                    <input type="date"name='dob' value={{$student->dob}} class="form-control" id="exampleInputDOB1"placeholder="Enter your date of birth">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</div>
@endsection
