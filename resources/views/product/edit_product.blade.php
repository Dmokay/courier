@extends('layouts.main')

@section('content') 

 <div class="content-page">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row page-title align-items-center">
                            <div class="col-sm-4 col-xl-6">
                                <h4 class="mb-1 mt-0">Products Table</h4>
                            </div>
                            <div class="col-sm-8 col-xl-6">
                                <form class="form-inline float-sm-right mt-3 mt-sm-0">
                                    <div class="form-group mb-sm-0 mr-2">
                                        <input type="text" class="form-control" id="dash-daterange" style="min-width: 190px;" />
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class='uil uil-file-alt mr-1'></i>PRODUCTS
                                            <i class="icon"><span data-feather="chevron-down"></span></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{route('products.create')}}" class="dropdown-item notify-item">
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
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
    
                                        <div class="col-md-6 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                <form class="forms-sample" form method="POST" action="{{route('products.update', $product->id)}}">
                                                     @csrf
                                                     {{method_field('put')}}
                                                
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Type</label>
                                                            <input type="text" class="form-control" name="type" value="{{$product->type}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Price</label>
                                                            <input type="text" class="form-control" name="price" value="{{$product->price}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Created By</label>
                                                            <input type="text" class="form-control" name="created_by" value="{{$product->created_by}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Status</label>
                                                            <input type="text" class="form-control" name="status" value="{{$product->status}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Remarks</label>
                                                            <input type="text" class="form-control" name="remarks" value="{{$product->remarks}}">
                                                        </div>
                                                            <button type="submit" class="btn btn-success mr-2">Update</button>
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