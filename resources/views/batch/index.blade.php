@extends('welcome')
@section('main_content')
<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Batch Registration Table</h3>

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
                      <th>Year</th>
                      <th>is_active</th>
                      <th>Action</th>
                      <th style="width: 40px">Label</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($batches as $b)
                    <tr>
                      <td>{{$b->id}}</td>
                      <td>{{$b->batch_year}}</td>
                      <td>{{$b->is_active}}</td>
                      
                      <td>
                        <a href ={{route('batches.show',$b->id)}}>
                          Show
                        </a> |
          
                      </td>
                      <td style="display:flex;">
                        <a href ={{route('batches.edit',$b->id)}}
                          class="btn btn-warning btn-sm">
                          Edit

                        </a>
                        <form method="post" action="{{route('batches.destroy',$b->id)}}">
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
