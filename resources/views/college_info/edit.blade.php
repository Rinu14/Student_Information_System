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
              <form method ="post"action ="{{route('college_infos.update',$college_info->id)}}">
                @method('PATCH')
                @csrf 
                <div class="card-body">
                  <div class="form-group">
                    <label for="tu_reg_no">TU Registration Number </label>
              
                    <input type="text" name="tu_reg_no" value ={{$college_info->tu_reg_no}} class="form-control" id="tu_reg_no" >
                  </div>
                  <div class="form-group">
                    <label for="symbol_no">Symbol Number</label>
                    <input type="text" name="symbol_no" value ={{$college_info->symbol_no}} class="form-control" id="symbol_no" >
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
