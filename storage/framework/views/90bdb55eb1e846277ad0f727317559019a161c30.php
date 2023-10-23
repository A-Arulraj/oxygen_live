
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
                                <h3>User's Listings

                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="dashboard.php"><i data-feather="home"></i></a></li>
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
                                <a href="<?php echo e(route('vendorcreate.index')); ?>" class="btn  btn-primary"><i class="fa fa-plus"></i> Add
                                    vendor</a>



                                <table class="table" id="table" data-click-to-select="true" data-sort-name="id"
                                    data-sort-order="asc" data-mobile-responsive="true" data-toggle="table"
                                    data-show-columns="true" data-sort="true" data-pagination="true" data-search="true"
                                    data-show-refresh="true" data-key-events="true" data-resizable="true" data-cookie="true"
                                    data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">

                                    <thead>
                                        <tr>
                                            <th data-field="image"> Profile</th>
                                            <th data-field="empdetails" data-sortable="true"> Vendor Details</th>
                                            <th data-field="contactdetail" data-sortable="true">Username</th>
                                            <th data-field="package" data-sortable="true"> Package Details </th>
                                            <th data-field="documents" data-sortable="true">Documents Details </th>
                                            <th data-field="personal" data-sortable="true">Address Details </th>
                                            









                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $__currentLoopData = $vendorlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>

                                            <td>
                                                <div class="d-flex">
                                                    <img src="<?php echo e(asset('assets/images/vendor/profile') . '/' . $vendor_list->profile_image); ?>"
                                                        alt=""
                                                        class="img-fluid img-40 me-2 blur-up lazyloaded">
                                                </div>
                                            </td>

                                           
                                            <td><span><b><?php echo e($vendor_list->shop_name); ?></b></span>
                                                <br><span><?php echo e($vendor_list->owner_name); ?></span>
                                                <br><span>Category</span> : <span><?php echo e($vendor_list->business_category); ?></span>


                                            </td>
                                            <td> <span>username: <?php echo e($vendor_list->username); ?></span>
                                                <br><span><?php echo e($vendor_list->email); ?></span><br>
                                                <span><?php echo e($vendor_list->mobile_number1); ?></span><br>
                                            </td>

                                             
                                            
                                            <?php 
                                $userlist=DB::table('packages as packages')
                        ->join('vendor_details  as vendor_details', 'vendor_details.package_id', '=', 'packages.id')->where('package_id',$vendor_list->package_id )->first();
                                ?>
                                            <td> <span> Package : <?php echo e($userlist->name); ?></span>
                                                <br><span>Expired Date :  <?php echo e($vendor_list->expired_date); ?></span>
                                                <br><span>Grace Days :  <?php echo e($vendor_list->grace_days); ?></span><br>
                                                <span>Renewal Date :  <?php echo e($vendor_list->next_renewal_date); ?></span>
                                            </td>
                                             
                                             
                                            <td><span> <div class="d-flex">
                                                <img src="<?php echo e(asset('assets/images/vendor/gst') . '/' . $vendor_list->gst); ?>"
                                                    alt=""
                                                    class="img-fluid img-40 me-2 blur-up lazyloaded">
                                                    <img src="<?php echo e(asset('assets/images/vendor/other') . '/' . $vendor_list->other_documents); ?>"
                                                    alt=""
                                                    class="img-fluid img-40 me-2 blur-up lazyloaded">
                                            </div>
                                           
                                        </span><br>
                                                <span>
                                                    Aadhar card:<?php echo e($vendor_list->aadhar_no); ?>

                                                </span><br>
                                                <span>
                                                    Gst:<?php echo e($vendor_list->gst_number); ?>

                                                </span>
                                            </td>



                                            <td><span><?php echo e($vendor_list->address1); ?></span><br>
                                                <span><?php echo e($vendor_list->address2); ?> </span><br>
                                                <span> <?php echo e($vendor_list->city); ?></span><Br>
                                                    <span>  <?php echo e($vendor_list->pincode); ?> </span> <br>
                                             <span> Zone / Route:  <?php echo e($vendor_list->zone); ?> /  <?php echo e($vendor_list->route); ?> </span>
                                            </td>



                                            <td>
                                                <div class="mt-2 d-flex">
                                                    
                                                    <form action="<?php echo e(route('vendorcreate.edit', $vendor_list->id)); ?>"
                                                        method="get">
                                                        <?php echo method_field('EDIT'); ?>
                                                        <?php echo csrf_field(); ?> 
                                                    <button type="submit" class="btn btn-secondary mx-1">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                            </form>
                                                    

                                                    
                                                       
                                                        <form action="<?php echo e(route('vendorcreate.destroy', $vendor_list->id)); ?>"
                                                            method="post">
                                                            <?php echo method_field('DELETE'); ?>
                                                            <?php echo csrf_field(); ?>
                                                            <button type="submit" class="btn btn-warning mx-1"
                                                                onclick="return confirm('Are you sure, you want to delete it?')"><i
                                                                    class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                   
                                                </div>
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

<?php echo $__env->make('layout.auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\oxygen-new\resources\views/layout/admin/vendor/vendor-list.blade.php ENDPATH**/ ?>