@extends('welcome')
@section('main_content')
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Faculty Registration Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
               <form method ="post"action ="{{route('faculties.update',$faculty->id)}}">
                @method('PATCH')
                @csrf
                
                <label> Faculty Name </label>
                <input type="text" name="name" value ={{$faculty->name}} id="name"/>
                  
                <label>  is_active    </label>     
                    <select value ="{{$faculty->is_active}}" name="is_active" id="is_active" placeholder="is active?">    
                     
                    <option value="1"  >True</option>    
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
