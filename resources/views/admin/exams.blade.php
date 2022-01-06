
@extends('admin/master')
@section('admin-content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- column -->
        <a href='{{route('manageexams.create')}}' class="btn btn-primary" style="max-width: 10%;margin-left: 89%;margin-bottom: 1%;">
            add
        </a>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Manage Exams</h4>
                    <div class="table-responsive">
                        <table class="table user-table no-wrap">
                            <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Exam Name</th>
                                <th class="border-top-0">Exam description</th>
                                <th class="border-top-0">Exam category</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($exams as $exam)
                                <tr>
                                    <td>{{$exam->id}}</td>
                                    <td>
                                                    <span>
                                                    <img src="{{asset('images/'.$exam->img)}}" alt="sdfg" style="width:100px;height:100px;border-radius: 50%">
                                                    {{$exam->name}}
                                                    </span>
                                    </td>
                                    <td style="width:30%">{{$exam->desc}}</td>
                                    <td style="width:30%">{{$exam->category->name}}</td>
                                    <td>
                                        <a class="btn btn-info px-4" href="{{ route('manageexams.edit',$exam->id) }}">Edit</a>
                                    </td>
                                    <td>
                                        <form method="post" action="{{route('manageexams.destroy',$exam->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger px-3">delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection
