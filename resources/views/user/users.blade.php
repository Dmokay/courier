@extends('layouts.main')

@section('content')  

                        <div class="content-page">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row page-title align-items-center">
                            <div class="col-sm-4 col-xl-6">
                                <h4 class="mb-1 mt-0">Users Table</h4>
                            </div>
                            <div class="col-sm-8 col-xl-6">
                                <form class="form-inline float-sm-right mt-3 mt-sm-0">
                                    <div class="form-group mb-sm-0 mr-2">
                                        <input type="text" class="form-control" id="dash-daterange" style="min-width: 190px;" />
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class='uil uil-file-alt mr-1'></i>USERS
                                            <i class="icon"><span data-feather="chevron-down"></span></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{route('user.create')}}" class="dropdown-item notify-item">
                                                <i data-feather="mail" class="icon-dual icon-xs mr-2"></i>
                                                <span>Create User</span>
                                            </a>
                                            <a href="{{route('user.create')}}" class="dropdown-item notify-item">
                                                <i data-feather="printer" class="icon-dual icon-xs mr-2"></i>
                                                <span>View</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="{{route('user.create')}}" class="dropdown-item notify-item">
                                                <i data-feather="file" class="icon-dual icon-xs mr-2"></i>
                                                <span>Update</span>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
    
                                        <div class="table-responsive">
                                            <table class="table m-0">
                                                <thead>
                                                    <tr>
                                                    
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Email Verification</th>
                                                        <th>Password</th>
                                                        <th>Id No.</th>
                                                        <th>Phone No.</th>
                                                        <th>Role</th>
                                                        <th>Actions</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                     @foreach ($users as $user)

                                                    <tr>
                                                
                                                        <td>{{$user->name}}</td>
                                                        <td>{{$user->email}}</td>
                                                        <td>{{$user->email_verified_at}}</td>
                                                        <td>{{$user->password}}</td>
                                                        <td>{{$user->id_no}}</td>
                                                        <td>{{$user->phone_no}}</td>
                                                        <td>{{$user->role}}</td>
                                                        

                                                        <td>
                                                            <button type="button" class="btn btn-rounded btn-outline-secondary"><a href="{{url('users')}}">View</a></button>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-rounded btn-outline-success"><a href="{{url('users')}}">Edit</a></button>
                                                        </td>
                                                         <td>
                                                            <button type="button" class="btn btn-rounded btn-outline-danger"><a href="{{url('users')}}">Delete</a></button>
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
    <!-- end row -->

@endsection