@extends('layouts.admin')

@section('title')
  <title>Trang chủ</title>
 
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     @include('partial.content-header', ['name' => 'user', 'key' => 'List'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">User Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($users as $users)
                        <tr>
                          <th scope="row">{{$users->id}}</th>
                          <td>{{$users->name}}</td>
                          <td>{{$users->email}}</td>
                          <td>
                            <a href="{{ route('users.edit', $users->id) }}" class="btn btn-success">Edit</a>
                            <a href="{{ route('users.delete', $users->id) }}" class="btn btn-danger">Delete</a>
                          </td>
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
