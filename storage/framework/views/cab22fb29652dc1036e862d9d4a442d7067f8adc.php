
<?php echo $__env->make('website.front-end.newhead', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->make('paritials.website.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="checkout-page">
                <div class="checkout-form">

                    
                    <?php if(session('username')): ?>
                    <form>
                        <div class="row">


                            
                            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                                <div class="checkout-progress-wrap">
                                    <ul class="steps">
                                        <li class="step 1st">
                                            <div class="checkout-act active">
                                                <h3 class="title-box"><span class="number">1</span>Customer</h3>
                                               
                                                
                                                <div class="box-content">
                                                    <p class="txt-desc">Thank You for login, you can and access your Accounts, orders, rewards and ect...</p>
                                                    <p class="msg">Login with different an account? <a href="<?php echo e(url('/usersignin')); ?>" class="link-forward">Sign-out now</a></p>
                                                </div>
                                                
                                            </div>
                                        </li>
                                        
                                        
    
                                    </ul>
                                </div>
                            </div>


                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-details">
                                    <div class="order-box">
                                        <div class="title-box">
                                            <div>Product <span>Total</span></div>
                                        </div>
                                        <ul class="qty">

                                            <?php $total = 0;$cart=0; ?>
                                        <?php if(session('cart')): ?>
                                       <?php
                                        $totaldt=0;
                                        $shipping=0;
                                        ?>
                                        <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <?php $total += $details['price'] * $details['qty']; $cart++;
                                            //  $shipping = 40;
                                            ?>

                                            <li><?php echo e($details['name']); ?> × <?php echo e($details['qty']); ?> <span>Rs <?php echo e($details['price'] * $details['qty']); ?></span></li>
                                            
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                         <?php else: ?>
                                         <?php endif; ?>
                                        </ul>
                                        <ul class="sub-total">
                                            <li>Subtotal <span class="count">Rs<?php echo e($total); ?> </span></li>
                                             <li>Shipping
                                                <div class="shipping">
                                                    <div class="shopping-option">
                                                        <?php
                                                        $shipping = 40;
                                                        ?>    
                                                       
                                                        <label for="free-shipping">Rs <?php echo e($shipping); ?></label>
                                                    </div>
                                                    
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="total">
                                            <li>Total <span class="count">Rs <?php echo e($total +  $shipping); ?></span></li>
                                        </ul>
                                    </div>
                                    <div class="payment-box">
                                        <div class="upper-box">
                                            <div class="payment-options">
                                                <ul>
                                                    <li>
                                                        <div class="radio-option">
                                                            <input type="radio" name="payment-group" id="payment-1"
                                                                checked="checked">
                                                            <label for="payment-1">Online Payments<span
                                                                    class="small-text">Please send a check to Store
                                                                    Name, Store Street, Store Town, Store State /
                                                                    County, Store Postcode.</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="radio-option">
                                                            <input type="radio" name="payment-group" id="payment-2">
                                                            <label for="payment-2">Cash On Delivery<span
                                                                    class="small-text">Please send a check to Store
                                                                    Name, Store Street, Store Town, Store State /
                                                                    County, Store Postcode.</span></label>
                                                        </div>
                                                    </li>
                                                  
                                                </ul>
                                            </div>
                                        </div>
                                <div class="text-end"><a href="<?php echo e(route('order_success')); ?> " class="btn-solid btn">Place Order</a></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                    <?php else: ?>
                    <div class="box-content">
                        <p class="txt-desc">Sign in to your account and checkout faster Or include the registration form on the login page.</p>
                        <div class="login-on-checkout">

                            <p class="form-row">
                                <a href="<?php echo e(url('/usersignin')); ?>" type="button" class="link-forward">Continue To Login</a>
                                
                            </p>


                        </div>
                    </div>


                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <div class="checkout-details">
                            <div class="order-box">
                                <div class="title-box">
                                    <div>Product <span>Total</span></div>
                                </div>
                                <ul class="qty">

                                    <?php $total = 0;$cart=0; ?>
                                <?php if(session('cart')): ?>
                               <?php
                                $totaldt=0;
                                $shipping=0;
                                ?>
                                <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <?php $total += $details['price'] * $details['qty']; $cart++;
                                    //  $shipping = 40;
                                    ?>

                                    <li><?php echo e($details['name']); ?> × <?php echo e($details['qty']); ?> <span>Rs <?php echo e($details['price'] * $details['qty']); ?></span></li>
                                    
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 <?php else: ?>
                                 <?php endif; ?>
                                </ul>
                                <ul class="sub-total">
                                    <li>Subtotal <span class="count">Rs<?php echo e($total); ?> </span></li>
                                     <li>Shipping
                                        <div class="shipping">
                                            <div class="shopping-option">
                                                <?php
                                                $shipping = 40;
                                                ?>    
                                               
                                                <label for="free-shipping">Rs <?php echo e($shipping); ?></label>
                                            </div>
                                            
                                        </div>
                                    </li>
                                </ul>
                                <ul class="total">
                                    <li>Total <span class="count">Rs <?php echo e($total +  $shipping); ?></span></li>
                                </ul>
                            </div>
                            <div class="payment-box">
                                <div class="upper-box">
                                    <div class="payment-options">
                                        <ul>
                                            <li>
                                                <div class="radio-option">
                                                    <input type="radio" name="payment-group" id="payment-1"
                                                        checked="checked">
                                                    <label for="payment-1">Online Payments<span
                                                            class="small-text">Please send a check to Store
                                                            Name, Store Street, Store Town, Store State /
                                                            County, Store Postcode.</span></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-option">
                                                    <input type="radio" name="payment-group" id="payment-2">
                                                    <label for="payment-2">Cash On Delivery<span
                                                            class="small-text">Please send a check to Store
                                                            Name, Store Street, Store Town, Store State /
                                                            County, Store Postcode.</span></label>
                                                </div>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                </div>
                      
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
    <?php echo $__env->make('website.partials.js.frontendjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('website.front-end.newfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('paritials.js.userwebsite.cart_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\mano\oxygen-new\resources\views/website/front-end/checklogin.blade.php ENDPATH**/ ?>