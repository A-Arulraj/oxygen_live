<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <?php echo $__env->make('website.partials.css.frontendcss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

</head>

<body class="theme-color-29">


    <!-- loader start -->
    
    <!-- loader end -->

<!-- header start -->
    <?php echo $__env->make('paritials.website.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- header end -->
<section class="" style="padding:15px;">
        <div class="container-fuild">
           <div class="col-md-12 m-auto">
            <div class="row margin-default ratio_square">
                <div class="col-xl-1 p-0 col-sm-1 col-3">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img  src="<?php echo e(url('frontend_assets/icons/men.jpg')); ?>"class="img-fluid bg-img" alt="">
                            </div>
                            <h6>Men</h6>
                        </div>
                    </a>
                </div>
                  <div class="col-xl-1 p-0 col-sm-1 col-3">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img src="<?php echo e(url('frontend_assets/icons/women.jpg')); ?>" class="img-fluid bg-img" alt="">
                            </div>
                            <h6>Women</h6>
                        </div>
                    </a>
                </div>
                    
                              <div class="col-xl-1 p-0 col-sm-1 col-3">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img src="<?php echo e(url('frontend_assets/icons/kids.jpg')); ?>" class="img-fluid bg-img" alt="">
                            </div>
                            <h6>Kids</h6>
                        </div>
                    </a>
                </div>
                              <div class="col-xl-1 p-0 col-sm-1 col-3">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img src="<?php echo e(url('frontend_assets/icons/jewellery.jpg')); ?>" class="img-fluid bg-img" alt="">
                            </div>
                            <h6>Jewllery</h6>
                        </div>
                    </a>
                </div>
               
			 <div class="col-xl-1 p-0 col-sm-1 col-3">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img src="<?php echo e(url('frontend_assets/icons/accessories.jpg')); ?>" class="img-fluid bg-img" alt="">
                            </div>
                            <h6>Accessories</h6>
                        </div>
                    </a>
                </div>
				<div class="col-xl-1 p-0 col-sm-1 col-3">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img src="<?php echo e(url('frontend_assets/icons/electronics.jpg')); ?>" class="img-fluid bg-img" alt="">
                            </div>
                            <h6>Electronics</h6>
                        </div>
                    </a>
                </div>
				 <div class="col-xl-1 p-0 col-sm-1 col-3">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img src="<?php echo e(url('frontend_assets/icons/beauty.jpg')); ?>" class="img-fluid bg-img" alt="">
                            </div>
                            <h6>Beauty</h6>
                        </div>
                    </a>
                </div>
				<div class="col-xl-1 p-0 col-sm-1 col-3">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img src="<?php echo e(url('frontend_assets/icons/bags.jpg')); ?>" class="img-fluid bg-img" alt="">
                            </div>
                            <h6>Bag</h6>
                        </div>
                    </a>
                </div>
				<div class="col-xl-1 p-0 col-sm-1 col-3">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img src="<?php echo e(url('frontend_assets/icons/sports.jpg')); ?>" class="img-fluid bg-img" alt="">
                            </div>
                            <h6>Sports</h6>
                        </div>
                    </a>
                </div>
				 <div class="col-xl-1 p-0 col-sm-1 col-3">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img src="<?php echo e(url('frontend_assets/icons/books.jpg')); ?>" class="img-fluid bg-img" alt="">
                            </div>
                            <h6>Books</h6>
                        </div>
                    </a>
                </div>
               
				<div class="col-xl-1 p-0 col-sm-1 col-3">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img src="<?php echo e(url('frontend_assets/icons/footwear.jpg')); ?>" class="img-fluid bg-img" alt="">
                            </div>
                            <h6>Footwear</h6>
                        </div>
                    </a>
                </div>
				<div class="col-xl-1 p-0 col-sm-1 col-3">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img src="<?php echo e(url('frontend_assets/icons/appliances.jpg')); ?>" class="img-fluid bg-img" alt="">
                            </div>
                            <h6>Appliances</h6>
                        </div>
                    </a>
                </div>
               
            </div></div>
        </div>
    </section>

    <!-- Home slider -->
    <section class="p-0">
        <div class="slider-animate home-slider">
		 <?php $__currentLoopData = $mainslider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mslides): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <div class="home height-apply p-bottom">
                    <img src="<?php echo e(asset('assets/images/banners/mainslider') . '/' . $mslides->image); ?>" alt="" class="bg-img  lazyload">
                    <div class="container-lg">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain height-apply">
                                    <div>
                                        <h4><?php echo e($mslides->title); ?></h4>
                                        <h1><?php echo e($mslides->sub_title); ?></h1>
										<a href="<?php echo e($mslides->link); ?>"
                                            class="btn btn-solid btn-gradient animated">shop
                                            now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
    </section>
    <!-- Home slider end -->


    <!-- category section start -->
    
    <!-- category section end -->
<div class="title1 section-t-space pt-5">
        
        <h4 class="title-inner1 text-left">Our Lastest Products</h4>
    </div>
    
    <!-- Paragraph end -->


    <!-- Product section -->
    <section class="pt-0 section-b-space ratio_asos">
        <div class="container-fuild">
            <div class="row game-product grid-products px-5">
              
			<?php if(count($products) > 0): ?>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                $productdetails = App\Models\Products\ProductsDetails::where('products_id',$product->product_id)->get();
                //  print_r($productdetails);
               // print_r($category);
                ?>
                    <?php $__currentLoopData = $productdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productdetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product-box col-xl-2 col-lg-3 col-sm-4 col-6">
                            <div class="img-wrapper">
                                <div class="front">
                                    <?php   
                                        $proimg = @json_decode($productdetail->product_detail_image);
                                    // dd($proimg);
                                    ?>
                                    <?php $__currentLoopData = $proimg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($key == 0): ?>
                                        
                                            <a href="<?php echo e(route('addtocart', $productdetail->id )); ?>"><img
                                            src="<?php echo e(asset('assets/images/products/detail') . '/' . $value); ?>"
                                            class="img-fluid" alt=""></a>
                                            <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <a href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i
                                            class="ti-heart" aria-hidden="true"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"
                                        tabindex="0"><i class="ti-search" aria-hidden="true"></i></a>
                                    <a href="compare.html" title="Compare" tabindex="0"><i class="ti-reload"
                                            aria-hidden="true"></i></a>
                                </div>
                              <a class="add-button" href="<?php echo e(route('addtocart', $productdetail->id )); ?>">View Product</a>
                            </div>
                            <div class="product-detail">

                                <a href="<?php echo e(route('addtocart', $productdetail->id )); ?>">
                                    <h6>Rs.<?php echo e($productdetail->selling_price); ?></h6>
                                </a>

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php else: ?>
				<div class="product-box col-12">
				<center><img   src="<?php echo e(asset('assets/images/products/no-product-found.png')); ?>" class="img-fluid  lazyload bg-img" alt=""></center>
				</div>
				<?php endif; ?>
                
              
            </div>
        </div>
    </section>

    <!-- collection banner -->
    
    <!-- collection banner end -->


    <!-- collection banner start -->
    <section class="banner-furniture ratio2_1  banner-padding">
        <div class="container-fuild">
            <div class="row partition3">
                <div class="col-md-4">
                    <a href="#">
                        <div class="collection-banner p-right text-end">
                            <div class="img-part">
                                <img src="<?php echo e(url('frontend_assets/img/banner/3.jpg')); ?>"
                                    class="img-fluid  lazyload bg-img" alt="">
                            </div>
                            <div class="contain-banner banner-3">
                                <div>
                                    <h4>10% off</h4>
                                    <h2>speaker</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <div class="collection-banner p-right text-end">
                            <div class="img-part">
                                <img src="<?php echo e(url('frontend_assets/img/banner/2.jpg')); ?>"
                                    class="img-fluid  lazyload bg-img" alt="">
                            </div>
                            <div class="contain-banner banner-3">
                                <div>
                                    <h4>10% off</h4>
                                    <h2>earplug</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <div class="collection-banner p-right text-end">
                            <div class="img-part">
                                <img src="<?php echo e(url('frontend_assets/img/banner/4.jpg')); ?>"
                                    class="img-fluid  lazyload bg-img" alt="">
                            </div>
                            <div class="contain-banner banner-3">
                                <div>
                                    <h4>50% off</h4>
                                    <h2>best deal</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- collection banner end -->



 <div class="title1 title-fancy section-t-space">
        <h4>exclusive products</h4>
        <h2 class="title-inner1 title-gradient">Auction products</h2>
    </div>
	
    
    <!-- Paragraph end -->


    <!-- Product section -->
    <section class="pt-0 section-b-space ratio_asos">
        <div class="container-fuild">
            <div class="row game-product grid-products px-5">
			<?php if(count($products) > 0): ?>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                $productdetails = App\Models\Products\ProductsDetails::where('products_id',$product->product_id)->get();
                //  print_r($productdetails);
               // print_r($category);
                ?>
                    <?php $__currentLoopData = $productdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productdetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product-box col-xl-2 col-lg-3 col-sm-4 col-6">
                            <div class="img-wrapper">
                                <div class="front">
                                    <?php   
                                        $proimg = @json_decode($productdetail->product_detail_image);
                                    // dd($proimg);
                                    ?>
                                    <?php $__currentLoopData = $proimg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($key == 0): ?>
                                        
                                            <a href="<?php echo e(route('addtocart', $productdetail->id )); ?>"><img
                                            src="<?php echo e(asset('assets/images/products/detail') . '/' . $value); ?>"
                                            class="img-fluid" alt=""></a>
                                            <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <a href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i
                                            class="ti-heart" aria-hidden="true"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"
                                        tabindex="0"><i class="ti-search" aria-hidden="true"></i></a>
                                    <a href="compare.html" title="Compare" tabindex="0"><i class="ti-reload"
                                            aria-hidden="true"></i></a>
                                </div>
                              <a class="add-button" href="<?php echo e(route('addtocart', $productdetail->id )); ?>">View Product</a>
                            </div>
                            <div class="product-detail">

                                <a href="<?php echo e(route('addtocart', $productdetail->id )); ?>">
								<h6><?php echo e($productdetail->product_name); ?></h6>
                                </a>
								<h5> <span>Rs.<?php echo e($productdetail->selling_price); ?></span></h5>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php else: ?>
				<div class="product-box col-12">
				<center><img   src="<?php echo e(asset('assets/images/products/no-product-found.png')); ?>" class="img-fluid  lazyload bg-img" alt=""></center>
				</div>
				<?php endif; ?>
                
               
              
            </div>
        </div>
    </section>
	
	<!--
	<section class="p-0">
	<div class="container">
        <div class="slider-animate home-slider">
            <div>
                <div class="home height-apply p-bottom">
                    <img src="<?php echo e(url('frontend_assets/img/banner/adv/1.jpg')); ?>" alt="" class="img-fluid ">
                    <div class="container-lg">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain height-apply">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="home height-apply p-bottom">
                    <img src="<?php echo e(url('frontend_assets/img/banner/adv/2.jpg')); ?>" alt="" class="img-fluid ">
                    <div class="container-lg">
                        
					</div>
				</div>
			</div>
			<div>
				<div class="home height-apply p-bottom">
					<img src="<?php echo e(url('frontend_assets/img/banner/adv/3.jpg')); ?>" alt="" class="img-fluid ">
					<div class="container-lg">
							
					</div>
				</div>
			</div>
		</div>
	</section>-->
	 <section class="section-b-space">
        <div class="container-lg container">
            <div class="row margin-default ratio_square ">
                <div class="col-xl-2 col-md-3 col-sm-4 col-4">
                    <a href="#">
                        <div class="deal-category">
                            <img src="<?php echo e(url('frontend_assets/images/gradient/deal-bg/1.jpg')); ?>" class="img-fluid w-100" alt="">
                            <div class="deal-content">
                                <div>
                                    <h2>40%</h2>
                                    <h2>60%</h2>
                                    <h2 class="mb-0">off</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-4">
                    <a href="#">
                        <div class="deal-category">
                            <img src="<?php echo e(url('frontend_assets/images/gradient/deal-bg/2.jpg')); ?>" class="img-fluid w-100" alt="">
                            <div class="deal-content">
                                <div>
                                    <h2>Flat</h2>
                                    <h2>60%</h2>
                                    <h2 class="mb-0">off</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-4">
                    <a href="#">
                        <div class="deal-category">
                            <img src="<?php echo e(url('frontend_assets/images/gradient/deal-bg/6.jpg')); ?>" class="img-fluid w-100" alt="">
                            <div class="deal-content">
                                <div>
                                    <h2>free</h2>
                                    <h2>Ship.</h2>
                                    <h2 class="mb-0">zone</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-4">
                    <a href="#">
                        <div class="deal-category">
                            <img src="<?php echo e(url('frontend_assets/images/gradient/deal-bg/3.jpg')); ?>" class="img-fluid w-100" alt="">
                            <div class="deal-content">
                                <div>
                                    <h2>Buy 1</h2>
                                    <h2>Get 1</h2>
                                    <h2 class="mb-0">Free</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-4">
                    <a href="#">
                        <div class="deal-category">
                            <img src="<?php echo e(url('frontend_assets/images/gradient/deal-bg/4.jpg')); ?>" class="img-fluid w-100" alt="">
                            <div class="deal-content">
                                <div>
                                    <h2>upto</h2>
                                    <h2>40%</h2>
                                    <h2 class="mb-0">off</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-4">
                    <a href="#">
                        <div class="deal-category">
                            <img src="<?php echo e(url('frontend_assets/images/gradient/deal-bg/5.jpg')); ?>" class="img-fluid w-100" alt="">
                            <div class="deal-content">
                                <div>
                                    <h2>Min</h2>
                                    <h2>20%</h2>
                                    <h2 class="mb-0">off</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- category section start -->
    <section class="bg-light section-b-space">
        <div class="container-lg container">
            <div class="row margin-default ratio_square ">
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="#">
                        <div class="img-category">
                            <div class="pattern-bg bg1">
                                <div class="img-sec">
                                    <img src="<?php echo e(url('frontend_assets/images/fashion/category/8.png')); ?>" class="img-fluid bg-img" alt="">
                                </div>
                            </div>
                            <h4>Top wear</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="#">
                        <div class="img-category hover-effect">
                            <div class="pattern-bg bg2">
                                <div class="img-sec">
                                    <img src="<?php echo e(url('frontend_assets/images/fashion/category/9.png')); ?>" class="img-fluid bg-img" alt="">
                                </div>
                            </div>
                            <h4>dresses</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="#">
                        <div class="img-category">
                            <div class="pattern-bg bg3">
                                <div class="img-sec">
                                    <img src="<?php echo e(url('frontend_assets/images/fashion/category/10.png')); ?>" class="img-fluid bg-img" alt="">
                                </div>
                            </div>
                            <h4>bottom</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="#">
                        <div class="img-category">
                            <div class="pattern-bg bg4">
                                <div class="img-sec">
                                    <img src="<?php echo e(url('frontend_assets/images/fashion/category/11.png')); ?>" class="img-fluid bg-img" alt="">
                                </div>
                            </div>
                            <h4>inner/sleep</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="#">
                        <div class="img-category">
                            <div class="pattern-bg bg5">
                                <div class="img-sec">
                                    <img src="<?php echo e(url('frontend_assets/images/fashion/category/12.png')); ?>" class="img-fluid bg-img" alt="">
                                </div>
                            </div>
                            <h4>footwear</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="#">
                        <div class="img-category">
                            <div class="pattern-bg bg6">
                                <div class="img-sec">
                                    <img src="<?php echo e(url('frontend_assets/images/fashion/category/13.png')); ?>" class="img-fluid bg-img" alt="">
                                </div>
                            </div>
                            <h4>sports/active</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- category section end -->
<section class="pb-0  banner-furniture ratio2_1">
        <div class="container-fuild">
            <div class="row partition2">
                <div class="col-md-6">
                    <a href="#">
                        <div class="collection-banner p-right text-center">
                            <div class="img-part">
                                <img src="<?php echo e(url('frontend_assets/img/banner/2.jpg')); ?>"
                                    class="img-fluid  lazyload bg-img" alt="">
                            </div>
                            <div class="contain-banner">
                                <div>
                                    <h4>save 30%</h4>
                                    <h2>men</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#">
                        <div class="collection-banner p-right text-center">
                            <div class="img-part">
                                <img src="<?php echo e(url('frontend_assets/img/banner/1.jpg')); ?>"
                                    class="img-fluid  lazyload bg-img" alt="">
                            </div>
                            <div class="contain-banner">
                                <div>
                                    <h4>save 60%</h4>
                                    <h2>women</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- product slider -->
	
	 <div class="title1 title-fancy section-t-space">
        <h4>exclusive products</h4>
        <h2 class="title-inner1 title-gradient">special products</h2>
    </div>
    <section class="section-b-space pt-0 ratio_asos">
        <div class="container container-lg">
		 <div class="row game-product grid-products px-5">
			<?php if(count($products) > 0): ?>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                $productdetails = App\Models\Products\ProductsDetails::where('products_id',$product->product_id)->get();
                //  print_r($productdetails);
               // print_r($category);
                ?>
                    <?php $__currentLoopData = $productdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productdetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product-box col-xl-2 col-lg-3 col-sm-4 col-6">
                            <div class="img-wrapper">
                                <div class="front">
                                    <?php   
                                        $proimg = @json_decode($productdetail->product_detail_image);
                                    // dd($proimg);
                                    ?>
                                    <?php $__currentLoopData = $proimg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($key == 0): ?>
                                        
                                            <a href="<?php echo e(route('addtocart', $productdetail->id )); ?>"><img
                                            src="<?php echo e(asset('assets/images/products/detail') . '/' . $value); ?>"
                                            class="img-fluid" alt=""></a>
                                            <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <a href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i
                                            class="ti-heart" aria-hidden="true"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"
                                        tabindex="0"><i class="ti-search" aria-hidden="true"></i></a>
                                    <a href="compare.html" title="Compare" tabindex="0"><i class="ti-reload"
                                            aria-hidden="true"></i></a>
                                </div>
                              <a class="add-button" href="<?php echo e(route('addtocart', $productdetail->id )); ?>">View Product</a>
                            </div>
                            <div class="product-detail">

                                <a href="<?php echo e(route('addtocart', $productdetail->id )); ?>">
								<h6><?php echo e($productdetail->product_name); ?></h6>
                                </a>
								<h5> <span>Rs.<?php echo e($productdetail->selling_price); ?></span></h5>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php else: ?>
				<div class="product-box col-12">
				<center><img   src="<?php echo e(asset('assets/images/products/no-product-found.png')); ?>" class="img-fluid  lazyload bg-img" alt=""></center>
				</div>
				<?php endif; ?>
                
               
              
            </div>
		 <!-- <div class="row">
                <div class="col">
                    <div class="theme-tab">
                        <ul class="tabs tab-title">
                            <li class="current"><a href="tab-4">RECENTLY VIEWED</a></li>
                            <li class=""><a href="tab-5">RECOMMENDED ITEMS</a></li>
                            <li class=""><a href="tab-6">POPULAR</a></li>
                        </ul>
                        <div class="tab-content-cls">
                            <div id="tab-4" class="tab-content active default">
                                <div class="no-slider row five-product">
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <a href="#"><img
                                                    src="<?php echo e(url('frontend_assets/img/product/saree/1.jpg')); ?>"
                                                    class="img-fluid  lazyload bg-img" alt=""></a>
                                            <div class="cart-box cart-box-bottom">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="detail-inline">
                                                <a href="#">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>₹500.00</h4>
                                            </div>
                                            <ul class="color-variant pt-0">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable-gradient">new</span> <span
                                                    class="lable4">on sale</span></div>
                                            <a href="#"><img
                                                    src="<?php echo e(url('frontend_assets/img/product/saree/2.jpg')); ?>"
                                                    class="img-fluid  lazyload bg-img" alt=""></a>
                                            <div class="cart-box cart-box-bottom">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="detail-inline">
                                                <a href="#">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>₹500.00</h4>
                                            </div>
                                            <ul class="color-variant pt-0">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <a href="#"><img
                                                    src="<?php echo e(url('frontend_assets/img/product/saree/3.jpg')); ?>"
                                                    class="img-fluid  lazyload bg-img" alt=""></a>
                                            <div class="cart-box cart-box-bottom">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="detail-inline">
                                                <a href="#">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>₹500.00</h4>
                                            </div>
                                            <ul class="color-variant pt-0">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable-gradient">new</span> <span
                                                    class="lable4">on sale</span></div>
                                            <a href="#"><img
                                                    src="<?php echo e(url('frontend_assets/img/product/saree/4.jpg')); ?>"
                                                    class="img-fluid  lazyload bg-img" alt=""></a>
                                            <div class="cart-box cart-box-bottom">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="detail-inline">
                                                <a href="#">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>₹500.00</h4>
                                            </div>
                                            <ul class="color-variant pt-0">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable-gradient">new</span> <span
                                                    class="lable4">on sale</span></div>
                                            <a href="#"><img
                                                    src="<?php echo e(url('frontend_assets/img/product/top/1/1.jpg')); ?>"
                                                    class="img-fluid  lazyload bg-img" alt=""></a>
                                            <div class="cart-box cart-box-bottom">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="detail-inline">
                                                <a href="#">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>₹500.00</h4>
                                            </div>
                                            <ul class="color-variant pt-0">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <a href="#"><img
                                                    src="<?php echo e(url('frontend_assets/img/product/top/2/1.jpg')); ?>"
                                                    class="img-fluid  lazyload bg-img" alt=""></a>
                                            <div class="cart-box cart-box-bottom">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="detail-inline">
                                                <a href="#">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>₹500.00</h4>
                                            </div>
                                            <ul class="color-variant pt-0">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable-gradient">new</span> <span
                                                    class="lable4">on sale</span></div>
                                            <a href="#"><img
                                                    src="<?php echo e(url('frontend_assets/img/product/top/3/1.jpg')); ?>"
                                                    class="img-fluid  lazyload bg-img" alt=""></a>
                                            <div class="cart-box cart-box-bottom">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="detail-inline">
                                                <a href="#">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>₹500.00</h4>
                                            </div>
                                            <ul class="color-variant pt-0">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <a href="#"><img
                                                    src="<?php echo e(url('frontend_assets/img/product/top/4/1.jpg')); ?>"
                                                    class="img-fluid  lazyload bg-img" alt=""></a>
                                            <div class="cart-box cart-box-bottom">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="detail-inline">
                                                <a href="#">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>₹500.00</h4>
                                            </div>
                                            <ul class="color-variant pt-0">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable-gradient">new</span> <span
                                                    class="lable4">on sale</span></div>
                                            <a href="#"><img
                                                    src="<?php echo e(url('frontend_assets/img/product/saree/5.jpg')); ?>"
                                                    class="img-fluid  lazyload bg-img" alt=""></a>
                                            <div class="cart-box cart-box-bottom">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="detail-inline">
                                                <a href="#">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>₹500.00</h4>
                                            </div>
                                            <ul class="color-variant pt-0">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <a href="#"><img
                                                    src="<?php echo e(url('frontend_assets/img/product/saree/6.jpg')); ?>"
                                                    class="img-fluid  lazyload bg-img" alt=""></a>
                                            <div class="cart-box cart-box-bottom">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="detail-inline">
                                                <a href="#">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>₹500.00</h4>
                                            </div>
                                            <ul class="color-variant pt-0">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-5" class="tab-content">
                                <div class="no-slider row">
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable-gradient">new</span> <span
                                                    class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/33.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/34.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-box cart-box-bottom">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>₹500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/35.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/36.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>₹500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable-gradient">new</span> <span
                                                    class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/1.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/2.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>₹500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/27.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/28.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>₹500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/27.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/28.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>₹500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable-gradient">new</span> <span
                                                    class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/1.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/2.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>₹500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/33.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/34.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>₹500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable-gradient">new</span> <span
                                                    class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/35.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/36.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>₹500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-6" class="tab-content">
                                <div class="no-slider row">
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable-gradient">new</span> <span
                                                    class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/33.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/34.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>₹500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/27.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/28.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>₹500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/33.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/34.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>₹500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable-gradient">new</span> <span
                                                    class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/1.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/2.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>₹500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable-gradient">new</span> <span
                                                    class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/35.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/36.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>₹500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/35.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/36.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>₹500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable-gradient">new</span> <span
                                                    class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/1.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/2.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>₹500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/27.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="#"><img
                                                        src="<?php echo e(url('frontend_assets/images/pro3/28.jpg')); ?>"
                                                        class="img-fluid  lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>₹500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        --></div>
    </section>
    
    <!-- product slider -->


    <!-- deal zone section start -->
   
    <!-- deal zone section end -->


   


    <!-- footer -->
  <footer class="footer-light">
       
        <section class="section-b-space light-layout">
            <div class="container container-lg">
                <div class="row footer-theme partition-f">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-title footer-mobile-title">
                            <h4>about</h4>
                        </div>
                        <div class="footer-contant">
                            <div class="footer-logo"><img src="<?php echo e(url('frontend_assets/img/logo/logo.png')); ?>" alt=""></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col offset-xl-1">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>my account</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="#">mens</a></li>
                                    <li><a href="#">womens</a></li>
                                    <li><a href="#">clothing</a></li>
                                    <li><a href="#">accessories</a></li>
                                    <li><a href="#">featured</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>why we choose</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="#">shipping & return</a></li>
                                    <li><a href="#">secure shopping</a></li>
                                    <li><a href="#">gallary</a></li>
                                    <li><a href="#">affiliates</a></li>
                                    <li><a href="#">contacts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>store information</h4>
                            </div>
                            <div class="footer-contant">
                                <ul class="contact-list">
                                    <li><i class="fa fa-map-marker"></i>Oxegen Ecommerce   Chennai,  India
                                    </li>
                                    <li><i class="fa fa-phone"></i>Call Us: 9876543210</li>
                                    <li><i class="fa fa-envelope-o"></i>Email Us: <a href="#">Support@Oxegen.com</a></li>
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="sub-footer">
            <div class="container container-lg">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="footer-end">
                            <p>Copyright <i class="fa fa-copyright" aria-hidden="true"></i>   2022 Oxegen. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="payment-card-bottom">
                            <ul>
                                <li>
                                    <a href="#"><img src="<?php echo e(url('frontend_assets/images/icon/visa.png')); ?>" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php echo e(url('frontend_assets/images/icon/mastercard.png')); ?>" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php echo e(url('frontend_assets/images/icon/paypal.png')); ?>" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php echo e(url('frontend_assets/images/icon/american-express.png')); ?>" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php echo e(url('frontend_assets/images/icon/discover.png')); ?>" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->


    <!-- subscribe start -->
   
    <!-- subscribe end -->


    <!-- Quick-view modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content quick-view-modal">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="row">
                        <div class="col-lg-6 col-xs-12">
                            <div class="quick-view-img"><img src="<?php echo e(url('frontend_assets/images/pro3/1.jpg')); ?>" alt=""
                                    class="img-fluid  lazyload"></div>
                        </div>
                        <div class="col-lg-6 rtl-text">
                            <div class="product-right">
                                <h2>Women Pink Shirt</h2>
                                <h3>₹32.96</h3>
                                <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                                <div class="border-product">
                                    <h6 class="product-title">product details</h6>
                                    <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium</p>
                                </div>
                                <div class="product-description border-product">
                                    <div class="size-box">
                                        <ul>
                                            <li class="active"><a href="javascript:void(0)">s</a></li>
                                            <li><a href="javascript:void(0)">m</a></li>
                                            <li><a href="javascript:void(0)">l</a></li>
                                            <li><a href="javascript:void(0)">xl</a></li>
                                        </ul>
                                    </div>
                                    <h6 class="product-title">quantity</h6>
                                    <div class="qty-box">
                                        <div class="input-group"><span class="input-group-prepend"><button type="button"
                                                    class="btn quantity-left-minus" data-type="minus" data-field=""><i
                                                        class="ti-angle-left"></i></button> </span>
                                            <input type="text" name="quantity" class="form-control input-number"
                                                value="1"> <span class="input-group-prepend"><button type="button"
                                                    class="btn quantity-right-plus" data-type="plus" data-field=""><i
                                                        class="ti-angle-right"></i></button></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-buttons"><a href="#" class="btn btn-solid btn-gradient">add to
                                        cart</a> <a href="#" class="btn btn-solid btn-gradient">view detail</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick-view modal popup end-->


    <!-- theme setting -->
    
    <div class="scroll-setting-box">
        <div id="setting_box" class="setting-box">
            <a href="javascript:void(0)" class="overlay" onclick="closeSetting()"></a>
            <div class="setting_box_body">
                <div onclick="closeSetting()">
                    <div class="sidebar-back text-start"><i class="fa fa-angle-left pe-2" aria-hidden="true"></i> Back
                    </div>
                </div>
                <div class="setting-body">
                    <div class="setting-title">
                        <div>
                            <img src="<?php echo e(url('frontend_assets/images/icon/logo.png')); ?>" class="img-fluid" alt="">
                            <h3>50+ <span>demos</span> <br> suit for any type of online store.</h3>
                        </div>
                    </div>
                    <div class="setting-contant">
                        <div class="row demo-section">
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="gradient.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/gradient.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="gradient.html" class="demo-text">
                                        <h4>gradient<h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="index.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/fashion.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="index.html" class="demo-text">
                                        <h4>fashion</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="fashion-2.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/fashion-2.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="fashion-2.html" class="demo-text">
                                        <h4>fashion 2</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="fashion-3.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/fashion-3.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="fashion-3.html" class="demo-text">
                                        <h4>fashion 3</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="fashion-4.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/fashion-4.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="fashion-4.html" class="demo-text">
                                        <h4>fashion 4</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="fashion-5.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/fashion-5.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="fashion-5.html" class="demo-text">
                                        <h4>fashion 5</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="fashion-6.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/fashion-6.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="fashion-6.html" class="demo-text">
                                        <h4>fashion 6</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="fashion-7.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/fashion-7.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="fashion-7.html" class="demo-text">
                                        <h4>fashion 7</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="furniture.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/furniture.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="furniture.html" class="demo-text">
                                        <h4>furniture</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="furniture-2.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/furniture-2.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="furniture-2.html" class="demo-text">
                                        <h4>furniture 2</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="furniture-3.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/furniture-dark.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="furniture-3.html" class="demo-text">
                                        <h4>furniture dark</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="electronic-1.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/electronics.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="electronic-1.html" class="demo-text">
                                        <h4>electronics</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="electronic-2.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/electronics-2.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="electronic-2.html" class="demo-text">
                                        <h4>electronics 2</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="electronic-3.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/electronics-3.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="electronic-3.html" class="demo-text">
                                        <h4>electronics 3</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="marketplace-demo.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/marketplace.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="marketplace-demo.html" class="demo-text">
                                        <h4>marketplace</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="marketplace-demo-2.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/marketplace-2.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="marketplace-demo-2.html" class="demo-text">
                                        <h4>marketplace 2</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="marketplace-demo-3.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/marketplace-3.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="marketplace-demo-3.html" class="demo-text">
                                        <h4>marketplace 3</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="marketplace-demo-4.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/marketplace-4.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="marketplace-demo-4.html" class="demo-text">
                                        <h4>marketplace 4</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="vegetables.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/vegetables.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="vegetables.html" class="demo-text">
                                        <h4>vegetables</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="vegetables-2.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/vegetables-2.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="vegetables-2.html" class="demo-text">
                                        <h4>vegetables 2</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="vegetables-3.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/vegetables-3.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="vegetables-3.html" class="demo-text">
                                        <h4>vegetables 3</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="jewellery.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/jewellery.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="jewellery.html" class="demo-text">
                                        <h4>jewellery</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="jewellery-2.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/jewellery-2.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="jewellery-2.html" class="demo-text">
                                        <h4>jewellery 2</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="jewellery-3.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/jewellery-3.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="jewellery-3.html" class="demo-text">
                                        <h4>jewellery 3</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="bags.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/bag.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="bags.html" class="demo-text">
                                        <h4>bag</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="watch.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/watch.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="watch.html" class="demo-text">
                                        <h4>watch</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="medical.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/medical.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="medical.html" class="demo-text">
                                        <h4>medical</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="perfume.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/perfume.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="perfume.html" class="demo-text">
                                        <h4>perfume</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="yoga.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/yoga.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="yoga.html" class="demo-text">
                                        <h4>yoga</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="christmas.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/christmas.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="christmas.html" class="demo-text">
                                        <h4>christmas</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="bicycle.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/bicycle.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="bicycle.html" class="demo-text">
                                        <h4>bicycle</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="marijuana.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/marijuana.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="marijuana.html" class="demo-text">
                                        <h4>marijuana</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="gym-product.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/gym.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="gym-product.html" class="demo-text">
                                        <h4>gym</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="tools.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/tools.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="tools.html" class="demo-text">
                                        <h4>tools</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="shoes.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/shoes.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="shoes.html" class="demo-text">
                                        <h4>shoes</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="books.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/books.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="books.html" class="demo-text">
                                        <h4>books</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="kids.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/kids.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="kids.html" class="demo-text">
                                        <h4>kids</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="game.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/game.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="game.html" class="demo-text">
                                        <h4>game</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="beauty.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/beauty.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="beauty.html" class="demo-text">
                                        <h4>beauty</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="left_sidebar-demo.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/left-sidebar.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="left_sidebar-demo.html" class="demo-text">
                                        <h4>left sidebar</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="video-slider.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/video-slider.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="video-slider.html" class="demo-text">
                                        <h4>video slider</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="metro.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/metro.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="metro.html" class="demo-text">
                                        <h4>metro</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="goggles.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/goggles.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="goggles.html" class="demo-text">
                                        <h4>goggles</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="flower.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/flower.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="flower.html" class="demo-text">
                                        <h4>flower</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="light.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/light.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="light.html" class="demo-text">
                                        <h4>light</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="nursery.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/nursery.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="nursery.html" class="demo-text">
                                        <h4>nursery</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="pets.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/pets.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="pets.html" class="demo-text">
                                        <h4>pets</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="video.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/video.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="video.html" class="demo-text">
                                        <h4>video</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="lookbook-demo.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/lookbook.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="lookbook-demo.html" class="demo-text">
                                        <h4>lookbook</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="full-page.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/full-page.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="full-page.html" class="demo-text">
                                        <h4>full page</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="instagram-shop.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/instagram.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="instagram-shop.html" class="demo-text">
                                        <h4>instagram</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="parallax.html" class="layout-container">
                                        <img src="<?php echo e(url('frontend_assets/images/landing-page/demo/parallax.jpg')); ?>"
                                            class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="parallax.html" class="demo-text">
                                        <h4>parallax</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- theme setting -->


    <!-- tap to top start -->
    <div class="tap-top gradient-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- tap to top end -->


    <!-- latest jquery-->
    <script src="<?php echo e(url('frontend_assets/js/jquery-3.3.1.min.js')); ?>"></script>

    <!-- slick js-->
    <script src="<?php echo e(url('frontend_assets/js/slick.js')); ?>"></script>
    <script src="<?php echo e(url('frontend_assets/js/slick-animation.min.js')); ?>"></script>

    <!-- wow js-->
    <script src="<?php echo e(url('frontend_assets/js/wow.min.js')); ?>"></script>

    <!-- menu js-->
    <script src="<?php echo e(url('frontend_assets/js/menu.js')); ?>"></script>

    <!-- lazyload js-->
    <script src="<?php echo e(url('frontend_assets/js/lazysizes.min.js')); ?>"></script>

    <!-- Bootstrap js-->
    <script src="<?php echo e(url('frontend_assets/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Bootstrap Notification js-->
    <script src="<?php echo e(url('frontend_assets/js/bootstrap-notify.min.js')); ?>"></script>

    <!-- Theme js-->
    <script src="<?php echo e(url('frontend_assets/js/theme-setting.js')); ?>"></script>
    <script src="<?php echo e(url('frontend_assets/js/color-setting.js')); ?>"></script>
    <script src="<?php echo e(url('frontend_assets/js/script.js')); ?>"></script>
    <script src="<?php echo e(url('frontend_assets/js/custom-slick-animated.js')); ?>"></script>

    <script>
        new WOW().init();

        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>
	<script>
// Set the date we're counting down to
var countDownDate = new Date("july 5, 2022 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = "&nbsp&nbsp"+days + "&nbsp&nbsp &nbsp  " + hours + "&nbsp &nbsp&nbsp  "
  + minutes + "  &nbsp&nbsp&nbsp " + seconds + " &nbsp&nbsp&nbsp ";
  document.getElementById("demo1").innerHTML = "&nbsp"+days + "&nbsp&nbsp &nbsp  " + hours + "&nbsp &nbsp&nbsp  "
  + minutes + "  &nbsp&nbsp&nbsp " + seconds + " &nbsp&nbsp&nbsp ";
  document.getElementById("demo2").innerHTML = "&nbsp"+days + "&nbsp&nbsp &nbsp  " + hours + "&nbsp &nbsp&nbsp  "
  + minutes + "  &nbsp&nbsp&nbsp " + seconds + " &nbsp&nbsp&nbsp ";
  document.getElementById("demo3").innerHTML = "&nbsp"+days + "&nbsp&nbsp &nbsp  " + hours + "&nbsp &nbsp&nbsp  "
  + minutes + "  &nbsp&nbsp&nbsp " + seconds + " &nbsp&nbsp&nbsp ";
    document.getElementById("demo4").innerHTML ="&nbsp"+days + "&nbsp&nbsp &nbsp  " + hours + "&nbsp &nbsp&nbsp  "
  + minutes + "  &nbsp&nbsp&nbsp " + seconds + " &nbsp&nbsp&nbsp ";
  document.getElementById("demo5").innerHTML = "&nbsp"+days + "&nbsp&nbsp &nbsp  " + hours + "&nbsp &nbsp&nbsp  "
  + minutes + "  &nbsp&nbsp&nbsp " + seconds + " &nbsp&nbsp&nbsp ";
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
	 document.getElementById("demo1").innerHTML = "EXPIRED";
	  document.getElementById("demo2").innerHTML = "EXPIRED";
	   document.getElementById("demo3").innerHTML = "EXPIRED";
	    document.getElementById("demo4").innerHTML = "EXPIRED";
		 document.getElementById("demo5").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

</body>

</html><?php /**PATH C:\xampp\htdocs\skap\oxygen-new\resources\views/website/front-end/index.blade.php ENDPATH**/ ?>