
@extends('admin/master')
@section('admin-content')
    <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <a href='{{route('admoon.create')}}' class="btn btn-primary" style="max-width: 10%;margin-left: 89%;margin-bottom: 1%;">
                        add
                    </a>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Manage Admins</h4>
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">#</th>
                                                <th class="border-top-0">Admin</th>
                                                <th class="border-top-0">email</th>
                                                <th class="border-top-0">action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($admins as $admin)
                                            <tr>
                                                <td>{{$admin->id}}</td>
                                                <td>
                                                    <span>
                                                    <img src='{{$admin->user_img}}' alt="sdfg" style="width:100px;height:100px;border-radius: 50%">
                                                    {{$admin->name}}
                                                    </span>
                                                </td>
                                                <td>{{$admin->email}}</td>
                                                <td>
                                                    <a class="btn btn-info px-4" href="{{ route('admoon.edit',$admin->id) }}">Edit</a>
                                                </td>
                                                <td>
                                                    <form method="post" action="{{route('admoon.destroy',$admin->id)}}">
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
