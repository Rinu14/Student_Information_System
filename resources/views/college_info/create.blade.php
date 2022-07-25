@extends('welcome')
@section('main_content')
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">College Registration Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST"action="{{route('college_infos.store')}}">
                @csrf

                <div class="card-body">
                  <div class="form-group">
                    <label for="tu_reg_no">Tu registration Number</label>
                    <input type="text" name="tu_reg_no" class="form-control" id="tu_reg_no" placeholder="Enter TU Registration Number">
                  </div>
                 <div class="form-group">
                    <label for="symbol_no">Symbol Number</label>
                    <input type="text" name="symbol_no" class="form-control" id="symbol_no" placeholder="Enter TU Registration Number">
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
