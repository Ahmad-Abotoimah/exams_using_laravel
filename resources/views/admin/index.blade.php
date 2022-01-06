
@extends('admin.master')
@section('admin-content')
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-sm-3" >
                        <div class="card">
                            <div class="card-body" style=" min-height: 211px !important;">
                                <h4 class="card-title">Number of Admins</h4>
                                <div class="text-end">
                                    <h2 class="font-light mb-0"><i class="ti-arrow-up text-success"></i> {{(int)count($admins)}}</h2>
                                    <span class="text-muted">max 50 admins</span>
                                </div>
                                <span class="text-{{((count($admins)*2)<90? 'info' : 'danger' )}}">{{(int)((count($admins)*2))}} {{'  % '}}used</span>
                                <div class="progress">
                                    <div class="progress-bar bg-{{((count($admins)*2)<90 ? 'info' : 'danger' )}}" role="progressbar"
                                        style="width:{{(count($admins)*2)}}% ; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100">{{(int)((count($admins)*2)."%  " )}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-sm-3" >

                    <div class="card">
                            <div class="card-body" style=" min-height: 211px !important;">
                                <h4 class="card-title">Number of Users</h4>
                                <div class="text-end">
                                    <h2 class="font-light mb-0"><i class="ti-arrow-up text-info"></i> {{(int)count($users)}}</h2>
                                    <span class="text-muted"> Our Target Users Number is 10,000  </span>
                                </div>
                                <span class="text-{{((count($users)/100)<90? 'info' : 'danger' )}}">{{(int)((count($users)/100))}}{{'  % '}}of target</span>
                                <div class="progress">
                                    <div class="progress-bar bg-{{((count($users)/100)<90 ? 'info' : 'danger' )}}" role="progressbar"
                                        style="width: {{(count($users)/100)}}%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100">{{(int)((count($users)/100)."%  " )}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">

                        <div class="card">
                            <div class="card-body" style=" min-height: 211px !important;">
                                <h4 class="card-title"> Number of Categories</h4>
                                <div class="text-end">
                                    <h2 class="font-light mb-0"><i class="ti-arrow-up text-success"></i> {{(int)count($categories)}}</h2>
                                    <span class="text-muted">Target Number of categories is 200</span>
                                </div>
                                <span class="text-{{((count($categories)/2)<90? 'danger' : 'info' )}}">{{(int)((count($categories)/2) )}}{{'  % '}}achieved</span>
                                <div class="progress">
                                    <div class="progress-bar bg-{{((count($categories)/2)<90 ? 'danger' : 'info' )}}" role="progressbar"
                                         style="width:{{(count($categories)/2)}}% ; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                         aria-valuemax="100">{{(int)((count($categories)/2)." %  " )}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-sm-3" >

                        <div class="card">
                            <div class="card-body" style=" min-height: 211px !important;">
                                <h4 class="card-title">Number of Exams </h4>
                                <div class="text-end">
                                    <h2 class="font-light mb-0"><i class="ti-arrow-up text-info"></i> {{(int)count($exams)}}</h2>
                                    <span class="text-muted"> Our Target exams Number is 500</span>
                                </div>
                                <span class="text-{{((count($exams)/5)<90? 'info' : 'danger' )}}">{{(int)((count($exams)/5) )}}{{'  %'}}of target</span>
                                <div class="progress">
                                    <div class="progress-bar bg-{{((count($exams)/5)<90 ? 'info' : 'danger' )}}" role="progressbar"
                                         style="width: {{(count($exams)/5)}}%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                         aria-valuemax="100">{{(int)((count($exams)/5)." %  " )}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- Column -->

                <!-- calculate the number of females and the number of males -->



                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                                            <!-- Column -->

                                            <!-- Column -->

                                            <!-- Column -->
                    <div class="col-sm-3" >

                                                <div class="card">
                                                    <div class="card-body" style=" min-height: 211px !important;">
                                                        <h4 class="card-title"> Number of questions</h4>
                                                        <div class="text-end">
                                                            <h2 class="font-light mb-0"><i class="ti-arrow-up text-success"></i> {{(int)count($questions)}}</h2>
                                                            <span class="text-muted">Target Number of questions is 5000</span>
                                                        </div>
                                                        <span class="text-{{((count($questions)/50)<90? 'danger' : 'info' )}}">{{(int)((count($questions)/50) )}} {{'  % '}}achieved'</span>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-{{((count($questions)/50)<90 ? 'danger' : 'info' )}}" role="progressbar"
                                                                 style="width:{{(count($questions)/50)}}% ; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                                                 aria-valuemax="100">{{(int)((count($questions)/50)." %  " )}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Column -->
                                            <!-- Column -->
                    <div class="col-sm-3" >

                                                <div class="card">
                                                    <div class="card-body"  style=" min-height: 211px !important;">
                                                        <h4 class="card-title">Number of done exams</h4>
                                                        <div class="text-end">
                                                            <h2 class="font-light mb-0"><i class="ti-arrow-up text-info"></i> {{(int)count($results)}}</h2>
                                                            <span class="text-muted"> Our Target follows Number is 50,000</span>
                                                        </div>
                                                        <span class="text-{{((count($results)/500)<90? 'info' : 'danger' )}}">{{(int)((count($results)/500) )}}{{'  % '}}of target</span>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-{{((count($results)/500)<90 ? 'info' : 'danger' )}}" role="progressbar"
                                                                 style="width: {{(count($results)/500)}}%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                                                 aria-valuemax="100">{{(int)((count($results)/500)." %  " )}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Column -->
                                        </div>

                </div>

                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex">
                                    <h4 class="card-title col-md-10 mb-md-0 mb-3 align-self-center">Recently Joined Users</h4>
                                </div>
                                <div class="table-responsive mt-5">
                                    <table class="table stylish-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0" colspan="2">User</th>
                                                <th class="border-top-0">email</th>
                                                <th class="border-top-0">phone</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users->slice((count($users)-10),(count($users))) as $user)
                                            <tr>
                                                <td style="width:50px;"><span class="round">{{substr($user->name, 0, 1)}}</span></td>
                                                <td class="align-middle">
                                                    <h6>{{$user->name}}</h6><small class="text-muted">created at {{" ".$user->created_at}}</small>
                                                </td>
                                                <td class="align-middle">{{$user->email}}</td>
                                                <td class="align-middle">{{$user->phone}}</td>
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
                <!-- Table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent blogss -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Recent blogss -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
@endsection
