
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
                                <h3>Category

                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Category</li>
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
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-original-title="test" data-bs-target="#exampleModal"><i class="fa fa-plus"></i>Add
                                    Category</button>

                                <div class="btn-popup pull-right">

                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        data-backdrop="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Category</h5>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">X</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="" method="post"
                                                        action="<?php echo e(route('category.store')); ?>"
                                                        enctype="multipart/form-data">
                                                        <?php echo csrf_field(); ?>
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <label for="validationCustom01" class="mb-1">Main
                                                                    Category :</label>
                                                                <select class="custom-select w-100 form-control"
                                                                    name="main_category_id" required>
                                                                    <option value="" selected hidden>Select Main
                                                                        Category
                                                                    </option>
                                                                    <?php $__currentLoopData = $category_main; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $main_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($main_category->id); ?>">
                                                                            <?php echo e($main_category->category_main_name); ?>

                                                                        </option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="validationCustom01" class="mb-1">Category Name
                                                                    :</label>
                                                                <input class="form-control" id="" type="text"
                                                                    name="category_name" required>
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <label for="validationCustom02" class="mb-1">Category
                                                                    Image :</label>
                                                                <input class="form-control" name="category_image"
                                                                    type="file" accept="image/*" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="validationCustom01"
                                                                    class="mb-1">Status</label>
                                                                <select class="custom-select w-100 form-control"
                                                                    name="status" required>
                                                                    <option value="1">Active</option>
                                                                    <option value="0">Inactive</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-primary" type="submit">Save</button>
                                                            <button class="btn btn-secondary" type="button"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>





<div class="btn-popup pull-right">

    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
        data-backdrop="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Edit Category</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"><span aria-hidden="true">X</span></button>
                </div>
                <div class="modal-body">
                    <form class="" method="post"    id="UPDATEFORM"                    
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form">
                            <input type="hidden" id="edit_id"> 
                            <div class="form-group">
                                <label for="validationCustom01" class="mb-1">Main
                                    Category :</label>
                                <select class="custom-select w-100 form-control"
                                    name="editmain_category_id" id="editmain_category_id" required>
                                    <option value="" selected hidden>Select Main
                                        Category
                                    </option>
                                    <?php $__currentLoopData = $category_main; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $main_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($main_category->id); ?>">
                                            <?php echo e($main_category->category_main_name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="validationCustom01" class="mb-1">Category Name
                                    :</label>
                                <input class="form-control"  type="text"
                                    name="editcategory_name" id="editcategory_name" required>
                            </div>
                            <div class="form-group mb-0">
                                <label for="validationCustom02" class="mb-1">Category
                                    Image :</label>
                                <input class="form-control" name="editcategory_image" id="editcategory_image"
                                    type="file" accept="image/*" >
                                    <input class="form-control" name="oldeditcategory_image" id="oldeditcategory_image"
                                    type="hidden"  accept="image/*"> 
                            </div>
                            <div class="form-group">
                                <label for="validationCustom01"
                                    class="mb-1">Status</label>
                                <select class="custom-select w-100 form-control"
                                    name="editstatus" name="editstatus" id="editstatus" required>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit" id="btn_update">Update</button>
                            <button class="btn btn-secondary" type="button"
                                data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>











                            <div class="datatable-dashv1-list custom-datatable-overright">


                                <table class="table" id="table" data-click-to-select="true" data-sort-name="id"
                                    data-sort-order="asc" data-mobile-responsive="true" data-toggle="table" data-sort="true"
                                    data-pagination="true" data-search="true" data-show-refresh="true"
                                    data-key-events="true" data-show-columns="true" data-resizable="true" data-cookie="true"
                                    data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">

                                    <thead>
                                        <tr>
                                            <th data-field="id" data-sortable="true">Id</th>
                                            <th data-field="image" data-sortable="true">Image</th>
                                            <th data-field="subcategory" data-sortable="true">Main Category</th>
                                            <th data-field="category" data-sortable="true">Category</th>

                                            <th data-field="status" data-sortable="true">Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>#<?php echo e($loop->iteration); ?></td>
                                                <td>
                                                    <div class="d-flex">
                                                        <img src="<?php echo e(asset('assets/images/category') . '/' . $categories->category_image); ?>"
                                                            alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                    </div>
                                                </td>

                                                <td><?php echo e($categories->category_main_name); ?></td>
                                                <td><?php echo e($categories->category_name); ?></td>
                                                <td>
                                                    <label class="switch">
                                                        
                                                        
                                                         <?php if($categories->status  == 1): ?>{
                                                         <input type="checkbox"
                                                             onclick="return confirm('you want to Change it?  Please Click Edit Button')"
                                                             checked id="togBtn">
                                                         }<?php else: ?>{
                                                             <input type="checkbox"
                                                             onclick="return confirm('you want to Change it?  Please Click Edit Button')" 
                                                              id="togBtn">
                                                         }
                                                         <?php endif; ?>
                                                         <div class="slider round">
                                                             <!--ADDED HTML -->
                                                             <span class="on">Active</span>
                                                             <span class="off">Inactive </span>                                                                
                                                             <!--END-->
                                                         </div>
                                                     </label>
                                                </td>
                                                <td>
                                                    <span class="d-flex">
                                                        <button type="button" class="edit_catagory btn btn-secondary mx-1" data-bs-toggle="modal" data-original-title="Edit" value="<?php echo e($categories->id); ?>" id="edit_catagory">
                                                            <i class="fa fa-pencil"></i> </button>
                                                        
                                                        
                                                        
                                                        <form action="<?php echo e(route('category.destroy', $categories->id)); ?>"
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
<?php $__env->startPush('scripts'); ?>

<script>

$(document).on('click','#edit_catagory', function(e){
        
        
    e.preventDefault();
    var id = $(this).val();
    //    console.log(pin_id);
     $('#exampleModal1').modal('show');
      // alert (designation_id)
	   //e.preventDefault();
	  // var pin_id = $(this).val();
	      console.log(id);

		 var url= "<?php echo e(route('category.edit', ":id")); ?>";
		 url = url.replace(":id", id);

		  $.ajax({
        //   data: $('').serialize(),    <?php echo e(url('admin/zonalupdate')); ?>/"+id+"/update"
             // url: "<?php echo e(url('admin/zonalupdate')); ?>/"+updateid,<?php echo e(route('designation.master.store')); ?>

         // console.log('yghtyj');
		 
		 url: url,          
          type: "get",
          dataType: 'json',
          success: function (response) {
              // console.log(response);
            // alert('test');
                if(response.status == 404)
                {
                 alert('test');
                $('successmessage').html('');
                $('successmessage').addClass('alert alert-danger');
                $('successmessage').text(response.message);
                }
                else{
					//alert([designation]);
                    $('#edit_id').val(response.Category.id);
					$('#editmain_category_id').val(response.Category.main_category_id);
                    $('#editcategory_name').val(response.Category.category_name);
                    $('#oldeditcategory_image').val(response.Category.category_image);
                    $('#editstatus').val(response.Category.status);
                    
                }  
            }
        
      });
   
	   });





       $(document).on('submit','#UPDATEFORM', function(e){
        e.preventDefault();
         var updatecate_id = $('#edit_id').val();
        // alert(updatecate_id);
        let editformDate = new FormData($('#UPDATEFORM')[0]);
        var url ="<?php echo e(route('category_update', ":updatecate_id")); ?>";

        url = url.replace(":updatecate_id", updatecate_id);
        $.ajax({
            url:url,       
            type:"POST",
             data: editformDate,
          //  dataType: 'json',
            contentType:false,
            processData:false,
            success: function (response) {
            //    alert(response);
            window.location.reload();
            }

     });
        
    });


    //    $(document).on('click','#btn_update', function(e){
        
        
	// 	e.preventDefault();
    //     var id = $('#edit_id').val();
	// 	var editmain_category_id = $('#editmain_category_id').val();
	// var editcategory_name = $('#editcategory_name').val();
    // //var editcategory_image = $('#editcategory_image').val();
	// var editstatus = $('#editstatus').val();
	// 		  console.log(id);
	// alert (id);
	// 		//  var url= "<?php echo e(route('category.update', ":id")); ?>";
	// 		//  url = url.replace(":id", id);
	// 		 urlll = urlll.replace(":id", id);
	// 		 $.ajax({
    //     //   data: $('').serialize(),    <?php echo e(url('admin/zonalupdate')); ?>/"+id+"/update"
    //          // url: "<?php echo e(url('admin/zonalupdate')); ?>/"+updateid,
    //      url : urlll,
    //      type: "PUT",
    //      //_token : `<?php echo e(csrf_token()); ?>`,
	// 	//  data: {_token : `<?php echo e(csrf_token()); ?>`,
    //     //  main_category_id:editmain_category_id,
    //     //  category_name:editcategory_name,
    //     //  //category_image:editcategory_image,
    //     //     status:editstatus
    //    // },
    //      dataType: 'json',
    //       success: function (response) {
    //            console.log(response);
    //         // alert('test');
    //             if(response.status == 404)
    //             {
    //              alert('test');
    //             $('successmessage').html('');
    //             $('successmessage').addClass('alert alert-danger');
    //             $('successmessage').text(response.message);
    //             }
    //             else{
    //                 alert (response);
	// 				location.reload(); 
					
    //             }  
    //         }
        
    //   });
	   
	// });

    </script>
    <?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\mano\oxygen-new\resources\views/layout/admin/category/category.blade.php ENDPATH**/ ?>