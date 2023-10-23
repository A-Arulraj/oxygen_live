
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
    <!--section start-->
    <section class="cart-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="cart_counter">
                        <!--<div class="countdownholder">-->
                        <!--    Your cart will be expired in<span id="timer"></span> minutes!-->
                        <!--</div>-->
                        <a href="<?php echo e(route('checklogin')); ?>" class="cart_checkout btn btn-solid btn-xs">check out</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table cart-table">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">S.No</th>
                                <th scope="col">image</th>
                                <th scope="col">product name</th>
                                <th scope="col">price</th>
                                <th scope="col">Size</th>
                                <th scope="col">Color</th>
                                <th scope="col">quantity</th>
                                <th scope="col">action</th>
                                <th scope="col">total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0;$cart=0; $totaldt=0; ?>
                            
                                        <?php if(session('cart')): ?>
                                       <?php
                                        // $totaldt=0;
                                        ?>
                                        <?php $x=1;?>
                                        <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $total += (int)$details['price'] * (int)$details['qty']; $cart++;
                                        ?>
                            <tr>
                                <td><?php echo $x ++; ?></td>
                                <td>
                                    <?php
                                     $gh  = json_decode($details['image']);
                                     foreach ($gh as $key => $value) {
                                        if($key == 0)
                                        {?>
                                    <a href="#"><img src="<?php echo e(asset('assets/images/products/detail') . '/' . $value); ?>" alt=""></a>
                                      <?php
                                        }
                                      
                                     }
                                    ?>
                                </td>
                                <td><a href="#"><?php echo e($details['name']); ?> </a>
                                    <div class="mobile-cart-content row">
                                        <div class="col">
                                            <div class="qty-box">
                                                <div class="input-group">
                                                    <input type="text" name="quantity" class="form-control input-number"
                                                        value="1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h2 class="td-color">Rs <?php echo e($details['price']); ?></h2>
                                        </div>
                                        <div class="col">
                                            <h2 class="td-color"><a href="#" class="icon"><i class="ti-close"></i></a>
                                            </h2>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h2 id="product">Rs <?php echo e($details['price']); ?></h2>
                                </td>
                                <td>
                                    <h2> <?php echo e($details['size']); ?></h2>
                                </td>
                                <td>
                                    <h2> <?php echo e($details['color']); ?></h2>
                                </td>
                                <td>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <div class="input-group">
                                                 <span class="input-group-btn">
                                                    <button type="button" class="btn btn-danger btn-number" data-type="minus" data-field="quant[2]" onclick="addqnty('<?php echo e($details['pid']); ?>','Minus')" style="font-size: 15px;padding: 12px;">
                                                        <span class="fa fa-minus"></span>
                                                    </button>
                                                </span>
                                                <input type="text" name="quant[2]" id="quantity<?php echo e($details['pid']); ?>" value="<?php echo e($details['qty']); ?>" class="form-control input-number" min="1" max="100" readonly style="font-size: 15px;">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]" onclick="addqnty('<?php echo e($details['pid']); ?>','Add')" style="font-size: 15px;padding: 12px;">
                                                        <span class="fa fa-plus"></span>
                                                    </button>
                                                </span>
        
                                              </div>
                                            
                                            

                                            <!--<input type="number" name="quantity" class="form-control input-number"-->
                                            <!--    value="<?php echo e($details['qty']); ?>">-->
                                        </div>
                                    </div>
                                </td>
                                <td><a href="#" class="icon" onclick="deletecart(<?php echo e($details['pid']); ?>)"><i class="ti-close"></i></a></td>
                                <td>
                                    <h2 id="out" class="td-color">Rs <?php echo e($totaldetails = (int)$details['price'] * (int)$details['qty']); ?></h2>
                                <?php
                                 $totaldt += $totaldetails;
                                ?>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <tr data-id="1">
                                <td colspan="5">
                                    <center><i class="d-icon-bag"></i> Your Cart is Empty</center>
                                </td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                        
                        
                    </table>
                    <div class="table-responsive-md">
                        <table class="table cart-table ">
                            <tfoot>
                                <tr>
                                    <td>total price :</td>
                                    <td>
                                        <h2>Rs.<?php echo e($totaldt); ?></h2>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row cart-buttons">
                <?php
                $se = session('username');
                // @dd($se);
                // 
                    ?>
                <div class="col-6"><a href="<?php echo e(url('/')); ?>" class="btn btn-solid">continue shopping</a></div>
                <?php if(!empty(session('userId'))): ?>
                
                <div class="col-6"><a href="<?php echo e(route('checkout')); ?>" class="btn btn-solid">CheckOut</a></div>
                <?php else: ?>
                
                <div class="col-6"><a href="<?php echo e(route('checklogin')); ?>" class="btn btn-solid">Login to Continue...</a></div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!--section end-->
    <?php echo $__env->make('website.partials.js.frontendjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(url('frontend_assets/js/cart.js')); ?>"></script>
 
    <script>
        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>
     <script>
    const inputBox = document.getElementById('inputBox');
    const h1Content  = document.getElementById('product').textContent;
     // Use a regular expression to extract numbers
        var numbersArray = h1Content.match(/\d+/g);

        // Convert the array of strings to an array of numbers
        var product = numbersArray.map(Number);
     const out = document.getElementById('out');
     
     const addButton = document.getElementById('addButton');
     
     const subtractButton = document.getElementById('subtractButton');
    
     const incrementValue = 1; // You can change this to the value you want to add/subtract

     addButton.addEventListener('click', () => {
         
      const currentValue = parseFloat(inputBox.value);
      //  const productValue = parseFloat(product.value);
       const h1Content  = document.getElementById('product').textContent;
      // Use a regular expression to extract numbers
        var numbersArray = h1Content.match(/\d+/g);

      // Convert the array of strings to an array of numbers
        var productValue = numbersArray.map(Number);
      const newValue = currentValue + incrementValue;
      //alert(newValue);
      // alert(product);
      inputBox.value = newValue; // Update the input value
      out.textContent = newValue * productValue;
     
      // out.value = newValue * productValue; // Update the product value
    });

    subtractButton.addEventListener('click', () => {
        alert('test');
      const currentValue = parseFloat(inputBox.value);
      // const productValue = parseFloat(product.value);
        const h1Content  = document.getElementById('product').textContent;
     // Use a regular expression to extract numbers
        var numbersArray = h1Content.match(/\d+/g);

        // Convert the array of strings to an array of numbers
        var productValue = numbersArray.map(Number);
      const newValue = currentValue - incrementValue;
      inputBox.value = newValue;
      out.textContent = newValue * productValue;
    //  out.value = newValue * productValue; // Update the product value
     
    });
    
function addqnty(id, type) {
    var product_size = $('#product_size' + id).val();
    var product_qnty = $('#quantity' + id).val();
    //alert(product_qnty);
    if (product_size == "") {
        swal("Warning!", "Please select Size ", "error");
    } else {
        if (type == "Add") {
            product_qnty = parseInt(product_qnty) + 1;

        } else {
            product_qnty = parseInt(product_qnty) - 1;

        }

        $('#quantity' + id).val(product_qnty);
        if (product_qnty == 1) {

            addproduct(id)
        }
        if (product_qnty > 1) {

            updatecart(id, product_qnty)
        }
        if (product_qnty == 0) {
            $('#addcart2_' + id).hide();
            $('#addcart1_' + id).show();
            deletecart(id);
        }
    }

}

function updatecart(id, val) {

    var product_id = id;
    var product_qnty = val;
    //alert(val);
    if (product_id != '' && product_qnty != '') {
        $.ajax({

            url: '<?php echo e(url("/updatecart")); ?>',
            type: "POST",
            data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                "product_id": product_id,
                "product_qnty": product_qnty

            },

            dataType: "json",
            success: function(data) {
                console.log(data);
               // getcart();
            location.reload();
                $('#loading').show();
            },
            error: function(data) {
                console.log('Error:', data);
            }
        });
    } else {

        swal("Warning!", "Please select Size and Quantity", "error");

    }

}
  </script>
<?php echo $__env->make('website.front-end.newfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ktonline/public_html/oxygen.ktonline.in/resources/views/website/front-end/cart.blade.php ENDPATH**/ ?>