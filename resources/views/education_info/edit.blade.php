@extends('welcome')
@section('main_content')
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Educational Information Registration Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method ="post"action ="{{route('education_infos.update',$education_info->id)}}">
                @method('PATCH')
                @csrf 
                <div class="card-body">
                  <div class="form-group">
                    <label for="board">Board </label>
              
                    <input type="text" name="board" value ={{$education_info->board}} class="form-control" id="board" >
                  </div>
                  <div class="form-group">
                    <label for="percentage/cgpa">Percentage/Cgpa</label>
                    <input type="text" name="percentage/cgpa" value ={{$education_info->percentage/cgpa}} class="form-control" id="percentage/cgpa" >
                  </div>
                  <div class="form-group">
                    <label for="institute_name">Institution Name</label>
                    <input type="text" name="institute_name" value={{$education_info->institute_name}}class="form-control" id="institute_name">
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
