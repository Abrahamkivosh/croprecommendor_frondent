@extends('layouts.main')
@section('content')
    <div class="page-wrapper" style="min-height: 520px;">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">All Users Shamba Analytics</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Analytic</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Export</h4>
                            <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                            <div class="table-responsive m-t-40">
                                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr role="row">
                                            <th>User</th>
                                            <th>Plant</th>
                                            <th>Location</th>
                                            <th>N</th>
                                            <th>P</th>
                                            <th>K</th>
                                            <th>Temp</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr role="row">
                                            <th>User</th>
                                            <th>Plant</th>
                                            <th>Location</th>
                                            <th>N</th>
                                            <th>P</th>
                                            <th>K</th>
                                            <th>Temp</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                     

                                        @forelse ($recommends as $recommend)
                            <tr role="row" >
                                <td class="sorting_1">{{ $recommend->user->name }}</td>

                                <td class="sorting_1">{{ $recommend->label }}</td>
                                <td>{{ $recommend->location }}</td>

                                <td>{{ $recommend->nitrogen }}</td>
                                <td>{{ $recommend->phosphorus }}</td>
                                <td>{{ $recommend->potassium }}</td>
                                <td>{{ $recommend->temperature }}</td>
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
    </div>
@endsection
