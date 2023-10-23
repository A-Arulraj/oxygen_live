
<?php $__env->startSection('contents'); ?>

    <?php echo $__env->make('paritials.auth.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                                <h3>Staff Listings
                                  
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('dashboard')); ?>"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">User Listings</li>
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
                                <a href="<?php echo e(url('admin/staff/create')); ?>" class="btn  btn-primary"><i class="fa fa-plus"></i> Add Staff</a>


                            
<table class="table" id="table"  data-click-to-select="true"  data-sort-name="id" data-sort-order="asc" data-mobile-responsive="true" data-toggle="table" data-show-columns="true" data-sort="true" data-pagination="true" data-search="true"  data-show-refresh="true" data-key-events="true"  data-resizable="true" data-cookie="true"
     data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
    
                                    <thead>
                                    <tr>
                                    <th data-field="image"> Photo</th>
                                        <th data-field="empdetails" data-sortable="true"> Employee Details</th>
                                        <th data-field="contactdetail" data-sortable="true"> Staff Details</th>
                                        
                                        <th data-field="curriculam" data-sortable="true">Email </th>
                                        <th data-field="personal" data-sortable="true">Personal Details </th>
                                        
                                        
                                     
                                        
                                        <th data-field="address" data-sortable="true">Current Address </th>
                                        
                                      
										
                                       
                                        
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                   
                                        <?php $__currentLoopData = $staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        
                                        <td><div class="d-flex">
                                            <img src="<?php echo e(asset('assets/images/staffcreate') . '/' . $stf->profileimage); ?>"
                                                alt="" class="img-fluid img-40 me-2 blur-up lazyloaded">
                                        </div></td>
                                        <td><?php echo e($stf->username); ?></td>
                                        <td><?php echo e($stf->fullname); ?></td>
                                        <td><?php echo e($stf->email); ?></td>
                                        <td><?php echo e($stf->qualification); ?></td>
                                        <td><?php echo e($stf->curr_addr); ?></td>
                                    
                                   
                                    
                                       
                                       
                                        <td>
                                            
                                        <span class="mt-3 d-flex">
                                        <a href="<?php echo e(route('staff.export')); ?>" class="btn btn-success px-2 " data-toggle="tooltip" data-placement="top" title="Report" data-original-title="Report"><i
                                            class="fa fa-list"></i></a>

                                            <form action="<?php echo e(route('staff.edit',$stf->id)); ?>" method="get">
                                                <?php echo method_field('EDIT'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-secondary mx-1" title="Edit"
                                                    onclick="return confirm('Are you sure, you want to Edit it?')"><i
                                                        class="fa fa-pencil"></i>
                                                </button>
                                            </form> 
                                        
                                        


                                        <form action="<?php echo e(route('staff.destroy',$stf->id)); ?>" method="POST">
                                            <?php echo method_field('DELETE'); ?>
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-warning mx-1" title="Delete"
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
            </div></div>
            <!-- Container-fluid Ends-->

        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ktonline/public_html/oxygen.ktonline.in/resources/views/layout/admin/staff/staff-list.blade.php ENDPATH**/ ?>