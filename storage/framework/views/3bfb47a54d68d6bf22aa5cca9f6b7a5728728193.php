
<?php $__env->startSection('contents'); ?>
    <?php echo $__env->make('paritials.js.product.attribute-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('paritials.css.product.attribute-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('paritials.auth.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- page-wrapper Start-->
    <?php echo $__env->make('paritials.auth.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        <?php echo $__env->make('paritials.vendorauth.sidemenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
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
                                <h3>Specification Listings

                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('dashboard')); ?>"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item active">Specification Listings</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body order-datatable">

                                <button type="button" class="btn mb-4 btn-primary" data-bs-toggle="modal"
                                    data-original-title="test" data-bs-target="#exampleModal">Add Specification</button>
                                <br>
                                <table class="table fcolor" id="table" data-click-to-select="true" data-sort-name="id"
                                    data-sort-order="asc" data-mobile-responsive="true" data-toggle="table" data-sort="true"
                                    data-pagination="true" data-search="true" data-show-refresh="true"
                                    data-key-events="true" data-show-columns="true" data-resizable="true" data-cookie="true"
                                    data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">

                                    <thead>
                                        <tr>
                                            <th data-field="id" data-sortable="true">Id</th>
                                            <th data-field="title" data-sortable="true">Sub Category</th>

                                            <th data-field="list" data-sortable="true">Specification Name</th>
                                            <th data-field="value" data-sortable="true">Specification Value</th>

                                            <th data-field="status" data-sortable="true">Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $__currentLoopData = $specification; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>#<?php echo e($loop->iteration); ?></td>
                                                <td><?php echo e($specification->category_sub_name); ?></td>
                                                <td><?php echo e($specification->name); ?></td>

                                                <td>
                                                    <?php
                                                        $spec_val = json_decode($specification->value);
                                                        
                                                        foreach ($spec_val as $key => $value) {
                                                            echo "<span class='p-1 border border-dark px-3 mx-1 rounded'>$value</span>";
                                                        }
                                                    ?>


                                                    
                                                </td>

                                                <td>
                                                    <label class="switch">
                                                        <input type="checkbox"
                                                            onclick="return confirm('Are you sure, you want to Change it?')"
                                                            checked id="togBtn">
                                                        <div class="slider round">
                                                            <!--ADDED HTML -->
                                                            <span class="off">Inactive </span>
                                                            <span class="on">Active</span>
                                                            <!--END-->
                                                        </div>
                                                    </label>
                                                </td>

                                                <td>
                                                    
													<!--span> <a href="#" class="badge badge-secondary px-2"
                                                            data-toggle="tooltip" data-placement="top" title=""
                                                            data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
                                                        <a href="#" onclick="return delete_maincategory()"
                                                            class="badge badge-warning px-2" data-toggle="tooltip"
                                                            data-placement="top" title=""
                                                            data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                                    </span-->
													
													<form
																action="<?php echo e(route('vendorproduct.specification.destroy', $specification->id)); ?>"
																method="post">
																<?php echo method_field('DELETE'); ?>
																<?php echo csrf_field(); ?>
																<button type="submit" class="btn btn-warning mx-1"
																	onclick="return confirm('Are you sure, you want to delete it?')"><i
																		class="fa fa-trash"></i>
																</button>

                        
													</form>
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

        <div class="modal fade fcolor" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Specification</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>

                    <div class="modal-body">
                        <form class="" method="post" action="<?php echo e(route('vendorproduct.specification.store')); ?>"
                            enctype="multipart/form-data" onsubmit="return confirm('Are you sure, you want to Save it?')">
                            <?php echo csrf_field(); ?>

                            <div class="form">
                                <div class="form-group">
                                    <label class="col-form-label fw-bold">Sub Category</label>
                                    <select name="category_sub_id" class="custom-select form-control" required>
                                        <option value="" hidden selected>--Select Sub Category--</option>
                                        <?php $__currentLoopData = $subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($subcategory->id); ?>"><?php echo e($subcategory->category_sub_name); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="mb-1 fw-bold">Name</label>
                                    <input class="form-control" name="name" id="" required type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <table class="table addproduct">
                                    <tbody class="input_fields_wrap" id="display">
                                        <thead class="bordered-darkorange">
                                            <tr role="row">
                                                <th style="width:150px;">Value</th>
                                                <th style="width:150px;"></th>
                                            </tr>
                                        </thead>

                                        <tr>
                                            <td>
                                                <span class="text-dark fw-bold" id="specify_length"></span>
                                            </td>
                                            <td>
                                                <span class="btn btn-info text-white " id="specify_show">Show</span>
                                                <span class="btn btn-success text-white " id="specify_hide">Hide</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input id="input" name="value[]" class="form-control" type="text"
                                                    placeholder="Enter Value" />
                                            </td>
                                            <td>
                                                <button type="button" class="add_field_button btn btn-xs btn-primary"
                                                    id="add1">Add More</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group mt-2">
                                <label for="validationCustom01" class="mb-1 fw-bold">Status</label>
                                <select name="status" class="custom-select w-100 form-control" required="">
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>

                                </select>

                            </div>
                    </div>


                    <div class="modal-footer">
                        <button type="sub" class="btn btn-primary" type="submit">Save</button></a>
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                    </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\mano\oxygen-new\resources\views/layout/vendor/products/specification-listing.blade.php ENDPATH**/ ?>