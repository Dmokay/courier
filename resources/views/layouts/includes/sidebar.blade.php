 <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">
                <div class="media user-profile mt-2 mb-2">
                    <img src="{{asset('assets/images/users/avatar-7.jpg')}}" class="avatar-sm rounded-circle mr-2" alt="Shreyu" />
                    <img src="{{asset('assets/images/users/avatar-7.jpg')}}" class="avatar-xs rounded-circle mr-2" alt="Shreyu" />

                    <div class="media-body">
                        <h6 class="pro-user-name mt-0 mb-0">Makamu Evans</h6>
                        <span class="pro-user-desc">Administrator</span>
                    </div>
                    <div class="dropdown align-self-center profile-dropdown-menu">
                        <a class="dropdown-toggle mr-0" data-toggle="dropdown" href="{{url('index.html#')}}" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <span data-feather="chevron-down"></span>
                        </a>
                        <div class="dropdown-menu profile-dropdown">
                            <a href="{{url('pages-profile.html')}}" class="dropdown-item notify-item">
                                <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                                <span>My Account</span>
                            </a>

                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i data-feather="settings" class="icon-dual icon-xs mr-2"></i>
                                <span>Settings</span>
                            </a>

                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i data-feather="help-circle" class="icon-dual icon-xs mr-2"></i>
                                <span>Support</span>
                            </a>

                            <a href="{{url('https://shreyu.coderthemes.com/pages-lock-screen.html')}}" class="dropdown-item notify-item">
                                <i data-feather="lock" class="icon-dual icon-xs mr-2"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-content">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu" class="slimscroll-menu">
                        <ul class="metismenu" id="menu-bar">
                            <li class="menu-title">Navigation</li>

                            <li>
                                <a href="{{route('user.index')}}">
                                    <i data-feather="home"></i>
                                    <span class="badge badge-success float-right">1</span>
                                    <span> Users </span>
                                </a>
                            </li>
                            <li class="menu-title">Client Side</li>
                            <li>
                                <a href="{{route('payments.index')}}">
                                    <i data-feather="calendar"></i>
                                    <span> Payments </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('products.index')}}">
                                    <i data-feather="calendar"></i>
                                    <span> Products </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('locations.index')}}">
                                    <i data-feather="calendar"></i>
                                    <span> Locations </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('invoices.index')}}">
                                    <i data-feather="calendar"></i>
                                    <span> Invoice </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('receipts.index')}}">
                                    <i data-feather="calendar"></i>
                                    <span> Receipts </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('orders.index')}}">
                                    <i data-feather="calendar"></i>
                                    <span> Orders </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('customers.index')}}">
                                    <i data-feather="calendar"></i>
                                    <span> Customers </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->