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

            
            
            <?php
            $staffs = json_decode($roll[0]->permission_id);
            // print_r($roll->permission_id);
            // foreach($staffs as $x => $val) {
                
            //     echo"<li>". $val . "</li>";
            //     }  
            // exit();
                ?>
                <?php $__currentLoopData = $staffs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php if($val == 1): ?>
                
                <li id="<?php echo e($val); ?>"><a class="sidebar-header" href="<?php echo e(url('dashboard')); ?>"><i
                    data-feather="home"></i><span>Dashboard</span></a></li>
         
            <?php elseif($val ==2): ?>             
  
              <li ><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Category</span><i
                          class="fa fa-angle-right pull-right"></i></a>
                  <ul class="sidebar-submenu">
                      <li><a href="<?php echo e(route('category.main.index')); ?>"><i class="fa fa-circle"></i>Main Category</a></li>
                      <li><a href="<?php echo e(route('category.index')); ?>"><i class="fa fa-circle"></i>Category</a></li>
                      <li><a href="<?php echo e(route('category.sub.index')); ?>"><i class="fa fa-circle"></i>Sub Category</a></li>
                  </ul>
              </li>
              <?php elseif($val == 3): ?>
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
                      </li>
                  </ul>
              </li>
              <?php elseif($val ==4): ?>
              <li><a class="sidebar-header" href=""> <i data-feather="navigation"></i> <span>Sales</span><i
                          class="fa fa-angle-right pull-right"></i></a>
                  <ul class="sidebar-submenu">
                      <li><a href="<?php echo e(url('order')); ?>"><i class="fa fa-circle"></i>Orders</a></li>
                      <li><a href="<?php echo e(url('transaction')); ?>"><i class="fa fa-circle"></i>Transactions</a></li>
                  </ul>
              </li>
              <?php elseif($val == 5): ?>
              <li><a class="sidebar-header" href=""><i data-feather="gift"></i><span>Coupons</span><i
                          class="fa fa-angle-right pull-right"></i></a>
                  <ul class="sidebar-submenu">
                      <li><a href="<?php echo e(route('coupon.couponlisting')); ?>"><i class="fa fa-circle"></i>List Coupons</a></li>
                      <li><a href="<?php echo e(route('coupon.index')); ?>"><i class="fa fa-circle"></i>Create Coupons </a></li>
                  </ul>
              </li>
  
              <?php elseif($val == 6): ?>
              <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Banners</span><i
                          class="fa fa-angle-right pull-right"></i></a>
                  <ul class="sidebar-submenu">
                      <li><a href="<?php echo e(url('advbanner')); ?>"><i class="fa fa-circle"></i>Paid Adv Banner</a></li>
                      <li><a href="<?php echo e(url('advoxygen')); ?>"><i class="fa fa-circle"></i>oxygen Adv </a></li>
                      <li><a href="<?php echo e(route('banners.slider')); ?>"><i class="fa fa-circle"></i>Main Slider</a></li>
                  </ul>
              </li>
              <?php elseif($val == 7): ?>
              <li><a class="sidebar-header" href=""><i data-feather="gift"></i><span>Auction</span><i
                          class="fa fa-angle-right pull-right"></i></a>
                  <ul class="sidebar-submenu">
                      <li><a href="<?php echo e(url('auction/list')); ?>"><i class="fa fa-circle"></i>List Auction</a></li>
                      <li><a href="<?php echo e(url('auction/create')); ?>"><i class="fa fa-circle"></i>Create Auction </a></li>
                  </ul>
              </li>
              <?php elseif($val == 8): ?>
              <li><a class="sidebar-header" href=""><i data-feather="percent"></i><span>Offers</span><i
                          class="fa fa-angle-right pull-right"></i></a>
                  <ul class="sidebar-submenu">
                      <li><a href="<?php echo e(url('admin/offer/list')); ?>"><i class="fa fa-circle"></i>List Offers</a></li>
                      <li><a href="<?php echo e(url('admin/offer/create?id=1')); ?>"><i class="fa fa-circle"></i>Create Offer </a></li>
                      
                  </ul>
              </li>
              <?php elseif($val == 9): ?>
              <li><a class="sidebar-header" href=""><i data-feather="target"></i><span>Marketing</span><i
                          class="fa fa-angle-right pull-right"></i></a>
                  <ul class="sidebar-submenu">
  
                      <li><a href="<?php echo e(url('marketing/whatsapp')); ?>"><i class="fa fa-circle"></i>Whatsapp</a></li>
                      <li><a href="<?php echo e(url('marketing/facebook')); ?>"><i class="fa fa-circle"></i>Facebook</a></li>
                      <li><a href="<?php echo e(url('marketing/instagram')); ?>"><i class="fa fa-circle"></i>Instagram</a></li>
                      <li><a href="<?php echo e(url('marketing/oxygen')); ?>"><i class="fa fa-circle"></i>Oxygen Promo</a></li>
                  </ul>
              </li>
              <?php elseif($val == 10): ?>
              <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Staff</span><i
                          class="fa fa-angle-right pull-right"></i></a>
                  <ul class="sidebar-submenu">
                      <li><a href="<?php echo e(url('admin/staff/create')); ?>"><i class="fa fa-circle"></i>Staff Create </a></li>
                      <li><a href="<?php echo e(url('admin/staff/list')); ?>"><i class="fa fa-circle"></i>Staff Listing</a></li>
  
                  </ul>
              </li>
              <?php elseif($val == 11): ?>
              
                  <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Role</span><i
                              class="fa fa-angle-right pull-right"></i></a>
                      <ul class="sidebar-submenu">
                          <li><a href="<?php echo e(route('roll.index')); ?>"><i class="fa fa-circle"></i>Role Create </a></li>
                          <li><a href="<?php echo e(route('rolelist')); ?>"><i class="fa fa-circle"></i>Role Assign</a></li>
  
                      </ul>
                  </li>
              
              <?php elseif($val == 12): ?>
              <li><a class="sidebar-header" href=""><i data-feather="users"></i><span>Vendors</span><i
                  class="fa fa-angle-right pull-right"></i></a>
                  <ul class="sidebar-submenu">
                      <li><a href="<?php echo e(route('vendor-list')); ?>"><i class="fa fa-circle"></i>Vendor List</a></li>
                      <li><a href="<?php echo e(route('vendorcreate.index')); ?>"><i class="fa fa-circle"></i>Create Vendor</a>
                      </li>
                  </ul>
              </li>
              <?php elseif($val == 13): ?>
              
              <li><a class="sidebar-header" href=""><i data-feather="bar-chart"></i><span>Activity
                          Tracker</span><i class="fa fa-angle-right pull-right"></i></a>
                  <ul class="sidebar-submenu">
                      <li><a href="<?php echo e(url('activity/list')); ?>"><i class="fa fa-circle"></i>Acivity List</a></li>
                      <li><a href="<?php echo e(url('activity/create')); ?>"><i class="fa fa-circle"></i>Add Activity </a></li>
                  </ul>
              </li>
              <?php elseif($val == 14): ?>
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
              <?php elseif($val == 15): ?>
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
    </div>
</div>
<?php /**PATH F:\mano\oxygen-new\resources\views/paritials/staffauth/sidemenu.blade.php ENDPATH**/ ?>