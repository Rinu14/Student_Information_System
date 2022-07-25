@extends('welcome')
@section('main_content')
<div class="col-md-6">
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
                      
                      <th style="width: 40px">Label</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    <tr>
                      <td>{{$batch->id}}</td>
                      <td>{{$batch->batch_year}}</td>
                      <td>{{$batch->is_active}}</td>
                      
                    </tr>
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
@endsection
