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
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Do new Recommedor for your firm</h5>
                            <p class="card-text">
                                <form action="{{ route('recommend.store') }}" class="row" method="post">
                                    @csrf
                                  

                                    <div class="form-group col-6 ">
                                        <label for="nitrogen">Nitrogen</label>

                                        <input min="0" max="100" maxlength="3" id=" nitrogen" placeholder="nitrogen" type="number" class="form-control @error('nitrogen') is-invalid @enderror" name="nitrogen" value="{{ old('nitrogen') }}" required autocomplete="nitrogen" autofocus>
                                        @error('nitrogen')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>

                                    <div class="form-group col-6 ">
                                        <label for="phosphorus"> Phosphorus</label>

                                        <input min="0" max="100" maxlength="3" id=" phosphorus" placeholder="phosphorus" type="number" class="form-control @error('phosphorus') is-invalid @enderror" name="phosphorus" value="{{ old('phosphorus') }}" required autocomplete="phosphorus" autofocus>
                                        @error('phosphorus')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>

                                    <div class="form-group col-6 ">
                                        <label for="potassium">potassium</label>

                                        <input min="0" max="100" maxlength="3" id="potassium" placeholder="potassium" type="number" class="form-control @error('potassium') is-invalid @enderror" name="potassium" value="{{ old('potassium') }}" required autocomplete="potassium" autofocus>
                                        @error('potassium')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>

                                    <div class="form-group col-6  ">
                                        <label for="temperature">temperature</label>

                                        <input min="0" max="100" maxlength="3" id="temperature" placeholder="temperature" type="number" class="form-control @error('temperature') is-invalid @enderror" name="temperature" value="{{ old('temperature') }}" required autocomplete="temperature" autofocus>
                                        @error('temperature')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="form-group col-6  ">
                                        <label for="humidity">humidity</label>

                                        <input min="0" max="100" maxlength="3" id="humidity" placeholder="humidity" type="number" class="form-control @error('humidity') is-invalid @enderror" name="humidity" value="{{ old('humidity') }}" required autocomplete="humidity" autofocus>
                                        @error('humidity')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="form-group col-6  ">
                                        <label for="ph">ph</label>

                                        <input min="0" max="14" maxlength="2" id="ph" placeholder="ph" type="number" class="form-control @error('ph') is-invalid @enderror" name="ph" value="{{ old('ph') }}" required autocomplete="ph" autofocus>
                                        @error('ph')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="form-group col-6  ">
                                        <label for="rainfall">rainfall</label>

                                        <input min="0" max="900" maxlength="3" id="rainfall" placeholder="rainfall" type="number" class="form-control @error('rainfall') is-invalid @enderror" name="rainfall" value="{{ old('rainfall') }}" required autocomplete="rainfall" autofocus>
                                        @error('rainfall')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="location">location</label>

                                        <input id="location" placeholder="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}" required autocomplete="location" autofocus>
                                        @error('location')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>

                                    <div class="form-group col-6" >
                                        <button type="submit" class="btn btn-info btn-block ">Submit</button>

                                    </div>

                                    
                                </form>
                            </p>
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
