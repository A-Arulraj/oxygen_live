
@include('website.front-end.newhead')
 
{{-- @include('website.front-end.newheader') --}}
   <!-- header end -->


   @include('website.partials.js.frontendjs')
   @include('paritials.js.userwebsite.cart_js')
   @include('website.partials.css.frontendcss');
  
   @include('paritials.website.header')

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
    <!--section start-->
    <section class=" section-b-space" style="margin-top: 10%;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="cart_counter">
                        <!--<div class="countdownholder">-->
                        <!--    Your cart will be expired in<span id="timer"></span> minutes!-->
                        <!--</div>-->
                        <a href="{{ route('checklogin') }}" class="cart_checkout btn btn-solid btn-xs">check out</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table  no-wrap">
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
                            @php $total = 0;$cart=0; $totaldt=0; @endphp
                            {{-- @dd(session('cart')); --}}
                                        @if(session('cart'))
                                       @php
                                        // $totaldt=0;
                                        @endphp
                                        @php $x=1;@endphp
                                        @foreach(session('cart') as $id => $details)
                                        @php $total += (int)$details['price'] * (int)$details['qty']; $cart++;
                                        @endphp
                            <tr>
                                <td><?php echo $x ++; ?></td>
                                <td>
                                    <?php
                                     $gh  = json_decode($details['image']);
                                     foreach ($gh as $key => $value) {
                                        if($key == 0)
                                        {?>
                                    <a href="#"><img src="{{ asset('assets/images/products/detail') . '/' . $value }}" alt=""></a>
                                      <?php
                                        }
                                      
                                     }
                                    ?>
                                </td>
                                <td><a href="#">{{ $details['name'] }} </a>
                                    <!-- <div class="mobile-cart-content row">
                                        <div class="col">
                                            <div class="qty-box">
                                                <div class="input-group">
                                                    <input type="text" name="quantity" class="form-control input-number"
                                                        value="1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                           Rs {{ $details['price'] }}
                                        </div>
                                        <div class="col">
                                           <a href="#" class="icon"><i class="ti-close"></i></a>
                                            
                                        </div>
                                    </div> -->
                                </td>
                                <td>
                                    Rs {{ $details['price'] }}
                                </td>
                                <td>
                                     {{ $details['size'] }}
                                </td>
                                <td>
                                    {{ $details['color'] }}
                                </td>
                                <td>
                                    <div class="qty-box">
                                        
                                            <div class="input-group"  style="width: 70%;">
                                                 <span class="input-group-btn" >
                                                    <button type="button" class="btn btn-danger btn-number" data-type="minus" data-field="quant[2]" onclick="addqnty('{{$details['pid']}}','Minus')" style="font-size: 15px;padding: 12px;">
                                                        <span class="fa fa-minus"></span>
                                                    </button>
                                                </span>
                                                <input type="text" name="quant[2]" id="quantity{{$details['pid']}}" value="{{ $details['qty'] }}" class="form-control input-number" min="1" max="100" readonly style="font-size: 15px;">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]" onclick="addqnty('{{$details['pid']}}','Add')" style="font-size: 15px;padding: 12px;">
                                                        <span class="fa fa-plus"></span>
                                                    </button>
                                                </span>        
                                              </div>  
                                            <!--<input type="number" name="quantity" class="form-control input-number"-->
                                            <!--    value="{{ $details['qty'] }}">-->
                                        
                                    </div>
                                </td>
                                <td><a href="#" class="icon" onclick="deletecart({{$details['pid']}})"><i class="ti-close"></i></a></td>
                                <td>
                                    <strong id="out" class="td-color">Rs {{ $totaldetails = (int)$details['price'] * (int)$details['qty'] }}</strong>
                                <?php
                                 $totaldt += $totaldetails;
                                ?>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr data-id="1">
                                <td colspan="5">
                                    <center><i class="d-icon-bag"></i> Your Cart is Empty</center>
                                </td>
                            </tr>
                            @endif
                        </tbody>                                         
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>total price :</td>
                                    <td>
                                        <h5>Rs.{{ $totaldt }}</h5>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="table-responsive-md"> 
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $se = session('username');
                ?>
                <div class="col-md-6">
                    <a href="{{ url('/') }}" class="btn btn-solid">Continue Shopping</a>
                </div>
                @if(!empty(session('userId')))
                <div class="col-md-6 text-right">
                    <a href="{{ route('checkout') }}" class="btn btn-solid float-right">Checkout</a>
                </div>
                @else
                <div class="col-md-6 text-right">
                    <a href="{{ route('checklogin') }}" class="btn btn-solid">Login to Continue...</a>
                </div>
                @endif
            </div>
        </div>
    </section>
    <!--section end-->
    @include('website.partials.js.frontendjs')
    <script src="{{ url('frontend_assets/js/cart.js') }}"></script>
 
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

            url: '{{url("/updatecart")}}',
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
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
@include('website.front-end.newfooter')