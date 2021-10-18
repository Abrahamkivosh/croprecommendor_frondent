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
                    <h4 class="text-themecolor">My Shamba Analytics</h4>
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

                    <div class="jumbotron">
                        <h2 class="display-3">{{ $recommend->label }}</h2>
                        <p class="lead">Location : {{ $recommend->location }}</p>
                        <hr class="my-2">
                        <p>
                        <div class="row">
                            <div class="col-4 bg-white py-2 mr-1 mt-1     "> <span class="float-left">{{ __('Nitrogen') }}</span>
                                <span class=" float-right">{{ $recommend->nitrogen }}</span>
                            </div>

                            <div class="col-4 bg-white py-2 mr-1 mt-1     "> <span class="float-left">{{ __('Phosphorus') }}</span>
                                <span class=" float-right">{{ $recommend->phosphorus }}</span>
                            </div>

                            <div class="col-4 bg-white py-2 mr-1 mt-1     "> <span class="float-left">{{ __('Potassium') }}</span>
                                <span class=" float-right">{{ $recommend->potassium }}</span>
                            </div>

                            <div class="col-4 bg-white py-2 mr-1 mt-1     "> <span class="float-left">{{ __('Temperature') }}</span>
                                <span class=" float-right">{{ $recommend->temperature }}</span>
                            </div>

                            <div class="col-4 bg-white py-2 mr-1 mt-1     "> <span class="float-left">{{ __('Humidity') }}</span>
                                <span class=" float-right">{{ $recommend->humidity }}</span>
                            </div>

                            <div class="col-4 bg-white py-2 mr-1 mt-1     "> <span class="float-left">{{ __('pH') }}</span>
                                <span class=" float-right">{{ $recommend->ph }}</span>
                            </div>

                            <div class="col-4 bg-white py-2 mr-1 mt-1     "> <span class="float-left">{{ __('Rainfall') }}</span>
                                <span class=" float-right">{{ $recommend->rainfall }}</span>
                            </div>



                        </div>

                        </p>
                        <p class="lead">
                        <form action="{{ route('recommend.destroy', $recommend) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger"
                                onclick=" return confirm('Are you sure you need to delete your search ?')"> <i
                                    class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                        </form>
                        </p>
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
