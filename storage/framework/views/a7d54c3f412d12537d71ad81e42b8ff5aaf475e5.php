
<?php $__env->startSection('contents'); ?>

    <?php echo $__env->make('paritials.auth.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>?>

<!-- page-wrapper Start-->
<?php echo $__env->make('paritials.auth.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<!-- Page Header Ends -->

<!-- Page Body Start-->
<div class="page-body-wrapper">
	
	<!-- Page Sidebar Start-->
	<?php echo $__env->make('paritials.staffauth.sidemenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
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
                                <h3>List Coupon
                                  
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">List Coupon</li>
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
                        <div class="card">
                           
                            <div class="card-body">
                                
                          <a href="<?php echo e(route('staffcoupon.index')); ?>" class="btn mb-4 btn-primary"><i class="fa fa-plus"></i> Add Coupon </a> 


                            <div class="datatable-dashv1-list custom-datatable-overright">

                            
                <table class="table" id="table"  data-click-to-select="true"  data-sort-name="id" data-sort-order="asc" data-mobile-responsive="true" data-toggle="table" data-sort="true" data-pagination="true" data-search="true" data-show-columns="true"  data-show-refresh="true" data-key-events="true"  data-resizable="true" data-cookie="true"
                     data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">

                <thead>
                 <tr>
                   <th data-field="id" data-sortable="true">Id</th> 
                    <th data-field="title" data-sortable="true">Coupon Title</th>
                    <th data-field="code" data-sortable="true">Coupon Code</th>
                	<th data-field="dt" data-sortable="true">Discount Type</th>
                    <th data-field="da" data-sortable="true">Discount</th>

                    <th data-field="mrt" data-sortable="true">Minimum Requirment Type</th>
                    <th data-field="mra" data-sortable="true">Value</th>
                
                	<th data-field="sd" data-sortable="true">Start Date</th>
                	<th data-field="ed" data-sortable="true">End Date</th>
                
                
                
                

                   <th data-field="status" data-sortable="true">Status</th>
                   <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                <?php $__currentLoopData = $coupondata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupondata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <tr>
                    <td>#<?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($coupondata->title); ?></td>
                    <td><?php echo e($coupondata->coupon_code); ?></td>
                     <td><?php echo e($coupondata->discount_type); ?></td>
                     <?php if($coupondata->discount_type=='Fixed'): ?>
                      <td><?php echo e($coupondata->discount_amount); ?></td>
                      <?php else: ?>
                       <td><?php echo e($coupondata->discount_percentage); ?></td>
                       <?php endif; ?>
                       <td><?php echo e($coupondata->minimum_requirment_type); ?></td>
                       <?php if($coupondata->minimum_requirment_type=='None'): ?>
                       <td>None</td>
                       <?php elseif($coupondata->minimum_requirment_type=='Amount'): ?>
                       <td><?php echo e($coupondata->minimum_requirment_amount); ?></td>
                       <?php else: ?>
                       <td><?php echo e($coupondata->minimum_requirment_quantity); ?></td>
                       <?php endif; ?>
                       <td><?php echo e($coupondata->start_date); ?></td>

                       <td><?php echo e($coupondata->end_date); ?></td>
                
                        <td>
                            <?php
                                    $ed= $coupondata->end_date;
                                    $sd = $coupondata->start_date;
                                   // dd($ed);
                                    //exit();
                            ?>
                        <label class="switch">
                         
                        <?php if($ed >= $date  && $sd <= $date): ?>                                                            
                            <input type="checkbox"
                                onclick="return confirm('you want to Change it?  Please Click Edit Button')"
                                checked id="togBtn">                                                            
                            <?php else: ?>
                                <input type="checkbox"
                                onclick="return confirm('you want to Change it?  Please Click Edit Button')" 
                                 id="togBtn">                                                            
                            <?php endif; ?>
                        <div class="slider round">
                            <!--ADDED HTML -->
                            <span class="off">Inactive</span>
                            <span class="on">Active</span>
                            <!--END-->
                        </div>
                        
                        </label>
                    
                        </div>
                    
                        </td>
                        <td>
                            <span class="mt-3 d-flex"> 
                                <form action="<?php echo e(route('staffcoupon.edit', $coupondata->id)); ?>"
                                    method="get">
                                    <?php echo method_field('GET'); ?>
                                    <?php echo csrf_field(); ?>
                                <button class="btn btn-secondary mx-1"
                                onclick="return confirm('Are you sure, you want to Edit it?')"
                                        data-original-title="Edit"><i class="fa fa-pencil"></i> </button>
                                </form>
                                    
                                    <form action="<?php echo e(route('staffcoupon.destroy', $coupondata->id)); ?>"
                                        method="post">
                                        <?php echo method_field('DELETE'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-warning mx-1"
                                            onclick="return confirm('Are you sure, you want to delete it?')"><i
                                                class="fa fa-trash"></i>
                                                
                                        </button>                        
                            </form>
                                    
                            </span>
                        </td>
                                
                            </tr>        
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        </table> 
                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ktonline/public_html/oxygen.ktonline.in/resources/views/layout/staff/coupon/list-coupon.blade.php ENDPATH**/ ?>