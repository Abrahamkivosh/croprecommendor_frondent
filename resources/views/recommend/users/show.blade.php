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
                    <h4 class="text-themecolor">System Users</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">users</li>
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
                    <form action="{{ route('update.user',$user->id) }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        @method("PUT")
                        <div class="row">

                            <div class="form-group col-6">
                                <label for="my-input">Name</label>
                                <input id="name" placeholder="User Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
        
                            
                            <div class="form-group col-6 ">
                                <div class="col-xs-12">
                                    <label for="memail">Email</label>
                                    <input id="email" placeholder="Your Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
                
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="form-group col-6 ">
                                <label for="">Profile Image</label>
                                <input type="file" class="form-control-file" name="image" id="image" placeholder="image" >
                              </div>
                              <div class="form-group col-6 ">
                                  <label for="role">Role</label>
                                  <select id="role" class="form-control" name="role">
                                      <option selected value="{{ $user->role }}"  > {{ ($user->role == 1)? "Admin" : "User" }} </option>
                                      @if (auth()->user()->isAdmin())
                                      <option value="1">Admin</option>
                                      <option value="2">User</option>
                                          
                                      @endif
                                      
                                  </select>
                              </div>

                        </div>

                        
                        @if (  ! auth()->user()->isAdmin() || auth()->user()->id == $user->id )
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <label for="old_password"> Old Password</label>
                                <input id="old_password" type="password" placeholder="Old Password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" required autocomplete="new-old_password">
            
                                @error('old_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            
                        @endif

                      

                        



                        <div class="form-group ">
                            <div class="col-xs-12">
                                <label for="password"> New  Password</label>
                                <input id="password" type="password" placeholder="Strong Password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
            
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                  
                       
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">
                                    Update profile</button>
                            </div>
                        </div>
                     
                    </form>
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


     
                    <!-- Modal adding new user to system -->
                    <div class="modal fade" id="modeladdUser" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add New User to system</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">



                                    <form class="form-horizontal form-material" id="loginform" action="{{ route('register-user') }}" method="POST" >
                                        @csrf
                                        
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input id="name" placeholder="User Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input id="email" placeholder="Your Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <div class="mb-3">
                                                  <label for="role" class="form-label">Select User Role</label>
                                                  <select class="form-control" name="role" id="role">
                                                    <option selected value="2" >User</option>
                                                    <option class="1" >Admin</option>
                                                  </select>
                                                </div>
                                                
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input id="password" type="password" placeholder="Strong Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                                       
                                        <div class="form-group text-center m-t-20">
                                            <div class="col-xs-12">
                                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Register User</button>
                                            </div>
                                        </div>
                                     
                                    </form>



                                
                                </div>
                                
                            </div>
                        </div>
                    </div>

@endsection
