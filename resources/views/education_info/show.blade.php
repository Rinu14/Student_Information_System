@extends('welcome')
@section('main_content')
<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Education Registration Table</h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Board</th>
                      <th>Percentage/Cgpa</th>
                      <th>Symbol Number</th>
                      <th>Institution Name</th>
                      <th>Action</th>
                      <th style="width: 40px">Label</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                    <tr>
                      <td>{{$education_info->id}}</td>
                      <td>{{$education_info->board}}</td>
                      <td>{{$education_info->percentage_cgpa}}</td>
                      <td>{{$education_info->symbol_no}}</td>
                      <td>{{$education_info->institute_name}}</td>
                      
                      <td>
                        <a href ={{route('education_infos.show',$education_info->id)}}>
                          Show
                        </a> |
          
                      </td>
                      <td style="display:flex;">
                        <a href ={{route('education_infos.edit',$education_info->id)}}
                          class="btn btn-warning btn-sm">
                          Edit

                        </a>
                        <form method="post" action="{{route('education_infos.destroy',$education_info->id)}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </tr>
                    </td>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
@endsection
