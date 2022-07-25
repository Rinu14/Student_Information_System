@extends('welcome')
@section('main_content')
<div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Student Registration Table</h3>

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
                      <th>Name</th>
                      <th>Email</th>
                      <th>phone_no</th>
                      <th>blood_group</th>
                      <th>temp_address</th>
                      <th>perm_address</th>
                      <th>gender</th>
                      <th>dob</th>
                      <th style="width: 40px">Label</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    <tr>
                      <td>{{$student->id}}</td>
                      <td>{{$student->name}}</td>
                      <td>{{$student->email}}</td>
                      <td>{{$student->phone}}</td>
                      <td>{{$student->blood_group}}</td>
                      <td>{{$student->temp_address}}</td>
                      <td>{{$student->perm_address}}</td>
                      <td>{{$student->gender}}</td>
                      <td>{{$student->dob}}</td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
@endsection