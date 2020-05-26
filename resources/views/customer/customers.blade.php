@extends('layouts.main')

@section('content')  

                        <div class="content-page">
                <div class="content">
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
                                                <span>Create Customer</span>
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
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
    
                                        <div class="table-responsive">
                                            <table class="table m-0">
                                                <thead>
                                                    <tr>
                                                    
                                                        <th>Name</th>
                                                        <th>Id Number</th>
                                                        <th>Phone Number</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                     @foreach ($customers as $customer)

                                                    <tr>
                                                
                                                        <td>{{$customer->name}}</td>
                                                        <td>{{$customer->id_no}}</td>
                                                        <td>{{$customer->phone_no}}</td>
                                                        @if($customer->status == 1)
                                                             <td class="badge badge-pill badge-success">{{$customer->decoded_status}}</td>
                                                        @else
                                                            <td class="badge badge-pill badge-danger">{{$customer->decoded_status}}</td>
                                                        @endif
                                                         <td>
                                                            <a href="{{route('customers.show', $customer->id)}}" class="text-success">View |</a>
                                                            <a href="{{route('customers.edit', $customer->id)}}" class="text-primary">Edit |</a>
                                                            <a href="{{url('edit_customer/'.$customer->id)}}" class="text-danger">Delete</a>
                                                        
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
