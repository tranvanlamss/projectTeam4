@extends('layouts.admin')

@section('title')
  <title>Trang chủ</title>
 
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     @include('partial.content-header', ['name' => 'permission', 'key' => 'List'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Role Name</th>
                        <th style="width: 50px;"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($roleList as $item)
                        <tr>
                          <td>{{ ++$index }}</td>
                          <td>{{ $item->role_name }}</td>
                          <td><a href="{{ route('permission.setting') }}?id={{ $item->id }}" class="btn btn-warning">Setting</a></td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
