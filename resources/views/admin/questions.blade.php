
@extends('admin/master')
@section('admin-content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- column -->
        <a href='{{route('manageques.create')}}' class="btn btn-primary" style="max-width: 10%;margin-left: 89%;margin-bottom: 1%;">
            add
        </a>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Manage questions</h4>
                    <div class="table-responsive">
                        <table class="table user-table no-wrap">
                            <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Question</th>
                                <th class="border-top-0">first choice</th>
                                <th class="border-top-0">second choice</th>
                                <th class="border-top-0">third choice</th>
                                <th class="border-top-0">fourth choice</th>
                                <th class="border-top-0">correct choice</th>
                                <th class="border-top-0">question mark</th>
                                <th class="border-top-0">question exam</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($questions as $question)
                                <tr>
                                    <td>{{$question->id}}</td>
                                    <td>
                                                    <span>
                                                    {{$question->question}}
                                                    </span>
                                    </td>
                                    <td style="width:30%">{{$question->first}}</td>
                                    <td style="width:30%">{{$question->second}}</td>
                                    <td style="width:30%">{{$question->third}}</td>
                                    <td style="width:30%">{{$question->fourth}}</td>
                                    <td style="width:30%">{{$question->correct}}</td>
                                    <td style="width:30%">{{$question->mark}}</td>
                                    <td style="width:30%">{{$question->exam->name}}</td>
                                    <td>
                                        <a class="btn btn-info px-4" href="{{ route('manageques.edit',$question->id) }}">Edit</a>
                                    </td>
                                    <td>
                                        <form method="post" action="{{route('manageques.destroy',$question->id)}}">
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
