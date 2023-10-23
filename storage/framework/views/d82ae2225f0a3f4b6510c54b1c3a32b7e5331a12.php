
<?php $__env->startSection('contents'); ?>

    <?php echo $__env->make('paritials.auth.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>?>

<!-- page-wrapper Start-->
<?php echo $__env->make('paritials.auth.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<!-- Page Header Ends -->

<!-- Page Body Start-->
<div class="page-body-wrapper">
	
	<!-- Page Sidebar Start-->
	<?php echo $__env->make('paritials.auth.sidemenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
	<!-- Page Sidebar Ends-->
	
	<!-- Right sidebar Start-->
	
	<!-- Right sidebar Ends-->

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Active Order's

                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('dashboard')); ?>"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item active">Order List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card tab2-card">

                        <div class="card-body">


                            <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active show" id="new-tabs" data-bs-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="false" data-original-title="" title=""><span class="fw-bold">New</span> </a></li>
                                <li class="nav-item"><a class="nav-link" id="general-tab" data-bs-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true" data-original-title="" title=""><span class="text-warning fw-bold">Accepted (10)</span> </a></li>

                                <li class="nav-item"><a class="nav-link" id="dispatch-tab" data-bs-toggle="tab" href="#dispatch" role="tab" aria-controls="dispatch" aria-selected="true" data-original-title="" title=""><span class="text-primary fw-bold">Dispatch (5)</span> </a></li>
                                <li class="nav-item"><a class="nav-link" id="delivery-tab" data-bs-toggle="tab" href="#delivery" role="tab" aria-controls="delivery" aria-selected="true" data-original-title="" title=""><span class="text-success fw-bold">Delivered (4)</span></a></li>
                                <li class="nav-item"><a class="nav-link" id="usage-tab" data-bs-toggle="tab" href="#usage" role="tab" aria-controls="usage" aria-selected="false" data-original-title="" title=""><span class="text-secondary fw-bold">Return (2)</span> </a></li>
								
								<li class="nav-item"><a class="nav-link" id="cancel-tab" data-bs-toggle="tab" href="#cancel" role="tab" aria-controls="cancel" aria-selected="false" data-original-title="" title=""><span class="text-danger fw-bold">Cancel (0)</span></a></li>
								
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade active show" id="new" role="tabpanel" aria-labelledby="new-tabs">
								<div class="mt-3"> <button class="btn border border-success text-success accept" onclick="edit()">Accept</button> 
			</div>
                                    
			
                                        <div class="row">

                                            <div class="datatable-dashv1-list custom-datatable-overright" >


                                                <table class="table fcolor" id="table" data-click-to-select="true" data-sort-name="id" data-sort-order="asc" data-mobile-responsive="true" data-toggle="table" data-show-columns="true" data-sort="true" data-pagination="true" data-search="true" data-show-refresh="true" data-key-events="true" data-resizable="true" data-cookie="true" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" >
                                                    <thead>
                                                        <tr>
														<th data-field="dd" data-checkbox="true">
                                                         </th>
														<th data-field="orderid" data-sortable="true">ORDER ID</th>
														<th data-field="date" data-sortable="true">ORDER DATE</th>
														<th data-field="orderqty" data-sortable="true">ORDER QTY</th>
														
														<th data-field="Productid" data-sortable="true">PRODUCT ID</th>
                                                        <th data-field="image" data-sortable="true">IMAGE</th>&nbsp; &nbsp; 
                                                        <th data-field="productname" data-sortable="true"> PRODUCT NAME</th>
                                                            <th data-field="attributes" data-sortable="true">ATTRIBUTES</th>&nbsp; &nbsp; 
                                                            
															<th data-field="stock" data-sortable="true">IN STOCK</th>
                                                            
                                                            <th data-field="paymentmode" data-sortable="true">PAYMENT MODE</th>
															<th data-field="status" data-sortable="true">STATUS</th>
                                                            <th data-field="action" data-sortable="true">ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                     use App\Models\order\Orders;
                                                     use App\Models\order\ordersproduct;

                                                    
                                                        $ordersproduct = orders::join('ordersproducts',"ordersproducts.order_id","=","orders.orders_id")
                                                        ->where('ordersproducts.order_status', '=', 'New')->get();

                                                        $ordersproductaccept = orders::join('ordersproducts',"ordersproducts.order_id","=","orders.orders_id")
                                                        ->where('ordersproducts.order_status', '=', 'Accept')->get();

                                                        $ordersproductdispatch = orders::join('ordersproducts',"ordersproducts.order_id","=","orders.orders_id")
                                                        ->where('ordersproducts.order_status', '=', 'Dispatch')->get();
                                                        $ordersproductdelivered = orders::join('ordersproducts',"ordersproducts.order_id","=","orders.orders_id")
                                                        ->where('ordersproducts.order_status', '=', 'Delivered')->get();
                                                        $ordersproductreturn = orders::join('ordersproducts',"ordersproducts.order_id","=","orders.orders_id")
                                                        ->where('ordersproducts.order_status', '=', 'Return')->get();
                                                        $ordersproductcancel = orders::join('ordersproducts',"ordersproducts.order_id","=","orders.orders_id")
                                                        ->where('ordersproducts.order_status', '=', 'Cancel')->get();
                                                        //  dd($ordersproductaccept);
                                                        ?>
                                                        <?php $__currentLoopData = $ordersproduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            
                                                            <?php
                                                            // print_r($attribute);
                                                            // exit();
                                                            ?>
                                                            <td>
                                                                <input type="checkbox" id="option-all" onchange="checkall(this)">
                                                            </td>
                                                            <td>#<?php echo e($loop->iteration); ?></td>
            
            
                                                            <td><?php echo e($attribute->orders_id); ?></td>
            
                                                            <td><?php echo e($attribute->order_date); ?></td>
            
                                                            <td>                                          
                                                                <?php echo e($attribute->product_quantity); ?>

                                                            </td>
                                                            <td>                                          
                                                                <?php echo e($attribute->product_id); ?>

                                                            </td>
                                                            <td>       
                                                                
                                                                <img src="<?php echo e(asset('assets/images/products/detail') . '/' . $attribute->product_image); ?>"
                                                                                        class="img-fluid img-30 me-2 blur-up lazyloaded" alt="">
                                                                
                                                            </td>
                                                            <td>                                          
                                                                <?php echo e($attribute->product_name); ?>

                                                            </td>
                                                            <td>                                          
                                                                <?php echo e($attribute->product_size); ?>

                                                            </td>
                                                            <td>                                          
                                                                <?php echo e($attribute->instock); ?>

                                                            </td>
                                                            

                                                            <td>                                          
                                                                <?php echo e($attribute->payment_status); ?>

                                                            </td>

                                                            <td><p class="text-center" style="border:1px solid #ffc000;color:#ffc000;border-radius:5px;">Accept</p></td>
															
                                                            <td><span> <button  id ="btnnew" value= "<?php echo e($attribute->id); ?>" class="btnnew badge badge-secondary px-2" data-bs-toggle="modal" data-original-title="test" data-bs-target="" data-original-title="Edit"><i class="fa fa-pencil"></i> </button>
															
                                                                    <a href="#" onclick="return confirm('Are you sure, you want to delete it?')" class="badge badge-warning px-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></span></td>
                                                           
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    </tbody>
                                                </table>
												
												<!-- The Modal -->
                                            <div class="modal" id="New">
                                            <div class="modal-dialog  modal-dialog-centered">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Status</h4>
                                                    <button type="button" class="btn-close text-danger" data-bs-dismiss="modal"></button>
                                                </div>

                                                <!-- Modal body -->
                                                        
                                                            
                                                            
                                                            <div class="modal-body">
                                                                            <div class="container-fluid">
                                                                                <div class="row">
                                                                                
                                                                                        <div class="col-md-3">Change Status	</div>
                                                                                                <div class="col-md-6">
                                                                                                            <select class="form-select form-select-lg" name="status"  id="o_status" required="">
                                                                                                                    <option selected disabled>--Select--</option>
                                                                                                                    <option value="Accept">Accept</option>
                                                                                                                    <option value="Dispatch">Dispatch</option>
                                                                                                                    <option value="Delivered">Delivered</option>
                                                                                                                    <option value="Return">Return</option>
                                                                                                                    <option value="Cancel">Cancel</option>
                                                                                                                                                    
                                                                                                                </select>
                                                                                                </div>
                                                                                                
                                                                                </div>  
                                                                            </div>
                                                            </div>

                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        
                                                        </div>
                                                  
                                            </div>
                                            </div>
                                            </div>

                                        </div>
                                    
                                </div>


                                <div class="tab-pane fade" id="general" role="tabpanel" aria-labelledby="general-tab">
											<div class="mt-3"> <button class="btn border border-primary text-primary dispatch" >Dispatch</button> 
			                        </div>
                                    
                                    <div class="row">

                                        <div class="datatable-dashv1-list custom-datatable-overright" >


                                            <table class="table fcolor" id="table" data-click-to-select="true" data-sort-name="id" data-sort-order="asc" data-mobile-responsive="true" data-toggle="table" data-show-columns="true" data-sort="true" data-pagination="true" data-search="true" data-show-refresh="true" data-key-events="true" data-resizable="true" data-cookie="true" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" >
                                                <thead>
                                                    <tr>
                                                    <th data-field="dd" data-checkbox="true">
                                                     </th>
                                                    <th data-field="orderid" data-sortable="true">ORDER ID</th>
                                                    <th data-field="date" data-sortable="true">ORDER DATE</th>
                                                    <th data-field="orderqty" data-sortable="true">ORDER QTY</th>
                                                    
                                                    <th data-field="Productid" data-sortable="true">PRODUCT ID</th>
                                                    <th data-field="image" data-sortable="true">IMAGE</th>&nbsp; &nbsp; 
                                                    <th data-field="productname" data-sortable="true"> PRODUCT NAME</th>
                                                        <th data-field="attributes" data-sortable="true">ATTRIBUTES</th>&nbsp; &nbsp; 
                                                        
                                                        <th data-field="stock" data-sortable="true">IN STOCK</th>
                                                        
                                                        <th data-field="paymentmode" data-sortable="true">PAYMENT MODE</th>
                                                        <th data-field="status" data-sortable="true">STATUS</th>
                                                        <th data-field="action" data-sortable="true">ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                //  use App\Models\order\Orders;
                                                //  use App\Models\order\ordersproduct;

                                                
                                                    // $ordersproduct1 = orders::join('ordersproducts',"ordersproducts.order_id","=","orders.orders_id")->get();
                                                  //  dd($ordersproductaccept);
                                                    ?>
                                                    <?php $__currentLoopData = $ordersproductaccept; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        
                                                        <td>#<?php echo e($loop->iteration); ?></td>
        
        
                                                        <td><?php echo e($attribute->orders_id); ?></td>
        
                                                        <td><?php echo e($attribute->order_date); ?></td>
        
                                                        <td>                                          
                                                            <?php echo e($attribute->product_quantity); ?>

                                                        </td>
                                                        <td>                                          
                                                            <?php echo e($attribute->product_id); ?>

                                                        </td>
                                                        <td>       
                                                            
                                                            <img src="<?php echo e(asset('assets/images/products/detail') . '/' . $attribute->product_image); ?>"
                                                                                    class="img-fluid img-30 me-2 blur-up lazyloaded" alt="">
                                                            
                                                        </td>
                                                        <td>                                          
                                                            <?php echo e($attribute->product_name); ?>

                                                        </td>
                                                        <td>                                          
                                                            <?php echo e($attribute->product_size); ?>

                                                        </td>
                                                        <td>                                          
                                                            <?php echo e($attribute->instock); ?>

                                                        </td>
                                                        

                                                        <td>                                          
                                                            <?php echo e($attribute->payment_status); ?>

                                                        </td>

                                                        <td><p class="text-center" style="border:1px solid #ffc000;color:#ffc000;border-radius:5px;">Accept</p></td>
                                                        
                                                        <td><span>
                                                            <button  id ="btnaccess" value= "<?php echo e($attribute->id); ?>" class="btnaccess badge badge-secondary px-2" data-bs-toggle="modal" data-original-title="test" data-bs-target="" data-original-title="Edit"><i class="fa fa-pencil"></i> </button>
                                                          
                                                        
                                                                <a href="#" onclick="return confirm('Are you sure, you want to delete it?')" class="badge badge-warning px-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></span></td>
                                                       
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </tbody>
                                            </table>
                                            
                                            <!-- The Modal -->
                                        <div class="modal" id="accept">
                                        <div class="modal-dialog  modal-dialog-centered">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Status</h4>
                                                <button type="button" class="btn-close text-danger" data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Modal body -->
                                                    
                                                        
                                                        
                                                        <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <div class="row">
                                                                            
                                                                                    <div class="col-md-3">Change Status	</div>
                                                                                            <div class="col-md-6">
                                                                                                        <select class="form-select form-select-lg" name="status" id ="a_status" required="">
                                                                                                                <option selected disabled>--Select--</option>
                                                                                                                <option value="Accept">Accept</option>
                                                                                                                <option value="Dispatch">Dispatch</option>
                                                                                                                <option value="Delivered">Delivered</option>
                                                                                                                <option value="Return">Return</option>
                                                                                                                <option value="Cancel">Cancel</option>
                                                                                                                                                
                                                                                                            </select>
                                                                                            </div>
                                                                                            
                                                                            </div>  
                                                                        </div>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">SUBMIT</button>
                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    
                                                    </div>
                                              
                                        </div>
                                        </div>
                                        </div>

                                    </div>
                                </div>
					
                                <div class="tab-pane fade" id="dispatch" role="tabpanel" aria-labelledby="dispatch-tabs">
						<div class="mt-3"> <button class="btn border border-success text-success accept" >Delivered</button> 		</div>
                                
                        
                        <div class="row">

                            <div class="datatable-dashv1-list custom-datatable-overright" >


                                <table class="table fcolor" id="table" data-click-to-select="true" data-sort-name="id" data-sort-order="asc" data-mobile-responsive="true" data-toggle="table" data-show-columns="true" data-sort="true" data-pagination="true" data-search="true" data-show-refresh="true" data-key-events="true" data-resizable="true" data-cookie="true" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" >
                                    <thead>
                                        <tr>
                                        <th data-field="dd" data-checkbox="true">
                                         </th>
                                        <th data-field="orderid" data-sortable="true">ORDER ID</th>
                                        <th data-field="date" data-sortable="true">ORDER DATE</th>
                                        <th data-field="orderqty" data-sortable="true">ORDER QTY</th>
                                        
                                        <th data-field="Productid" data-sortable="true">PRODUCT ID</th>
                                        <th data-field="image" data-sortable="true">IMAGE</th>&nbsp; &nbsp; 
                                        <th data-field="productname" data-sortable="true"> PRODUCT NAME</th>
                                            <th data-field="attributes" data-sortable="true">ATTRIBUTES</th>&nbsp; &nbsp; 
                                            
                                            <th data-field="stock" data-sortable="true">IN STOCK</th>
                                            
                                            <th data-field="paymentmode" data-sortable="true">PAYMENT MODE</th>
                                            <th data-field="status" data-sortable="true">STATUS</th>
                                            <th data-field="action" data-sortable="true">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    //  use App\Models\order\Orders;
                                    //  use App\Models\order\ordersproduct;

                                    
                                        // $ordersproduct1 = orders::join('ordersproducts',"ordersproducts.order_id","=","orders.orders_id")->get();
                                      //  dd($ordersproductaccept);
                                        ?>
                                        <?php $__currentLoopData = $ordersproductdispatch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            
                                            <td>#<?php echo e($loop->iteration); ?></td>


                                            <td><?php echo e($attribute->orders_id); ?></td>

                                            <td><?php echo e($attribute->order_date); ?></td>

                                            <td>                                          
                                                <?php echo e($attribute->product_quantity); ?>

                                            </td>
                                            <td>                                          
                                                <?php echo e($attribute->product_id); ?>

                                            </td>
                                            <td>       
                                                
                                                <img src="<?php echo e(asset('assets/images/products/detail') . '/' . $attribute->product_image); ?>"
                                                                        class="img-fluid img-30 me-2 blur-up lazyloaded" alt="">
                                                
                                            </td>
                                            <td>                                          
                                                <?php echo e($attribute->product_name); ?>

                                            </td>
                                            <td>                                          
                                                <?php echo e($attribute->product_size); ?>

                                            </td>
                                            <td>                                          
                                                <?php echo e($attribute->instock); ?>

                                            </td>
                                            

                                            <td>                                          
                                                <?php echo e($attribute->payment_status); ?>

                                            </td>

                                            <td><p class="text-center" style="border:1px solid #ffc000;color:#ffc000;border-radius:5px;">Accept</p></td>
                                            
                                            <td><span> 
                                                
                                                <button  id ="btndispatch" value= "<?php echo e($attribute->id); ?>" class="btndispatch badge badge-secondary px-2" data-bs-toggle="modal" data-original-title="test" data-bs-target="" data-original-title="Edit"><i class="fa fa-pencil"></i> </button>
                                            
                                                    <a href="#" onclick="return confirm('Are you sure, you want to delete it?')" class="badge badge-warning px-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></span></td>
                                           
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                                
                                <!-- The Modal -->
                            <div class="modal" id="Dispatch">
                            <div class="modal-dialog  modal-dialog-centered">
                                <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Status</h4>
                                    <button type="button" class="btn-close text-danger" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal body -->
                                        
                                            
                                            
                                            <div class="modal-body">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                
                                                                        <div class="col-md-3">Change Status	</div>
                                                                                <div class="col-md-6">
                                                                                            <select class="form-select form-select-lg" name="status"  id="d_status" required="">
                                                                                                    <option selected disabled>--Select--</option>
                                                                                                    <option value="Accept">Accept</option>
                                                                                                    <option value="Dispatch">Dispatch</option>
                                                                                                    <option value="Delivered">Delivered</option>
                                                                                                    <option value="Return">Return</option>
                                                                                                    <option value="Cancel">Cancel</option>
                                                                                                                                    
                                                                                                </select>
                                                                                </div>
                                                                                
                                                                </div>  
                                                            </div>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        
                                        </div>
                                  
                            </div>
                            </div>
                            </div>

                        </div>
                        
                       

                                </div>

                                <div class="tab-pane fade" id="delivery" role="tabpanel" aria-labelledby="delivery-tabs">
                                    
                                    


                                    <div class="row">

                                        <div class="datatable-dashv1-list custom-datatable-overright" >
            
            
                                            <table class="table fcolor" id="table" data-click-to-select="true" data-sort-name="id" data-sort-order="asc" data-mobile-responsive="true" data-toggle="table" data-show-columns="true" data-sort="true" data-pagination="true" data-search="true" data-show-refresh="true" data-key-events="true" data-resizable="true" data-cookie="true" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" >
                                                <thead>
                                                    <tr>
                                                    <th data-field="dd" data-checkbox="true">
                                                     </th>
                                                    <th data-field="orderid" data-sortable="true">ORDER ID</th>
                                                    <th data-field="date" data-sortable="true">ORDER DATE</th>
                                                    <th data-field="orderqty" data-sortable="true">ORDER QTY</th>
                                                    
                                                    <th data-field="Productid" data-sortable="true">PRODUCT ID</th>
                                                    <th data-field="image" data-sortable="true">IMAGE</th>&nbsp; &nbsp; 
                                                    <th data-field="productname" data-sortable="true"> PRODUCT NAME</th>
                                                        <th data-field="attributes" data-sortable="true">ATTRIBUTES</th>&nbsp; &nbsp; 
                                                        
                                                        <th data-field="stock" data-sortable="true">IN STOCK</th>
                                                        
                                                        <th data-field="paymentmode" data-sortable="true">PAYMENT MODE</th>
                                                        <th data-field="status" data-sortable="true">STATUS</th>
                                                        <th data-field="action" data-sortable="true">ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                //  use App\Models\order\Orders;
                                                //  use App\Models\order\ordersproduct;
            
                                                
                                                    // $ordersproduct1 = orders::join('ordersproducts',"ordersproducts.order_id","=","orders.orders_id")->get();
                                                  //  dd($ordersproductaccept);
                                                    ?>
                                                    <?php $__currentLoopData = $ordersproductdelivered; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        
                                                        <td>#<?php echo e($loop->iteration); ?></td>
            
            
                                                        <td><?php echo e($attribute->orders_id); ?></td>
            
                                                        <td><?php echo e($attribute->order_date); ?></td>
            
                                                        <td>                                          
                                                            <?php echo e($attribute->product_quantity); ?>

                                                        </td>
                                                        <td>                                          
                                                            <?php echo e($attribute->product_id); ?>

                                                        </td>
                                                        <td>       
                                                            
                                                            <img src="<?php echo e(asset('assets/images/products/detail') . '/' . $attribute->product_image); ?>"
                                                                                    class="img-fluid img-30 me-2 blur-up lazyloaded" alt="">
                                                            
                                                        </td>
                                                        <td>                                          
                                                            <?php echo e($attribute->product_name); ?>

                                                        </td>
                                                        <td>                                          
                                                            <?php echo e($attribute->product_size); ?>

                                                        </td>
                                                        <td>                                          
                                                            <?php echo e($attribute->instock); ?>

                                                        </td>
                                                        
            
                                                        <td>                                          
                                                            <?php echo e($attribute->payment_status); ?>

                                                        </td>
            
                                                        <td><p class="text-center" style="border:1px solid #ffc000;color:#ffc000;border-radius:5px;">Accept</p></td>
                                                        
                                                        <td><span>
                                                            
                                                            <button  id ="btndelivered" value= "<?php echo e($attribute->id); ?>" class="btndelivered badge badge-secondary px-2" data-bs-toggle="modal" data-original-title="test" data-bs-target="" data-original-title="Edit"><i class="fa fa-pencil"></i> </button>
                                                        
                                                                <a href="#" onclick="return confirm('Are you sure, you want to delete it?')" class="badge badge-warning px-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></span></td>
                                                       
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
                                                </tbody>
                                            </table>
                                            
                                            <!-- The Modal -->
                                        <div class="modal" id="delivere">
                                        <div class="modal-dialog  modal-dialog-centered">
                                            <div class="modal-content">
            
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Status</h4>
                                                <button type="button" class="btn-close text-danger" data-bs-dismiss="modal"></button>
                                            </div>
            
                                            <!-- Modal body -->
                                                    
                                                        
                                                        
                                                        <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <div class="row">
                                                                            
                                                                                    <div class="col-md-3">Change Status	</div>
                                                                                            <div class="col-md-6">
                                                                                                        <select class="form-select form-select-lg" name="status" id="deli_status" required="">
                                                                                                                <option selected disabled>--Select--</option>
                                                                                                                <option value="Accept">Accept</option>
                                                                                                                <option value="Dispatch">Dispatch</option>
                                                                                                                <option value="Delivered">Delivered</option>
                                                                                                                <option value="Return">Return</option>
                                                                                                                <option value="Cancel">Cancel</option>
                                                                                                                                                
                                                                                                            </select>
                                                                                            </div>
                                                                                            
                                                                            </div>  
                                                                        </div>
                                                        </div>
            
                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">SUBMIT</button>
                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>	
                                                    </div>
                                              
                                        </div>
                                        </div>
                                        </div>
            
                                    </div>

                                  
                                </div>




                                <div class="tab-pane fade" id="usage" role="tabpanel" aria-labelledby="usage-tab">
                                   
                                   
                                    <div class="row">

                                        <div class="datatable-dashv1-list custom-datatable-overright" >
            
            
                                            <table class="table fcolor" id="table" data-click-to-select="true" data-sort-name="id" data-sort-order="asc" data-mobile-responsive="true" data-toggle="table" data-show-columns="true" data-sort="true" data-pagination="true" data-search="true" data-show-refresh="true" data-key-events="true" data-resizable="true" data-cookie="true" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" >
                                                <thead>
                                                    <tr>
                                                    <th data-field="dd" data-checkbox="true">
                                                     </th>
                                                    <th data-field="orderid" data-sortable="true">ORDER ID</th>
                                                    <th data-field="date" data-sortable="true">ORDER DATE</th>
                                                    <th data-field="orderqty" data-sortable="true">ORDER QTY</th>
                                                    
                                                    <th data-field="Productid" data-sortable="true">PRODUCT ID</th>
                                                    <th data-field="image" data-sortable="true">IMAGE</th>&nbsp; &nbsp; 
                                                    <th data-field="productname" data-sortable="true"> PRODUCT NAME</th>
                                                        <th data-field="attributes" data-sortable="true">ATTRIBUTES</th>&nbsp; &nbsp; 
                                                        
                                                        <th data-field="stock" data-sortable="true">IN STOCK</th>
                                                        
                                                        <th data-field="paymentmode" data-sortable="true">PAYMENT MODE</th>
                                                        <th data-field="status" data-sortable="true">STATUS</th>
                                                        <th data-field="action" data-sortable="true">ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                //  use App\Models\order\Orders;
                                                //  use App\Models\order\ordersproduct;
            
                                                
                                                    // $ordersproduct1 = orders::join('ordersproducts',"ordersproducts.order_id","=","orders.orders_id")->get();
                                                  //  dd($ordersproductaccept);
                                                    ?>
                                                    <?php $__currentLoopData = $ordersproductreturn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        
                                                        <td>#<?php echo e($loop->iteration); ?></td>
            
            
                                                        <td><?php echo e($attribute->orders_id); ?></td>
            
                                                        <td><?php echo e($attribute->order_date); ?></td>
            
                                                        <td>                                          
                                                            <?php echo e($attribute->product_quantity); ?>

                                                        </td>
                                                        <td>                                          
                                                            <?php echo e($attribute->product_id); ?>

                                                        </td>
                                                        <td>       
                                                            
                                                            <img src="<?php echo e(asset('assets/images/products/detail') . '/' . $attribute->product_image); ?>"
                                                                                    class="img-fluid img-30 me-2 blur-up lazyloaded" alt="">
                                                            
                                                        </td>
                                                        <td>                                          
                                                            <?php echo e($attribute->product_name); ?>

                                                        </td>
                                                        <td>                                          
                                                            <?php echo e($attribute->product_size); ?>

                                                        </td>
                                                        <td>                                          
                                                            <?php echo e($attribute->instock); ?>

                                                        </td>
                                                        
            
                                                        <td>                                          
                                                            <?php echo e($attribute->payment_status); ?>

                                                        </td>
                                                        
            
                                                        <td><p class="text-center" style="border:1px solid #f90000;color:#f90000;border-radius:5px;"><?php echo e($attribute->order_status); ?></p></td>
                                                        
                                                        <td><span> 
                                                            
                                                            <button  id ="btnreturn" value= "<?php echo e($attribute->id); ?>" class="btnreturn badge badge-secondary px-2" data-bs-toggle="modal" data-original-title="test" data-bs-target="" data-original-title="Edit"><i class="fa fa-pencil"></i> </button>
                                                        
                                                                <a href="#" onclick="return confirm('Are you sure, you want to delete it?')" class="badge badge-warning px-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></span></td>
                                                       
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
                                                </tbody>
                                            </table>
                                            
                                            <!-- The Modal -->
                                        <div class="modal" id="return">
                                        <div class="modal-dialog  modal-dialog-centered">
                                            <div class="modal-content">
            
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Status</h4>
                                                <button type="button" class="btn-close text-danger" data-bs-dismiss="modal"></button>
                                            </div>
            
                                            <!-- Modal body -->
                                                    
                                                        
                                                        
                                                        <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <div class="row">
                                                                            
                                                                                    <div class="col-md-3">Change Status	</div>
                                                                                            <div class="col-md-6">
                                                                                                        <select class="form-select form-select-lg" name="status" id="return_status" required="">
                                                                                                                <option selected disabled>--Select--</option>
                                                                                                                <option value="Accept">Accept</option>
                                                                                                                <option value="Dispatch">Dispatch</option>
                                                                                                                <option value="Delivered">Delivered</option>
                                                                                                                <option value="Return">Return</option>
                                                                                                                <option value="Cancel">Cancel</option>
                                                                                                                                                
                                                                                                            </select>
                                                                                            </div>
                                                                                            
                                                                            </div>  
                                                                        </div>
                                                        </div>
            
                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">SUBMIT</button>
                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>	
                                                    </div>
                                              
                                        </div>
                                        </div>
                                        </div>
            
                                    </div>
                                   
                                    


                                </div>
								
							<div class="tab-pane fade" id="cancel" role="tabpanel" aria-labelledby="cancel-tabs">	
								    
                                <div class="row">

                                    <div class="datatable-dashv1-list custom-datatable-overright" >
        
        
                                        <table class="table fcolor" id="table" data-click-to-select="true" data-sort-name="id" data-sort-order="asc" data-mobile-responsive="true" data-toggle="table" data-show-columns="true" data-sort="true" data-pagination="true" data-search="true" data-show-refresh="true" data-key-events="true" data-resizable="true" data-cookie="true" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" >
                                            <thead>
                                                <tr>
                                                <th data-field="dd" data-checkbox="true">
                                                 </th>
                                                <th data-field="orderid" data-sortable="true">ORDER ID</th>
                                                <th data-field="date" data-sortable="true">ORDER DATE</th>
                                                <th data-field="orderqty" data-sortable="true">ORDER QTY</th>
                                                
                                                <th data-field="Productid" data-sortable="true">PRODUCT ID</th>
                                                <th data-field="image" data-sortable="true">IMAGE</th>&nbsp; &nbsp; 
                                                <th data-field="productname" data-sortable="true"> PRODUCT NAME</th>
                                                    <th data-field="attributes" data-sortable="true">ATTRIBUTES</th>&nbsp; &nbsp; 
                                                    
                                                    <th data-field="stock" data-sortable="true">IN STOCK</th>
                                                    
                                                    <th data-field="paymentmode" data-sortable="true">PAYMENT MODE</th>
                                                    <th data-field="status" data-sortable="true">STATUS</th>
                                                    <th data-field="action" data-sortable="true">ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            //  use App\Models\order\Orders;
                                            //  use App\Models\order\ordersproduct;
        
                                            
                                                // $ordersproduct1 = orders::join('ordersproducts',"ordersproducts.order_id","=","orders.orders_id")->get();
                                              //  dd($ordersproductaccept);
                                                ?>
                                                <?php $__currentLoopData = $ordersproductcancel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    
                                                    <td>#<?php echo e($loop->iteration); ?></td>
        
        
                                                    <td><?php echo e($attribute->orders_id); ?></td>
        
                                                    <td><?php echo e($attribute->order_date); ?></td>
        
                                                    <td>                                          
                                                        <?php echo e($attribute->product_quantity); ?>

                                                    </td>
                                                    <td>                                          
                                                        <?php echo e($attribute->product_id); ?>

                                                    </td>
                                                    <td>       
                                                        
                                                        <img src="<?php echo e(asset('assets/images/products/detail') . '/' . $attribute->product_image); ?>"
                                                                                class="img-fluid img-30 me-2 blur-up lazyloaded" alt="">
                                                        
                                                    </td>
                                                    <td>                                          
                                                        <?php echo e($attribute->product_name); ?>

                                                    </td>
                                                    <td>                                          
                                                        <?php echo e($attribute->product_size); ?>

                                                    </td>
                                                    <td>                                          
                                                        <?php echo e($attribute->instock); ?>

                                                    </td>
                                                    
        
                                                    <td>                                          
                                                        <?php echo e($attribute->payment_status); ?>

                                                    </td>
                                                    
        
                                                    <td><p class="text-center" style="border:1px solid #f90000;color:#f90000;border-radius:5px;"><?php echo e($attribute->order_status); ?></p></td>
                                                    
                                                    <td><span> 
                                                        <button  id ="btncancel" value= "<?php echo e($attribute->id); ?>" class="btncancel badge badge-secondary px-2" data-bs-toggle="modal" data-original-title="test" data-bs-target="" data-original-title="Edit"><i class="fa fa-pencil"></i> </button>
                                                    
                                                            <a href="#" onclick="return confirm('Are you sure, you want to delete it?')" class="badge badge-warning px-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></span></td>
                                                   
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
                                            </tbody>
                                        </table>
                                        
                                        <!-- The Modal -->
                                    <div class="modal" id="can">
                                    <div class="modal-dialog  modal-dialog-centered">
                                        <div class="modal-content">
        
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Status</h4>
                                            <button type="button" class="btn-close text-danger" data-bs-dismiss="modal"></button>
                                        </div>
        
                                        <!-- Modal body -->
                                                
                                                    
                                                    
                                                    <div class="modal-body">
                                                                    <div class="container-fluid">
                                                                        <div class="row">
                                                                        
                                                                                <div class="col-md-3">Change Status	</div>
                                                                                        <div class="col-md-6">
                                                                                                    <select class="form-select form-select-lg" name="status" id="can_status" required="">
                                                                                                            <option selected disabled>--Select--</option>
                                                                                                            <option value="Accept">Accept</option>
                                                                                                            <option value="Dispatch">Dispatch</option>
                                                                                                            <option value="Delivered">Delivered</option>
                                                                                                            <option value="Return">Return</option>
                                                                                                            <option value="Cancel">Cancel</option>
                                                                                                                                            
                                                                                                        </select>
                                                                                        </div>
                                                                                        
                                                                        </div>  
                                                                    </div>
                                                    </div>
        
                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                
                                                </div>
                                          
                                    </div>
                                    </div>
                                    </div>
        
                                </div>
                                
                                
                                
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>






<script>
     $(document).ready(function() {
        
      $(".btnnew").click(function(e) {
        e.preventDefault();
       
        var btnnew = $(this).val();
        
     // alert(btnaccess);
     var newmodal = $('#New').modal('show');
     $('button[type=submit]').click(function(e) {
     var sts = $('#o_status').val();   
    // alert(sts);

    
        $.ajax({

        url: "<?php echo e(url('admin/orderstatusupdate')); ?>/"+btnnew, 
        type: "POST",
        data: {
            "_token": "<?php echo e(csrf_token()); ?>",
            "sts": sts

        },

        dataType: "json",
        success: function (data) {
            alert(data);
            $('#New').modal('hide');
            location.reload();
            
        },
        error: function (data) {
            console.log('Error:', data);
        }
        });


      });
     });
     
     
     
     
     
     /*Accept*/

 $(".btnaccess").click(function(e) {
        e.preventDefault();
       
        var btnaccess = $(this).val();
        
     // alert(btnaccess);
     var newmodal = $('#accept').modal('show');
     $('button[type=submit]').click(function(e) {
     var sts = $('#a_status').val();   
    // alert(sts);

    
        $.ajax({

        url: "<?php echo e(url('admin/orderstatusupdate')); ?>/"+btnaccess, 
        type: "POST",
        data: {
            "_token": "<?php echo e(csrf_token()); ?>",
            "sts": sts

        },

        dataType: "json",
        success: function (data) {
           // alert(data);
            $('#accept').modal('hide');
            location.reload();
        },
        error: function (data) {
            console.log('Error:', data);
        }
        });


      });
     });

     //Dispatch
     $(".btndispatch").click(function(e) {
        e.preventDefault();
       
        var btndispatch = $(this).val();
        
     // alert(btnaccess);
      $('#Dispatch').modal('show');
     $('button[type=submit]').click(function(e) {
     var sts = $('#d_status').val();   
    // alert(sts);

    
        $.ajax({

        url: "<?php echo e(url('admin/orderstatusupdate')); ?>/"+btndispatch, 
        type: "POST",
        data: {
            "_token": "<?php echo e(csrf_token()); ?>",
            "sts": sts

        },

        dataType: "json",
        success: function (data) {
           // alert(data);
            $('#Dispatch').modal('hide');
            location.reload();
        },
        error: function (data) {
            console.log('Error:', data);
        }
        });


      });
     });

    //diuspatchend
    /*delivered start*/
    $(".btndelivered").click(function(e) {
        e.preventDefault();
       
        var btndelivered = $(this).val();
        
     // alert(btnaccess);
     $('#delivere').modal('show');
     $('button[type=submit]').click(function(e) {
     var sts = $('#deli_status').val();   
    // alert(sts);

    
        $.ajax({

        url: "<?php echo e(url('admin/orderstatusupdate')); ?>/"+btndelivered, 
        type: "POST",
        data: {
            "_token": "<?php echo e(csrf_token()); ?>",
            "sts": sts

        },

        dataType: "json",
        success: function (data) {
           // alert(data);
            $('#delivere').modal('hide');
            location.reload();
        },
        error: function (data) {
            console.log('Error:', data);
        }
        });


      });
     });

    /*delivered end*/
    /*return start*/
    $(".btnreturn").click(function(e) {
        e.preventDefault();
       
        var btnreturn = $(this).val();
        
     // alert(btnaccess);
     $('#return').modal('show');
     $('button[type=submit]').click(function(e) {
     var sts = $('#return_status').val();   
    // alert(sts);

    
        $.ajax({

        url: "<?php echo e(url('admin/orderstatusupdate')); ?>/"+btnreturn, 
        type: "POST",
        data: {
            "_token": "<?php echo e(csrf_token()); ?>",
            "sts": sts

        },

        dataType: "json",
        success: function (data) {
           // alert(data);
            $('#return').modal('hide');
            location.reload();
        },
        error: function (data) {
            console.log('Error:', data);
        }
        });


      });
     });

    /*return end*/


     /*cancel start*/
     $(".btncancel").click(function(e) {
        e.preventDefault();
       
        var btncancel = $(this).val();
        
     // alert(btnaccess);
     $('#can').modal('show');
     $('button[type=submit]').click(function(e) {
     var sts = $('#can_status').val();   
    // alert(sts);

    
        $.ajax({

        url: "<?php echo e(url('admin/orderstatusupdate')); ?>/"+btncancel, 
        type: "POST",
        data: {
            "_token": "<?php echo e(csrf_token()); ?>",
            "sts": sts

        },

        dataType: "json",
        success: function (data) {
           // alert(data);
            $('#can').modal('hide');
            location.reload();
        },
        error: function (data) {
            console.log('Error:', data);
        }
        });


      });
     });

    /*cancel end*/
    });
</script>

<script>
    //  var chk = $('input[type=checkbox]').val();
    //  alert(chk);
//     function testChecked() {
//   let arr = $("#testdiv").data("town").split(",");
  
//   for (let i = 0; i < arr.length; i++) {
//     if (!$("input[value=" + arr[i] + "]").is(":checked")) return false;
//   }
  
//   return true;
// }

// console.log(testChecked());
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\mano\oxygen-new\resources\views/layout/admin/sales/order-list.blade.php ENDPATH**/ ?>