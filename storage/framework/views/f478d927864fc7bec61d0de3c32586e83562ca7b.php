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
            <?php if(session()->get('login_id')): ?>
            <li><a class="sidebar-header" href="<?php echo e(url('dashboard')); ?>"><i
                        data-feather="home"></i><span>Dasshboard</span></a></li>

                
                <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Category</span><i
                    class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="<?php echo e(route('vendorcategory.main.index')); ?>"><i class="fa fa-circle"></i>Main Category</a></li>
                        <li><a href="<?php echo e(route('vendorcategory.index')); ?>"><i class="fa fa-circle"></i>Category</a></li>
                        <li><a href="<?php echo e(route('vendorcategory.sub.index')); ?>"><i class="fa fa-circle"></i>Sub Category</a></li>
                    </ul>
                </li>
            
            
            
            <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Products</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="<?php echo e(route('vendorproductscreate')); ?>"><i class="fa fa-circle"></i>Add Product</a></li>
                   <li><a href=" <?php echo e(route('vendorattribute.master.index')); ?>"><i class="fa fa-circle"></i> Attributes</a>
                    </li>
                
                    <li><a href="<?php echo e(route('vendorproduct.specification.index')); ?>"><i class="fa fa-circle"></i>
                            Specification</a>
                    </li>

                    
                    <!--<li><a href="<?php echo e(route('vendorproductcollection.master.index')); ?>"><i class="fa fa-circle"></i>Product-->
                    <!--        Collection</a>-->
                    <!--</li>-->
                    <li><a href="<?php echo e(route('vendorproducts.crud.listing')); ?>"><i class="fa fa-circle"></i>Product List</a>
                    </li>
                </ul>
            </li>
           
            <li><a class="sidebar-header" href=""> <i data-feather="navigation"></i> <span>Sales</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="<?php echo e(route('vendor.order')); ?>"><i class="fa fa-circle"></i>Orders</a></li>
                    <li><a href="<?php echo e(route('vendor.transaction')); ?>"><i class="fa fa-circle"></i>Transactions</a></li>
                </ul>
            </li>
            


            

            
            <li><a class="sidebar-header" href=""><i data-feather="percent"></i><span>Offers</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="<?php echo e(route('vendoroffer.list.index')); ?>"><i class="fa fa-circle"></i>List Offers</a></li>
                    <li><a href="<?php echo e(route('vendoroffer.main.create')); ?>"><i class="fa fa-circle"></i>Create Offer </a></li>

                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="target"></i><span>Marketing</span><i
                class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="<?php echo e(route('vendorwhatsapp.index')); ?>"><i class="fa fa-circle"></i>Whatsapp</a></li>
                    <li><a href="<?php echo e(route('vendorfacebook.index')); ?>"><i class="fa fa-circle"></i>Facebook</a></li>
                    <li><a href="<?php echo e(route('vendorinstagram.index')); ?>"><i class="fa fa-circle"></i>Instagram</a></li>
                    <li><a href="<?php echo e(route('vendoroxygen.index')); ?>"><i class="fa fa-circle"></i>Oxygen Promo</a></li>
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
            <?php endif; ?>
        </ul>
    </div>
</div>
<?php /**PATH /home/ktonline/public_html/oxygen.ktonline.in/resources/views/paritials/vendorauth/sidemenu.blade.php ENDPATH**/ ?>