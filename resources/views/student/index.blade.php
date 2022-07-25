@extends('welcome')
@section('main_content')
<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Student Registration Form</h3>

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
                      <th>E-mail</th>
                      <th>phone_no</th>
                      <th>blood_group</th>
                      <th>temp_address</th>
                      <th>perm_address</th>
                      <th>gender</th>
                      <th>dob</th>
                      <th>Action</th>
                      <th style="width: 40px">Label</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($students as $s)
                    <tr>
                      <td>{{$s->id}}</td>
                      <td>{{$s->name}}</td>
                      <td>{{$s->email}}</td>
                      <td>{{$s->phone}}</td>
                      <td>{{$s->blood_group}}</td>
                      <td>{{$s->temp_address}}</td>
                      <td>{{$s->perm_address}}</td>
                      <td>{{$s->gender}}</td>
                      <td>{{$s->dob}}</td>
                      <td>
                        <a href ={{route('students.show',$s->id)}}>
                          Show
                        </a> |
          
                      </td>
                      <td style="display:flex;">
                        <a href ={{route('students.edit',$s->id)}}
                          class="btn btn-warning btn-sm">
                          Edit

                        </a>
                       
                        <form method="POST" action="{{route('students.destroy', $s->id)}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
@endsection
