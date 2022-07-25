@extends('welcome')
@section('main_content')
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Parent Registration Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST"action="{{route('parent_infos.store')}}">
                @csrf

                <div class="card-body">
                  <div class="form-group">
                    <label for="father_name">Father's Name</label>
                    <input type="text" name="father_name" class="form-control" id="father_name" placeholder="Enter your Father's name">
                  </div>
                 <div class="form-group">
                    <label for="mother_name">Mother's Name</label>
                    <input type="text" name="mother_name" class="form-control" id="mother_name" placeholder="Enter your Mother's name">
                  </div>
                  <div class="form-group">
                    <label for="parent_name">Parent's Name</label>
                    <input type="text" name="parent_name" class="form-control" id="parent_name" placeholder="Enter your Parent's name">
                  </div>
                  <div class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter mobile no.">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email Address">
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
