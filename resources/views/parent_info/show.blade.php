@extends('welcome')
@section('main_content')
<div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Parent Registration Table</h3>

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
                      <th>father's Name</th>
                      <th>mother's Name</th>
                      <th>parent's Name</th>
                      <th>mobile</th>
                      <th>email</th>
                      
                      <th style="width: 40px">Label</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    <tr>
                      <td>{{$parent_info->id}}</td>
                      <td>{{$parent_info->father_name}}</td>
                      <td>{{$parent_info->mother_name}}</td>
                      <td>{{$parent_info->parent_name}}</td>
                      <td>{{$parent_info->mobile}}</td>
                      <td>{{$parent_info->email}}</td>
          
                      
                    </tr>
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
@endsection