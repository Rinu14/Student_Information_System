@extends('welcome')
@section('main_content')
<div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">College Registration Table</h3>

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
                      <th>tu_reg_no</th>
                      <th>symbol no</th>
                      
                      <th style="width: 40px">Label</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    <tr>
                      <td>{{$college_info->id}}</td>
                      <td>{{$college_info->tu_reg_no}}</td>
                      <td>{{$college_info->symbol_no}}</td>
                      
                    </tr>
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
@endsection