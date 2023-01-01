@extends('backend.layout.admin_master')
@section('admin')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                {{-- <h4 class="page-title">Form Validation</h4> --}}
                <div class="page-title-right">
                    <ol class="breadcrumb p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">Nebula</a></li>
                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                        <li class="breadcrumb-item active">Add Company</li>
                    </ol>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    {{-- <h3 class="card-title">Form validations</h3> --}}
                <div class="card-body">
                    <div class="form">
                        <form class="cmxform form-horizontal tasi-form" id="signupForm" method="POST" action="{{ url('/insert-employee') }}" enctype='multipart/form-data' novalidate="novalidate">
                            @csrf
                            <div class="form-group row">
                                <div class="col-lg-10">
                                    <input class="form-control" id="name" name="name" type="text" required="" aria-required="true" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-10">
                                    <input class="form-control" id="email" type="email" name="email" required="" aria-required="true" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-10">
                                    <input class="form-control" id="phone" type="text" name="phone" required="" aria-required="true" placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-10">
                                    <input class="form-control" id="address" name="address" type="text" required="" aria-required="true" placeholder="Address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-10">
                                    <input class="form-control" id="experience" name="experience" type="text" required="" aria-required="true" placeholder="Experience">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-10">
                                    <input class="form-control" type="file" id="profile_pic" name="photo">                                
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-10">
                                    <input class="form-control" id="salary" name="salary" type="text" required="" aria-required="true" placeholder="Salary">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-10">
                                    <input class="form-control" id="vacation" name="vacation" type="text" required="" aria-required="true" placeholder="Vacation">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-10">
                                    <input class="form-control" id="city" name="city" type="text" required="" aria-required="true" placeholder="City">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-lg-12">
                                    <button class="btn btn-success waves-effect waves-light mr-1 text-center" type="submit">Save</button>
                                    {{-- <button class="btn btn-secondary waves-effect" type="button">Cancel</button> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- .form -->
                </div>
                <!-- card-body -->
            </div>
            <!-- card -->
        </div>
        <!-- col -->

    </div>
    <!-- End row -->

   
    <!-- End row -->

</div>


@endsection