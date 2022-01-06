@extends('layouts.main')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Dashboard</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            @if (auth()->user()->role == 1)
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">TOTAL Recommeds</h5>
                        <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                            <div id="sparklinedash"></div>
                            <div class="ml-auto">
                                <h2 class="text-success"><i class="fa fa-plug" aria-hidden="true"></i></i> <span class="counter">  {{ $recomends_count }}</span></h2>
                            </div>
                        </div>
                    </div>
                    <div id="sparkline8" class="sparkchart"></div>
                </div>
            </div>
                
            @endif
            
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Your Recommeds</h5>
                        <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                            <div id="sparklinedash2"></div>
                            <div class="ml-auto">
                                <h2 class="text-purple"><i class="fa fa-search" aria-hidden="true"></i> <span class="counter">  {{ $your_recommends }}</span></h2>
                            </div>
                        </div>
                    </div>
                    <div id="sparkline8" class="sparkchart"></div>
                </div>
            </div>
            <!-- Column -->
            @if (auth()->user()->role == 1)
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Our Users</h5>
                        <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                            <div id="sparklinedash3"></div>
                            <div class="ml-auto">
                                <h2 class="text-info"><i class="fa fa-user-plus" aria-hidden="true"></i> </i> <span class="counter"> {{ $users_count}} +</span></h2>
                            </div>
                        </div>
                    </div>
                    <div id="sparkline8" class="sparkchart"></div>
                </div>
            </div>
                
            @endif
           
            <!-- Column -->
            <!-- Column -->
            @if (auth()->user()->role == 1)
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">BOUNCE RATE</h5>
                        <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                            <div id="sparklinedash4"></div>
                            <div class="ml-auto">
                                <h2 class="text-danger"><i class="ti-arrow-down"></i> <span class="counter">18%</span></h2>
                            </div>
                        </div>
                    </div>
                    <div id="sparkline8" class="sparkchart"></div>
                </div>
            </div>
                
            @endif
        
            <!-- Column -->
        </div>
        <!-- ============================================================== -->
        <!-- End Info box -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
       
        <!-- ============================================================== -->
        <!-- End Sales Chart -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Feed and erning -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0">WEATHER</h5>
                    </div>
                    <div class="card-body bg-light">
                        <div class="d-flex no-block align-items-center">
                            <span><h2 class="">
                                 @php
                                    echo date("l")
                                @endphp 
                            </h2><small>
                                @php
                                    echo date("dS F Y")
                                @endphp
                                
                               </small></span>
                            <div class="ml-auto">
                                <canvas class="sleet" width="44" height="44"></canvas> <span class="display-6">32<sup>°F</sup></span> </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table no-border">
                                    <tbody>
                                        <tr>
                                            <td>Wind</td>
                                            <td class="font-medium">ESE 17 mph</td>
                                        </tr>
                                        <tr>
                                            <td>Humidity</td>
                                            <td class="font-medium">83%</td>
                                        </tr>
                                        <tr>
                                            <td>Pressure</td>
                                            <td class="font-medium">28.56 in</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table no-border">
                                    <tbody>
                                        <tr>
                                            <td>Cloud Cover</td>
                                            <td class="font-medium">78%</td>
                                        </tr>
                                        <tr>
                                            <td>Ceiling</td>
                                            <td class="font-medium">25760 ft</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Column -->
                            <div class="col-lg-2 col-md-4 col-4 text-center">
                                <h5>Tue</h5>
                                <div class="m-t-10 m-b-10">
                                    <canvas class="sleet" width="30" height="30"></canvas>
                                </div>
                                <h5>32<sup>°F</sup></h5>
                            </div>
                            <!-- Column -->
                            <div class="col-lg-2 col-md-4 col-4 text-center">
                                <h5>Wed</h5>
                                <div class="m-t-10 m-b-10">
                                    <canvas class="clear-day" width="30" height="30"></canvas>
                                </div>
                                <h5>34<sup>°F</sup></h5>
                            </div>
                            <!-- Column -->
                            <div class="col-lg-2 col-md-4 col-4 text-center">
                                <h5>Thu</h5>
                                <div class="m-t-10 m-b-10">
                                    <canvas class="partly-cloudy-day" width="30" height="30"></canvas>
                                </div>
                                <h5>31<sup>°F</sup></h5>
                            </div>
                            <!-- Column -->
                            <div class="col-lg-2 col-md-4 col-4 text-center">
                                <h5>Fri</h5>
                                <div class="m-t-10 m-b-10">
                                    <canvas class="cloudy" width="30" height="30"></canvas>
                                </div>
                                <h5>32<sup>°F</sup></h5>
                            </div>
                            <!-- Column -->
                            <div class="col-lg-2 col-md-4 col-4 text-center">
                                <h5>Sat</h5>
                                <div class="m-t-10 m-b-10">
                                    <canvas class="snow" width="30" height="30"></canvas>
                                </div>
                                <h5>12<sup>°F</sup></h5>
                            </div>
                            <!-- Column -->
                            <div class="col-lg-2 col-md-4 col-4 text-center">
                                <h5>Sun</h5>
                                <div class="m-t-10 m-b-10">
                                    <canvas class="wind" width="30" height="30"></canvas>
                                </div>
                                <h5>32<sup>°F</sup></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
         
            <!-- Column -->
         
        </div>
        <!-- ============================================================== -->
        <!-- Review -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12 col-md-12">
                <div class="card">
                   
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    {{-- <th>Invoice</th>
                                    <th>User</th>
                                    <th>Order date</th>
                                    <th>Amount</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Tracking Number</th> --}}
                                    <th>User</th>
                                    <th>Plant</th>
                                    <th>Location</th>
                                    <th>Date</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($recommends as $recommend)
                                <tr role="row" >
                                    <td> <a href="{{route('users.show', $recommend->user ?? 1 )}}"></a> {{ $recommend->user->name ?? ""}} </td>
                                    <td class="sorting_1">{{ $recommend->label }}</td>
                                    <td>{{ $recommend->location }}</td>
    
                        
                                    <td>{{ $recommend->created_at->format('d / M / Y') }}</td>
                                    <td>
                                        <a href="{{ route('recommend.show', $recommend) }}"
                                            class="btn btn-info foat-left"><i class="fa fa-eye" aria-hidden="true"></i></a>
    
                                        <a href="{{ route('recommend.destroy', $recommend) }}"
                                            class="btn btn-danger float-right"><i class="fa fa-trash" aria-hidden="true"></i></a>
    
                                    </td>
                                </tr>
                            @empty
                                <tr role="row" class="even">
                                    <td colspan="4">
                                        You have not done any Recommend
                                    </td>
                                </tr>
    
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- ============================================================== -->
        <!-- End Review -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Comment - chats -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Comment - chats -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="m-t-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                        <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme working">9</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                    </ul>
                    <ul class="m-t-20 chatonline">
                        <li><b>Chat option</b></li>
                        <li>
                            <a href="javascript:void(0)"><img src="/assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="/assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="/assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="/assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="/assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="/assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="/assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="/assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
@endsection