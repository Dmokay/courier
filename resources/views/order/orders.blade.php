@extends('layouts.main')

@section('content')  

                        <div class="content-page">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row page-title align-items-center">
                            <div class="col-sm-4 col-xl-6">
                                <h4 class="mb-1 mt-0">Orders Table</h4>
                            </div>
                            <div class="col-sm-8 col-xl-6">
                                <form class="form-inline float-sm-right mt-3 mt-sm-0">
                                    <div class="form-group mb-sm-0 mr-2">
                                        <input type="text" class="form-control" id="dash-daterange" style="min-width: 190px;" />
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class='uil uil-file-alt mr-1'></i>ORDERS
                                            <i class="icon"><span data-feather="chevron-down"></span></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{route('order.create')}}" class="dropdown-item notify-item">
                                                <i data-feather="mail" class="icon-dual icon-xs mr-2"></i>
                                                <span>Create Order</span>
                                            </a>
                                            <a href="{{url('neworder')}}" class="dropdown-item notify-item">
                                                <i data-feather="printer" class="icon-dual icon-xs mr-2"></i>
                                                <span>View</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="{{url('neworder')}}" class="dropdown-item notify-item">
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
                                                    
                                                        <th>Product Id</th>
                                                        <th>Customer Id</th>
                                                        <th>From</th>
                                                        <th>To</th>
                                                        <th>Description</th>
                                                        <th>Stage</th>
                                                        <th>Actions</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                     @foreach ($orders as $order)

                                                    <tr>
                                                
                                                        <td>{{$order->product_id}}</td>
                                                        <td>{{$order->customer_id}}</td>
                                                        <td>{{$order->from}}</td>
                                                        <td>{{$order->to}}</td>
                                                        <td>{{$order->description}}</td>
                                                        <td>{{$order->stage}}</td>
                                                        

                                                        <td>
                                                            <button type="button" class="btn btn-rounded btn-outline-secondary"><a href="{{url('orders')}}">View</a></button>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-rounded btn-outline-success"><a href="{{url('orders')}}">Edit</a></button>
                                                        </td>
                                                         <td>
                                                            <button type="button" class="btn btn-rounded btn-outline-danger"><a href="{{url('orders')}}">Delete</a></button>
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