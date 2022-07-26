@extends('welcome')
@section('main_content')
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Education Information Registration Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST"action="{{route('education_infos.store')}}">
                @csrf

                <div class="card-body">
                  <div class="form-group">
                    <label for="board">Board</label>
                    <input type="text" name="board" class="form-control" id="board" placeholder="Board Name">
                  </div>
                 <div class="form-group">
                    <label for="percentage_cgpa">Percentage/cgpa</label>
                    <input type="text" name="percentage_cgpa" class="form-control" id="percentage_cgpa" placeholder="Enter your percentage or cgpa">
                  </div>
                  <div class="form-group">
                    <label for="symbol_no">Symbol Number</label>
                    <input type="text" name="symbol_no" class="form-control" id="symbol_no" placeholder="Enter your symbol no">
                  </div>
                  <div class="form-group">
                    <label for="institute_name">Institution Name</label>
                    <input type="text" name="institute_name" class="form-control" id="institute_name" placeholder="Enter Institute Name">
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
