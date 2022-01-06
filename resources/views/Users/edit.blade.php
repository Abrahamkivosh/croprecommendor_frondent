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
                    <h4 class="text-themecolor">Create Recommends User</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">users</li>
                            <li class="breadcrumb-item active">edit</li>
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
                            <h5 class="card-title">Editing User Account</h5>
                            <p class="card-text">
                                <form action="{{ route('users.update',$user) }}" class="row" method="post">
                                    @csrf
                                    @method("PATCH")
                                  

                                    <div class="form-group col-6 ">
                                        <label for="name">User Name <span class="text-danger" >*</span> </label>

                                        <input  maxlength="50" id="name" placeholder="User Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ ( (old('name') != $user->name && !empty(old('name')))? old('name') : $user->name )  }}" required autocomplete="name" autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>

                                    <div class="form-group col-6 ">
                                        <label for="email"> email <span class="text-danger" >*</span></label>

                                        <input  maxlength="150" id="email" placeholder="email"
                                         type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ ((old('email') != $user->email && !empty(old('email')))? old('email') : $user->email )  }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>

                                    <div class="form-group col-6 ">
                                      <label for="role">Select User Role</label>
                                      <select class="form-control disabled @error('role') is-invalid @enderror" name="role" id="role">

                                        @if (auth()->user()->role == 1)

                                            @if ($user->role == 1)
                                                <option selected value="1" >Admin</option>
                                                <option  value="0" >User</option>
                                            @else
                                                <option selected value="0" >User</option>
                                                <option  value="1" >Admin</option>
                                            
                                            @endif
                                            


                                        @else
                                        <option selected value="0" >User</option>
                                        @endif
                                        
                                       
                                       
                                        
                                        
                                      </select>
                                    </div>

                                    
                                    <div class="form-group col-6  ">
                                        <label for="password">password

                                        </label>

                                        <input  minlength="8" id="password" placeholder="password" type="text" value="" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}"  autocomplete="password" autofocus>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    {{-- <div class="form-group col-6">
                                        <label for="location">location</label>

                                        <input id="location" placeholder="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}" required autocomplete="location" autofocus>
                                        @error('location')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div> --}}

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
