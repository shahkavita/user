@extends('layout.main')
@section('title')
    Add User
@endsection
@section('main-content')
<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Add User</h3>
                    <h3 class="mb-0">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="/index">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Add User 
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-6">
                        <div class="card-header">
                            <h3 class="card-title">User Regisation Form</h3>
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            <form method="POST" action="{{route('registeruser')}}">
                                @csrf
                                         <div class="row">
                                                <div class="col-md-6 mb-4">

                                                  <div data-mdb-input-init class="form-outline">
                                                    <label class="form-label" for="form3Example1m">Name </label>
                                                    <input type="text" id="name" name="name" class="form-control form-control-md" />
                                                   </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                  <div data-mdb-input-init class="form-outline">
                                                    <label class="form-label" for="form3Example1n">Email</label>
                                                    <input type="email" id="email" name="email" class="form-control form-control-md" />
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-md-6 mb-4">
                                                  <div data-mdb-input-init class="form-outline">
                                                    <label class="form-label" for="form3Example1m">DOB</label>
                                                    <input type="date" id="dob" name="dob" class="form-control form-control-md" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                  <div data-mdb-input-init class="form-outline">
                                                    <label class="form-label" for="form3Example1n">Contact</label>
                                                    <input type="number" id="phone" name="phone" class="form-control form-control-md" />
                                                    </div>
                                                </div>
                                            </div>
                                              <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <label class="form-label" for="form3Example1n">City</label>
                                                 <select class="form-control" name="city" id="city">
                                                    <option value="Ahmedabad">Ahmedabad</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Pune">Pune</option>
                                                    <option value="Banglore">Banglore</option>
                                                  </select>
                                                  
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label class="form-label" for="form3Example1n">Languages</label><br>
                                                    <input type="checkbox" name="lang[]" value="Python" class="form-check-input" id="python">&nbsp;Python<br>
                                                    <input type="checkbox" name="lang[]" value="AI" class="form-check-input" id="AI">&nbsp;Artificial Intelligence<br>
                                                    <input type="checkbox" name="lang[]" value="ML" class="form-check-input" id="ML">&nbsp;Machine Learning<br>
                                                    <input type="checkbox" name="lang[]" value="JAVA" class="form-check-input" id="JAVA">&nbsp;JAVA
                                                </div>
                                              </div>
                                              <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                              
                                                <h6 class="mb-0 me-4">Gender: </h6>
                                                <div class="form-check form-check-inline mb-0 me-4">
                                                  <input class="form-check-input" type="radio" name="gender" id="female"
                                                    value="Female" />
                                                  <label class="form-check-label" for="femaleGender">Female</label>
                                                </div>
                              
                                                <div class="form-check form-check-inline mb-0 me-4">
                                                  <input class="form-check-input" type="radio" name="gender" id="male"
                                                    value="Male" />
                                                  <label class="form-check-label" for="maleGender">Male</label>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-end pt-3">
                                                <input type="submit" value="Submit" name="submit" class="btn btn-warning"> &nbsp;&nbsp;
                                                <input type="reset" value="reset" name="reset" class="btn btn-danger">
                                        
                                            </div>
                                            </div>
                        </div> <!-- /.card-body -->
                    </form>
                    </div> <!-- /.card -->
                   
                </div> <!-- /.col -->
                <!-- /.col -->
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</main>
@endsection