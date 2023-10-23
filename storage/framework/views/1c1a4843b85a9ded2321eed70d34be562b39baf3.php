
<?php $__env->startSection('contents'); ?>

<?php echo $__env->make('paritials.js.coupon.coupon-create-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('paritials.css.coupon.coupon-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('paritials.auth.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- page-wrapper Start-->
<?php echo $__env->make('paritials.staffauth.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<!-- Page Header Ends -->

<!-- Page Body Start-->
<div class="page-body-wrapper">
	
	<!-- Page Sidebar Start-->
	<?php echo $__env->make('paritials.auth.sidemenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
	<!-- Page Sidebar Ends-->
	
	<!-- Right sidebar Start-->
	
	<!-- Right sidebar Ends-->
	<div class="page-body">
            <div class="container-fluid">
			<div class="page-header">
				<div class="row">
					<div class="col-lg-6">
						<div class="page-header-left">
							<h3>Create Coupon
							
							</h3>
						</div>
					</div>
					<div class="col-lg-6">
						<ol class="breadcrumb pull-right">
							<li class="breadcrumb-item"><a href="dashboard.php"><i data-feather="home"></i></a></li>
							<li class="breadcrumb-item">Coupons </li>
							<li class="breadcrumb-item active">Create Coupon</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!-- Container-fluid Ends-->
		
		<!-- Container-fluid starts-->
		<div class="container">
			<div class="col-sm-9">
			
			<div class="card">
				
				<div class="card-body">
				
				
					<form class="" method="post"
					action="<?php echo e(route('staffcoupon.update', $coupon->id)); ?>"
					enctype="multipart/form-data">
					<?php echo method_field('PUT'); ?>
					<?php echo csrf_field(); ?>
							
								<div class="row">
									<div class="col-sm-12">
										
										<div class="form-group row">
											<div class="col-md-12">
											<label class="form-group mb-3"><b>Coupon Title</b></label>
											
												<input class="form-control" id="ctitle" name="title" type="text" value="<?php echo e($coupon->title); ?>" required="" >
											</div>
											
											<div class="col-md-12 mt-4">
											<label class="form-group mb-3"><b>Coupon Code</b></label>
											
												<input class="form-control" id="ccode" name="coupon_code" value="<?php echo e($coupon->coupon_code); ?>" type="text" required="" >
											</div>
											
										</div>
										<div class="form-group row">
											<label class="mb-3"><b>Discount Type</b></label>
											<div class="col-md-12">
											<div class="checkbox-primary">
												<?php if($coupon->discount_type == "Fixed"): ?>
											 			<label class="d-block mb-2" for="edo-ani11">												
                                                            <input class="radio_animated" value="Fixed"  type="radio" onchange="fixed();"  checked="" name="discount_type">
                                                            Fixed 
                                                        </label>														
												<?php else: ?>
												<label class="d-block mb-2" for="edo-ani11">												
													<input class="radio_animated" value="Fixed"  type="radio" onchange="fixed();"  name="discount_type">
													Fixed 
												</label>
												<?php endif; ?>
												<?php if($coupon->discount_type == "Percentage"): ?> 
												<label class="d-block mb-2" for="edo-ani12">
													<input class="radio_animated" value="Percentage"  onchange="percentage();"  checked="" type="radio" name="discount_type" >
													Percentage
												</label>												
												<?php else: ?>
												<label class="d-block mb-2" for="edo-ani12">
													<input class="radio_animated" value="Percentage"  onchange="percentage();"   type="radio" name="discount_type" >
													Percentage
												</label>
												<?php endif; ?>
												</div>												
											</div>
												
											
										
										
										</div>
										</div> </div></div> </div>
										<div class="card" id="discountdiv">
				
									<div class="card-body">
										<div class="col-md-8">
										<label class="bold"><b>Value</b></label>

										<?php if($coupon->discount_type == "Fixed"): ?>
											<div id="fixeddiv" style="display:block;">
										<div class="form-group row">										
											<div class="col-md-6 px-3">
											<label class="">Discount Amount</label>											
												<input class="form-control" type="text" name="discount_amount" value="<?php echo e($coupon->discount_amount); ?>">											
											</div>
										</div>
									</div>
									<?php else: ?>
									<div id="fixeddiv" style="display:none;">
										<div class="form-group row">										
											<div class="col-md-6 px-3">
											<label class="">Discount Amount</label>											
												<input class="form-control" type="text" name="discount_amount">											
											</div>
										</div>
									</div>												
									<?php endif; ?>
									<?php if($coupon->discount_type == "Percentage" ): ?>
										<div id="percentagediv" style="display:block;">
										<div class="form-group row">											
											<div class="col-md-6 px-3">
											<label class="">Discount Percentage</label>											
												<input class="form-control" type="text" name="discount_percentage"  value="<?php echo e($coupon->discount_percentage); ?>">											
											</div>
										</div>
									</div>	
									<?php else: ?>
									<div id="percentagediv" style="display:none;">
										<div class="form-group row">											
											<div class="col-md-6 px-3">
											<label class="">Discount Percentage</label>											
												<input class="form-control" type="text" name="discount_percentage">											
											</div>
										</div>
									</div>	
									<?php endif; ?>								
										</div>
										</div>										
										</div>										
										
										<div class="card">
				
									<div class="card-body">
										<div class="col-md-8">
										<label class="bold"><b>Minimum Requirment</b></label>
											<div class="col-md-12">
											<div class="checkbox-primary">
												<?php if($coupon->minimum_requirment_type == "none"): ?>
											 					<label class="d-block" for="edo-ani11">																
                                                                    <input class="radio_animated"  type="radio" id="none" checked=""  value="none" onchange="minimumnone();"  name="minimum_requirment_type">
                                                                    None
                                                                </label>
																<?php else: ?>
																<label class="d-block" for="edo-ani11">																
                                                                    <input class="radio_animated"  type="radio" id="none"  value="none" onchange="minimumnone();"  name="minimum_requirment_type">
                                                                    None
                                                                </label>
																<?php endif; ?>



																<?php if($coupon->minimum_requirment_type == "Amount"): ?>
                                                                <label class="d-block" for="edo-ani12">
                                                                    <input class="radio_animated"  type="radio" id="amount" checked="" onchange="purchase();" value="Amount" name="minimum_requirment_type" >
                                                                   Amount (₹)
                                                                </label>
																<div id="minimumpurchase" style="display:block;"><div class="col-md-6 px-5">
																	<input class="form-control" type="text" name="minimum_requirment_amount"  value="<?php echo e($coupon->minimum_requirment_amount); ?>">
																	</div></div>
																<?php else: ?>
																<label class="d-block" for="edo-ani12">
                                                                    <input class="radio_animated"  type="radio" id="amount" onchange="purchase();" value="Amount" name="minimum_requirment_type" >
                                                                   Amount (₹)
                                                                </label>
																<div id="minimumpurchase" style="display:none;"><div class="col-md-6 px-5">
																	<input class="form-control px-5" type="text" name="minimum_requirment_amount"  value="">
																	</div></div>
																<?php endif; ?>
																
																<?php if($coupon->minimum_requirment_type == "first no.of customers"): ?>
																 <label class="d-block" for="edo-ani12">
                                                                    <input class="radio_animated"  type="radio" id="customers" checked="" value="first no.of customers" onchange="qty();" name="minimum_requirment_type">
                                                                    First No.Of Customers
                                                                </label>
																<div id="minimumquantity" style="display:block;">
																	<div class="col-md-6 px-5">
																	<input class="form-control" type="text" name="minimum_requirment_quantity"  value="<?php echo e($coupon->minimum_requirment_quantity); ?>">
																	</div>
																	</div>
																<?php else: ?>
																<label class="d-block" for="edo-ani12">
                                                                    <input class="radio_animated"  type="radio" id="customers" value="first no.of customers" onchange="qty();" name="minimum_requirment_type">
                                                                    First No.Of Customers
                                                                </label>
																<div id="minimumquantity" style="display:none;" >
																	<div class="col-md-6 px-5">
																	<input class="form-control" type="text" name="minimum_requirment_quantity" >
																	</div>
																	</div>
																<?php endif; ?>																
																</div>
												</div>									
										</div>
										</div>										
										</div>
										
										<div class="card">
				
									<div class="card-body">
										<div class="col-md-8">
											<?php if($errors->any()): ?>
										    <div class="alert alert-danger">
										        <ul>
										            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										                <li><?php echo e($error); ?></li>
										            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										        </ul>
										    </div>
										<?php endif; ?>
										<label class="bold"><b>Active Dates</b></label>
											<div class="col-md-12">
											<div class="" id="dates">
										<div class="form-group row"  >
										
										
											<div class="col-md-6">
											<label class="">Start Date / Time</label>
												 <input id="example" value="<?php echo e($coupon->start_date); ?>" name="start_date" type="datetime-local" value="" class="form-control"/>
												 </div>
												 <div class="col-md-3">											
												 </div>
											</div>
									<div class="form-group row">
											<div class="col-md-6">
											<label class="">End Date / Time</label>
												 <input id="example1" name="end_date" value="<?php echo e($coupon->end_date); ?>" type="datetime-local" class="form-control"  />
												 </div>
												 <div class="col-md-3">											
												 </div>
											</div>											
										</div>												
									</div>									
								</div>
							</div>										
						</div>							
					</div>


											<div class="card">	
										</div>
						<div class="form-group row ">
								<div class="text-center">
									<div class="col-xl-8 col-md-8">
										<button class="btn btn-primary" type="submit">Save</button>                                                  
										<a href="<?php echo e(route('coupon.couponlisting')); ?>" class="btn btn-secondary" type="button">Close</a>
									</div>
								</div>
							</form>	
						</div>
					</div>
			
			
			
		
			
			
			
			
		</div>
		<!-- Container-fluid Ends-->
		
	</div></div>
	
	<!-- footer start-->
	
	<!-- footer end-->
	
</div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ktonline/public_html/oxygen.ktonline.in/resources/views/layout/staff/coupon/coupon-edit.blade.php ENDPATH**/ ?>