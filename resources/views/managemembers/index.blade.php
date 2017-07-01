@extends('master')

@section('footer')
<script src="/dist/js/pages/dashboard.js"></script>
@endsection

@section('content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h1 class="box-title">Managemembers</h1>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>User</th>
                  <th>Created_Date</th>
                  <th>Update_Date</th>
                  <th>Status</th>
                  <th>Reason</th>
                </tr>                                         
                <tr @foreach($users as $u) >
                  <td>{{ $u->id }}</td>
                  <td>{{ $u->name }}</td>
                  <td>{{ $u->created_at }}</td>
                  <td>{{ $u->updated_at}}</td>                  
                  <td><span class="label label-success">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
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