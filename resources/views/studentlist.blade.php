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
                    <h3 class="mb-0">Student List</h3>
                    <h3 class="mb-0"><a href="/addstudent" class="btn btn-warning">Add User</a></h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="/index">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Student List
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
                                        <th>Gender</th>
                                        <th>Contact</th>
                                        <th>City</th>
                                        <th>Course</th>
                                        <th style="width: 40px" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d=>$s1)
                                    <tr class="align-middle">
                                        <td>{{$s1->id}}</td>
                                        <td>{{$s1->name}}</td>
                                        <td>{{$s1->email}}</td>
                                        <td>{{$s1->gender}}</td>
                                        <td>{{$s1->phone}}</td>
                                        <td>{{$s1->city}}</td>
                                        <td>{{$s1->course}}</td>
                                        
                                    </tr>    
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div> <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-end">
                                
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