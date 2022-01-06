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
                        <h4 class="card-title mt-2">Admin</h4>
                        <h6 class="card-subtitle">Admin for Quizer</h6>
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
                    <form class="form-horizontal form-material mx-2" action="{{route('managecategories.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Category Name</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Name"
                                       value="{{old('name')}}"
                                       class="form-control ps-0 form-control-line" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Description</label>
                            <div class="col-md-12">
                                <input type="textarea" placeholder="Description"
                                       class="form-control ps-0 form-control-line" name="desc"
                                       id="example-email"
                                       value="{{old('desc')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Image</label>
                            <div class="col-md-12">
                                <input type="file"
                                       class="form-control ps-0 form-control-line" name="img"  value="{{old('img')}}">>
                            </div>
                        </div>

                        <input type="hidden" name="role" value="admin">
                        <div class="form-group">
                            <div class="col-sm-12 d-flex">
                                <button  type=submit" class="btn btn-success mx-auto mx-md-0 text-white">Add</button>
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
