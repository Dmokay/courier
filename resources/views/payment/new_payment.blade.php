@extends('layouts.main')

@section('content')  

                        <div class="content-page">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row page-title align-items-center">
                            <div class="col-sm-4 col-xl-6">
                                <h4 class="mb-1 mt-0">Payments Table</h4>
                            </div>
                            <div class="col-sm-8 col-xl-6">
                                <form class="form-inline float-sm-right mt-3 mt-sm-0">
                                    <div class="form-group mb-sm-0 mr-2">
                                        <input type="text" class="form-control" id="dash-daterange" style="min-width: 190px;" />
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class='uil uil-file-alt mr-1'></i>PAYMENTS
                                            <i class="icon"><span data-feather="chevron-down"></span></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{url('newpayment')}}" class="dropdown-item notify-item">
                                                <i data-feather="mail" class="icon-dual icon-xs mr-2"></i>
                                                <span>Create</span>
                                            </a>
                                            <a href="{{url('newpayment')}}" class="dropdown-item notify-item">
                                                <i data-feather="printer" class="icon-dual icon-xs mr-2"></i>
                                                <span>View</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="{{url('newpayment')}}" class="dropdown-item notify-item">
                                                <i data-feather="file" class="icon-dual icon-xs mr-2"></i>
                                                <span>Update</span>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
    
                                        <div class="col-md-6 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                <form class="forms-sample" form method="post" action="{{url('save-location')}}">
                                                     @csrf
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Name</label>
                                                            <input type="text" class="form-control" name="name" placeholder="Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Phone Number</label>
                                                            <input type="text" class="form-control" name="phone_no" placeholder="Phone no">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Account Number</label>
                                                            <input type="text" class="form-control" name="account_no" placeholder="Account no">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Transaction Code</label>
                                                            <input type="text" class="form-control" name="trans_code" placeholder="Trans code">
                                                        </div>
                                                         <div class="form-group">
                                                            <label for="exampleInputEmail1">Amount</label>
                                                            <input type="text" class="form-control" name="amount" placeholder="Amount">
                                                        </div>
                                                         <div class="form-group">
                                                            <label for="exampleInputEmail1">Processed</label>
                                                            <input type="text" class="form-control" name="processed" placeholder="Stage">
                                                        </div>
                                                         <div class="form-group">
                                                            <label for="exampleInputEmail1">Remarks</label>
                                                            <input type="text" class="form-control" name="remarks" placeholder="remarks">
                                                        </div>
                                                            <button type="submit" class="btn btn-success mr-2">Save</button>
                                                            <button class="btn btn-light">Cancel</button>
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