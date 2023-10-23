<?php echo $__env->make('website.front-end.newhead', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 

   <!-- header end -->


   <?php echo $__env->make('website.partials.js.frontendjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('paritials.js.userwebsite.cart_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('website.partials.css.frontendcss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
  

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
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

<body class="theme-color-29">
   <div id="loading-container">
       <div class="loader"></div>
   </div>

   <!-- loader start -->
   
   <!-- loader end -->

<!-- header start -->
   <?php echo $__env->make('paritials.website.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <!-- tracking page start -->
    <section class="tracking-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>status for <?php echo e(count($orders)); ?> orders  </h3>
                    
                    
                    
                    <?php if(!empty(session('userId'))): ?>
                    <?php if(!empty($orders)): ?>
    
                     
                     
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ord): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="wrapper">
                            <div class="arrow-steps clearfix">
                                <div class="step done <?php echo e(($ord->order_status=='Placed')?'current':''); ?>"> <span> Order placed</span> </div>
                                <div class="step <?php echo e(($ord->order_status=='Accept')?'current':''); ?>"> <span>Preparing to ship</span> </div>
                                <div class="step <?php echo e(($ord->order_status=='Dispatch')?'current':''); ?>"><span> Shipped</span> </div>
                                <div class="step <?php echo e(($ord->order_status=='Delivered')?'current':''); ?>"><span>Delivered</span> </div>
                                <?php if($ord->order_status=='Return'): ?>
                                <div class="step current"><span>Returned</span> </div>
                                <?php endif; ?>
                                <?php if($ord->order_status=='Cancel'): ?>
                                <div class="step current"><span>Canceled</span> </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <div class="row border-part">
                        <div class="col-xl-2 col-md-3 col-sm-4">
                            <div class="product-detail">
                                <?php
                                // dd($ord->order_id);
                                if(!empty($ord->product_image))
                                {
                                    $img = json_decode($ord->product_image);
                                
                                    foreach ($img as $key => $value) {
                                        
                                        if($key == 0)
                                        {
                                            ?>
                                            <img src="../assets/images/products/detail/<?php echo e($value); ?>" class="img-fluid blur-up lazyload" alt="">
                                    <?php
                                        }
                                    }
                                }
                                ?>
                                
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-sm-8">
                            <div class="tracking-detail">
                                <ul>
                                   
                                    <li>
                                        <div class="left">
                                            <span>Order ID</span>
                                        </div>
                                        <div class="right">
                                            <span><?php echo e($ord->orders_id); ?></span> 
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left">
                                            <span>order date</span>
                                        </div>
                                        <div class="right">
                                            
                                            <span><?php echo e(date("Y-m-d", strtotime($ord->order_date))); ?></span>
                                        </div>
                                    </li>
                                    <?php if($ord->delivery_date!=null): ?>
                                    <li>
                                        <div class="left">
                                            <span>Ship Date</span>
                                        </div>
                                        <div class="right">
                                            <span><?php echo e(date('d M Y',strtotime($ord->delivery_date))); ?></span>
                                        </div>
                                    </li>
                                    <?php else: ?>
                                    <li>
                                        <div class="left">
                                            <span>Expected Date</span>
                                        </div>
                                        <div class="right">
                                            <span><?php echo e(date('d M Y',strtotime($ord->order_date. " +7 days"))); ?></span>
                                        </div>
                                    </li>
                                    <?php endif; ?>
                                    <li>
                                        <div class="left">
                                            <span>Shipping Address</span>
                                        </div>
                                        <div class="right">
                                            <ul class="order-detail">
                                                <li>Name:<?php echo e($ord->firstname); ?><?php echo e($ord->lastname); ?></li>
                                                <li>Address: <?php echo e($ord->address); ?></li>
                                                <li>Town:<?php echo e($ord->town); ?></li>
                                                
                                                <li>State:<?php echo e($ord->state); ?></li>
                                                <li>Country:<?php echo e($ord->country); ?></li>
                                                <li>Contact No:<?php echo e($ord->phone); ?></li>
                                            </ul>
                                    
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-3">
                             <?php if($ord->order_status=='Delivered'): ?>
                                <a href ="<?php echo e(route('ordersreturn',$ord->id)); ?>" type="button" class="btn btn-warning" value="<?php echo e($ord->id); ?>" >Return</a>
                                      
                             <?php elseif($ord->order_status=='Return'): ?>
                                     
      
                                <?php else: ?>

                               <a href ="<?php echo e(route('orderscancel',$ord->id)); ?>"  type="button" class="btn btn-info" value="<?php echo e($ord->id); ?>">Cancel</a>
                                <?php endif; ?>
                            
                          
                        </div>
                     </div>
                    
                     <!--<div class="order-table table-responsive-sm">
                        <table class="table mb-0 table-striped table-borderless">
                            <thead class="">
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Location</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>06 June 2022</td>
                                    <td>01.00 AM</td>
                                    <td>Shipped</td>
                                    <td>Chennai</td>
                                </tr>
                                <tr>
                                    <td>07 June 2022</td>
                                    <td>08.00 PM</td>
                                    <td>shipping info received</td>
                                    <td>Trichy</td>
                                </tr>
                                <tr>
                                    <td>08 June 2022</td>
                                    <td>010.00 AM</td>
                                    <td>Delivered</td>
                                    <td>Trichy</td>
                                </tr>
                                <tr>
                                    <td>
                                          <a href ="<?php echo e(route('ordersreturn',$ord->id)); ?>" type="button" class="btn btn-warning" value="<?php echo e($ord->id); ?>" >Return</a>
                                          
                                    </td>
                                   

                                    <td><a href ="<?php echo e(route('orderscancel',$ord->id)); ?>"  type="button" class="btn btn-info" value="<?php echo e($ord->id); ?>">Cancel</a></td>
                                   
                                </tr>
                            </tbody>
                        </table>
                    </div>-->
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                      
                      <?php else: ?>
                      <div class="left">
                        <span>No Record!! </span>
                    </div>
                      <?php endif; ?>
                  <?php else: ?>
                  <div class="left">
                    <span>No Record!! </span>
                </div>
                  <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- tracking page end -->


    <!-- footer start -->

    <?php echo $__env->make('website.front-end.newfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ktonline/public_html/oxygen.ktonline.in/resources/views/website/front-end/orders_details.blade.php ENDPATH**/ ?>