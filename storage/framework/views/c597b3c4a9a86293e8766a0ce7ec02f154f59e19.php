  <?php echo $__env->make('website.front-end.newhead', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
 
    <!-- header end -->   
    <?php echo $__env->make('paritials.website.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('website.partials.js.frontendjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('paritials.js.userwebsite.cart_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('website.partials.css.frontendcss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
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
   </style>  
    <!-- section start -->
    
    <?php
    
//  dd($product_det);
    // exit();
    ?>
    
    <section>
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-slick">
                            <?php 
                            $product_detailsimage = json_decode($product_det[0]->product_detail_image);
                            foreach ($product_detailsimage as $key => $value) {
                                
                           ?>
                            <div><img src="<?php echo e(asset('assets/images/products/detail') . '/' . $value); ?>" alt=""
                                    class="img-fluid blur-up lazyload image_zoom_cls-0" style="width:500px;height:600px;"></div>
                            
                              <?php
                                }
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="slider-nav">
                                    <?php 
                            $product_detailsimage1 = json_decode($product_det[0]->product_detail_image);
                            foreach ($product_detailsimage1 as $key1 => $value1) {
                                
                           ?>
                                    <div><img src="<?php echo e(asset('assets/images/products/detail') . '/' . $value1); ?>" alt=""
                                            class="img-fluid blur-up lazyload"></div>
                                    
                                    <?php
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
                                
                                <a href="javascript:void(0)">Best seller</a>

                            </div>
                           <div id="price">
                            <h3 class="price-detail">Rs <?php echo e($product_det[0]->selling_price); ?> <del>Rs <?php echo e($product_det[0]->retail_price); ?></del><span>55% off</span></h3>
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
                                    
                                    <?php $__currentLoopData = $productcolorsize; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        


                                    <?php
                                    $color1=$item->color;
                                    if(!in_array($color1,$clr))
                                    {
                                        ?>
                            
                                    <li  id ="bg-light0" class="bg-light0 active" value="<?php echo e($item->id); ?>">
                                        
                                   <?php echo e($item->color); ?>

                                    
                                    
                                    </li>
                                    <?php array_push($clr,$color1); 
                                    } ?>
                                       
                                    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   
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
                                //dd($product);
                                $offers = App\Models\Offer\Offer::where('id',$product[0]->offers)->get();
                                //  dd($offers[0]->title);
                                ?>
                                <h6 class="product-title">Available Offers</h6>
                                <li><?php echo e($offers[0]->title); ?></li>
                                
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    
                                    Similar Products
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
                                                                 // dd($productdetailid);
                                                                  $product = App\Models\Products\ProductsDetails::where('id',$productdetailid)->get();
                                                                  $productdetails = App\Models\Products\ProductsDetails::where('products_id',$product[0]->products_id)->get();
                                                                 // print_r($productdetails);
                                                            // $productdetails = App\Models\Products\ProductsDetails::where('products_id',$products->product_id)->get();
                                                         
                                                            //   print_r($productdetails[0]->products_id);
                                                           // print_r($category);
                                                            ?>
                                                                <?php $__currentLoopData = $productdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productdetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <div class="product-box col-xl-2 col-lg-3 col-sm-4 col-6">
                                                                        <div class="img-wrapper">
                                                                            <div class="front">
                                                                                <?php
                                                                                $img = json_decode($productdetail->product_detail_image);
                                                                                // dd($img);
                                                                                foreach ($img as $id => $offerimg) {
                                                                                    if($id == 0)
                                                                                    {
                                                                                    ?>
                                                                                
                                                                                    

                                                                                    <a href="<?php echo e(route('addtocart', $productdetail->id )); ?>"><img
                                                                                        src="<?php echo e(asset('assets/images/products/detail') . '/' . $offerimg); ?>"
                                                                                        class="img-fluid" alt=""></a>

                                                                                <?php
                                                                                    }
                                                                                    }
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
                                            
                                                                            <a href="<?php echo e(route('addtocart', $productdetail->id )); ?>">
                                                                                <h6>Rs.<?php echo e($productdetail->selling_price); ?></h6>
                                                                            </a>
                                            
                                                                        </div>
                                                                    </div>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            
                                            
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            
                                        </div>
                                        </div>
                                    </div>

                                

                                <input type="hidden" name="product_size" id="product_size" value="<?php echo e($product_det[0]->size); ?>" class="form-control input-number">
                                <input type="hidden" name="hidden_name" id="product_name" value="<?php echo e($product_det[0]->product_name); ?>" />
                                <input type="hidden" name="hidden_price" id="product_price" value="<?php echo e($product_det[0]->retail_price); ?>" />
                                <input type="hidden" name="product_id" id="product_id" value="<?php echo e($product_det[0]->id); ?>" />
                                <input type="hidden" name="product_image" id="product_image" value="<?php echo e($product_det[0]->product_detail_image); ?>" />
                                <input type="hidden" name="product_qty" id="product_qty" value="<?php echo e($product_det[0]->quantity); ?>" />
                            </div>



                            <div class="product-button" id="product-button">
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
                                      
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </form>
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
                             
                                
                              
                                $pro_spe_id = $product_det[0]->products_id;
                            
                                $productspec = Products::where('product_id',$pro_spe_id)->get();
                                //dd($productcolorsize[0]->description);
                             
                                ?>
                                <p><?php echo e($productspec[0]->specification); ?> </p>
                            
                            
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

                   
                $productdetails = App\Models\Products\ProductsDetails::where('products_id',$pro->products_id)->get();
                // dd($productdetails);
                //  print_r($productdetails);
               // print_r($category);
                
              ?>
               <?php $__currentLoopData = $productdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                <?php
                                $image = json_decode($products->product_detail_image);
                                foreach ($image as $key => $value) {
                                    if($key == 0)
                                    {
                                    ?>
                                    <a href="<?php echo e(route('addtocart', $products->id )); ?>"><img src="<?php echo e(asset('assets/images/products/detail') . '/' . $value); ?>"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>    
                                <?php
                                        }
                                    }
                                ?>
                                
                            </div>
                            <div class="back">
                                <?php
                                $image1 = json_decode($products->product_detail_image);
                                foreach ($image1 as $key1 => $value1) {
                                    if($key1 == 0)
                                    {
                                    ?>
                                <a href="#"><img src="<?php echo e(asset('assets/images/products/detail') . '/' . $value1); ?>"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        <?php
                                        }
                                    }
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
                            <h4>$<?php echo e($products->selling_price); ?></h4>
                            <ul class="color-variant">
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php
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
    $( document ).ready(function() {
     // alert("click");
            var id = $(".bg-light0").val();
               var clsize;
               console.log(id);
          // alert(id);

           $.ajax({

                url: '<?php echo e(route("colorsize", "id")); ?>',
                type: "GET",
                data: {
                    "_token": "<?php echo e(csrf_token()); ?>",
                     "id": id

                },

                dataType: "json",
                 success: function (data) {
                    // console.log(data);
                    //  alert(data);
                    var arr = [];
                    $("#clsize").html('');


                    function bblSort(arr) {
  
                        for (var i = 0; i < arr.length; i++) {

                            for (var j = 0; j < (arr.length - i - 1); j++) {

                                if (arr[j] > arr[j + 1]) {
                                    var temp = arr[j]
                                    arr[j] = arr[j + 1]
                                    arr[j + 1] = temp
                                }
                            }
                        }

                        // Print the sorted array
                        console.log(arr);
                        }

                        // This is our unsorted array
                        var arr = [234, 43, 55, 63, 5, 6, 235, 547];

                        // Now pass this array to the bblSort() function
                        

                    $.each( data, function( key, value ) {

                    // arr.push(value);
                    var strlength = value.color;

                    for (var i = 0; i < strlength.length; i++) {

                        for (var j = 0; j < (strlength.length - i - 1); j++) {



                            if(value.color[i] == value.color[j])
                            {
                                console.log(value.color);
                                $("#clsize").append('<li class ="size" value='+value.id+'><a href="javascript:void(0)">'+value.size+'</a></li><input type="hidden" id="sizee" name="sizee" value="'+value.size+'">');
                            }
                            // if (arr[j] > arr[j + 1]) {
                            //     var temp = arr[j]
                            //     arr[j] = arr[j + 1]
                            //     arr[j + 1] = temp
                            // }
                        }
                        }



                    
                    
                    
                    // $("#clsize").append('<li class ="size" value='+value.id+'><a href="javascript:void(0)">'+value.size+'</a></li><input type="hidden" id="sizee" name="sizee" value="'+value.size+'">');
                   

                        
                    });
                     
                   
              
                },
                error: function (data) {
                    console.log('Error:', data);
                }
                });

    });
 
   
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
                    $('.price-detail').hide();
                     $('#price').html('<h3 class="price-detail">Rs' +data.pro_sizedetails[0].selling_price+ ' <del>Rs'+data.pro_sizedetails[0].retail_price+'</del></h3> <input type="hidden"  id="product_price" name="product_price" class="form-control input-number" value="'+data.pro_sizedetails[0].selling_price+' ">');
                     
                     $('.color-variant').html('<li id ="bg-light0" class="bg-light0" value ="'+data.pro_color[0].id+'">'+data.pro_color[0].color+'</li>');
              
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
                
                   $("#clsize").html('');
                
                        $.each( data.productcolorvalue, function( key, value ) {
                        
                            $("#clsize").append('<li class ="size" value='+value.id+'>'+value.size+'</li> <input type="hidden" id="sizee" name="sizee" value="'+value.size+'">');
                          
                            });
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


</script>


    <script src="jquery-3.6.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
   
    <!-- footer start -->
  
    <?php echo $__env->make('website.front-end.newfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\skap\oxygen-new\resources\views/website/front-end/product_view.blade.php ENDPATH**/ ?>