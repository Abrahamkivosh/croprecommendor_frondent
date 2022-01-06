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
                    <h4 class="text-themecolor">Recommendor User</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
                            <li class="breadcrumb-item active">User</li>
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

                  
                    
                    <!-- Modal  to delete user account-->
                    <div class="modal fade" id="modelUserDelete" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete {{ $user->name }} Account</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    <p>The Acount you are about to do can not be reversed!! </p>
                                    <p>Are you show you need to delete user account?</p>
                                    <p>All is recommends will be delete as well.</p>
                                  
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                   
                                    <form action=" {{route('users.destroy',$user)}} " method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                   


                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $user->name }}  
                                <a  class="btn btn-info left-2  pr-2 pl-2 " href=" {{route('users.edit',$user)}} ">Edit Your Account</a>
                                 <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger left-2 " data-toggle="modal" data-target="#modelUserDelete">
                                  Delete User Account
                                </button>  </h4>
                            <ul class="list-group">
                                <li class="list-group-item ">Email : {{ $user->email }} </li>
                                <li class="list-group-item">Role : {{ $user->role == 1 ? 'ADMIN' : 'User' }}</li>
                                <li class="list-group-item">Number Recommends : {{ $user->countRecommends() }}</li>
                            </ul>

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $user->name . " Recommends" }}</h4>
                                    <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                    <div class="table-responsive m-t-40">
                                        <table id="example23"
                                            class="display nowrap table table-hover table-striped table-bordered"
                                            cellspacing="0" width="100%">
                                            <thead>
                                                <tr role="row">
                                                    <th>Plant</th>
                                                    <th>Location</th>
                                                    <th>N</th>
                                                    <th>P</th>
                                                    <th>K</th>
                                                    <th>Temp</th>
                                                    <th>Date</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr role="row">
                                                    <th>Plant</th>
                                                    <th>Location</th>
                                                    <th>N</th>
                                                    <th>P</th>
                                                    <th>K</th>
                                                    <th>Temp</th>
                                                    <th>Date</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>


                                                @forelse ($user->recommends as $recommend)
                                                    <tr role="row">
                                                        <td class="sorting_1">{{ $recommend->label }}</td>
                                                        <td>{{ $recommend->location }}</td>

                                                        <td>{{ $recommend->nitrogen }}</td>
                                                        <td>{{ $recommend->phosphorus }}</td>
                                                        <td>{{ $recommend->potassium }}</td>
                                                        <td>{{ $recommend->temperature }}</td>
                                                        <td>{{ $recommend->created_at->format('d / M / Y') }}</td>
                                                        <td>
                                                            <a href="{{ route('recommend.show', $recommend) }}"
                                                                class="btn btn-info foat-left"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i></a>

                                                            <a href="{{ route('recommend.destroy', $recommend) }}"
                                                                class="btn btn-danger float-right"><i class="fa fa-trash"
                                                                    aria-hidden="true"></i></a>

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
