<style>
.cart-count
{
    background-color: green;
    padding: 5px;
    border-radius: 50px;
    color: #fff;
    font-size: 12px;
}
#header {
  position: fixed;
}

#content {
  margin-top: 100px;
}
</style>

<header id="header" class="header-tools zindex-up header-style top-relative">
    <div class="mobile-fix-option"></div>
    <div style="background-color:#6DECE0" class="logo-menu-part">
        <div class="container-fuild  px-3  border-bottom-0 rounded-5">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu">
                    <div class="col-md-3  col-sm-6 col-6">
                        <div class="menu-left">
                        <div class="navbar">
                        <a href="javascript:void(0)" onclick="openNav()">
                                <div class="bar-style px-2"><i class="fa fa-bars sidebar-bar" style="font-size: 25px;color: #000;" aria-hidden="true"></i>
                                </div>
                            </a>
                            
                        <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                                <nav>
                                    <div onclick="closeNav()">
                                        <div class="sidebar-back text-start"><i class="fa fa-angle-left pe-2"
                                                aria-hidden="true"></i> Back</div>
                                    </div>
                                    <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                      
                                         <li>
                                            <a href="<?php echo e(url( '/' )); ?>">HOME</a>
                                            
                                        </li> 
                                       
                                       <?php
                                        // $menu = App\Http\Controllers\Website\Home\HomeController::menu();
                                        // print_r($menu);
                                        use App\Models\Category\CategoryMain;
                                        use App\Models\Category\Category;
                                        use App\Models\Category\CategorySub;

                                        $categorymain = CategoryMain::get();
                                        $category = Category::get();
                                        $categorysub = CategorySub::get();

                                        
                                       ?>
                                       
                                       <?php $__currentLoopData = $categorymain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoriesmain): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <?php if(count($categoriesmain->submenu) > 0): ?>
                                       <li>
                                           <a href="<?php echo e(url( 'MainCatergoryproductshow/'.$categoriesmain->id )); ?>"><?php echo e($categoriesmain->category_main_name); ?></a>
                                           <ul>                                            
                                               <?php $__currentLoopData = $categoriesmain->submenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                                
                                               <?php if(count($submenus->childmenu) > 0): ?>
                                               <li>
                                                   <a href="<?php echo e(url( 'Categoryproductshow/'.$submenus->id )); ?>"><?php echo e($submenus->category_name); ?></a>
                                                   <ul>
                                                       <?php $__currentLoopData = $submenus->childmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childmenus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                                        
                                                           <li><a href="<?php echo e(url( 'Subcategoryproductshow/'.$childmenus->id )); ?>"><?php echo e($childmenus->category_sub_name); ?></a></li>                                                
                                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                    
                                                   </ul>
                                               </li>
                                               <?php else: ?>
                                               <li><a href="<?php echo e(url( 'Categoryproductshow/'.$submenus->id )); ?>"><?php echo e($submenus->category_name); ?></a></li> 
                                               <?php endif; ?>
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                           </ul>
                                       </li>
                                       <?php else: ?>
                                      <li><a href="<?php echo e(url( 'MainCatergoryproductshow/'.$categoriesmain->id )); ?>"><?php echo e($categoriesmain->category_main_name); ?></a></li> 
                                       <?php endif; ?>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                       
                                            <li><a href="<?php echo e(route('auction')); ?>">Auction</a></li> 
                                    </ul>
                                </nav>
                            </div> </div>
                            <div class="brand-logo">
                                <a href="<?php echo e(url( '/' )); ?>"> <img src="<?php echo e(asset('frontend_assets/img/logo/logo.png' )); ?>"
                                        class="img-fluid lazyload" alt="" ></a>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6">
                         <div class="pt-1">
                            <form action="<?php echo e(route('productsearchdetails')); ?>" class="form_search m-auto" role="form" method="post">
                                  <?php echo csrf_field(); ?>
                            <input id="keywords" name ="keywords" type="search" placeholder="Search anything here..." class="nav-search nav-search-field" aria-expanded="true">
                            <button type="submit" name="nav-submit-button" class="btn-search">
                                <i class="ti-search"></i>
                            </button>
                        </form>
                            </div></div>
                            <div class="col-md-3 col-sm-6 col-6">
                        <div class="menu-right">
                           
                            <div class="top-header">
                                <ul class="header-dropdown">
                                    
                                    <li class="onhover-dropdown mobile-account">
                                        <img src="<?php echo e(asset('frontend_assets/images/icon/user-1.png')); ?>" alt="">
                                        <ul class="onhover-show-div">
                                            <li>
                                                
                                            </li>
                                            
                                            <?php if(!empty(session('userId'))): ?>
                                            <li><a href="<?php echo e(route('UserSettings')); ?>" data-lng="es">user setting</a></li> 
                                            <li><a href="<?php echo e(route('ordersdetails')); ?>" data-lng="es">user Orders</a></li> 
                                           
                                            <li>
                                                <a href="<?php echo e(route('userlogout')); ?>" data-lng="es">
                                                    Logout
                                                </a>
                                            </li>
                                            <?php else: ?>
                                            <li>
                                                
                                                <a href="<?php echo e(route('userlogin')); ?>" data-lng="en">
                                                    Sign in
                                                    
                                                </a>
                                            </li>
                                            <li>
                                                
                                                <a href="<?php echo e(route('usersignin.index')); ?>" data-lng="en">
                                                    Sign up
                                                    
                                                </a>
                                            </li>
                                            
                                            
                                            <?php endif; ?>
                                            
                                        </ul>
                                        
                                          <p>Profile</p>
                                          
                                    </li>
                                  &nbsp;&nbsp;
                                    
                                    <li class="mobile-wishlist"><a href="#"><img
                                                src="<?php echo e(asset('frontend_assets/images/icon/heart-1.png')); ?>" alt=""> </a>
                                                
                                          <p>Wishlist</p>
                                          
                                                </li>
                                                 
                                          &nbsp;&nbsp;      
                                </ul>
                                
                            </div>
                            <div>
                                <div class="icon-nav">
                                    <ul>
                                        
                                       
                                        <li class="onhover-div mobile-cart" title="Cart">
                                            <div><img src="<?php echo e(asset('frontend_assets/images/icon/cart-1.png ')); ?>"
                                                    class="img-fluid lazyload" alt="">
                                                <i class="ti-shopping-cart"></i>
                                                <span style="background-color:#3dd6ef" class="cart-count">0</span>
                                                 
                                          <p>Cart</p>
                                            </div>
                                          
                                            <ul class="show-div shopping-cart" id="cart_dt">
                                                
                                                <li>
                                                    <div class="buttons">
                                                        <a href="<?php echo e(route('viewcart')); ?>" class="view-cart">view cart</a>
                                                        <a href="#" class="checkout">checkout</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <?php 
       
        $categorymain = App\Models\Category\CategoryMain::where('status',1)->limit(7)->get();
        $category = App\Models\Category\Category::where('status',1)->get();
        $Categorysub = App\Models\Category\CategorySub::where('status',1)->get();
        ?>
<section class="" style="padding-bottom: 20px; padding-top: 0;">
    <div  class="container-fuild">
        <div class="col-md-12 m-auto">
            <div class="row margin-default ratio_square">               
                
                    <!-- <div class="col-xl-1 p-0 col-sm-1 col-3">
                        <a href="#">
                            <div class="img-category">
                                <a href="<?php echo e(route('allproductshow')); ?>">
                                <div class="img-sec">
                                    <img  src="  "class="img-fluid bg-img" alt="">
                                </div>
                                  </a>   
                                 <h6>ALL</h6>                                 
                            </div>
                        </a>
                    </div>
                    
                    
                    <div class="col-xl-1 p-0 col-sm-1 col-3">
                        <a href="#">
                            <div class="img-category">
                                <a href="<?php echo e(route('allvendors')); ?>">
                                <div class="img-sec">
                                    <img  src="  "class="img-fluid bg-img" alt="">
                                </div>
                                  </a>   
                                 <h6>VENDORS</h6>                                 
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-xl-1 p-0 col-sm-1 col-3">
                        <a href="#">
                            <div class="img-category">
                                <a href="<?php echo e(route('alloffers')); ?>">
                                <div class="img-sec">
                                    <img  src="  "class="img-fluid bg-img" alt="">
                                </div>
                                  </a>   
                                 <h6>DEALS</h6>                                 
                            </div>
                        </a>
                    </div> -->
                 
                           



                                <nav id="main-nav navbar">
                                      
                                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                        <li>
                                            <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                        </li>
                                        <li class="mega" id="hover-cls">
                                        <a href="<?php echo e(route('allproductshow')); ?>">
                                            <div class="">                                            
                                                    <div class="img-category">                                                   
                                                        <div class="img-sec">
                                                            <img  src="  "class="img-fluid bg-img" alt="">
                                                        </div>                                                     
                                                        <h6>ALL</h6>                                
                                                    </div>                                            
                                            </div>
                                        </a>
                                        </li>

                                        <li class="mega" id="hover-cls">
                                        <a href="<?php echo e(route('allvendors')); ?>">
                                            <div class="">                                            
                                                    <div class="img-category">                                                   
                                                        <div class="img-sec">
                                                            <img  src="  "class="img-fluid bg-img" alt="">
                                                        </div>                                                     
                                                        <h6>VENDORS</h6>                                
                                                    </div>                                            
                                            </div>
                                        </a>
                                        </li>

                                        <li class="mega" id="hover-cls">
                                        <a href="<?php echo e(route('alloffers')); ?>">
                                            <div class="">                                            
                                                    <div class="img-category">                                                   
                                                        <div class="img-sec">
                                                            <img  src="  "class="img-fluid bg-img" alt="">
                                                        </div>                                                     
                                                        <h6>DEALS</h6>                                
                                                    </div>                                            
                                            </div>
                                        </a>
                                        </li>
                                        <?php $__currentLoopData = $categorymain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoriesmain): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <?php if(count($categoriesmain->submenu) > 0): ?>
                                        <li class="mega" id="hover-cls">
                                            <a href="<?php echo e(url( 'MainCatergoryproductshow/'.$categoriesmain->id )); ?>">
                                                 <div class="">           <!--col-xl-1 p-0 col-sm-1 col-3  -->
                                                        <div class="img-category">                                                   
                                                            <div class="img-sec" width="100px" heigth="100px">
                                                                <img  src=" <?php echo e(asset('assets/images/categoryMain') . '/' . $categoriesmain->category_main_image); ?> "class="img-fluid bg-img" alt="">
                                                            </div>                                                     
                                                            <h6><?php echo e($categoriesmain->category_main_name); ?></h6>
                                                        </div>                                            
                                                </div>
                                            </a>
                                            <ul class="mega-menu full-mega-menu">
                                            <?php $__currentLoopData = $categoriesmain->submenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                                
                                               <?php if(count($submenus->childmenu) > 0): ?>
                                                <li>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <!--<h5><?php echo e($submenus->category_name); ?></h5>-->
                                                                              <a style="color: #35bbdb;" href="<?php echo e(url( 'Categoryproductshow/'.$submenus->id )); ?>"><?php echo e($submenus->category_name); ?></a>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                        <?php $__currentLoopData = $submenus->childmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childmenus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <li style="text-indent: 2em;"><a style="color: #21bc8d;" href="<?php echo e(url( 'Subcategoryproductshow/'.$childmenus->id )); ?>"><?php echo e($childmenus->category_sub_name); ?></a>
                                                                            </li>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>                                                            
                                                        </div>                                                        
                                                    </div>
                                                </li>
                                                <?php else: ?>
                                               <li><a style="color: #35bbdb;" href="<?php echo e(url( 'Categoryproductshow/'.$submenus->id )); ?>"><?php echo e($submenus->category_name); ?></a></li>
                                                <?php endif; ?>
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </li>  
                                        <?php else: ?>
                                      <li>
                                      <a href="index.html">
                                                <div class="">                                            
                                                        <div class="img-category">                                                   
                                                            <div class="img-sec">
                                                                <img  src="  "class="img-fluid bg-img" alt="">
                                                            </div>                                                     
                                                            <h6><?php echo e($categoriesmain->category_main_name); ?></h6>
                                                        </div>                                            
                                                </div>
                                            </a>
                                      </li> 
                                        <?php endif; ?>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                      
                                    </ul>
                                </nav>
            </div>
        </div>
    </div>
</section>
</header>


<?php /**PATH E:\oxygen_bcup\oxygen.ktonline.in\resources\views/paritials/website/header.blade.php ENDPATH**/ ?>