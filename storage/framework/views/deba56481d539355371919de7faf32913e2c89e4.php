 
 <?php echo $__env->make('website.front-end.newhead', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
 
    <!-- header end -->


    <?php echo $__env->make('website.partials.js.frontendjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('paritials.js.userwebsite.cart_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('website.partials.css.frontendcss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    <?php echo $__env->make('paritials.website.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .rate {
            float: left;
            height: 46px;
            padding: 0 10px;
            }
            .rate:not(:checked) > input {
            position:absolute;
            display: none;
            }
            .rate:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
            }
            .rated:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
            }
            .rate:not(:checked) > label:before {
            content: '★ ';
            }
            .rate > input:checked ~ label {
            color: #ffc700;
            }
            .rate:not(:checked) > label:hover,
            .rate:not(:checked) > label:hover ~ label {
            color: #deb217;
            }
            .rate > input:checked + label:hover,
            .rate > input:checked + label:hover ~ label,
            .rate > input:checked ~ label:hover,
            .rate > input:checked ~ label:hover ~ label,
            .rate > label:hover ~ input:checked ~ label {
            color: #c59b08;
            }
            .star-rating-complete{
               color: #c59b08;
            }
            .rating-container .form-control:hover, .rating-container .form-control:focus{
            background: #fff;
            border: 1px solid #ced4da;
            }
            .rating-container textarea:focus, .rating-container input:focus {
            color: #000;
            }
            .rated {
            float: left;
            height: 46px;
            padding: 0 10px;
            }
            .rated:not(:checked) > input {
            position:absolute;
            display: none;
            }
            .rated:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ffc700;
            }
            .rated:not(:checked) > label:before {
            content: '★ ';
            }
            .rated > input:checked ~ label {
            color: #ffc700;
            }
            .rated:not(:checked) > label:hover,
            .rated:not(:checked) > label:hover ~ label {
            color: #deb217;
            }
            .rated > input:checked + label:hover,
            .rated > input:checked + label:hover ~ label,
            .rated > input:checked ~ label:hover,
            .rated > input:checked ~ label:hover ~ label,
            .rated > label:hover ~ input:checked ~ label {
            color: #c59b08;
            }

            /* .product-slick:hover {

            transform: scale(1.5); 

            } */
            figure.zoom {
            background-position: 50% 50%;
            position: relative;
            width: 500px;
            overflow: hidden;
            cursor: zoom-in;
            }
            figure.zoom img:hover {
            opacity: 0;
            }
            figure.zoom img {
            transition: opacity 0.5s;
            display: block;
            width: 100%;
            }
            .img {
            float: left;
            width:  100px;
            height: 100px;
            background-size: cover;
           }
             .bg-light0 {
            padding: 10px;
            margin: 5px;
            background-color:lightgreen;
            border-radius: 5px;
            cursor: pointer;
            transition: filter 0.5s;
            }

            .bg-light0.active {
            /*filter: blur(0);*/
            border: 2px solid #007bff;
            }

            .bg-light0.inactive {
            /*filter: blur(1px);*/
            border= '';
            }
            .bg-light0:not(.active) {
            /*filter: blur(1px);*/
            /*border= none;*/
            }  
            .bg-light0.selected {
            border: 2px solid #007bff;
            }
            /*.active {*/
            /*border: 2px solid #007bff;*/
            /*}*/
            /*.inactive {*/
            /* border: '';*/
            /*}*/
            
                    #loading-container {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.8);
        z-index: 9999;
    }
    
    .loader {
        border: 8px solid #f3f3f3;
        border-top: 8px solid #3498db;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 2s linear infinite;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }



   </style>  
    <!-- section start -->
    
    <?php
    
//  dd($product_det);
    // exit();
    ?>
    
    <section>
        <div id="loading-container">
        <div class="loader"></div>
        </div>
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 collection-filter">
                     <div class="collection-filter-block">
                            <div class="collection-mobile-back">
                                <span class="filter-back">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    back
                                </span>
                            </div>
                            <div class="collection-collapse-block border-0 open">
                                <h3 class="collapse-block-title">brand</h3>
                                <div class="collection-collapse-block-content">
                                    <div class="collection-brand-filter">
                                        <ul class="category-list">
                                             <?php $__currentLoopData = $categorymain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorymain1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                
                                                <li><a href="<?php echo e(url( 'MainCatergoryproductshow/'.$categorymain1->id )); ?>"><?php echo e($categorymain1->category_main_name); ?></a></li>
                                                
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collection-filter-block">
                            <div class="product-service">
                                <div class="media">
                                    <!--<svg>-->
                                    <!--    <use xlink:href="../assets/svg/icons.svg#returnable"></use>-->
                                    <!--</svg>-->
                                    <!--<div class="media-body">-->
                                    <!--    <h4>10 days returnable</h4>-->
                                    <!--    <p>easy returnable policies</p>-->
                                    <!--</div>-->
                                </div>
                                <div class="media">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 480 480"
                                        style="enable-background:new 0 0 480 480;" xml:space="preserve" width="512px"
                                        height="512px">
                                        <g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M472,432h-24V280c-0.003-4.418-3.588-7.997-8.006-7.994c-2.607,0.002-5.05,1.274-6.546,3.41l-112,160     c-2.532,3.621-1.649,8.609,1.972,11.14c1.343,0.939,2.941,1.443,4.58,1.444h104v24c0,4.418,3.582,8,8,8s8-3.582,8-8v-24h24     c4.418,0,8-3.582,8-8S476.418,432,472,432z M432,432h-88.64L432,305.376V432z"
                                                        fill="#ff4c3b" />
                                                    <path
                                                        d="M328,464h-94.712l88.056-103.688c0.2-0.238,0.387-0.486,0.56-0.744c16.566-24.518,11.048-57.713-12.56-75.552     c-28.705-20.625-68.695-14.074-89.319,14.631C212.204,309.532,207.998,322.597,208,336c0,4.418,3.582,8,8,8s8-3.582,8-8     c-0.003-26.51,21.486-48.002,47.995-48.005c10.048-0.001,19.843,3.151,28.005,9.013c16.537,12.671,20.388,36.007,8.8,53.32     l-98.896,116.496c-2.859,3.369-2.445,8.417,0.924,11.276c1.445,1.226,3.277,1.899,5.172,1.9h112c4.418,0,8-3.582,8-8     S332.418,464,328,464z"
                                                        fill="#ff4c3b" />
                                                    <path
                                                        d="M216.176,424.152c0.167-4.415-3.278-8.129-7.693-8.296c-0.001,0-0.002,0-0.003,0     C104.11,411.982,20.341,328.363,16.28,224H48c4.418,0,8-3.582,8-8s-3.582-8-8-8H16.28C20.283,103.821,103.82,20.287,208,16.288     V40c0,4.418,3.582,8,8,8s8-3.582,8-8V16.288c102.754,3.974,185.686,85.34,191.616,188l-31.2-31.2     c-3.178-3.07-8.242-2.982-11.312,0.196c-2.994,3.1-2.994,8.015,0,11.116l44.656,44.656c0.841,1.018,1.925,1.807,3.152,2.296     c0.313,0.094,0.631,0.172,0.952,0.232c0.549,0.198,1.117,0.335,1.696,0.408c0.08,0,0.152,0,0.232,0c0.08,0,0.152,0,0.224,0     c0.609-0.046,1.211-0.164,1.792-0.352c0.329-0.04,0.655-0.101,0.976-0.184c1.083-0.385,2.069-1.002,2.888-1.808l45.264-45.248     c3.069-3.178,2.982-8.242-0.196-11.312c-3.1-2.994-8.015-2.994-11.116,0l-31.976,31.952     C425.933,90.37,331.38,0.281,216.568,0.112C216.368,0.104,216.2,0,216,0s-0.368,0.104-0.568,0.112     C96.582,0.275,0.275,96.582,0.112,215.432C0.112,215.632,0,215.8,0,216s0.104,0.368,0.112,0.568     c0.199,115.917,91.939,210.97,207.776,215.28h0.296C212.483,431.847,216.013,428.448,216.176,424.152z"
                                                        fill="#ff4c3b" />
                                                    <path
                                                        d="M323.48,108.52c-3.124-3.123-8.188-3.123-11.312,0L226.2,194.48c-6.495-2.896-13.914-2.896-20.408,0l-40.704-40.704     c-3.178-3.069-8.243-2.981-11.312,0.197c-2.994,3.1-2.994,8.015,0,11.115l40.624,40.624c-5.704,11.94-0.648,26.244,11.293,31.947     c9.165,4.378,20.095,2.501,27.275-4.683c7.219-7.158,9.078-18.118,4.624-27.256l85.888-85.888     C326.603,116.708,326.603,111.644,323.48,108.52z M221.658,221.654c-0.001,0.001-0.001,0.001-0.002,0.002     c-3.164,3.025-8.148,3.025-11.312,0c-3.125-3.124-3.125-8.189-0.002-11.314c3.124-3.125,8.189-3.125,11.314-0.002     C224.781,213.464,224.781,218.53,221.658,221.654z"
                                                        fill="#ff4c3b" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="media-body">
                                        <h4>24 X 7 service</h4>
                                        <p>easy and fast services</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <!--<svg>-->
                                    <!--    <use xlink:href="../assets/svg/icons.svg#warranty"></use>-->
                                    <!--</svg>-->
                                    <!--<div class="media-body">-->
                                    <!--    <h4>1 Year Warranty</h4>-->
                                    <!--    <p>from the date of purchase</p>-->
                                    <!--</div>-->
                                </div>
                                <div class="media border-0 m-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512"
                                        style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px"
                                        height="512px">
                                        <g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M498.409,175.706L336.283,13.582c-8.752-8.751-20.423-13.571-32.865-13.571c-12.441,0-24.113,4.818-32.865,13.569     L13.571,270.563C4.82,279.315,0,290.985,0,303.427c0,12.442,4.82,24.114,13.571,32.864l19.992,19.992     c0.002,0.001,0.003,0.003,0.005,0.005c0.002,0.002,0.004,0.004,0.006,0.006l134.36,134.36H149.33     c-5.89,0-10.666,4.775-10.666,10.666c0,5.89,4.776,10.666,10.666,10.666h59.189c0.014,0,0.027,0.001,0.041,0.001     s0.027-0.001,0.041-0.001l154.053,0.002c5.89,0,10.666-4.776,10.666-10.666c0-5.891-4.776-10.666-10.666-10.666l-113.464-0.002     L498.41,241.434C516.53,223.312,516.53,193.826,498.409,175.706z M483.325,226.35L226.341,483.334     c-4.713,4.712-11.013,7.31-17.742,7.32h-0.081c-6.727-0.011-13.025-2.608-17.736-7.32L56.195,348.746L302.99,101.949     c4.165-4.165,4.165-10.919,0-15.084c-4.166-4.165-10.918-4.165-15.085,0.001L41.11,333.663l-12.456-12.456     c-4.721-4.721-7.321-11.035-7.321-17.779c0-6.744,2.6-13.059,7.322-17.781L285.637,28.665c4.722-4.721,11.037-7.321,17.781-7.321     c6.744,0,13.059,2.6,17.781,7.322l57.703,57.702l-246.798,246.8c-4.165,4.164-4.165,10.918,0,15.085     c2.083,2.082,4.813,3.123,7.542,3.123c2.729,0,5.459-1.042,7.542-3.124l246.798-246.799l89.339,89.336     C493.128,200.593,493.127,216.546,483.325,226.35z"
                                                        fill="#ff4c3b" />
                                                    <path
                                                        d="M262.801,308.064c-4.165-4.165-10.917-4.164-15.085,0l-83.934,83.933c-4.165,4.165-4.165,10.918,0,15.085     c2.083,2.083,4.813,3.124,7.542,3.124c2.729,0,5.459-1.042,7.542-3.124l83.934-83.933     C266.966,318.982,266.966,312.229,262.801,308.064z"
                                                        fill="#ff4c3b" />
                                                    <path
                                                        d="M228.375,387.741l-34.425,34.425c-4.165,4.165-4.165,10.919,0,15.085c2.083,2.082,4.813,3.124,7.542,3.124     c2.731,0,5.459-1.042,7.542-3.124l34.425-34.425c4.165-4.165,4.165-10.919,0-15.085     C239.294,383.575,232.543,383.575,228.375,387.741z"
                                                        fill="#ff4c3b" />
                                                    <path
                                                        d="M260.054,356.065l-4.525,4.524c-4.166,4.165-4.166,10.918-0.001,15.085c2.082,2.083,4.813,3.125,7.542,3.125     c2.729,0,5.459-1.042,7.541-3.125l4.525-4.524c4.166-4.165,4.166-10.918,0.001-15.084     C270.974,351.901,264.219,351.9,260.054,356.065z"
                                                        fill="#ff4c3b" />
                                                    <path
                                                        d="M407.073,163.793c-2-2-4.713-3.124-7.542-3.124c-2.829,0-5.541,1.124-7.542,3.124l-45.255,45.254     c-2,2.001-3.124,4.713-3.124,7.542s1.124,5.542,3.124,7.542l30.17,30.167c2.083,2.083,4.813,3.124,7.542,3.124     c2.731,0,5.459-1.042,7.542-3.124l45.253-45.252c4.165-4.165,4.165-10.919,0-15.084L407.073,163.793z M384.445,231.673     l-15.085-15.084l30.17-30.169l15.084,15.085L384.445,231.673z"
                                                        fill="#ff4c3b" />
                                                    <path
                                                        d="M320.339,80.186c2.731,0,5.461-1.042,7.543-3.126l4.525-4.527c4.164-4.166,4.163-10.92-0.003-15.084     c-4.165-4.164-10.92-4.163-15.084,0.003l-4.525,4.527c-4.164,4.166-4.163,10.92,0.003,15.084     C314.881,79.146,317.609,80.186,320.339,80.186z"
                                                        fill="#ff4c3b" />
                                                    <path
                                                        d="M107.215,358.057l-4.525,4.525c-4.165,4.164-4.165,10.918,0,15.085c2.083,2.082,4.813,3.123,7.542,3.123     s5.459-1.041,7.542-3.123l4.525-4.525c4.165-4.166,4.165-10.92,0-15.085C118.133,353.891,111.381,353.891,107.215,358.057z"
                                                        fill="#ff4c3b" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="media-body">
                                        <h4>online payment</h4>
                                        <p>Contrary to popular belief.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                <div class="col-lg-9 col-sm-12">

                     <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="filter-main-btn mb-2"><span class="filter-btn"><i class="fa fa-filter"
                                            aria-hidden="true"></i> Sidebar</span></div>
                            </div>
                        </div>
                      <div class="row">
                            <div class="col-lg-6">
                                <div class="product-slick">
                                    <?php 
                                    
                                    $product_detailsimage = json_decode($product_det[0]->product_detail_image);
                                    // 
                                    foreach ($product_detailsimage as $key => $value) {
                                        
                                        if(!empty($value))
                                        {
                                ?>
                                    <div id="slide1">
                                        <figure class="zoom" onmousemove="zoom(event)" style="background-image: url('<?php echo e(asset('assets/images/products/detail') . '/' . $value); ?>')">
                                        <img src="<?php echo e(asset('assets/images/products/detail') . '/' . $value); ?>" alt=""
                                            class="img-fluid blur-up lazyload image_zoom_cls-0" style="width:500px;height:600px;">
                                        </figure>
                                        </div>
                                    
                                    <?php
                                        
                                    }
                                }
                                        
                                    ?>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0">
                                        <div class="slider-nav">
                                            <?php 
                                    $product_detailsimage1 = json_decode($product_det[0]->product_detail_image);
                                    
                                    foreach ($product_detailsimage1 as $key1 => $value1) {
                                        if(!empty($value1))
                                        {
                                    ?>
                                            <div class ="img" id="slide">
                                            
                                                <img src="<?php echo e(asset('assets/images/products/detail') . '/' . $value1); ?>" alt=""
                                                    class="img-fluid blur-up lazyload">
                                            
                                                </div>
                                        
                                            <?php
                                                }
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 rtl-text">
                                <div class="product-right">
                                    <form action="<?php echo e(route('buynow')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                    
                                    <h2><?php echo e($product_det[0]->product_name); ?></h2>
                                    <div class="rating-section">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        </div>
                                        <h6>120 ratings</h6>
                                    </div>
                                
                                    <div class="label-section">
                                        <span class="badge badge-grey-color">#1 Best seller</span>
                                        
                                    <?php
                                        if(!empty($vendorname)){
                                        ?>
                                        <a href="<?php echo e(route('vendorallproduct', $productdetailid )); ?>"><?php echo e($vendorname); ?></a>
                                    <?php
                                    }
                                    ?>
                                    </div>
                                    <?php
                                        $disc = $product_det[0]->retail_price -$product_det[0]->selling_price;
                                        $offerperc = $disc/$product_det[0]->retail_price *100;
                                    ?>
                                <div id="price">
                                
                                    <h3 class="price-detail">Rs <?php echo e($product_det[0]->selling_price); ?> <del>Rs <?php echo e($product_det[0]->retail_price); ?></del><span style="color:red;">(<?php echo e(round($offerperc)); ?>%Off)</span></h3>
                                    <input type="hidden"  id="product_price" name="product_price" class="form-control input-number" value="<?php echo e($product_det[0]->selling_price); ?>">
                                </div>
                                
                                        <ul class="color-variant">
                                            <?php
                                    
                                            use App\Models\Products\ProductsDetails;
                                            use App\Models\Products\Products;
                                        
                                            $colorsize_id = $product_det[0]->products_id;
                                            // dd($colorsize_id);

                                            $productcolorsize = ProductsDetails::where('products_id',$colorsize_id)->get();
                                            //   print_r($productcolorsize);


                                            //   exit;
                                            //   $i = 0;
                                            $clr =array('');
                                            ?>
                                            
                                            <div class="form-control" id="div2">
                                            <?php $__currentLoopData = $productcolorsize; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                


                                            <?php
                                            $color1=$item->color;
                                            
                                            if(!in_array($color1,$clr))
                                            {
                                                
                                                ?>
                                            
                                    
                                            <li  style="color:<?php echo e($item->color); ?>; background-color:<?php echo e($item->color); ?>;" id ="bg-light0<?php echo e($item->id); ?>" class="licolor bg-light0" value="<?php echo e($item->id); ?>">
                                                
                                        <!--<?php echo e($item->color); ?>-->
                                        
                                            
                                            </li>
                                            <input type="hidden" name="product_color<?php echo e($item->id); ?>" id="product_color<?php echo e($item->id); ?>" value="<?php echo e($item->color); ?>" />
                                            
                                            <?php array_push($clr,$color1); 
                                            } ?>
                                            
                                            
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        
                                        </ul>
                                    <div id="selectSize" class="addeffect-section product-description border-product">
                                        <h6 class="product-title size-text">select size <span><a href="" data-bs-toggle="modal"
                                                    data-bs-target="#sizemodal">size
                                                    chart</a></span></h6>
                                        <div class="modal fade" id="sizemodal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Sheer
                                                            Straight Kurta</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body"><img src="../assets/images/size-chart.jpg" alt=""
                                                            class="img-fluid blur-up lazyload"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="error-message">please select size</h6>
                                        <span id ="spn1"></span>
                                        <div class="size-box">
                                        
                                        
                                            <ul id="clsize">
                                            <?php
                                    
                                                
                                                $colorsize_id = $product_det[0]->products_id;
                                                //   dd($colorsize_id);
            
                                                $productcolorsize1 = ProductsDetails::where('products_id',$colorsize_id)->get();
                                            
                                                $siz =array('');
                                                ?>
                                                
                                                <?php $__currentLoopData = $productcolorsize1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                
                                                <?php
                                                $size1 = $item->size;
                                                
                                                if(!in_array($size1,$siz))
                                                {
                                                    
                                                ?>
                                        
                                            <li id = "size<?php echo e($item->id); ?>" class ="size" value="<?php echo e($item->id); ?>">
                                            <a href="javascript:void(0)"><?php echo e($item->size); ?></a></li>
                                            <input type="hidden" id="sizee<?php echo e($item->id); ?>" name="sizee<?php echo e($item->id); ?>" value="<?php echo e($item->size); ?>">
            
                                                </li>
                                                <?php array_push($siz,$size1); 
                                                } ?>
                                                
                                                
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                        
                                        <h6 class="product-title">quantity</h6>
                                        
                                        <div class="qty-box">
                                            <div class="input-group"><span class="input-group-prepend"><button type="button"
                                                        class="btn quantity-left-minus" data-type="minus" data-field=""><i
                                                            class="ti-angle-left"></i></button> </span>
                                                <input type="text"  id="quantity" name="quantity" class="form-control input-number" value="1">
                                                <span class="input-group-prepend"><button type="button"
                                                        class="btn quantity-right-plus" data-type="plus" data-field=""><i
                                                            class="ti-angle-right"></i></button></span>
                                            </div>
                                        </div>
                                        <?php
                                    if($productdetailid !=null)

                                        {
                                            
                                            $product = App\Models\Products\Products::where('id',$productdetailid)->get();
                                            $offers = App\Models\Offer\Offer::where('id',$product[0]->offers)->get();
                                            
                                            $selprice = $product_det[0]->selling_price;
                                            if( $offers->isEmpty())
                                            {
                                                
                                                $offertitle = " ";
                                            }
                                            else{
                                                $offertitle = $offers[0]->title;
                                            }
                                        }
                                        else{
                                            
                                            $offertitle = " ";
                                        }
                                        
                                        if( $offers->isEmpty())
                                            {
                                                $amt = $selprice;
                                                ?>


                                                <h6 class="product-title">Total Price</h6>
                                                    <h3 id="h3"> Rs <?php echo e($amt); ?>

                                                        <input type="hidden"  id="product_price1" name="product_price1" class="form-control input-number" value="<?php echo e($amt); ?>">
                                                        
                                                    </h3>
                                                    <div class="product-form-group"><br>
                                                        <div class="row" style="display:none;" id="addcart2_<?php echo e($product_det[0]->id); ?>">
                                                            <div class="col-md-4">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn">
                                                                        <button type="button" class="btn btn-danger btn-number" data-type="minus" data-field="quant[2]" onclick="addqnty('<?php echo e($product_det[0]->id); ?>','Minus')">
                                                                            <span class="fa fa-minus"></span>
                                                                        </button>
                                                                    </span>
                                                                    <input type="text" name="quant[2]" id="quantity<?php echo e($product_det[0]->id); ?>" value="0" class="form-control input-number" min="1" max="100" readonly>
                                                                    <span class="input-group-btn">
                                                                        <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]" onclick="addqnty('<?php echo e($product_det[0]->id); ?>','Add')">
                                                                            <span class="fa fa-plus"></span>
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ">
                                                                <a href="<?php echo e(url('/Shopping-cart')); ?>" class="buttons"><button type="button" class="btn add-to-cart-btn">&nbsp; <i class="biolife-icon icon-cart"></i> &nbsp; BUY NOW</button></a>
                    
                                                            </div>
                                                        </div>
                                                        <?php if($product_det[0]->quantity>0): ?>
                                                        <?php else: ?>
                                                        <?php endif; ?>
                                                    </div>
                                                <div class="product-buttons">
                                                    <a href="" id="cartbook" 
                                                    class="btn btn-solid hover-solid btn-animation"><i class=""
                                                        aria-hidden="true"></i> Buy Now</a>
                                                    <a href="" id="cartEffect" 
                                                        class="btn btn-solid hover-solid btn-animation"><i class="fa fa-shopping-cart me-1"
                                                            aria-hidden="true"></i> add to cart</a>
                                                
                                                </div>
                    
                                                <div class="product-count" style="display:none;">
                                                    <ul>
                                                        <li>
                                                            <img src="../assets/images/icon/truck.png" class="img-fluid" alt="image">
                                                            <span class="lang">Free shipping for orders above $500 USD</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="border-product" style="display:none;">
                                                    <h6 class="product-title">Sales Ends In</h6>
                                                    <div class="timer">
                                                        <p id="demo"></p>
                                                    </div>
                                                </div>
                                                <div class="border-product">
                                                    <h6 class="product-title">shipping info</h6>
                                                    <ul class="shipping-info">
                                                        <li>100% Original Products</li>
                                                        <li>Free Delivery on order above Rs. 799</li>
                                                        <li>Pay on delivery is available</li>
                                                        <li>Easy 30 days returns and exchanges</li>
                                                    </ul>
                                                </div>
                                                <div class="border-product">
                                                    <h6 class="product-title">share it</h6>
                                                    <div class="product-icon">
                                                        <ul class="product-social">
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                                            <!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php        
                                            }
                                            else{       
                                            if($offers[0]->type == 'Fixed Discount'){
                                                    if($offers[0]->discount_type == 'Percentage')
                                                    {
                                                        $dis = $selprice * $offers[0]->value/100;
                                                        $amt = $selprice - $dis;
                                                    }
                                                    else if($offers[0]->discount_type == 'Fixed') {
                                                        $amt = $selprice - $offers[0]->value;
                                                    }
                                                
                                                    ?>

                                                    <h6 class="product-title">Total Price</h6>
                                                    <h3 id="h3"><del>Rs <?php echo e($product_det[0]->selling_price); ?></del> Rs <?php echo e($amt); ?>

                                                        <input type="hidden"  id="product_price1" name="product_price1" class="form-control input-number" value="<?php echo e($amt); ?>">
                                                        <input type="hidden"  id="fixeddiscount" name="fixeddiscount" class="form-control input-number" value="fixeddiscount">
                                                    </h3>
                                            
                                            <?php
                                            
                                                }
                                            ?>
                                                <?php
                                                ?>
                                        
                                            <?php
                                            
                                            ?>
                                        <h6 class="product-title">Available Offers</h6>
                                    
                                        <li><?php echo e($offertitle); ?></li>
                                        
                                        
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            
                                            Similar Offer Products
                                        </button>
                                        <!-- Button trigger modal -->
        
                                            <!-- Modal -->
                                            <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Offer Products</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <section class="pt-0 section-b-space ratio_asos">
                                                            <div class="container-fuild">
                                                                <div class="row game-product grid-products px-5">
                                                    
                                                                    
                                                                        <?php
                                                                        //  dd($productdetailid);
                                                                        $product = App\Models\Products\Products::where('id',$productdetailid)->get();
                                                                        //dd($product);
                                                                        $products_Ids = Products::where('offers', $product[0]->offers)->get();
                                                                        // dd($products_Ids);
                                                                        
                                                                        foreach($products_Ids as $products_Id)
                                                                        {
                                                                    
                                                                        ?>
                                                                        <div class="product-box col-xl-2 col-lg-3 col-sm-4 col-6">
                                                                                <div class="img-wrapper">
                                                                                    <div class="front">
                                                                                            
                                                                                        <div class="img">
                                                                                            <a href="<?php echo e(route('addtocart', $products_Id->id )); ?>"><img
                                                                                                src="<?php echo e(asset('assets/images/products/') . '/' . $products_Id->product_image); ?>"
                                                                                                class="img-fluid blur-up lazyload" alt=""></a>
                                                                                        </div>
                                                                                        
                                                                                    </div>
                                                                                    <div class="cart-info cart-wrap">
                                                                                        <a href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i
                                                                                                class="ti-heart" aria-hidden="true"></i></a>
                                                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"
                                                                                            tabindex="0"><i class="ti-search" aria-hidden="true"></i></a>
                                                                                        <a href="compare.html" title="Compare" tabindex="0"><i class="ti-reload"
                                                                                                aria-hidden="true"></i></a>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                                <div class="product-detail">
                                                    
                                                                                    <a href="<?php echo e(route('addtocart', $products_Id->id )); ?>">
                                                                                    
                                                                                    </a>
                                                    
                                                                                </div>
                                                                            </div>     

                                                                    <?php
                                                                    }
                                                                    ?>
                                                    
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    
                                                </div>
                                                </div>
                                            </div>
                                            <?php
                                            
                                            ?>
                                            
                                                    <!-- Modal -->
                                            <div class="modal fade bd-example-modal-lg" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Offer Products</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <section class="pt-0 section-b-space ratio_asos">
                                                            <div class="container-fuild">
                                                                <div class="row game-product grid-products px-5">
                                                    
                                                                    
                                                                        <?php
                                                                        //   dd($productdetailid);
                                                                        $product = App\Models\Products\Products::where('id',$productdetailid)->get();
                                                                        
                                                                        
                                                                        
                                                                        $offers1 = App\Models\Offer\Offer::where('id',$product[0]->offers)->get();
                                                                        $offertitle1 = $offers1[0]->title;
                                                                        
                                                                        if($offertitle1 == 'Fixed Discount'){
                                                                        $products_Ids = Products::where('offers', $product[0]->offers)->get();
                                                                        
                                                                        
                                                                        foreach($products_Ids as $products_Id)
                                                                        {
                                                                        
                                                                        //$product = App\Models\Products\ProductsDetails::where('id',$productdetailid)->get();
                                                                        $productdetails = App\Models\Products\ProductsDetails::where('products_id',$products_Id->product_id)->get();
                                                                        //   dd($productdetails);
                                                                        // print_r($productdetails);
                                                                        // $productdetails = App\Models\Products\ProductsDetails::where('products_id',$products->product_id)->get();
                                                                
                                                                        //   print_r($productdetails[0]->products_id);
                                                                        // print_r($category);
                                                                    ?>
                                                                        
                                                                            <div class="product-box col-xl-2 col-lg-3 col-sm-4 col-6">
                                                                                <div class="img-wrapper">
                                                                                    <div class="front">
                                                                                        <?php
                                                                                        // $img = json_decode($productdetail->product_detail_image);
                                                                                        // //  dd($img);
                                                                                        // foreach ($img as $id => $offerimg) {
                                                                                        //     if($id == 0)
                                                                                        //     {
                                                                                            ?>
                                                                                        
                                                                                            <div class="img">

                                                                                            <a href="<?php echo e(route('addtocart', $products_Id->id )); ?>"><img
                                                                                                src="<?php echo e(asset('assets/images/products') . '/' . $products_Id->product_image); ?>"
                                                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                                                            </div>
                                                                                        <?php
                                                                                            // }
                                                                                            // }
                                                                                        ?>
                                                                                        
                                                                                    </div>
                                                                                    <div class="cart-info cart-wrap">
                                                                                        <a href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i
                                                                                                class="ti-heart" aria-hidden="true"></i></a>
                                                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"
                                                                                            tabindex="0"><i class="ti-search" aria-hidden="true"></i></a>
                                                                                        <a href="compare.html" title="Compare" tabindex="0"><i class="ti-reload"
                                                                                                aria-hidden="true"></i></a>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                                <div class="product-detail">
                                                    
                                                                                    <a href="<?php echo e(route('addtocart', $products_Id->id )); ?>">
                                                                                        
                                                                                    </a>
                                                    
                                                                                </div>
                                                                            </div>
                                                                        
                                                                    <?php
                                                                    }
                                                                    }
                                                                
                                                                    ?>
                                                                    
                                                    
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    
                                                </div>
                                                </div>
                                            </div>
                                            
                                        

                                        <input type="hidden" name="product_size" id="product_size" value="<?php echo e($product_det[0]->size); ?>" class="form-control input-number">
                                        <input type="hidden" name="product_color" id="product_color" value="<?php echo e($product_det[0]->color); ?>" class="form-control input-number">
                                        <input type="hidden" name="hidden_name" id="product_name" value="<?php echo e($product_det[0]->product_name); ?>" />
                                        <input type="hidden" name="hidden_price" id="product_price" value="<?php echo e($product_det[0]->retail_price); ?>" />
                                        <input type="hidden" name="product_id" id="product_id" value="<?php echo e($product_det[0]->id); ?>" />
                                        <input type="hidden" name="product_image" id="product_image" value="<?php echo e($product_det[0]->product_detail_image); ?>" />
                                        <input type="hidden" name="product_qty" id="product_qty" value="<?php echo e($product_det[0]->quantity); ?>" />
                                    </div>



                                    <div class="product-button" id="product-button">
                                    </div>
                                        <div class="product-form-group"><br>
                                            <div class="row" style="display:none;" id="addcart2_<?php echo e($product_det[0]->id); ?>">
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-danger btn-number" data-type="minus" data-field="quant[2]" onclick="addqnty('<?php echo e($product_det[0]->id); ?>','Minus')">
                                                                <span class="fa fa-minus"></span>
                                                            </button>
                                                        </span>
                                                        <input type="text" name="quant[2]" id="quantity<?php echo e($product_det[0]->id); ?>" value="0" class="form-control input-number" min="1" max="100" readonly>
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]" onclick="addqnty('<?php echo e($product_det[0]->id); ?>','Add')">
                                                                <span class="fa fa-plus"></span>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <a href="<?php echo e(url('/Shopping-cart')); ?>" class="buttons"><button type="button" class="btn add-to-cart-btn">&nbsp; <i class="biolife-icon icon-cart"></i> &nbsp; BUY NOW</button></a>

                                                </div>
                                            </div>
                                            <?php if($product_det[0]->quantity>0): ?>
                                            <?php else: ?>
                                            <?php endif; ?>
                                        </div>
                                    <div class="product-buttons">
                                        <a href="" id="cartbook" 
                                        class="btn btn-solid hover-solid btn-animation"><i class=""
                                            aria-hidden="true"></i> Buy Now</a>
                                        <a href="" id="cartEffect" 
                                            class="btn btn-solid hover-solid btn-animation"><i class="fa fa-shopping-cart me-1"
                                                aria-hidden="true"></i> add to cart</a>
                                    
                                    </div>

                                    <div class="product-count" style="display:none;">
                                        <ul>
                                            <li>
                                                <img src="../assets/images/icon/truck.png" class="img-fluid" alt="image">
                                                <span class="lang">Free shipping for orders above $500 USD</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="border-product" style="display:none;">
                                        <h6 class="product-title">Sales Ends In</h6>
                                        <div class="timer">
                                            <p id="demo"></p>
                                        </div>
                                    </div>
                                    <div class="border-product">
                                        <h6 class="product-title">shipping info</h6>
                                        <ul class="shipping-info">
                                            <li>100% Original Products</li>
                                            <li>Free Delivery on order above Rs. 799</li>
                                            <li>Pay on delivery is available</li>
                                            <li>Easy 30 days returns and exchanges</li>
                                        </ul>
                                    </div>
                                    <div class="border-product">
                                        <h6 class="product-title">share it</h6>
                                        <div class="product-icon">
                                            <ul class="product-social">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                                <!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>    
                                </form>
                                </div>
                            </div>
                      </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->

































































    <!-- product-tab starts -->
    <section class="tab-product m-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab"
                                href="#top-home" role="tab" aria-selected="true"><i
                                    class="icofont icofont-ui-home"></i>Details</a>
                            <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab"
                                href="#top-profile" role="tab" aria-selected="false"><i
                                    class="icofont icofont-man-in-glasses"></i>Specification</a>
                            <div class="material-border"></div>
                        </li>
                       
                        <li class="nav-item"><a class="nav-link" id="review-top-tab" data-bs-toggle="tab"
                                href="#top-review" role="tab" aria-selected="false"><i
                                    class="icofont icofont-contacts"></i>Write Review</a>
                            <div class="material-border"></div>
                        </li>
                    </ul>
                    <div class="tab-content nav-material" id="top-tabContent">
                        <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                            aria-labelledby="top-home-tab">
                            <div class="product-tab-discription">
                                <?php
                             
                                // use App\Models\Products\ProductsDetails;
                                // use App\Models\Products\Products;
                              
                                $pro_det_id = $product_det[0]->products_id;
                            
                                $productdesc = Products::where('product_id',$pro_det_id)->get();
                                //dd($productcolorsize[0]->description);
                             
                                ?>
                                <div class="part">
                                    <p><?php echo e($productdesc[0]->description); ?> </p>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                            <?php
                             
                                
                              use App\Models\Products\ProductSpecs;
                                $pro_spe_id = $product_det[0]->products_id;
                               
                                $productspec = ProductSpecs::where('products_id',$pro_spe_id)->get();
                                // dd($productspec);
                             
                                foreach($productspec as $productspec1)
                                {

                                ?>

                                <p><?php echo e($productspec1->specify_attribute. ' : '.$productspec1->specify_value); ?> </p>
                                
                                <?php
                                 }
                                ?>
                            
                            
                        </div>
                      
                        <div class="tab-pane fade" id="top-review" role="tabpanel" aria-labelledby="review-top-tab">
                            <form action="<?php echo e(route('rating')); ?>" method="post" class="theme-form">
                               
                                <?php echo csrf_field(); ?>
                                <div class="form-row row">
                                    <div class="col-md-12">
                                        <div class="media">
                                            <label>Rating</label>
                                            <div class="media-body ms-3">
                                                <div class="rating three-star">
                                                    
                                                        <div class="rate">
                                                            <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                                                            <label for="star5" title="text">5 stars</label>
                                                            <input type="radio" checked id="star4" class="rate" name="rating" value="4"/>
                                                            <label for="star4" title="text">4 stars</label>
                                                            <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                                                            <label for="star3" title="text">3 stars</label>
                                                            <input type="radio" id="star2" class="rate" name="rating" value="2">
                                                            <label for="star2" title="text">2 stars</label>
                                                            <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                                                            <label for="star1" title="text">1 star</label>
                                                         </div>

                                                    </div>
                                            </div>
                                        </div>
                                    </div>


                                    <?php
                                        $uname = session('username');
                                        $sts = session('status');
                                             // dd($uname);
                                        //    dd($sts);   
                                        if(!empty($uname) &&  !empty($sts))
                                        {
                                        ?>
                                            
                                   
                                    <div class="col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" value="<?php echo e($uname); ?>">
                                        <input type="hidden" name="product_id" id="product_id" value="<?php echo e($product_det[0]->products_id); ?>" />
                                        <input type="hidden" name="hidden_name" id="product_name" value="<?php echo e($product_det[0]->product_name); ?>" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Comments</label>
                                        <input type="text" class="form-control" name="comments" id="comments" placeholder="comments">
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <button class="btn btn-solid" type="submit">Submit Your
                                            Review</button>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-tab ends -->

    <!--Customer review start-->
    <section class="section-b-space ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col-12 product-related">
                    <h2>Customer Review</h2>
                </div>
            </div>
            <div class="row search-product">
                <?php
              // dd($product);
                foreach ($product as $pro) {
               

                    // dd($pro->products_id);   
                $productrating = App\Models\User\rating::where('products_id',$pro->products_id)->get();
              //  dd($productrating[0]->star_rating);
                foreach ($productrating as  $value) {
                    //dd($value->star_rating);
                

               
                    ?>
                     <div class="media-body ms-3">
                        <div class="rating three-star">
                            
                                <div class="rate">
                                    <?php
                                    for($i=0; $i< $value->star_rating; $i++)
                                          { 
                                            ?>
                                    <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                                    <label for="star1" style="color:#ffcc00;" title="text">1 star</label>
                                   
                                    
                                <?php     
                                
                                    }
                                     ?>
                                      <span><?php echo e($value->comments); ?></span><br>
                                      <span><?php echo e($value->customer_name); ?></span>
                                 </div>

                            </div>
                    </div>
                <?php    
                    
                }

              ?>
               
                <?php
                 }
                
                ?>
                

            </div>
        </div>
    </section>
    <!-- Customer review end -->


    <!-- product section start -->
    <section class="section-b-space ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col-12 product-related">
                    <h2>related products</h2>
                </div>
            </div>
            <div class="row search-product">
                <?php
                // dd($product);
                foreach ($product as $pro) {
                   //dd($pro->products_id);
                    
                    $products_Ids = Products::where('category_sub', $pro->category_sub)->get();
                    // dd($products_Ids);                                              
                    foreach($products_Ids as $products_Id)
                    {
                
                   
                // $productdetails = App\Models\Products\ProductsDetails::where('products_id',$products_Id->id)->get();
                 //dd($productdetails);
                //  print_r($productdetails);
               // print_r($category);
                
              ?>
               
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                <?php
                                // $image = json_decode($products->product_detail_image);
                                // foreach ($image as $key => $value) {
                                //     if($key == 0)
                                //     {
                                    ?>
                                    <div class="img">
                                    <a href="<?php echo e(route('addtocart', $products_Id->id )); ?>"><img src="<?php echo e(asset('assets/images/products/') . '/' . $products_Id->product_image); ?>"
                                        class="img-fluid blur-up lazyload" alt=""></a>    
                                        </div>
                                <?php
                                    //     }
                                    // }
                                ?>
                                
                            </div>
                            <div class="back">
                                <?php
                                // $image1 = json_decode($products->product_detail_image);
                                // foreach ($image1 as $key1 => $value1) {
                                //     if($key1 == 0)
                                //     {
                                    ?>
                                <a href="#"><img src="<?php echo e(asset('assets/images/products/') . '/' . $products_Id->product_image); ?>"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        <?php
                                    //     }
                                    // }
                                ?>
                            </div>
                            <div class="cart-info cart-wrap">
                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                        class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                    title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                    data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                        class="ti-search" aria-hidden="true"></i></a> 
                            </div>
                        </div>
                        <div class="product-detail">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="product-page(no-sidebar).html">
                                
                            </a>
                            
                            <ul class="color-variant">
                                
                            </ul>
                        </div>
                    </div>
                </div>
               
        <?php
            }
                }
                
                ?>
                

            </div>
        </div>
    </section>
    <!-- product section end -->
    <script>
        $(document).on("click",".quantity-right-plus",function() {
           // alert("click");
            var qty = $('#quantity').val();
           // alert(qty);
            var p_qty = $('#product_qty').val();
          //  alert(p_qty);
            if( p_qty > qty ){
                alert(qty);
                $('#quantity').val(qty);
                // setTimeout(function() { debugger; }, 5000)
            }
            else{
                alert('Out of quantity');
                $('.quantity-right-plus').prop('disabled', true);
               
        }
        });

        $(document).on("click",".quantity-left-minus",function() {
           // alert("click");
            var qty = $('#quantity').val();
           // alert(qty);
            var p_qty = $('#product_qty').val();
          //  alert(p_qty);
            if( p_qty >qty ){
                $('.quantity-right-plus').prop('disabled', false);
                $('#quantity').val(qty);
                // setTimeout(function() { debugger; }, 5000)
            }
            else{
                // alert('Out of quantity');
                $('.quantity-right-plus').prop('disabled', true);
               
        }
        });
    </script>

    











<script>
    //
    // $( document ).ready(function() {
    //         var id = $(".bg-light0").val();
    //           var clsize;
    //           console.log(id);

    //       $.ajax({

    //             url: '<?php echo e(route("colorsize", "id")); ?>',
    //             type: "GET",
    //             data: {
    //                 "_token": "<?php echo e(csrf_token()); ?>",
    //                  "id": id

    //             },

    //             dataType: "json",
    //              success: function (data) {
    //                 // console.log(data);
    //                 //  alert(data);
    //                 var arr = [];
    //                 $("#clsize").html('');
    
                  
    //                 $.each( data, function( key, value ) {
    //                     var strlength = value.color;
    //                     // alert(strlength.length);
    //                     console.log(value);
                        
    //                   if(value.size == 'Size' || value.size == null)
    //                     {
                            
                          
    //                     }   
    //                     else{
                            
    //                       $("#clsize").append('<li id = "size'+value.id+'" class ="size" value='+value.id+'><a href="javascript:void(0)">'+value.size+'</a></li><input type="hidden" id="sizee'+value.id+'" name="sizee'+value.id+'" value="'+value.size+'">');                            
    //                     }
    //                     var proimg = value.product_detail_image;
    //                     var imgurl1="<?php echo e(asset('assets/images/products/detail/')); ?>";
    //                     const myArr = JSON.parse(proimg);
    //                     console.log(myArr);
    //                     console.log(myArr.length);



    //                 //    x++;
    //                 //    if(x<=1)
    //                 //     {
    //                 //     for (let i = 0; i < myArr.length; i++) {
                           
    //                 //          $("#slide1").append('<img src="'+imgurl1+'/'+myArr[i]+'" alt="" class="img-fluid blur-up lazyload image_zoom_cls-0" style="width:500px;height:600px;">');
    //                 //          $("#slide").append('<img src="'+imgurl1+'/'+myArr[i]+'" alt="" class="img-fluid blur-up lazyload">');
    //                 //         }

    //                 //     }                      
                       

    //                 //    proimg.forEach(myfunction);
                        
    //                 //     function myFunction(item, index) {
    //                 //         $("#slide1").append('<img src="asset(assets/images/products/detail)'+'/'+index+' " alt="" class="img-fluid blur-up lazyload image_zoom_cls-0" style="width:500px;height:600px;">');
    //                 //         $("#slide").append('<img src="asset(assets/images/products/detail)'+'/'+index+' " alt="" class="img-fluid blur-up lazyload image_zoom_cls-0" style="width:500px;height:600px;">');
                            
    //                 //     }
                        
    //                 });
                    
    //             },
    //             error: function (data) {
    //                 console.log('Error:', data);
    //             }
    //             });

    // });
 
   
</script>





<script>
     $( document ).on("click",".size",function() {
        var ul= document.getElementById("clsize");
        
        var btns = ul.getElementsByClassName("size");

        for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
        });
       
        }
        
       
            var size = $(this).val();
           $.ajax({
                url: '<?php echo e(route("sizedetails", "size")); ?>',
                type: "GET",
                data: {
                    "_token": "<?php echo e(csrf_token()); ?>",
                     "size": size
                },
                dataType: "json",
                 success: function (data) {
                    console.log(data);
                //    console.log(data.pro_sizedetails[0].selling_price);

                    // console.log(data.pro_color[0].product_detail_image);
                    
                        
                    if(data.offername[0].type == 'Fixed Discount'){

                        
                        if(data.offername[0].discount_type == 'Percentage' ){
                            
                                            var dis = data.pro_sizedetails[0].selling_price * data.offername[0].value / 100;
                                            
                                            var amt = data.pro_sizedetails[0].selling_price - dis;
                                            
                        }
                        else if(data.offername[0].discount_type == 'Fixed'){
                            var amt = selprice - $offers;
                        }
                        $('#h3').html('<del>Rs ' +data.pro_sizedetails[0].selling_price+ '</del> Rs '+amt+'<input type="hidden"  id="product_price1" name="product_price1" class="form-control input-number" value="'+amt+' "><input type="hidden"  id="fixeddiscount" name="fixeddiscount" class="form-control input-number" value="fixeddiscount">')
                        $('.price-detail').hide();
                        $('#price').html('<h3 class="price-detail">Rs' +data.pro_sizedetails[0].selling_price+ ' <del>Rs'+data.pro_sizedetails[0].retail_price+'</del></h3> <input type="hidden"  id="product_price" name="product_price" class="form-control input-number" value="'+data.pro_sizedetails[0].selling_price+' ">');    

                    }
                    else{
                     $('.price-detail').hide();
                     $('#price').html('<h3 class="price-detail">Rs' +data.pro_sizedetails[0].selling_price+ ' <del>Rs'+data.pro_sizedetails[0].retail_price+'</del></h3> <input type="hidden"  id="product_price" name="product_price" class="form-control input-number" value="'+data.pro_sizedetails[0].selling_price+' ">');

                    }
                    //  $('.color-variant').html('<li id ="bg-light0" class="bg-light0" value ="'+data.pro_color[0].id+'">'+data.pro_color[0].color+'</li>');
                      var csize = document.getElementById("bg-light0"+size).value;
                    
                      var sizee = document.getElementById("sizee"+size).value;
                      const color =  document.getElementById("product_color"+size).value;
                    
                    const elements = document.querySelectorAll('#bg-light0'+size);
                     $('#product_size').val(sizee);
                     $('#product_color').val(color);
                     $('.licolor').removeClass('active');
                     $('.licolor').addClass('inactive');
                    // Loop through each element
                    elements.forEach(element => {
                    
                    if (csize == size) {
                        // element.style.border="none";
                        // $('#div2').html('<div class="form-control" style="border: 2px solid blue;"><li  style="color:'+data.pro_color[0].color+'; background-color:'+data.pro_color[0].color+';" id ="bg-light0 '+data.pro_color[0].id+'" class="bg-light0" value="'+data.pro_color[0].id+'"></li></div>');
                        
                        //    element.classList.toggle('active')
                        element.classList.remove("inactive");
                          element.classList.add("active");
                          
                          
                          
                         
                    } else {
                          element.classList.remove("active");
                          element.classList.add("inactive");
                        // element.classList.toggle('selected')
                        // element.classList.toggle('active')
                        
                    }
                    });
                    




                     var proimg = data.pro_color[0].product_detail_image;
                    //   console.log(proimg);
                    // alert(proimg);
                        var imgurl1="<?php echo e(asset('assets/images/products/detail/')); ?>";
                        const myArr = JSON.parse(proimg);
                        //  console.log(myArr[0]);
                        // console.log(myArr.length);
                        
                            var x=0;
                            x++;
                            if(x<=1)
                                {
                                for (let i = 0; i < myArr.length; i++) {
                                    //$("#slide1").hide();
                                    console.log(myArr[i]);
                                    // alert(myArr[i]);
                                        if(myArr[i].length != 0 ){
                                             
                                        $("#slide1").html('<figure class="zoom" onmousemove="zoom(event)" style="background-image: '+imgurl1+'/'+myArr[i]+'"><img src="'+imgurl1+'/'+myArr[i]+'" alt="" class="img-fluid blur-up lazyload image_zoom_cls-0" style="width:500px;height:600px;"></figure>');
                                        $("#slide").html('<img src="'+imgurl1+'/'+myArr[i]+'" alt="" class="img-fluid blur-up lazyload">');
                                        }
                                        else{
                                            alert('no image');
                                        }
                                    }

                                }   
                            
                },
                error: function (data) {
                    console.log('Error:', data);
                }
                });
    });
    </script>
    

<script>
    //  $( document ).on("click",".size",function() {
    //         alert("click");
    //     //    $(this).addClass('active');
    //     //    $(this).parent().addClass('Selected');



    //     // var header = document.getElementsByClassName("size-box");
    //     // alert(header);
    //    var ul= document.getElementById("clsize");
    //   // alert(ul);
    //   // console.log(ul);
    //     var btns = ul.getElementsByClassName("size");
    //    // alert(btns.length);
    //     for (var i = 0; i < btns.length; i++) {
    //     btns[i].addEventListener("click", function() {
    //     var current = document.getElementsByClassName("active");
    //     current[0].className = current[0].className.replace(" active", "");
    //     this.className += " active";
       
    //         // if (x.style.display === "none") {
    //         //     x.style.display = "block";
    //         // } else {
    //         //     x.style.display = "none";
    //         // }
    //     });
       
    //     }

        
       
    //         var size = $(this).val();
               
    //       // alert(size);

    //        $.ajax({

    //             url: '<?php echo e(route("sizedetails", "size")); ?>',
    //             type: "GET",
    //             data: {
    //                 "_token": "<?php echo e(csrf_token()); ?>",
    //                  "size": size

    //             },

    //             dataType: "json",
    //              success: function (data) {
    //                 // console.log(data.pro_sizedetails[0].selling_price);
    //                 // console.log(data.pro_color);
    //                 // alert(data);
    //                 // console.log(data[0].selling_price);
    //                 // alert(data.size);
    //                 $('.price-detail').hide();
    //                  $('#price').html('<h3 class="price-detail">Rs' +data.pro_sizedetails[0].selling_price+ ' <del>Rs'+data.pro_sizedetails[0].retail_price+'</del></h3> <input type="hidden"  id="product_price" name="product_price" class="form-control input-number" value="'+data.pro_sizedetails[0].selling_price+' ">');
                     
    //                  $('.color-variant').html('<li id ="bg-light0" class="bg-light0" value ="'+data.pro_color[0].id+'">'+data.pro_color[0].color+'</li>');
    //                 // alert(data.color);
    //                 // $("#clsize").html('<li></li>');


    //                 // $.each( data, function( key, value ) {
    //                 //     // console.log( value.color );
    //                 //     if(value.color == value.color)
    //                 //     {
    //                 //     console.log( value.size );
                        
    //                 //     $("#clsize").append('<li class ="size" value='+value.id+'>'+value.size+'</li>');

                           
    //                 //     }
    //                 //      else{
    //                 //         console.log( value.size );
    //                 //     }
    //                 // });
              
    //             },
    //             error: function (data) {
    //                 console.log('Error:', data);
    //             }
    //             });

           
    //     });


        /* start */
        $(document).on("click",".bg-light0",function() {

            var colorvalue = $(this).val();
        
            $.ajax({
                url: '<?php echo e(route("colorvalue", "colorvalue")); ?>',
                type: "GET",
                data: {
                    "_token": "<?php echo e(csrf_token()); ?>",
                    "colorvalue": colorvalue
                },

                dataType: "json",
                success: function (data) {
                
                //   $("#clsize").html('');
                        $('.size').removeClass('active');
                        $('.size').addClass('inactive');
                
                        $.each( data.productcolorvalue, function( key, value ) {
                        
                           
                            if(colorvalue == value.id)
                            {
                             var cls = $('#size' + value.id).attr('class');


                                  //  alert(cls);
                                if(cls == 'size'){

                                     
                                $('#size' + value.id).removeClass('inactive');
                                $('#size' + value.id).addClass('active');
                                }
                                else if(cls == 'size active')
                                {
                                     $('#size' + value.id).removeClass('active');
                                    $('#size' + value.id).addClass('inactive');
                                    // $('#size' + value.id).addClass('active');
                                }
                                else if(cls == 'size inactive')
                                {
                                     $('#size' + value.id).removeClass('inactive');
                                    $('#size' + value.id).addClass('active');
                                }
                                else{
                                    $('#size' + value.id).removeClass('active');
                                    $('#size' + value.id).addClass('inactive');
                                }

                            }
                            else{
                                 $('#size' + value.id).removeClass('active');
                                //  $('#size' + value.id).addClass('inactive');
                               
                            }
                            });
                            
                            var proimg = data.pro_color_val[0].product_detail_image;
                               //   console.log(proimg);
                                // alert(proimg);
                            var imgurl1="<?php echo e(asset('assets/images/products/detail/')); ?>";
                            const myArr = JSON.parse(proimg);
                           //  console.log(myArr[0]);
                           // console.log(myArr.length);
                        
                           // alert(myArr);
                            var x=0;
                            x++;
                            if(x<=1)
                                {
                                for (let i = 0; i < myArr.length; i++) {
                                    //$("#slide1").hide();
                                    console.log(myArr[i]);
                                    // alert(myArr[i]);
                                        if(myArr[i].length != 0 ){
                                            // alert(myArr[i].length);
                                        $("#slide1").html('<figure class="zoom" onmousemove="zoom(event)" style="background-image: '+imgurl1+'/'+myArr[i]+'"><img src="'+imgurl1+'/'+myArr[i]+'" alt="" class="img-fluid blur-up lazyload image_zoom_cls-0" style="width:500px;height:600px;"></figure>');
                                        $("#slide").html('<img src="'+imgurl1+'/'+myArr[i]+'" alt="" class="img-fluid blur-up lazyload">');
                                        }
                                        else{
                                            alert('no image');
                                        }
                                    }

                                }
                    },
                error: function (data) {
                    console.log('Error:', data);
                }
                });
               
        });
        /*end*/
</script>








<script>
      
    //   $(document).ready(function(){

    //     var clr = $('.bg-light0').html();

    //         $('.bg-light0').each(function(){
                
    //              var clr1 = this.val();
                 
    //              if(clr1 == clr1)
    //              {
                   
    //                 $('.bg-light0').html(clr1);
    //              }
    //         })

    //     });
    function zoom(e) {
        var zoomer = e.currentTarget;
        e.offsetX ? (offsetX = e.offsetX) : (offsetX = e.touches[0].pageX);
        e.offsetY ? (offsetY = e.offsetY) : (offsetX = e.touches[0].pageX);
        x = (offsetX / zoomer.offsetWidth) * 100;
        y = (offsetY / zoomer.offsetHeight) * 100;
        zoomer.style.backgroundPosition = x + "% " + y + "%";
    }



</script>
    <script>
               document.addEventListener("DOMContentLoaded", function () {
                // Function to show the loading container
                function showLoader() {
                    document.getElementById("loading-container").style.display = "block";
                }
            
                // Function to hide the loading container
                function hideLoader() {
                    document.getElementById("loading-container").style.display = "none";
                }
            
                // Event listener to show loader when the page starts loading
                window.addEventListener("beforeunload", showLoader);
            
                // Event listener to hide loader when the page finishes loading
                window.addEventListener("load", hideLoader);
            });


    </script>


    <!--<script src="jquery-3.6.3.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
   
    <!-- footer start -->
   
   <?php echo $__env->make('website.front-end.newfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ktonline/public_html/oxygen.ktonline.in/resources/views/website/front-end/product_view.blade.php ENDPATH**/ ?>