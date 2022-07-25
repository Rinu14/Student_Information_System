@extends('welcome')
@section('main_content')
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Batch Registration Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST"action="{{route('batches.store')}}">
                @csrf

                <label>Year</label>
                <input type="text" name="batch_year" id="batch_year"/>
                  
                <label>  is_active    </label>     
                    <select name="is_active" id="is_active" value="is active?">    
                     
                    <option value="1" >True</option>    
                    <option value="0">False</option>    
                       
                    </select>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div> 
            <!-- /.card -->
</div>
@endsection
