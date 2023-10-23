<!-- header start -->
<header class="header-tools zindex-up header-style top-relative">
    <div class="mobile-fix-option"></div>
    <div class="logo-menu-part">
        <div class="container-fuild  px-3  border-bottom-0 rounded-5">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu">
                    <div class="col-md-3">
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
                                           <a href="<?php echo e(url( 'productshow/'.$categoriesmain->id )); ?>"><?php echo e($categoriesmain->category_main_name); ?></a>
                                           <ul>                                            
                                               <?php $__currentLoopData = $categoriesmain->submenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                                
                                               <?php if(count($submenus->childmenu) > 0): ?>
                                               <li>
                                                   <a href="<?php echo e(url( 'productshow/'.$submenus->id )); ?>"><?php echo e($submenus->category_name); ?></a>
                                                   <ul>
                                                       <?php $__currentLoopData = $submenus->childmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childmenus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                                        
                                                           <li><a href="<?php echo e(url( 'productshow/'.$submenus->id )); ?>"><?php echo e($childmenus->category_sub_name); ?></a></li>                                                
                                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                    
                                                   </ul>
                                               </li>
                                               <?php else: ?>
                                               <li><a href="<?php echo e(url( 'productshow/'.$submenus->id )); ?>"><?php echo e($submenus->category_name); ?></a></li> 
                                               <?php endif; ?>
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                           </ul>
                                       </li>
                                       <?php else: ?>
                                      <li><a href="<?php echo e(url( 'productshow/'.$categoriesmain->id )); ?>"><?php echo e($categoriesmain->category_main_name); ?></a></li> 
                                       <?php endif; ?>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        <?php
                                        $uname = session('username');
                                        $sts = session('status');
                                            //  dd($uname);
                                        if(!empty($uname) &&  !empty($sts))
                                        {
                                        ?>
                                            <li><a href="">user profile</a></li> 
                                            <li><a href="">user setting</a></li> 
                                            <li><a href="">Wallet</a></li> 
                                    <?php
                                        }
                                        ?>
                                            <li><a href="<?php echo e(route('auction')); ?>">Auction</a></li> 
                                    </ul>
                                </nav>
                            </div> </div>
                            <div class="brand-logo">
                                <a href="index.php"> <img src="../frontend_assets/img/logo/logo.png"
                                        class="img-fluid lazyload" alt="" ></a>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                         <div class="pt-1">
                            <form class="form_search m-auto" role="form">
                            <input id="query search-autocomplete" type="search" placeholder="Search anything here..." class="nav-search nav-search-field" aria-expanded="true">
                            <button type="submit" name="nav-submit-button" class="btn-search">
                                <i class="ti-search"></i>
                            </button>
                        </form>
                            </div></div>
                            <div class="col-md-3">
                        <div class="menu-right">
                           
                            <div class="top-header">
                                <ul class="header-dropdown">
                                    <li class="mobile-wishlist"><a href="#"><img
                                                src="../frontend_assets/images/icon/heart-1.png" alt=""> </a></li>
                                    <li class="onhover-dropdown mobile-account">
                                        <img src="../frontend_assets/images/icon/user-1.png" alt="">
                                        <ul class="onhover-show-div">
                                            <li>
                                                
                                            </li>
                                            <li>
                                                <a href="<?php echo e(route('usersignin.index')); ?>" data-lng="en">
                                                    Sign in
                                                    
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-lng="es">
                                                    Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <div class="icon-nav">
                                    <ul>
                                        <li class="onhover-div  d-md-none d-sm-block mobile-search">
                                            <div class=""><img src="../frontend_assets/images/icon/search.png" onclick="openSearch()"
                                                    class="img-fluid  lazyload" alt="">
                                                <i class="ti-search" onclick="openSearch()"></i>
                                            </div>
                                            <div id="search-overlay" class="search-overlay">
                                                <div>
                                                    <span class="closebtn" onclick="closeSearch()"
                                                        title="Close Overlay">×</span>
                                                    <div class="overlay-content">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <form>
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                id="exampleInputPassword1"
                                                                                placeholder="Search a Product">
                                                                        </div>
                                                                        <button type="submit"
                                                                            class="btn btn-primary"><i
                                                                                class="fa fa-search"></i></button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                       
                                        <li class="onhover-div mobile-cart">
                                            <div><img src="../frontend_assets/images/icon/cart-1.png"
                                                    class="img-fluid lazyload" alt="">
                                                <i class="ti-shopping-cart"></i>
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
</header>
<!-- header end -->
<?php echo $__env->make('website.partials.js.frontendjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<?php /**PATH F:\mano\oxygen-new\resources\views/website/partials/header.blade.php ENDPATH**/ ?>