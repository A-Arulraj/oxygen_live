<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper">
            <a href="{{ url('admin/dashboard') }}">
                <img class="blur-up lazyloaded" src="{{ asset('assets/images/dashboard/logo/logo.png') }}" alt="">
            </a>
        </div>
    </div>
    <div class="sidebar custom-scrollbar mt-3">
        <div class="sidebar-user text-center d-none">
            <div>
                <img class="img-60 rounded-circle lazyloaded blur-up"
                    src="{{ asset('assets/images/dashboard/man.png') }}" alt="#">
            </div>
            <h6 class="mt-3 f-14">JOHN</h6>
            <p>general manager.</p>
        </div>
        <ul class="sidebar-menu">
            
          <li><a class="sidebar-header" href="{{ url('admin/dashboard') }}"><i
                        data-feather="home"></i><span>Dashboard</span></a></li>

            <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Category</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('category.main.index') }}"><i class="fa fa-circle"></i>Main Category</a></li>
                    <li><a href="{{ route('category.index') }}"><i class="fa fa-circle"></i>Category</a></li>
                    <li><a href="{{ route('category.sub.index') }}"><i class="fa fa-circle"></i>Sub Category</a></li>
                </ul>
            </li>
       
            <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Products</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('products.crud.index') }}"><i class="fa fa-circle"></i>Add Product</a></li>
                    <li><a href=" {{ route('attribute.master.index') }}"><i class="fa fa-circle"></i> Attributes</a>
                    </li>

                    <li><a href="{{ route('product.specification.index') }}"><i class="fa fa-circle"></i>
                            Specification</a>
                    </li>

                    {{-- <li><a href="{{ route('product.specification.index') }}"><i class="fa fa-circle"></i>
                        Offers</a>
                    </li> --}}
                    <li><a href="{{ route('productcollection.master.index') }}"><i class="fa fa-circle"></i>Product
                            Collection</a>
                    </li>
                    <li><a href="{{ route('products.crud.listing') }}"><i class="fa fa-circle"></i>Product List</a>
                    <li><a href="{{ route('vendor_products.crud.listing') }}"><i class="fa fa-circle"></i>Vendor Product List</a>
                    </li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""> <i data-feather="navigation"></i> <span>Sales</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('order') }}"><i class="fa fa-circle"></i>Orders</a></li>
                    <li><a href="{{ route('transaction') }}"><i class="fa fa-circle"></i>Transactions</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="gift"></i><span>Coupons</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('coupon.couponlisting') }}"><i class="fa fa-circle"></i>List Coupons</a></li>
                    <li><a href="{{ route('coupon.index') }}"><i class="fa fa-circle"></i>Create Coupons </a></li>
                </ul>
            </li>


            <li><a class="sidebar-header" href="#"><i data-feather="box"></i><span>Banners</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('advbanner.index') }}"><i class="fa fa-circle"></i>Adv Banner</a></li>
                    <li><a href="{{ route('advoxygen.index') }}"><i class="fa fa-circle"></i>oxygen Adv </a></li>
                    <li><a href="{{ route('main_slider.index') }}"><i class="fa fa-circle"></i>Main Slider</a></li>
                </ul>
            </li>

            <li><a class="sidebar-header" href=""><i data-feather="gift"></i><span>Auction</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('auction/list') }}"><i class="fa fa-circle"></i>List Auction</a></li>
                    <li><a href="{{ route('auction.create') }}"><i class="fa fa-circle"></i>Create Auction </a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="percent"></i><span>Offers</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('offer.list.index') }}"><i class="fa fa-circle"></i>List Offers</a></li>
                    <li><a href="{{ route('offer.main.create') }}"><i class="fa fa-circle"></i>Create Offer </a></li>
                    
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="target"></i><span>Marketing</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">

                    <li><a href="{{ route('whatsapp.index') }}"><i class="fa fa-circle"></i>Whatsapp</a></li>
                    <li><a href="{{ route('facebook.index') }}"><i class="fa fa-circle"></i>Facebook</a></li>
                    <li><a href="{{ route('instagram.index')}}"><i class="fa fa-circle"></i>Instagram</a></li>
                    <li><a href="{{ route('oxygen.index') }}"   ><i class="fa fa-circle"></i>Oxygen Promo</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Staff</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ url('admin/staff/create') }}"><i class="fa fa-circle"></i>Staff Create </a></li>
                    <li><a href="{{ url('admin/staff/list') }}"><i class="fa fa-circle"></i>Staff Listing</a></li>

                </ul>
            </li>
            {{-- @if (session()->get('level') == 5 || session()->get('level') == 4) --}}
                <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Role</span><i
                            class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{ route('roll.index') }}"><i class="fa fa-circle"></i>Role Create </a></li>
                        {{-- <li><a href="{{ route('rolelist') }}"><i class="fa fa-circle"></i>Role Assign</a></li> --}}

                    </ul>
                </li>
            {{-- @endif --}}
            <li><a class="sidebar-header" href=""><i data-feather="users"></i><span>Vendors</span><i
                class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('vendor-list') }}"><i class="fa fa-circle"></i>Vendor List</a></li>
                    <li><a href="{{ route('vendorcreate.index') }}"><i class="fa fa-circle"></i>Create Vendor</a>
                    </li>
                </ul>
            </li>
            {{-- @if (session()->get('level') == 5)
                <li><a class="sidebar-header" href=""><i data-feather="users"></i><span>Vendors</span><i
                            class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{ url('vendor/list') }}"><i class="fa fa-circle"></i>Vendor List</a></li>
                        <li><a href="{{ route('vendorcreate.index') }}"><i class="fa fa-circle"></i>Create Vendor</a>
                        </li>
                    </ul>
                </li>
            @endif --}}
            <li><a class="sidebar-header" href=""><i data-feather="bar-chart"></i><span>Activity
                        Tracker</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ url('activity/list') }}"><i class="fa fa-circle"></i>Acivity List</a></li>
                    <li><a href="{{ url('activity/create') }}"><i class="fa fa-circle"></i>Add Activity </a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="database"></i><span>Master</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">

                    {{-- <li><a href="{{ url('admin/pincode1') }}"><i class="fa fa-circle"></i>Pincode Master</a></li> --}}
                    <li><a href="{{ route('pincode1.index') }}"><i class="fa fa-circle"></i>Pincode Master</a></li>

                    <li><a href="{{ route('gst.master.index') }}"><i class="fa fa-circle"></i>GST Master</a></li>

                    
                    <li><a href="{{ route('package.index') }}"><i class="fa fa-circle"></i>Package Master</a></li>
                    <li><a href="{{ route('department') }}"><i class="fa fa-circle"></i>Department</a></li>
                    <li><a href="{{ route('designation.master.index') }}"><i class="fa fa-circle"></i>Designation</a></li>
                    <li><a href="{{ route('zonal') }}"><i class="fa fa-circle"></i>Zonal</a></li>
                    <li><a href="{{ route('aroute') }}"><i class="fa fa-circle"></i>Route</a></li>


                </ul>
            </li>

            <li><a class="sidebar-header" href=""><i data-feather="settings"></i><span>Settings</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ url('profile') }}"><i class="fa fa-circle"></i>Profile</a></li>
                </ul>
            </li>
            @if (session()->get('level') == 5 || session()->get('level') == 4)
                <li><a class="sidebar-header" href="#"><i data-feather="bar-chart"></i><span>Reports</span></a>
                </li>
                <li><a class="sidebar-header" href="{{ route('logout') }}"><i
                            data-feather="log-in"></i><span>Logout</span></a>
                </li>
            @endif
        </ul>
    </div>
</div>
