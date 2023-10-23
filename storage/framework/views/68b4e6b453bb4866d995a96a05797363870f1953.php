
<?php $__env->startSection('contents'); ?>

<?php echo $__env->make('paritials.css.auction.auction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>?>

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
                                <h3>List Auction
                                  
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="dashboard.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">List Auction</li>
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
                                
                          <a href="<?php echo e(route('auction.create')); ?>" class="btn mb-4 btn-primary"><i class="fa fa-plus"></i> Add Offers </a> 
                          <?php if($errors->any()): ?>
                          <div class="alert alert-danger">
                              <ul>
                                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <li><?php echo e($error); ?></li>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </ul>
                          </div>
                      <?php endif; ?>
                                    <div class="card-body">
                                        <form action="<?php echo e(route('import')); ?>"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <input type="file" name="file"
                                                   class="form-control">
                                            <br>
                                            <button class="btn btn-success">
                                                  Import Auction Data
                                               </button>
                                            
                                        </form>
                                    </div>

                            <div class="datatable-dashv1-list custom-datatable-overright">

                            
                    <table class="table" id="table"  data-click-to-select="true"  data-sort-name="id" data-sort-order="asc" data-mobile-responsive="true" data-toggle="table" data-sort="true" data-pagination="true" data-search="true" data-show-columns="true"  data-show-refresh="true" data-key-events="true"  data-resizable="true" data-cookie="true"
                         data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">

                    <thead>
                     <tr>
                        <th data-field="id" data-sortable="true">Id / Admin_Id</th>                     
                        <th data-field="sprice" data-sortable="true">Starting Price</th>
                        <th data-field="slab" data-sortable="true">SLAB</th> 
                        <th data-field="bid" data-sortable="true">BID Price</th>
                    	<th data-field="so" data-sortable="true">Stat Offer</th>                    
                    	<th data-field="eo" data-sortable="true">End Offer</th>
                       <th data-field="status" data-sortable="true">Status</th>
                       <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>


                    <?php $__currentLoopData = $auction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?> / <?php echo e($item->admin_id); ?></td>
                        <td><?php echo e($item->start_price); ?></td>
                        <td><?php echo e($item->slab); ?></td>
                        <td><?php echo e($item->bid_price); ?></td>
                        <td><?php echo e($item->start_date); ?></td>
                		<td><?php echo e($item->end_date); ?></td>
                    
                        <td>
                            <?php
                                $sd = $item->start_date;
                                $ed= $item->end_date;                                    
                            ?>
                        <label class="switch">                         
                        <?php if($ed >= $date && $sd <= $date): ?>                                                            
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

                        <td><span class="mt-3 d-flex">
                            <form action="<?php echo e(route('auction.edit', $item->id)); ?>"
                                method="get">
                                <?php echo method_field('GET'); ?>
                                <?php echo csrf_field(); ?>
                            <button class="btn btn-secondary mx-1"
                            onclick="return confirm('Are you sure, you want to Edit it?')"
                                    data-original-title="Edit"><i class="fa fa-pencil"></i> </button>
                            </form>
                            
                            <form action="<?php echo e(route('auction.destroy', $item->id)); ?>"
                                method="post">
                                <?php echo method_field('DELETE'); ?>
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-warning mx-1"
                                    onclick="return confirm('Are you sure, you want to delete it?')"><i
                                        class="fa fa-trash"></i>                                        
                                </button>                        
                            </form>
                            
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
            </div>
            <!-- Container-fluid Ends-->

        </div>
		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\mano\oxygen-new\resources\views/layout/admin/auction/list-auction.blade.php ENDPATH**/ ?>