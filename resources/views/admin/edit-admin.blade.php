{{--@dd('ahmad')--}}
@extends('admin/master')
@section('admin-content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body profile-card">
                    <center class="mt-4"> <img src="https://cdn3.iconfinder.com/data/icons/avatars-round-flat/33/avat-01-512.png"
                                               class="rounded-circle" width="150" />
                        <h4 class="card-title mt-2">{{$admin->name}}</h4>
                        <h6 class="card-subtitle">Admin for samahgram</h6>
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <a href="javascript:void(0)" class="link">
                                    <i class="icon-people" aria-hidden="true"></i>
                                    <span class="font-normal"></span>
                                </a></div>
                            <div class="col-4">
                                <a href="javascript:void(0)" class="link">
                                    <i class="icon-picture" aria-hidden="true"></i>
                                    <span class="font-normal"></span>
                                </a></div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material mx-2" action="{{route('admoon.update',$admin->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Admin Name</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Name"
                                       value="{{$admin->name}}"
                                       class="form-control ps-0 form-control-line" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="email" placeholder="example@gmail.com"
                                       class="form-control ps-0 form-control-line" name="email"
                                       id="example-email"
                                       value="{{$admin->email}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Password</label>
                            <div class="col-md-12">
                                <input type="password"
                                       class="form-control ps-0 form-control-line" name="password">
                            </div>
                        </div>

                        <input type="hidden" name="role" value="admin">
                        <div class="form-group">
                            <div class="col-sm-12 d-flex">
                                <button  type=submit" class="btn btn-success mx-auto mx-md-0 text-white">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    </div>
@endsection
