<div class="page-wrapper">

    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right row p-0">
            <div class="main-header-left d-lg-none w-auto">
                <div class="logo-wrapper"><a href="{{ url('admin/dashboard') }}"><img class="blur-up lazyloaded"
                            src="{{ asset('assets/images/dashboard/logo/newlogo.png') }}" alt=""></a></div>
            </div>
            <div class="mobile-sidebar w-auto">
                <div class="media-body text-end switch-sm">
                    <label class="switch"><a href="#"><i id="sidebar-toggle"
                                data-feather="align-left"></i></a></label>
                </div>
            </div>
            <?php
            use App\Models\order\Orders;
            use App\Models\order\ordersproduct;
            use App\Models\Products;
            use Illuminate\Support\Facades\Auth;
            use App\Models\User;
            $login_id = session()->get('login_id');
            // $ordersproduct = orders::join('ordersproducts',"ordersproducts.order_id","=","orders.orders_id")
            // ->where('ordersproducts.order_status', '=', 'New')->get();
            $ordersproduct =  DB::table('orders')
            ->leftJoin('ordersproducts', 'ordersproducts.order_id', '=', 'orders.orders_id')
            ->leftJoin('products_details', 'products_details.id', '=', 'ordersproducts.product_id')
            ->where('products_details.login_id', $login_id)
            ->where('ordersproducts.order_status', '=', 'New')
            ->get();
            //    print_r(count($ordersproduct));
              $orderscount = count($ordersproduct);  // hii hello
            
        // $orderscount = count($ordersproduct);
               
            ?>
            <div class="nav-right col">
                <ul class="nav-menus">
                    <li class="onhover-dropdown"><i data-feather="bell"></i><span
                            class="badge badge-pill badge-primary pull-right notification-badge">{{ $orderscount}}</span><span
                            class="dot"></span>
                        <ul class="notification-dropdown onhover-show-div p-0">
                            <li>Notification <span class="badge badge-pill badge-primary pull-right">{{$orderscount}}</span></li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="mt-0"><span><i class="shopping-color"
                                                    data-feather="shopping-bag"></i></span>Your {{$orderscount}} order </h6>
                                        <p class="mb-0">Short top</p>
                                    </div>
                                </div>
                            </li>


                            <li class="txt-dark"><a href="#">All</a> notification</li>
                        </ul>
                    </li>
                    <li class="onhover-dropdown">
                        <div class="media align-items-center"><img
                                class="align-self-center pull-right img-30 rounded-circle blur-up lazyloaded"
                                src="{{ asset('assets/images/dashboard/logo/fav.png') }}" alt="header-user">
                            <div class="dotted-animation"><span class="animate-circle"></span><span
                                    class="main-circle"></span></div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                            <li><a href="{{route('editprofile.edit',$login_id) }}"><i data-feather="user"></i>Edit Profile</a></li>
                         
                            {{-- <li><a href="#"><i data-feather="mail"></i>Inbox</a></li>
                            <li><a href="#"><i data-feather="lock"></i>Lock Screen</a></li>
                            <li><a href="#"><i data-feather="settings"></i>Settings</a></li> --}}
                            <li><a href="{{ url('admin/logout') }}"><i data-feather="log-out"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
    </div>
