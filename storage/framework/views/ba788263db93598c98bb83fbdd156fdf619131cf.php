<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    
    <?php echo $__env->make('paritials.website.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('website.partials.js.frontendjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('website.partials.css.frontendcss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    
   
</head>

<body class="theme-color-29">


    <!-- loader start -->

    <!-- loader end -->


    <!-- header start -->
    
    <!-- header end -->
	
    <div class="title1 section-t-space pt-5">

        <h4 class="title-inner1 text-left"><?php echo e(strtoupper($category->category_sub_name)); ?> PRODUCTS</h4>
    </div>

    <!-- Paragraph end -->


    <!-- Product section -->
    <section class="pt-0 section-b-space ratio_asos">
        <div class="container-fuild">
            <div class="row game-product grid-products px-5">
				<?php if(count($product) > 0): ?>
                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                $productdetails = App\Models\Products\ProductsDetails::where('products_id',$products->product_id)->get();
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
                                            class="img-fluid  lazyload bg-img" alt=""></a>
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
                                <a class="add-button" href="<?php echo e(route('addtocart', $products->id )); ?>">View Product</a>
                            </div>
                            <div class="product-detail">

                                <a href="<?php echo e(route('addtocart', $productdetail->id )); ?>">
                                    <h6><?php echo e($productdetail->selling_price); ?></h6>
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


    
   
</body>

</html><?php /**PATH C:\xampp\htdocs\skap\oxygen-new\resources\views/website/front-end/viewsubcategory_products.blade.php ENDPATH**/ ?>