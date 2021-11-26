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
                   
                   


                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Export 

                                 <!-- Button trigger modal to add user -->
                    <button type="button" class="btn btn-info btn-sm float-right" data-toggle="modal" data-target="#modeladdUser">
                        Add User
                      </button>
                            
                            </span> </h4>
                            <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                            <div class="table-responsive m-t-40">
                                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr role="row">
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Recommends</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr role="row">
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Recommends</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>  {{  ($user->isAdmin()) ? "Admin" : "User" }}  </td>
                                            <td>{{ $user->recommends_count }}</td>
                                            <td>
                                                {{-- <a href="{{ route('recommend.show', $recommend) }}"
                                        class="btn btn-info foat-left"><i class="fa fa-eye" aria-hidden="true"></i></a> --}}

                                    <a href="{{ route('destroy.users', $user) }}"
                                        class="btn btn-danger float-right"><i class="fa fa-trash" aria-hidden="true"></i></a>

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
