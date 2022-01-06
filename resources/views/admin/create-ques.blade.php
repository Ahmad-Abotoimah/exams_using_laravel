{{--@dd($exams)--}}
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
                    <form class="form-horizontal form-material mx-2" action="{{route('manageques.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Question</label>
                            <div class="col-md-12">
                                <input type="textarea" placeholder="text"
                                       value="{{old('question')}}"
                                       class="form-control ps-0 form-control-line" name="question">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">first choice</label>
                            <div class="col-md-12">
                                <input type="textarea" placeholder="text"
                                       class="form-control ps-0 form-control-line" name="first"
                                       id="example-email"
                                       value="{{old('first')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0">second choice</label>
                            <div class="col-md-12">
                                <input type="textarea"
                                       class="form-control ps-0 form-control-line" name="second"  value="{{old('second')}}" placeholder="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">third choice</label>
                            <div class="col-md-12">
                                <input type="textarea" placeholder="text"
                                       class="form-control ps-0 form-control-line" name="third"
                                       id="example-email"
                                       value="{{old('third')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">fourth choice</label>
                            <div class="col-md-12">
                                <input type="textarea" placeholder="text"
                                       class="form-control ps-0 form-control-line" name="forth"
                                       id="example-email"
                                       value="{{old('forth')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">correct choice</label>
                            <div class="col-md-12">
                                <input type="textarea" placeholder="text"
                                       class="form-control ps-0 form-control-line" name="correct"
                                       id="example-email"
                                       value="{{old('correct')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Mark out of all </label>
                            <div class="col-md-12">
                                <input type="number"
                                       class="form-control ps-0 form-control-line" name="mark"  value="{{old('mark')}}" placeholder="number" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0">question exam</label>
                            <select name="exam_id" required class="form-select" aria-label="Default select example">
                                <option selected>select one</option>
                                @foreach ($exams as $exam)
                                    <option value="{{$exam->id}}">{{$exam->name}}</option>
                                @endforeach
                            </select>
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
