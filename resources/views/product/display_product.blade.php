@extends('layouts.main')

@section('content')

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row page-title">
                            <div class="col-sm-8 col-xl-6">
                                <h4 class="mb-1 mt-0">
                                    {{$product->type}}
                                    |
                                     @if($product->status == 1)
                                        <div class="badge badge-pill badge-success">{{$product->decoded_status}}</div>
                                     @else
                                        <div class="badge badge-pill badge-danger">{{$product->decoded_status}}</div>
                                     @endif
                                </h4>
                            </div>
                            <div class="col-sm-4 col-xl-6 text-sm-right">
                                <div >

                                    <a href="{{route('products.edit', $product->id)}}" class="text-primary">Edit |</a>
                                
                                    <a href="#" class="text-danger" data-toggle="modal" data-target="#prd{{$product->id}}">Delete</a>

                                                            <!-- Modal -->
<div class="modal fade" id="prd{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">You are about to delete a record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{route('products.destroy', $product->id)}}">

        @csrf
        {{ method_field('DELETE') }}

        <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Delete</button>
      </div>
          
      </form>
      
    </div>
  </div>
</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <h6 class="card-title border-bottom p-3 mb-0 header-title">Product Overview</h6>
                                        <div class="row py-1">
                                            <div class="col-xl-3 col-sm-6">
                                                <!-- stat 1 -->
                                                <div class="media p-3">
                                                    <i data-feather="grid" class="align-self-center icon-dual icon-lg mr-4"></i>
                                                    <div class="media-body">
                                                        <h4 class="mt-0 mb-0">210</h4>
                                                        <span class="text-muted font-size-13">Total Tasks</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6">
                                                <!-- stat 2 -->
                                                <div class="media p-3">
                                                    <i data-feather="check-square" class="align-self-center icon-dual icon-lg mr-4"></i>
                                                    <div class="media-body">
                                                        <h4 class="mt-0 mb-0">121</h4>
                                                        <span class="text-muted">Total Tasks Completed</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6">
                                                <!-- stat 3 -->
                                                <div class="media p-3">
                                                    <i data-feather="users"
                                                        class="align-self-center icon-dual icon-lg mr-4"></i>
                                                    <div class="media-body">
                                                        <h4 class="mt-0 mb-0">12</h4>
                                                        <span class="text-muted">Total Team Size</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6">
                                                <!-- stat 3 -->
                                                <div class="media p-3">
                                                    <i data-feather="clock"
                                                        class="align-self-center icon-dual icon-lg mr-4"></i>
                                                    <div class="media-body">
                                                        <h4 class="mt-0 mb-0">2500</h4>
                                                        <span class="text-muted">Total Hours Spent</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- details-->
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="mt-0 header-title">Remarks</h6>

                                        <div class="text-muted mt-3">

                                            <p>{{$product->remarks}}</p>

                                            <div class="tags">
                                                <h6 class="font-weight-bold">More About the Product</h6>
                                                <div class="text-uppercase">
                                                    <a href="project-detail.html#" class="badge badge-soft-primary mr-2">Details</a>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="mt-4">
                                                        <p class="mb-2"><i class="uil-calendar-slash text-danger"></i> Date Dispatched</p>
                                                        <h5 class="font-size-16">15 July, 2019</h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="mt-4">
                                                        <p class="mb-2"><i class="uil-calendar-slash text-danger"></i> Date Delivered</p>
                                                        <h5 class="font-size-16">15 July, 2019</h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="mt-4">
                                                        <p class="mb-2"><i class="uil-dollar-alt text-danger"></i>Price</p>
                                                        <h5 class="font-size-16">{{$product->price}}</h5>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-6">
                                                    <div class="mt-4">
                                                        <p class="mb-2"><i class="uil-user text-danger"></i> Created By</p>
                                                        <h5 class="font-size-16">{{$product->created_by}}</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-4">
                                                <h6 class="font-weight-bold">Attached Files</h6>
    
                                                <div class="row">
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="p-2 border rounded mb-2">
                                                            <div class="media">
                                                                <div class="avatar-sm font-weight-bold mr-3">
                                                                    <span class="avatar-title rounded bg-soft-primary text-primary">
                                                                        <i class="uil-file-plus-alt font-size-18"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="project-detail.html#" class="d-inline-block mt-2">Landing 1.psd</a>
                                                                </div>
                                                                <div class="float-right mt-1">
                                                                    <a href="project-detail.html#" class="p-2"><i class="uil-download-alt font-size-18"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="p-2 border rounded mb-2">
                                                            <div class="media">
                                                                <div class="avatar-sm font-weight-bold mr-3">
                                                                    <span class="avatar-title rounded bg-soft-primary text-primary">
                                                                        <i class="uil-file-plus-alt font-size-18"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="project-detail.html#" class="d-inline-block mt-2">Landing 2.psd</a>
                                                                </div>
                                                                <div class="float-right mt-1">
                                                                    <a href="project-detail.html#" class="p-2"><i class="uil-download-alt font-size-18"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
        
                                        </div>

                                    </div>
                                </div>
                                <!-- end card -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                2019 &copy; Shreyu. All Rights Reserved. Crafted with <i class='uil uil-heart text-danger font-size-12'></i> by <a href="https://coderthemes.com" target="_blank">Coderthemes</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->



@endsection