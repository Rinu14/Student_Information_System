@extends('welcome')
@section('main_content')
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Semester Registration Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
               <form method ="post"action ="{{route('semesters.update',$semester->id)}}">
                @method('PATCH')
                @csrf
                
                <label> Semester Name </label>
                <input type="text" name="name" value ={{$semester->name}} id="name"/>
                  
                <label>  is_active    </label>     
                    <select name="is_active" id="is_active" placeholder="is active?">    
                     
                    <option value="1" value ={{$semester->is_active}} >True</option>    
                    <option value="0"value ={{$semester->is_active}}>False</option>    
                       
                    </select>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div> 
            <!-- /.card -->
</div>
@endsection
