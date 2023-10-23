
<?php echo $__env->make('website.front-end.newhead', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->make('paritials.website.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('website.partials.js.frontendjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('paritials.js.userwebsite.cart_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <?php

    use App\Models\order\Orders;
    use App\Models\order\ordersproduct;

   // dd($orders_id);
    $order = Orders::where('orders_id', $orders_id)->get();
    //dd($order);
    $order_pro = ordersproduct::where('order_id', $orders_id)->get();
    //dd($order_pro);

    ?>
    <!-- tracking page start -->
    <section class="tracking-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>status for order no: <?php echo e($order[0]->orders_id); ?></h3>
                    <div class="row border-part">
                        <div class="col-xl-2 col-md-3 col-sm-4">
                            <div class="product-detail">
                                <img src="../assets/images/fashion/pro/1.jpg" class="img-fluid blur-up lazyload" alt="">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-sm-8">
                            <div class="tracking-detail">
                                <ul>
                                   
                                    <li>
                                        <div class="left">
                                            <span>Customer number</span>
                                        </div>
                                        <div class="right">
                                            <span><?php echo e($order[0]->orders_id); ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left">
                                            <span>order date</span>
                                        </div>
                                        <div class="right">
                                            
                                            <span><?php echo e(date("Y-m-d", strtotime($order[0]->order_date))); ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left">
                                            <span>Ship Date</span>
                                        </div>
                                        <div class="right">
                                            <span>08 June 2022</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left">
                                            <span>Shipping Address</span>
                                        </div>
                                        <div class="right">
                                            <span>Amogam Apartment<br>568, First Floor, Crowfort<br>Trichy 620012</span>
											
                                    
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left">
                                            <span>carrier</span>
                                        </div>
                                        <div class="right">
                                            <span>FedEx</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left">
                                            <span>carrier tracking number</span>
                                        </div>
                                        <div class="right">
                                            <span>656974541515484</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                       
                    </div>
                    <div class="wrapper">
                        <div class="arrow-steps clearfix">
                            <div class="step done"> <span> order placed</span> </div>
                            <div class="step current"> <span>preparing to ship</span> </div>
                            <div class="step"><span> shipped</span> </div>
                            <div class="step"><span>delivered</span> </div>
                        </div>
                    </div>
                    <div class="order-table table-responsive-sm">
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tracking page end -->


    <!-- footer start -->

    <?php echo $__env->make('website.front-end.newfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ktonline/public_html/oxygen.ktonline.in/resources/views/website/front-end/order_tracking.blade.php ENDPATH**/ ?>