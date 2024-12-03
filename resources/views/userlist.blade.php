@extends('layout.main')
@section('title')
    User List
@endsection
@section('main-content')
<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">User List</h3>
                    <h3 class="mb-0"><a href="/adduser" class="btn btn-warning">Add User</a></h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="/index">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            User List
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-6">
                        <div class="card-header">
                            <h3 class="card-title">User List</h3>
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>D.O.B</th>
                                        <th>Gender</th>
                                        <th>Contact</th>
                                        <th>City</th>
                                        <th>Languages</th>
                                        <th style="width: 40px" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d=>$s1)
                                    <tr class="align-middle">
                                        <td>{{$s1->id}}</td>
                                        <td>{{$s1->name}}</td>
                                        <td>{{$s1->email}}</td>
                                        <td>{{$s1->dob}}</td>
                                        <td>{{$s1->gender}}</td>
                                        <td>{{$s1->phone}}</td>
                                        <td>{{$s1->city}}</td>
                                        <td>{{$s1->language}}</td>
                                        <td>
                                            <a href="{{route('updateuser',$s1->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td> 
                                            <a href="{{route('deleteuser',$s1->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Do You really want to delete record?')">Delete</a>
                                        </td>
                                    </tr>    
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div> <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-end">
                                <li> {{$data->links()}}</li>
                                </ul>
                        </div>
                    </div> <!-- /.card -->
                   
                </div> <!-- /.col -->
                <!-- /.col -->
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</main>
@endsection