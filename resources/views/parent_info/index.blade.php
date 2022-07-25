@extends('welcome')
@section('main_content')
<div class="col-md-12">
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
                      <th>Father's name</th>
                      <th>Mother's name</th>
                      <th>Parent's name</th>
                      <th>Mobile</th>
                      <th>Email</th>
                      <th>Action</th>
                      <th style="width: 40px">Label</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($parent_infos as $p)
                    <tr>
                      <td>{{$p->id}}</td>
                      <td>{{$p->father_name}}</td>
                      <td>{{$p->mother_name}}</td>
                      <td>{{$p->parent_name}}</td>
                      <td>{{$p->mobile}}</td>
                      <td>{{$p->email}}</td>
                      
                      <td>
                        <a href ={{route('parent_infos.show',$p->id)}}>
                          Show
                        </a> |
          
                      </td>
                      <td style="display:flex;">
                        <a href ={{route('parent_infos.edit',$p->id)}}
                          class="btn btn-warning btn-sm">
                          Edit

                        </a>
                        <form method="post" action="{{route('parent_infos.destroy',$p->id)}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </tr>
                    </td>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
@endsection
