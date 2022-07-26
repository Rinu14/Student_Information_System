@extends('welcome')
@section('main_content')
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Parent's Registration Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method ="post"action ="{{route('parent_infos.update',$parent_info->id)}}">
                @method('PATCH')
                @csrf 
                <div class="card-body">
                <div class="form-group">
                    <label for="father_name">Father's Name</label>
                    <input type="text" name="father_name" value={{$parent_info->father_name}} class="form-control" id="father_name" >
                  </div>
                 <div class="form-group">
                    <label for="mother_name">Mother's Name</label>
                    <input type="text" name="mother_name" value={{$parent_info->mother_name}} class="form-control" id="mother_name" >
                  </div>
                  <div class="form-group">
                    <label for="parent_name">Parent's Name</label>
                    <input type="text" name="parent_name"  value ="{{$parent_info->parent_name}}"class="form-control" id="parent_name">
                  </div>
                  <div class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="text" name="mobile" value="{{$parent_info->mobile}}" class="form-control" id="mobile">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{$parent_info->email}}" class="form-control" id="email">
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
