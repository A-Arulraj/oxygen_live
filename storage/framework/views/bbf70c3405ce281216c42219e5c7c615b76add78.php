
<style>
    .img-thumb {
  max-height: 75px;
  border: 2px solid none;
   border-radius:3px;
  padding: 1px;
  cursor: pointer;
}
.img-thumb-wrapper {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid none;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
.btn-productimg {
    position: relative;
    overflow: hidden;
}
.btn-productimg input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;   
    cursor: inherit;
    display: block;
}
    </style>

<div class="form-group" style="background-color:#80808036;">
    <div class="row tab-border" id="p1" style="">
        <div class="container-fluid  w-100">
            <div class="bg-light">
                <div class="col-xl-12 p-0 ">
                </div>
                <div class="col-xl-12">
                    <div class="tab-content nav-material" id="top-tabContent"
                        style="padding:20px; background-Color:#fff;">
                        <div class="tab-pane fade active show" id="top-home" role="tabpanel"
                            aria-labelledby="top-home-tab">
                            <div class="col-xl-12">
                                <div class="col-md-12" style="" id="dis1">
                                    <div class="form-group p-1">
                                        <div class="row">
                                            <div id="append" style="">
                                                <span id="s1" class="badge bg-secondary text-white"></span>
                                                &nbsp;
                                                <span class="badge bg-secondary text-white" id="s2"></span>
                                            </div>
                                            <div data-role="dynamic-fields">
                                                <div class="form-inline form-row">
                                                    <div class="container" id="product_details"> 
                                                            <?php $__currentLoopData = $productdetailss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $productdetails): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($key > 0): ?>
                                                             <hr style="color:black;size:3px;">
                                                             <?php endif; ?>                                                                                                 
                                                                                                                 
                                                        
                                                        <div class="w row">                                                                  
                                                            <div class="col-md-3">                                                            
                                                                <div class="form-group flex">
                                                                    
                                                                   
                                                                    
                                                                    <input type="hidden" name="product_details_id[]" placeholder=""
                                                                        class="form-control" required  value=<?php echo e($productdetails->id); ?>>
                                                                <?php
                                                                // $p_imgs = json_decode($productdetails->product_detail_image); 
                                                                 //dd($p_imgs);                                                                
                                                                ?>

                                                                                                                            
                                                                    <div class="col-md-3">
                                                                        <span class="btn btn-primary btn-productimg"> 
                                                                            <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                                                           <input class="form-control add_product" type="file" onchange="previewmainImg(this)" id="p_mainimg<?php echo e($key); ?>" name="mainimg[]"  accept="image/*">                                                                          
                                                                        </span><label class="text-secondary fw-bold">Upload main image</label>
                                                                    </div>
                                                                
                                                                
                                                                    <div class="col-md-3">
                                                                        <span class="btn btn-primary btn-productimg"  > 
                                                                            <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                                                            <input class="form-control add_product" type="file" onchange="previewsubImg1(this)" id="subimg1<?php echo e($key); ?>" name="subimg1[]"  accept="image/*">
                                                                         </span><label class="text-secondary">Upload Sub image1</label>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-3">
                                                                        <span class="btn btn-primary btn-productimg"  >
                                                                            <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                                                           <input class="form-control add_product" type="file" onchange="previewsubImg2(this)" id="subimg2<?php echo e($key); ?>" name="subimg2[]"  accept="image/*">
                                                                        </span><label class="text-secondary">Upload Sub image2</label>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-3">
                                                                        <span class="btn btn-primary btn-productimg" >
                                                                            <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                                                           <input class="form-control add_product" type="file" onchange="previewsubImg3(this)" id="subimg3<?php echo e($key); ?>" name="subimg3[]"  accept="image/*">
                                                                        </span><label class="text-secondary">Upload Sub image2</label>
                                                                    </div>

                                                                    
                                                                </div>
                                                            
                                                                    <!--      <label class="text-center border text-dark p-2" style=""><span
                                                                                class="">Upload Main Image</span>
                                                                            <input type="file" class="form-control" style="display:none "
                                                                                onchange="img(this)" id="im1"
                                                                                name="product_detail_image[]" accept="image/*">
                                                                                <input type="hidden" name="nproducts[]" value="1" >
                                                                    </label>  -->
                                                            </div>
                                
                                                            <div class="col-md-9">                                                            
                                                                <div class="row">                                                             
                                                                    <div class="col-md-2">
                                                                    <label style="color:gray"for="javascript">Color</label><br>
                                                                    <select class="form-select form-select-lg text-secondary"
                                                                    name="attrcolor[]" id="attrcolor" required>

                                                                    <?php $__currentLoopData = $attribute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    
                                                                
                                                                        <?php if($attri->attribute_name == 'color'): ?>

                                                                            <?php
                                                                            //    dd($attri->value);
                                                                            $val = JSON_decode($attri->value);
                                                                            //  dd($val);
                                                                            //  print_r($val[0]->id);exit();
                                                                                $count = count($val);
                                                                            
                                                                        
                                                                                for($i=0; $i < $count ; $i++) {
                                                                                    ?>

                                                                                    <option id=""
                                                                                    value="<?php echo e($val[$i]); ?>" <?php echo e(($val[$i] == $productdetails->color)?'selected':''); ?>>
                                                                                    <?php echo e($val[$i]); ?>

                                                                                    </option>
                                                                                    <?php
                                                                                }
                                                                            ?>
                                                                        <?php endif; ?>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                    </div>                                                          
                                                                    <div class="col-md-2">
                                                                        <label style="color:gray"for="javascript">Size</label><br>
                                                                        <select class="form-select form-select-lg text-secondary"
                                                                        name="attrsize[]" id="attrsize" required>
                                                                        <?php $__currentLoopData = $attribute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php if($attri->attribute_name == 'size'): ?>
                                                                            <?php
                                                                            //    dd($attri->value);
                                                                            $val = JSON_decode($attri->value);
                                                                            //  dd($val);
                                                                            //  print_r($val[0]->id);exit();
                                                                                $count = count($val);
                                                                            
                                                                        
                                                                                for($i=0; $i < $count ; $i++) {
                                                                                    ?>
                                                                                    <option id=""
                                                                                    value="<?php echo e($val[$i]); ?>" <?php echo e(($val[$i] == $productdetails->size)?'selected':''); ?>>
                                                                                    <?php echo e($val[$i]); ?>

                                                                                    </option>
                                                                                    <?php
                                                                                }
                                                                            ?>
                                                                        <?php endif; ?>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                      </select>
                                                                    </div>
                                                              
                                                                    <div class="col-md-2">
                                                                        <label style="color:gray"for="javascript">Retail price</label><br>

                                                                        <input type="text" name="retail_price[]"
                                                                            placeholder="Retail Price" class="form-control" required value="<?php echo e($productdetails->retail_price); ?>">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <label style="color:gray"for="javascript">Selling price</label><br>
                                                                        <input type="text" name="selling_price[]"
                                                                            placeholder="Selling Price" class="form-control" required value="<?php echo e($productdetails->selling_price); ?>">
                                                                    </div>
                                                                    <?php echo e($qtyinc=$key + 1); ?>

                                                                    <div class="col-md-2">
                                                                        <label id="lowstack<?php echo e($qtyinc); ?>" style="color:gray"for="javascript">Quantity</label><br>
                                                                        <input type="number" class="qty form-control" id="qty<?php echo e($qtyinc); ?>"
                                                                            placeholder="Qty" name="quantity[]" required value="<?php echo e($productdetails->quantity); ?>">
                                                                    </div>  
                                                                </div>
                                                        
                                                            <div class="row mt-3">
                                                                <div class="col-md-2">
                                                                    <label style="color:gray"for="javascript">SKU</label><br>
                                                                    <input type="text" name="sku[]" placeholder="SKU"
                                                                        class="form-control" required  value="<?php echo e($productdetails->sku); ?>">
                                                                        
                                                                </div> 
                                                               
                                                                <div class="col-md-2">
                                                                    <label style="color:gray"for="javascript">Return</label><br>
                                                                    <select class="form-select form-select-lg text-secondary"
                                                                    value="<?php echo e($productdetails->return_replace); ?>" name="return_replace[]" required>
                                                                        <?php if($productdetails->return_replace == 1) { ?>
                                                                        <option selected value="1">
                                                                            Return /
                                                                            Replacement
                                                                        </option>
                                                                        <option value="2">
                                                                            Return
                                                                        </option>
                                                                        <option value="3">
                                                                            Replacement
                                                                        </option>
                                                                        <option value="4">
                                                                            NA
                                                                        </option>
                                                                        <?php } ?>
                                                                        <?php if($productdetails->return_replace == 2) { ?>
                                                                        <option selected value="2">
                                                                            Return
                                                                        </option>
                                                                        <option value="1">
                                                                            Return /
                                                                            Replacement
                                                                        </option>
                                                                        <option value="3">
                                                                            Replacement
                                                                        </option>
                                                                        <option value="4">
                                                                            NA
                                                                        </option>
                                                                        <?php } ?>
                                                                        <?php if($productdetails->return_replace == 3) { ?>
                                                                        <option selected value="3">
                                                                            Replacement
                                                                        </option>
                                                                        <option value="1">
                                                                            Return /
                                                                            Replacement
                                                                        </option>
                                                                        <option value="2">
                                                                            Return
                                                                        </option>
                                                                        <option value="4">
                                                                            NA
                                                                        </option>
                                                                        <?php } ?>
                                                                        <?php if($productdetails->return_replace == 4) { ?>
                                                                            <option  value="3">
                                                                                Replacement
                                                                            </option>
                                                                            <option value="1">
                                                                                Return /
                                                                                Replacement
                                                                            </option>
                                                                            <option value="2">
                                                                                Return
                                                                            </option>
                                                                            <option selected value="4">
                                                                                NA
                                                                            </option>
                                                                            <?php } ?>
                                                                    </select>
                                                                </div>
                                
                                                               
                                
                                                                <div class="col-md-2">
                                                                    <label style="color:gray"for="javascript">Return Days</label><br>
                                                                    <input type="text" name="r_days[]" placeholder="Days"
                                                                        class="form-control" required value="<?php echo e($productdetails->r_days); ?>">
                                                                </div>  
                                                                <?php echo e($inc=$key + 1); ?>

                                                                <div class="col-md-2">
                                                                    <label  style="color:gray"for="javascript">Low Stack</label><br>
                                                                    <input type="number" name="low_stock_limit[]" id="low_stock_limit<?php echo e($inc); ?>" 
                                                                        placeholder="Low Stock Limit" class="low_stock_limit form-control" required value="<?php echo e($productdetails->low_stock_limit); ?>">  
                                                                </div>  
                                                                   
                                                                <?php if($key > 0): ?>

                                                                <div class="col-md-1 ">
                                                                    <button  class="remove_field h6 btn btn-sm bg-warning m-0" id="remove_field<?php echo e($inc); ?>" value= "<?php echo e($productdetails->id); ?>" >remove</button>

                                                                    
                                                                    
                                                                        

                                                                    

                                                                     <input type="hidden" name="pro_id" id="pro_id<?php echo e($inc); ?>"
                                                                        placeholder="" class="form-control" required value="<?php echo e($productdetails->id); ?>">
                                                                </div>
                                                                <?php endif; ?>
                                                                    
                                                            </div> 
                                                            </div>  

                                                            
                                                            <?php
                                                                 $p_imgs = json_decode($productdetails->product_detail_image); 
                                                                 //dd($p_imgs);                                                                
                                                            ?>

                                                            <?php $__currentLoopData = $p_imgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ke => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($ke == 0): ?>
                                                            <div class='col-md-2'><div class="img-thumb-wrapper card shadow">
                                                                <img class="img-thumb" id="mainr<?php echo e($key); ?>"  src="<?php echo e(url('assets/images/products/detai1/'.$val)); ?>"   />
                                                                <input type="hidden" name="old_mainimg[]" value="<?php echo e($val); ?>" accept="image/*">
                                                                <br/><span class="removeimg" id="removemainimg" value="mainimg">Remove</span>
                                                            </div></div>
                                                            <?php endif; ?>
                                                            <?php if($ke == 1): ?>
                                                            <div class='col-md-2'><div class="img-thumb-wrapper card shadow">
                                                                <img class="img-thumb" id="sub1r<?php echo e($key); ?>"  src="<?php echo e(url('assets/images/products/detai1/'.$val)); ?>"   />
                                                                <input type="hidden" name="old_subimg1[]" value="<?php echo e($val); ?>" accept="image/*">
                                                                <br/><span class="removeimg" id="removesub1img" value="subimg1">Remove</span>
                                                            </div></div>
                                                            <?php endif; ?>
                                                            <?php if($ke == 2): ?>
                                                            <div class='col-md-2'><div class="img-thumb-wrapper card shadow">
                                                                <img class="img-thumb" id="sub2r<?php echo e($key); ?>"  src="<?php echo e(url('assets/images/products/detai1/'.$val)); ?>"   />
                                                                
                                                                <input type="hidden" name="old_subimg2[]" value="<?php echo e($val); ?>" accept="image/*">
                                                                <br/><span class="removeimg" id="removesub2img" value="subimg2">Remove</span>
                                                            </div></div>
                                                            <?php endif; ?>
                                                            <?php if($ke == 3): ?>
                                                            <div class='col-md-2'><div class="img-thumb-wrapper card shadow">
                                                                <img class="img-thumb" id="sub3r<?php echo e($key); ?>"  src="<?php echo e(url('assets/images/products/detai1/'.$val)); ?>"   />
                                                                <input type="hidden" name="old_subimg3[]" value="<?php echo e($val); ?>" accept="image/*">
                                                                <br/><span class="removeimg" id="removesub3img" value="subimg3">Remove</span>
                                                            </div></div>
                                                            <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div> 
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                                            
                                                
                                                <div class="col-md-12">
                                                    <div class="input_fields_wrap" >
                                                            
                                                    </div>
                                                </div>
                                                <div style="float:right">
                                                <button  type="button" id="add_m" onclick="addmore()" name="addproduct[]" value="<?php echo e($key); ?>" class='btn btn-xs bg-gradient-dark   btn-primary mb-3 mt-3' id="a1"  >ADD More </button>
                                                </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="more-products"></div>
                        </div>
                            <div class="text-start mt-3">
                                
                                
                            </div>                          
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!------ Include the above in your HEAD tag ---------->





<script>
 $('.new_Btn').click(function() {
  $('#html_btn').click();
}); 
         
                    

        //(quantity < lowstack)? $('#lowstack'+ind).html('<p style="color:red">Minimum quantity</p>'):alert(maxqty);
        //alert(quantity);
        //     alert(lowstack);
            // var lowstack = $(".low_stock_limit").attr('id');
            //     alert(lowstack);
        $(document).ready(function() {

        $(".low_stock_limit").each(function(index){
        var ind = index+1;
        var quantity = $("#qty"+ind).val();           
       //alert(typeof(quantity));
       
        var lowstack = $("#low_stock_limit"+ind).val();
        if(+quantity > +lowstack)
        {
           // document.write('<p style="color:green">Maximum quantity</p>');
            //alert(quantity);
           $('#lowstack'+ind).html('<p style="color:green">Qty In Stock</p>');

             
        }
        else{
          //  document.write('<p style="color:green">Minimum quantity</p>');
            //alert(lowstack);
            $('#lowstack'+ind).html('<p style="color:red">Qty Low Stock</p>');
        }

    });
        
 
});


        $(document).on('click', '.remove_field', function(e){
            e.preventDefault();
            var id = $(this).attr('id');
    //alert(id);

     var ids = $(this).val();
     //alert(ids);
    // $(".remove_field").each(function(index){
    //     var a = $("#pro_id_"+index).val();
    
    // });
        // $(this).html(index+1);
  let split_id  = id.split("remove_field");
  
           let new_id  =split_id[1];
    //alert(new_id);
           
  var pid = $("#pro_id"+new_id).val();
  var url = "<?php echo e(route('productdetailsdelete', ":ad_id")); ?>";
        url = url.replace(":ad_id", ids);
  
alert(url);
    $.ajax({
    
     url:url,       
     type: "post",
     _token: "csrf",
     dataType: 'json',
     success: function (response) {
          console.log(response);
       // alert(response);
       if(response.status == 404)
       {
         alert('test');
       $('successmessage').html('');
       $('successmessage').addClass('alert alert-danger');
       $('successmessage').text(response.message);
       }

        else{
            //alert(response);
            $("#product_details").load();
            $("#top-home").load();
            //$( "#product_details" ).load(window.location.href + " #product_details" );


        }
    }

   

});

});


    </script>

<script>






// $(document).on("click", ".remove_field", function(e) { //user click on remove text
//    // alert(remove_field);
//     $(".remove_field").each(function(index){
//         var a = $("#pro_id_"+index).val();
//    // alert(a);
//     });
        // $(this).html(index+1);


  
    
    //   var b = JSON.stringify(a);
      
      //alert(a);
   // alert("Value: " + $(this).val(''););
            // e.preventDefault();
            // $(this).closest('.w').remove();
            // x--;
         
    
        // })
      
    // Dynamically add-on fields
    // function changelowstack()
    // {
    //     alert('test');
    // }
    

$(function() {
    // Remove button click
    $(document).on(
        'click',
        '[data-role="dynamic-fields"] > .form-inline [data-role="remove_field"]',
        function(e) {
            e.preventDefault();
            $(this).closest('.form-inline').remove();
        }
    );
    // Add button click
    $(document).on(
        'click',
        '[data-role="dynamic-fields"] > .form-inline [data-role="add"]',
        function(e) {
            e.preventDefault();
            var container = $(this).closest('[data-role="dynamic-fields"]');
            new_field_group = container.children().filter('.form-inline:first-child').clone();
          new_field_group.find('label').html('Upload Document'); new_field_group.find('input').each(function(){
                $(this).val('');
            });
            container.append(new_field_group);
        }
    );
});



// file upload

// $(document).on('change', '.file-upload', function(){
//   var i = $(this).prev('label').clone();
//   var file = this.files[0].name;
//   $(this).prev('label').text(file);
// });





/*image preview*/


        $(document).ready(function() {
            if (window.File && window.FileList && window.FileReader) {
                $(".add_product").on("change", function(e) {
                    
                    var id = $(this).attr('id');
                   // alert(id);
                    const myArray = id.split("im");
                    let myid=   myArray[1];
                //alert(myid);
                var files = e.target.files,
                    filesLength = files.length;
                   // alert(filesLength);
                for (var i = 0; i < filesLength; i++) {
                    var f = files[i]
                    var fileReader = new FileReader();
                    fileReader.onload = (function(e) {
                    var file = e.target;
                    $("<div class='col-md-2'><div class=\"img-thumb-wrapper card shadow\">" +
                        "<img class=\"img-thumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                        "<br/><span class=\"remove bg-dark text-center fw-bold\">Remove</span>" +
                        "</div></div>").insertAfter("#r"+myid);
                    $(".remove").click(function(){
                        $(this).parent(".img-thumb-wrapper").remove();
                    });
                    
                    });
                    fileReader.readAsDataURL(f);
                }
                console.log(files);
                });
            } else {
                alert("Your browser doesn't support to File API")
            }
            });


             // Get Attr Images ID
        
             $(document).ready(function() {
            if (window.File && window.FileList && window.FileReader) {
                $("#p_mainimg").on("change", function(e) {
                    var lll = $(this);
                    alert(lll);
                    var id = $(this).attr('id');
                    var img = document.getElementById('mainr1');
                    if (this.files && this.files[0]) {                      
                    
                    img.onload = () => {
                        URL.revokeObjectURL(img.src);  // no longer needed, free memory
                    }
                    // $(this).parent(".img-thumb-wrapper").remove();
                    // $("<div class='col-md-2'><div class=\"img-thumb-wrapper card shadow\">" +
                    //     "<img class=\"img-thumb\"  src=\"" +URL.createObjectURL(this.files[0])+ "\"   />" +
                    //     "<br/><span class=\"remove\">REEemove</span>" +
                    //     "</div></div>").insertAfter("#r1");
                    //     $(".remove").click(function(){
                    //     $(this).parent(".img-thumb-wrapper").remove();
                    //     });
                     img.src = URL.createObjectURL(this.files[0]); // set src to blob url
                    }  else{
                       // $("#"+img).empty();
                        img.src="";
                    }               
                console.log(files);
                });
                $("#subimg1").on("change", function(e) {
                    var id = $(this).attr('id');
                    if (this.files && this.files[0]) {
                    var img = document.getElementById('sub1r1');
                    img.onload = () => {
                        URL.revokeObjectURL(img.src);  // no longer needed, free memory
                    }
                  
                    // $("<div class='col-md-2'><div class=\"img-thumb-wrapper card shadow\">" +
                    //     "<img class=\"img-thumb\"  src=\"" +URL.createObjectURL(this.files[0])+ "\"   />" +
                    //     "<br/><span class=\"remove\">REEemove</span>" +
                    //     "</div></div>").insertAfter("#r3");
                    //     $(".removeimg").click(function(){
                    //     $(this).parent(".img-thumb-wrapper").remove();
                    //     }); 
                     img.src = URL.createObjectURL(this.files[0]); // set src to blob url
                    }                 
                console.log(files);
                });
                $("#subimg2").on("change", function(e) {
                    var id = $(this).attr('id');
                    if (this.files && this.files[0]) {
                    var img = document.getElementById('sub2r1');
                    img.onload = () => {
                        URL.revokeObjectURL(img.src);  // no longer needed, free memory
                    }
                    // $("<div class='col-md-2'><div class=\"img-thumb-wrapper card shadow\">" +
                    //     "<img class=\"img-thumb\"  src=\"" +URL.createObjectURL(this.files[0])+ "\"   />" +
                    //     "<br/><span class=\"remove\">REEemove</span>" +
                    //     "</div></div>").insertAfter("#r1");
                    //     $(".removeimg").click(function(){
                    //     $(this).parent(".img-thumb-wrapper").remove();
                    //     });
                     img.src = URL.createObjectURL(this.files[0]); // set src to blob url
                    }                 
                console.log(files);
                });
                $("#subimg3").on("change", function(e) {
                    var id = $(this).attr('id');
                    if (this.files && this.files[0]) {
                    var img = document.getElementById('sub3r1');
                    img.onload = () => {
                        URL.revokeObjectURL(img.src);  // no longer needed, free memory
                    }
                    // $(this).parent(".img-thumb-wrapper").remove();
                    // $("<div class='col-md-2'><div class=\"img-thumb-wrapper card shadow\">" +
                    //     "<img class=\"img-thumb\"  src=\"" +URL.createObjectURL(this.files[0])+ "\"   />" +
                    //     "<br/><span class=\"remove\">REEemove</span>" +
                    //     "</div></div>").insertAfter("#r1");
                    //     $(".removeimg").click(function(){
                    //     $(this).parent(".img-thumb-wrapper").remove();
                    //     });
                     img.src = URL.createObjectURL(this.files[0]); // set src to blob url
                    }                 
                console.log(files);
                });
            } else {
                alert("Your browser doesn't support to File API")
            }
            });


            $("#removemainimg").click(function(e) {

              // $(this).parent('img').empty();
                var img = document.getElementById('mainr1');
                //$("#"+img).empty();
                img.src = "";

                var id = $(this).attr('value');
                //alert(id);
                $('input[id = '+id+']').val("");
            }); 



    
    </script><?php /**PATH F:\mano\oxygen-new\resources\views/layout/vendor/products/producteditDetails.blade.php ENDPATH**/ ?>