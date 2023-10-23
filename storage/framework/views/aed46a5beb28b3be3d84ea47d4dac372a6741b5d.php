
<?php echo $__env->make('website.front-end.newhead', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->make('website.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('website.partials.js.frontendjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('website.partials.js.cart_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- section start -->
    <style>
        .count1{
        outline: none;
        }
        </style>
    <section class="section-b-space">
        <div class="container">
            <div class="checkout-page">
                <div class="checkout-form">

                    
                    <form action="<?php echo e(route('order_success')); ?>">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-title">
                                    <h3>Billing Details</h3>
                                </div>
                                <div class="row check-out">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">First Name</div>
                                        <input type="text" name="firstname" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Last Name</div>
                                        <input type="text" name="lastname" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Phone</div>
                                        <input type="text" name="phone" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Email Address</div>
                                        <input type="text" name="email" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Country</div>
                                        <select name= "country">
                                            <option value="india">India</option>
                                            <option>South Africa</option>
                                            <option>United State</option>
                                            <option>Australia</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Address</div>
                                        <input type="text" name="address" value="address" placeholder="Street address">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Town/City</div>
                                        <input type="text" name="town" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <div class="field-label">State / County</div>
                                        <input type="text" name="state" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <div class="field-label">Postal Code</div>
                                        <input type="text" name="postelcode" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input type="checkbox" name="account-option" id="account-option"> &ensp;
                                        <label for="account-option">Create An Account?</label>
                                    </div>
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
                                        ?>
                                        <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <?php $total += $details['price'] * $details['qty']; $cart++;
                                           
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
                                            <li>GST
                                                <div class="shipping">
                                                    <div class="shopping-option">
                                                        <?php
                                                        $gst = 10;
                                                        ?>
                                                        <label for="free-shipping">Rs <?php echo e($gst); ?></label>
                                                    </div>
                                                    
                                                </div>
                                            </li>
                                            <li>
                                                
                                                <label for="html">Discount</label>
                                                <span class="count"><input type="text" style ="border: 0px solid; color:grey" class="discount1" id="discount1" value="0"></span>
                                                
                                                </li>
                                        </ul>
                                        <ul class="total">
                                            <li>Total 
                                                
                                                <span class="count"><input type="text" style ="border: 0px solid; color:grey" class="count1" id="count1" value="Rs <?php echo e($total +  $shipping); ?>"><span>
                                                
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="payment-box">
                                        <div class="upper-box">
                                            <div class="payment-options">
                                                <ul>
                                                    <li>
                                                        <div class="radio-option">
                                                            <input type="radio" name="payment-group" value ="onlinepayment" id="payment-1"
                                                                checked="checked">
                                                            <label for="payment-1">Online Payments<span
                                                                    class="small-text">Please send a check to Store
                                                                    Name, Store Street, Store Town, Store State /
                                                                    County, Store Postcode.</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="radio-option">
                                                            <input type="radio" name="payment-group" value ="cashondelivery" id="payment-2">
                                                            <label for="payment-2">Cash On Delivery<span
                                                                    class="small-text">Please send a check to Store
                                                                    Name, Store Street, Store Town, Store State /
                                                                    County, Store Postcode.</span></label>
                                                        </div>
                                                    </li>
                                                    <?php
                                                     
                                                     $grandtoto = $total +  $shipping;
                                                    //  dd($grandtoto);
                                                    ?>
                                                    
                                                    <label for="Coupon">Coupon Code</label>
                                                        
                                                    
                                                    
                                                    <input type="text"
                                                        class="discount-code" id="discountCode"
                                                        name="discountCode" size="15"
                                                        placeholder="Enter Coupon Code" /><button
                                                        id="btnDiscountAction" type="submit"
                                                        value="Apply Discount" class="btnDiscountAction">Apply Coupon</button>
                                                 
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <input type="hidden" value="<?php echo e($total); ?>" name="total" id="total">
                                        <input type="hidden" value="<?php echo e($shipping); ?>" name="shipping" id="shipping">
                                        <input type="hidden" value="<?php echo e($total +  $shipping); ?>" name="grandtotal" id="grandtotal">
                                        <input type="hidden" value="" name="discount2" id="discount2">
                                        <input type="hidden" value="<?php echo e($gst); ?>" name="gst" id="gst">
                                        <div class="text-end">
                                            
                                            <input class="btn-solid btn" type="submit" value="Place Order">
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
    
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
        // $(document).ready(function() {
            
          $("#btnDiscountAction").click(function(e) {
            e.preventDefault();
           
            var gtotal = $("#grandtotal").val();
            var discount = $("#discount1").val();
         alert(discount);
            var netamt = gtotal- discount;
            var dcode =  $("#discountCode").val();
           

            $.ajax({

            url: '<?php echo e(route("discountoffere")); ?>',
            type: "GET",
            data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                "dcode": dcode

            },

            dataType: "json",
            success: function (data) {
                 console.log(data.end_date);
                 var date = data.end_date;
              //  var da1 = date.toISOString();
                 alert(date);
                 var date1 = new Date();
                   var da =  date1.toJSON();
                 console.log(da);
                 alert(da);
                var discountamt = data.dis_amt;
                alert(discountamt);
                if(da !== data.end_date)
                {
                    $("#discountCode").hide();
                    $("#btnDiscountAction").hide();
                    alert('Coupan Expired');
                     var dis = $("#discount1").val(0);
                     //alert(dis);
                     var dis = $("#discount2").val(0);
                }
               else{
                $("#discount1").val(0);
                    $("#discount2").val(0);
            
               //  alert(discountamt);
                // $("#grandtotal").val(netamt);
                $("#discount1").val(discountamt);
                $("#discount2").val(discountamt);

             var dis = $("#discount1").val();
             var gtotal = $("#grandtotal").val();
             $("#grandtotal").val(gtotal);
            // alert(dis);
            // exit;
             if(isNaN(discountamt)){
                var netamt1 = gtotal;
               // alert(netamt1);
                
             }
              else
              {
                var netamt1 = gtotal-dis;
                // alert(netamt1);
               
              }

            
            //  alert(gtotal);
                $("#count1").val(netamt1);
            
            
            }
            },
            error: function (data) {
                console.log('Error:', data);
            }
            });


          });
        // });

</script>


<?php echo $__env->make('website.front-end.newfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH F:\mano\oxygen-new\resources\views/website/front-end/checkout.blade.php ENDPATH**/ ?>