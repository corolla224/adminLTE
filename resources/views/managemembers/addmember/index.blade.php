@extends('master')

@section('footer')
<script src="/dist/js/pages/dashboard.js"></script>
@endsection

@section('content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h1 class="box-title">Add Members</h1>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-pirmary" data-toggle="modal" data-target="#myModal">Create Member</button>            
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>User</th>
                  <th>Created_Date</th>
                  <th>Update_Date</th>
                  <th>Status</th>
                  <th>Reason</th>
                  <th>Action</th>
                </tr>                                         
                <tr @foreach($users as $u) >
                  <td>{{ $u->id }}</td>
                  <td>{{ $u->name }}</td>
                  <td>{{ $u->created_at }}</td>
                  <td>{{ $u->updated_at}}</td>                  
                  <td><span class="label label-success">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  <td>
                  <td>
                  <form method="post" action="{{ route('addmember.index') }} {{ $user->id }}">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    <input name="_method" type="hidden" value="DELETE">
                    <a href= action="{{ route('index') }} {{ $user->id }}"/edit type="Text" class="btn btn-xs btn-default">Edit</a>
                    <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                  </form>
                </td>
                <td>
                <button type="button" class="btn-xs btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg">Show</button>
                </td>
                  </td>
                </tr>                        
                @endforeach          
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection