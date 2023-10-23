<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper">
            <a href="index.php">
                <img class="blur-up lazyloaded" src="<?php echo e(asset('assets/images/dashboard/logo/logo.png')); ?>" alt="">
            </a>
        </div>
    </div>
    <div class="sidebar custom-scrollbar mt-3">
        <div class="sidebar-user text-center d-none">
            <div>
                <img class="img-60 rounded-circle lazyloaded blur-up"
                    src="<?php echo e(asset('assets/images/dashboard/man.png')); ?>" alt="#">
            </div>
            <h6 class="mt-3 f-14">JOHN</h6>
            <p>general manager.</p>
        </div>
        <ul class="sidebar-menu">
            
          <li><a class="sidebar-header" href="<?php echo e(url('dashboard')); ?>"><i
                        data-feather="home"></i><span>Dashboard</span></a></li>

            <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Category</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="<?php echo e(route('category.main.index')); ?>"><i class="fa fa-circle"></i>Main Category</a></li>
                    <li><a href="<?php echo e(route('category.index')); ?>"><i class="fa fa-circle"></i>Category</a></li>
                    <li><a href="<?php echo e(route('category.sub.index')); ?>"><i class="fa fa-circle"></i>Sub Category</a></li>
                </ul>
            </li>
       
            <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Products</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="<?php echo e(route('products.crud.index')); ?>"><i class="fa fa-circle"></i>Add Product</a></li>
                    <li><a href=" <?php echo e(route('attribute.master.index')); ?>"><i class="fa fa-circle"></i> Attributes</a>
                    </li>

                    <li><a href="<?php echo e(route('product.specification.index')); ?>"><i class="fa fa-circle"></i>
                            Specification</a>
                    </li>

                    
                    <li><a href="<?php echo e(route('productcollection.master.index')); ?>"><i class="fa fa-circle"></i>Product
                            Collection</a>
                    </li>
                    <li><a href="<?php echo e(route('products.crud.listing')); ?>"><i class="fa fa-circle"></i>Product List</a>
                    <li><a href="<?php echo e(route('vendor_products.crud.listing')); ?>"><i class="fa fa-circle"></i>Vendor Product List</a>
                    </li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""> <i data-feather="navigation"></i> <span>Sales</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="<?php echo e(route('order')); ?>"><i class="fa fa-circle"></i>Orders</a></li>
                    <li><a href="<?php echo e(route('transaction')); ?>"><i class="fa fa-circle"></i>Transactions</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="gift"></i><span>Coupons</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="<?php echo e(route('coupon.couponlisting')); ?>"><i class="fa fa-circle"></i>List Coupons</a></li>
                    <li><a href="<?php echo e(route('coupon.index')); ?>"><i class="fa fa-circle"></i>Create Coupons </a></li>
                </ul>
            </li>


            <li><a class="sidebar-header" href="#"><i data-feather="box"></i><span>Banners</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="<?php echo e(route('advbanner.index')); ?>"><i class="fa fa-circle"></i>Adv Banner</a></li>
                    <li><a href="<?php echo e(route('advoxygen.index')); ?>"><i class="fa fa-circle"></i>oxygen Adv </a></li>
                    <li><a href="<?php echo e(route('main_slider.index')); ?>"><i class="fa fa-circle"></i>Main Slider</a></li>
                </ul>
            </li>

            <li><a class="sidebar-header" href=""><i data-feather="gift"></i><span>Auction</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="<?php echo e(route('auction/list')); ?>"><i class="fa fa-circle"></i>List Auction</a></li>
                    <li><a href="<?php echo e(route('auction.create')); ?>"><i class="fa fa-circle"></i>Create Auction </a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="percent"></i><span>Offers</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="<?php echo e(route('offer.list.index')); ?>"><i class="fa fa-circle"></i>List Offers</a></li>
                    <li><a href="<?php echo e(route('offer.main.create')); ?>"><i class="fa fa-circle"></i>Create Offer </a></li>
                    
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="target"></i><span>Marketing</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">

                    <li><a href="<?php echo e(route('whatsapp.index')); ?>"><i class="fa fa-circle"></i>Whatsapp</a></li>
                    <li><a href="<?php echo e(route('facebook.index')); ?>"><i class="fa fa-circle"></i>Facebook</a></li>
                    <li><a href="<?php echo e(route('instagram.index')); ?>"><i class="fa fa-circle"></i>Instagram</a></li>
                    <li><a href="<?php echo e(route('oxygen.index')); ?>"   ><i class="fa fa-circle"></i>Oxygen Promo</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Staff</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="<?php echo e(url('admin/staff/create')); ?>"><i class="fa fa-circle"></i>Staff Create </a></li>
                    <li><a href="<?php echo e(url('admin/staff/list')); ?>"><i class="fa fa-circle"></i>Staff Listing</a></li>

                </ul>
            </li>
            
                <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Role</span><i
                            class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="<?php echo e(route('roll.index')); ?>"><i class="fa fa-circle"></i>Role Create </a></li>
                        

                    </ul>
                </li>
            
            <li><a class="sidebar-header" href=""><i data-feather="users"></i><span>Vendors</span><i
                class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="<?php echo e(route('vendor-list')); ?>"><i class="fa fa-circle"></i>Vendor List</a></li>
                    <li><a href="<?php echo e(route('vendorcreate.index')); ?>"><i class="fa fa-circle"></i>Create Vendor</a>
                    </li>
                </ul>
            </li>
            
            <li><a class="sidebar-header" href=""><i data-feather="bar-chart"></i><span>Activity
                        Tracker</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="<?php echo e(url('activity/list')); ?>"><i class="fa fa-circle"></i>Acivity List</a></li>
                    <li><a href="<?php echo e(url('activity/create')); ?>"><i class="fa fa-circle"></i>Add Activity </a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="database"></i><span>Master</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">

                    
                    <li><a href="<?php echo e(route('pincode1.index')); ?>"><i class="fa fa-circle"></i>Pincode Master</a></li>

                    <li><a href="<?php echo e(route('gst.master.index')); ?>"><i class="fa fa-circle"></i>GST Master</a></li>

                    
                    <li><a href="<?php echo e(route('package.index')); ?>"><i class="fa fa-circle"></i>Package Master</a></li>
                    <li><a href="<?php echo e(route('department')); ?>"><i class="fa fa-circle"></i>Department</a></li>
                    <li><a href="<?php echo e(route('designation.master.index')); ?>"><i class="fa fa-circle"></i>Designation</a></li>
                    <li><a href="<?php echo e(route('zonal')); ?>"><i class="fa fa-circle"></i>Zonal</a></li>
                    <li><a href="<?php echo e(route('route')); ?>"><i class="fa fa-circle"></i>Route</a></li>


                </ul>
            </li>

            <li><a class="sidebar-header" href=""><i data-feather="settings"></i><span>Settings</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="<?php echo e(url('profile')); ?>"><i class="fa fa-circle"></i>Profile</a></li>
                </ul>
            </li>
            <?php if(session()->get('level') == 5 || session()->get('level') == 4): ?>
                <li><a class="sidebar-header" href="#"><i data-feather="bar-chart"></i><span>Reports</span></a>
                </li>
                <li><a class="sidebar-header" href="<?php echo e(route('logout')); ?>"><i
                            data-feather="log-in"></i><span>Logout</span></a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</div>
<?php /**PATH F:\mano\oxygen-new\resources\views/paritials/auth/sidemenu.blade.php ENDPATH**/ ?>