@extends('layouts.main')

@section('content')  

                        <div class="content-page">
                <div class="content">
                    @if (session('status'))
    <div class="row" style="margin: 20px">
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Success!</h4>
            {{session('status')}}
        </div>
    </div>
@endif
@if (session('error'))
    <div class="row" style="margin: 20px">
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Error!</h4>
            {{session('error')}}
        </div>
    </div>
@endif
@if (count($errors) > 0)
    <div class="row" style="margin: 20px">
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-warning"></i> <strong>Whoops!</strong> There were some problems with your input.
            </h4>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
                    <div class="container-fluid">
                        <div class="row page-title align-items-center">
                            <div class="col-sm-4 col-xl-6">
                                <h4 class="mb-1 mt-0">Customers Table</h4>
                            </div>
                            <div class="col-sm-8 col-xl-6">
                                <form class="form-inline float-sm-right mt-3 mt-sm-0">
                                    <div class="form-group mb-sm-0 mr-2">
                                        <input type="text" class="form-control" id="dash-daterange" style="min-width: 190px;" />
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class='uil uil-file-alt mr-1'></i>CUSTOMERS
                                            <i class="icon"><span data-feather="chevron-down"></span></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{route('customers.create')}}" class="dropdown-item notify-item">
                                                <i data-feather="mail" class="icon-dual icon-xs mr-2"></i>
                                                <span>Create</span>
                                            </a>
                                            <a href="{{url('newcustomer')}}" class="dropdown-item notify-item">
                                                <i data-feather="printer" class="icon-dual icon-xs mr-2"></i>
                                                <span>View</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="{{url('newcustomer')}}" class="dropdown-item notify-item">
                                                <i data-feather="file" class="icon-dual icon-xs mr-2"></i>
                                                <span>Update</span>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
    
                                        <div class="col-md-12 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                <form class="forms-sample" form method="post" action="{{route('customers.store')}}">
                                                     @csrf
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Name</label>
                                                            <input type="text" class="form-control" name="name" placeholder="Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Id Number</label>
                                                            <input type="number" value="{{old('id_no')}}" class="form-control" name="id_no" placeholder="id">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Phone Number</label>
                                                            <input type="number" required class="form-control" name="phone_no" placeholder="Phone No">
                                                        </div>
                                                        <div>
                                                            <button type="submit" class="btn btn-secondary btn-sm btn-block">Save
                                                            </button>
                                                        </div>
                                                            
                                                </form>
                                         </div>
                                        </div>

                                    </div>

                                </div>
                                
                            </div>

                        </div>
                    </div>
                        <!-- end row -->

@endsection