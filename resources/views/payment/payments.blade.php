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
                                            <a href="{{route('payments.create')}}" class="dropdown-item notify-item">
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
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
    
                                        <div class="table-responsive">
                                            <table class="table m-0">
                                                <thead>
                                                    <tr>
                                                    
                                                        <th>Name</th>
                                                        <th>Phone No.</th>
                                                        <th>Account No.</th>
                                                        <th>Transaction Code</th>
                                                        <th>Amount</th>
                                                        <th>Processed</th>
                                                        <th>Remarks</th>
                                                        <th>Actions</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                     @foreach ($payments as $payment)

                                                    <tr>
                                                
                                                        <td>{{$payment->name}}</td>
                                                        <td>{{$payment->phone_no}}</td>
                                                        <td>{{$payment->account_no}}</td>
                                                        <td>{{$payment->trans_code}}</td>
                                                        <td>{{$payment->amount}}</td>
                                                        <td>{{$payment->processed}}</td>
                                                        <td>{{$payment->remarks}}</td>
                                                        

                                                         <td>
                                                            
                                                            <a href="{{route('payments.show', $payment->id)}}" class="text-success">View |</a>
                                                            <a href="{{route('payments.edit', $payment->id)}}" class="text-primary">Edit |</a>
                                                            <a href="{{url('edit_payment/'.$payment->id)}}" class="text-danger">Delete</a>
                                                        
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