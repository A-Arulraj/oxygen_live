
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
                                <h3>Main Slider
                                   
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="dashboard.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Main Slider</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            </div>
            <?php endif; ?>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">                           
                            <div class="card-body">
							 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal"><i class="fa fa-plus"></i> Add Slider</button>                                   
                                <div class="btn-popup pull-right">								
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Main Slider</h5>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                             
                                                <div class="modal-body">												
                                                    <form class="" action="<?php echo e(route('main_slider.store')); ?>" method="post" onsubmit="return confirm('Are you sure, you want to Save it?')" enctype="multipart/form-data" >
                                                        <?php echo csrf_field(); ?>
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <label for="validationCustom01" class="mb-1"> Title :</label>
                                                                <input class="form-control" id="title" name="title" type="text" required="true">
                                                            </div>
															 v<di class="form-group">
                                                                <label for="validationCustom01" class="mb-1">Sub Title :</label>
                                                                <input class="form-control" id="sub_title" name="sub_title" type="text" required="true">
                                                            </di>
                                                            <div class="form-group">
                                                                <label for="validationCustom02" class="mb-1"> Image :</label>
                                                                <input class="form-control" require="" name="mainImage" id="mainImage" type="file" accept="image/*">
                                                            </div>
                                                             <div class="form-group">
                                                                <label for="validationCustom01" class="mb-1">Link :</label>
                                                                <input class="form-control" id="link" name="link" type="text" required="true">
                                                            </div>
                                                             <div class="form-group">
                                                                <label for="validationCustom01" class="mb-1">Sort :</label>
                                                                <input class="form-control" id="sort" name="sort" type="number" required="true">
                                                            </div>                                                            
                                                            <div class="col-md-12">
							                    			<div class="" id="dates">
							                    			<div class="form-group row">
							                    				<div class="col-md-6">
							                    				<label class="">Start Date / Time</label>
							                    					 <input id="example" type="datetime-local" value="" name="start_date" id="start_date" class="form-control" placeholder="dd/mm/yy"  />
							                    					 </div>
							                    					 
							                    				</div>
							                    		    <div class="form-group row">
							                    				<div class="col-md-6">
							                    				<label class="">End Date / Time</label>
							                    					 <input id="example1" type="datetime-local" class="form-control" name="end_date" id="end_date" placeholder="dd/mm/yy"  />
							                    					 </div>
							                    					 
							                    		    </div>											
							                    			</div>												
							                    		    </div>
                                                        </div>                                                   
                                                    												
                                                        <div class="modal-footer">
                                                           <button class="btn btn-primary" type="submit">Save</button>
                                                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                                        </div>												
												    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								

                                

                                <div class="btn-popup pull-right">								
                                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Edit Banner</h5>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">												
                                                    <form class="" action="<?php echo e(route('main_slider.update', 0)); ?>" method="post" onsubmit="return confirm('Are you sure, you want to Update it?')" enctype="multipart/form-data" >
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PUT'); ?>
                                                        <div class="form">
                                                            <input class="form-control" id="editid" name="editid" type="hidden" >
                                                            <div class="form-group">
                                                                <label for="validationCustom01" class="mb-1"> Title :</label>
                                                                <input class="form-control" id="edittitle" name="edittitle" type="text" required="true">
                                                            </div>
															 <div class="form-group">
                                                                <label for="validationCustom01" class="mb-1">Sub Title :</label>
                                                                <input class="form-control" id="editsub_title" name="editsub_title" type="text" required="true">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="validationCustom02" class="mb-1"> Image :</label>
                                                                <input class="form-control"  name="editmainImage" id="editmainImage" type="file" accept="image/*">
                                                                <input class="form-control"  name="editoldImage" id="editoldImage" type="hidden" accept="image/*">
                                                            </div>
                                                             <div class="form-group">
                                                                <label for="validationCustom01" class="mb-1">Link :</label>
                                                                <input class="form-control" id="editlink" name="editlink" type="text" required="true">
                                                            </div>
                                                             <div class="form-group">
                                                                <label for="validationCustom01" class="mb-1">Sort :</label>
                                                                <input class="form-control" id="editsort" name="editsort" type="number" required="true">
                                                            </div>                                                            
                                                            <div class="col-md-12">
							                    			<div class="" id="dates">
							                    			<div class="form-group row">
							                    				<div class="col-md-6">
							                    				<label class="">Start Date / Time</label>
							                    					 <input id="editstart_date" type="datetime-local" value="" name="editstart_date" id="editstart_date" class="form-control" placeholder="dd/mm/yy"  />
							                    					 </div>
							                    					 
							                    				</div>
							                    		    <div class="form-group row">
							                    				<div class="col-md-6">
							                    				<label class="">End Date / Time</label>
							                    					 <input id="editend_date" type="datetime-local" class="form-control" name="editend_date" id="editend_date" placeholder="dd/mm/yy"  />
							                    					 </div>
							                    					 
							                    		    </div>											
							                    			</div>												
							                    		    </div>
                                                        </div>                                                   
                                                    												
                                                        <div class="modal-footer">
                                                            <button class="btn btn-primary" type="submit" id="edit_save">Save</button>
                                                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                                        </div>												
												    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                





							<div class="datatable-dashv1-list custom-datatable-overright">                            
                                <table class="table" id="table"  data-click-to-select="true"  data-sort-name="id" data-sort-order="asc" data-mobile-responsive="true" data-toggle="table" data-show-columns="true" data-sort="true" data-pagination="true" data-search="true"  data-show-refresh="true" data-key-events="true"  data-resizable="true" data-cookie="true"
                                    data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">  
                                    <thead>
                                     <tr>
                                       <th data-field="id" data-sortable="true">Id</th> 
                                       <th data-field="image" data-sortable="true" >Image</th>
                                       <th data-field="title" data-sortable="true">Title</th>
                                       <th data-field="subtitle" data-sortable="true">Sub Title</th>
                                       <th data-field="link" data-sortable="true">Link</th>
                                       <th data-field="sort" data-sortable="true">Sort</th>
                                       <th data-field="startdate" data-sortable="true">Start Date</th>
                                       <th data-field="enddate" data-sortable="true">End Date</th>
                                       <th data-field="status" data-sortable="true">Status</th>
									   <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $adbanner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td>
                                                <div class="d-flex">
                                                    <img src="<?php echo e(asset('assets/images/banners/mainslider') . '/' .$item->image); ?>" alt="" class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                </div>
                                            </td>
                                            <td style="width:100%;">
                                             <?php echo e($item->title); ?>

                                            </td>
                                            <td style="width:100%;">
                                                <?php echo e($item->sub_title); ?>

                                            </td>
                                            <td style="width:100%;">
                                                <?php echo e($item->link); ?>

                                            </td>
                                            <td style="width:100%;">
                                                <?php echo e($item->sort); ?>

                                            </td>
                                            <td style="width:100%;">
                                                <?php echo e($item->start_date); ?>

                                            </td>
                                            <td style="width:100%;">
                                                <?php echo e($item->end_date); ?>

                                            </td>
                                            <td>
                                                <?php
                                                    $sd = $item->start_date;
                                                    $ed = $item->end_date;
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
                                            <div class="slider round"><!--ADDED HTML -->
                                            <span class="off">Inactive </span>
                                            <span class="on">Active</span><!--END--></div>
                                            </label>
                                            </td>
                                            <td>
                                                <span class="d-flex">
                                                    <button type="button" class="edit_advbaner btn btn-secondary mx-1" value="<?php echo e($item->id); ?>">
                                                    <i class="fa fa-pencil"></i></button>
                                                     
                                                  <form
                                                     action="<?php echo e(route('main_slider.destroy', $item->id)); ?>"
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
            </div>
            <!-- Container-fluid Ends-->
        </div>

<?php $__env->startPush('scripts'); ?>
<script>
    $(document).on('click', '.edit_advbaner', function(e){

        e.preventDefault();

        //alert('cate_id');
        var ad_id = $(this).val();
        $('#exampleModal1').modal('show');

        var url = "<?php echo e(route('editmain_slider', ":ad_id")); ?>";
        url = url.replace(":ad_id", ad_id);

            $.ajax({
            
             url:url,       
             type: "get",
             _token: "csrf",
             dataType: 'json',
             success: function (response) {
                  console.log(response);
                //alert(response);
               if(response.status == 404)
               {
               //  alert('test');
               $('successmessage').html('');
               $('successmessage').addClass('alert alert-danger');
               $('successmessage').text(response.message);
               }

                else{
                   // alert(response);

                $('#editid').val(response.adbanner.id);
                $('#edittitle').val(response.adbanner.title);
                $('#editsub_title').val(response.adbanner.sub_title);
                $('#editoldImage').val(response.adbanner.image);
                $('#editlink').val(response.adbanner.link);
                $('#editsort').val(response.adbanner.sort);
                $('#editstart_date').val(response.adbanner.start_date);
                $('#editend_date').val(response.adbanner.end_date);

                }
            }

            //alert('dfhdgfjftg');
            // error: function (response){

            // }

        });
        
    });

    
// $(document).on('click','.edit_adthfhfgvbaner', function(e){
      
//       e.preventDefault();
//       var cate_id = $(this).val();
//     //  alert(cate_id);
//       //    console.log(pin_id);
//       $('#exampleModal1').modal('show');
//       var url ="<?php echo e(route('editmain_slider', ":cate_id")); ?>";
//           url = url.replace(":cate_id", cate_id);
//       $.ajax({
       
//             url:url,       
//             type: "get",
//             dataType: 'json',
//             success: function (response) {
//                  console.log(response);
//                //alert(response);
//                   if(response.status == 404)
//                   {
//                   //  alert('test');
//                   $('successmessage').html('');
//                   $('successmessage').addClass('alert alert-danger');
//                   $('successmessage').text(response.message);
//                   }
//                   else{
//                     alert('gfjgf');
//                       $('#editmain_category_name').val(response.category_main.category_main_name);
//                     //alert(response.category_main.category_main_name);
//                     $('#cate_id').val(cate_id);
//                       var sts = response.category_main.status;
//                        //alert(sts);
//                       if(sts == 49)
//                       {
//                           $('#editstatus').val(1);
  
//                       }
//                       else{
//                           $('#editstatus').val(0);
//                       }
//                       $('#editmain_category_image').val();		
//                        $('#oldeditmain_category_image').val(response.category_main.category_main_image);
                     
                    
//                       // alert(response.category_main.category_main_image);
//                   }
       
                  
           
//               }
          
//         });
  
//       });
</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\mano\oxygen-new\resources\views/layout/admin/banner/slider.blade.php ENDPATH**/ ?>