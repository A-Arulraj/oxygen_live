
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
							<h3>Designation 
								
							</h3>
						</div>
					</div>
					<div class="col-lg-6">
						<ol class="breadcrumb pull-right">
							<li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
							<li class="breadcrumb-item active">Designation </li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!-- Container-fluid Ends-->
		
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						
						<div class="card-body"> 
							<button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal"><i class="fa fa-plus"> </i>  
							Add Designation
							</button>
							
							<div class="btn-popup pull-right">
								
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title f-w-600" id="exampleModalLabel">Add Designation </h5>
												<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
											</div>
											<div class="modal-body">
												<form class=""  method="post"> 
													<?php echo csrf_field(); ?>
													<div class="form">
														
														<div class="form-group">
															<label for="validationCustom01" class="mb-1">Select Department :</label>
															<select class="custom-select w-100 form-control" id="department" name="department" required="">
																<option value="">--Select--</option>
																
																<?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																
																<option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
																
																<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
															</select>
															
														</div>
														
														<div class="form-group">
															<label for="validationCustom01" class="mb-1">Designation  Name :</label>
															<input class="form-control" id="designation" name="designation" type="text" required="true">
														</div>
														
														<div class="form-group">
															<label for="validationCustom01" class="mb-1">Status</label>
															<select class="custom-select w-100 form-control" id="status" name="status" required="">
																
																
																<option value="1">Active</option>
																<option value="0">Inactive</option>
																
															</select>
															
														</div>
													</div>
													
												</div>
                                                <div class="modal-footer">
													<button class="btn btn-primary" type="submit" id="btnsave">Save</button>
                                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
												</div>
												
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="btn-popup pull-right">
							<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title f-w-600" id="exampleModalLabel">Edit Designation </h5>
											<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
										</div>
										<div class="modal-body">
											<form class=""  method="post"> 
												<?php echo csrf_field(); ?>
												<div class="form">
													<input type="hidden" id="designation_id">
													<div class="form-group">
														<label for="validationCustom01" class="mb-1">Select Department :</label>
														<select class="custom-select w-100 form-control" id="editdepartment" name="editdepartment" required="">
															<option value="">--Select--</option>
															<?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
															
															<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														</select>
														
													</div>
													
													<div class="form-group">
														<label for="validationCustom01" class="mb-1">Designation  Name :</label>
														<input class="form-control" id="editdesignation" name="editdesignation" type="text" required="true">
													</div>
													
													<div class="form-group">
														<label for="validationCustom01" class="mb-1">Status</label>
														<select class="custom-select w-100 form-control" id="editstatus" name="editstatus" required="">
															
															
															<option value="1">Active</option>
															<option value="0">Inactive</option>
															
														</select>
														
													</div>
												</div>
												
											</div>
											<div class="modal-footer">
												<button class="btn btn-primary" type="submit" id="updatesave">Update</button>
												<button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
											</div>
											
										</form>
									</div>
								</div>
							</div>
							</div>



							<div class="datatable-dashv1-list custom-datatable-overright">
								
								
								<table class="table" id="table"  data-click-to-select="true"  data-sort-name="id" data-sort-order="asc" data-mobile-responsive="true" data-toggle="table" data-sort="true" data-pagination="true" data-search="true" data-show-columns="true"  data-show-refresh="true" data-key-events="true"  data-resizable="true" data-cookie="true"
								data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
									
                                    <thead>
										<tr>
											<th data-field="id" data-sortable="true"> ID</th> 
											<th data-field="deparment" data-sortable="true" >Deparment</th>
											<th data-field="designation" data-sortable="true">Designation </th>
											
											
											<th data-field="status" data-sortable="true">Status</th>
											<th>Action</th>
										</tr>
									</thead>
                                    <tbody>
										
									<?php $__currentLoopData = $designation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										
										
										
										<tr>
											<td><?php echo e($loop->iteration); ?></td>
											
											
											
											<td>
												<?php echo e($item->name); ?>

											</td>
											<td style="width:100%;">	
												<?php echo e($item->designation); ?>

											</td>
						<td>
                         <label class="switch">
							<?php if($item->status  == 1): ?>{
								<input type="checkbox"
									onclick="return confirm('you want to Change it?  Please Click Edit Button')" value="1" active="Active"
									checked id="togBtn">
								}<?php else: ?>{
									<input type="checkbox"
									onclick="return confirm('you want to Change it?  Please Click Edit Button')" value="0"  class="Inactive"
									 id="togBtn">
								}
								<?php endif; ?>
                          
                            <div class="slider round"><!--ADDED HTML -->
                            <span class="off" value="0" id="inactive">Inactive </span>
                            <span class="on"  value="1" id="active">Active</span><!--END--></div>
</label>

  </div>
                            
                            </td>
											
										<td><span class="d-flex"> 
											
											<button type="button" class="edit_designation btn btn-secondary mx-1" data-bs-toggle="modal" data-original-title="Edit" value="<?php echo e($item->id); ?>" id="edit_designation">
												<i class="fa fa-pencil"></i> </button>
												
											
												<form
												action="<?php echo e(route('designation.master.destroy', $item->id)); ?>"
												method="post">
												<?php echo method_field('DELETE'); ?>
												<?php echo csrf_field(); ?>
												<button type="submit" class="btn btn-warning mx-1" value="<?php echo e($item->id); ?>"
													onclick="return confirm('Are you sure, you want to delete it?')"><i
														class="fa fa-trash"></i>
												</button>
											</form>
											
											
												
										</span></td>
											
											
										</tr>
										
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</tbody>
								</table> </div>
								
								
								
								
                                
								
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Container-fluid Ends  add_designation-->
		
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script>
	$(document).on('click','.edit_designation', function(e){
        
        
    e.preventDefault();
    var id = $(this).val();
    //    console.log(pin_id);
     $('#exampleModal1').modal('show');
      
	      console.log(id);

		 var url= "<?php echo e(route('designation.master.edit', ":id")); ?>";
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
                 //alert('test');
                $('successmessage').html('');
                $('successmessage').addClass('alert alert-danger');
                $('successmessage').text(response.message);
                }
                else{
			console.log(response.designation);
					$('#designation_id').val(response.designation.id);
                    $('#editdepartment').val(response.designation.department);
                    $('#editdesignation').val(response.designation.designation);
                    $('#editstatus').val(response.designation.status);
                }  
            }
        
      });
   
	   });
   



	   $(document).on('click','#updatesave', function(e){
        
        
		e.preventDefault();
		var id = $('#designation_id').val();
	var department = $('#editdepartment').val();
    var designation = $('#editdesignation').val();
	var status = $('#editstatus').val();
			  console.log(id);
	
			 var url= "<?php echo e(route('designation.master.update', ":id")); ?>";
			 url = url.replace(":id", id);
	
			 $.ajax({
        //   data: $('').serialize(),    <?php echo e(url('admin/zonalupdate')); ?>/"+id+"/update"
             // url: "<?php echo e(url('admin/zonalupdate')); ?>/"+updateid,
              //console.log(id);
         url:url, 
         type: "PUT",
         
		 data: {_token : `<?php echo e(csrf_token()); ?>`,
		 	department:department,
			designation:designation,
            status:status
        },
         dataType: 'json',
          success: function (response) {
               console.log(response);
            // alert('test');
                if(response.status == 404)
                {
              
                $('successmessage').html('');
                $('successmessage').addClass('alert alert-danger');
                $('successmessage').text(response.message);
                }
                else{
					location.reload(); 
					
                }  
            }
        
      });
	   
	});






	$(document).on('click','#btnsave', function(e){
       //alert('test');

       //  e.preventDefault(e);
   // var id = $('#id').val();
     //alert(id);


    
    var department = $('#department').val();
    var designation = $('#designation').val();
	var status = $('#status').val();
    
        //alert ( name);
   
  //  var url ="<?php echo e(route('zonalupdate', ":updateid")); ?>";
   // url = url.replace(":updateid", updateid);
    $.ajax({
        //   data: $('').serialize(),    <?php echo e(url('admin/zonalupdate')); ?>/"+id+"/update"
             // url: "<?php echo e(url('admin/zonalupdate')); ?>/"+updateid,
              //console.log(id);
         action: "<?php echo e(route('designation.master.store')); ?>", 
         type: "POST",
         
		dataType: 'json',
          success: function (response) {
               console.log(response);
            // alert('test');
                if(response.status == 404)
                {
            
                $('successmessage').html('');
                $('successmessage').addClass('alert alert-danger');
                $('successmessage').text(response.message);
                }
                else{
					location.reload(); 
					//alert('stored');
                    //$('#zonal_id').val(response.editzonal.id);
                    //$('#editname').val(response.editzonal.name);
                    //$('#editstatus').val(response.editzonal.status);
                }  
            }
        
      });
    });
            

	$('#active').change(function() {
            let route_id = $(this).val();
            let url = '<?php echo e(route('getZonal')); ?>?route_id=' + route_id;
            let method = 'GET';
			console.log(route_id);
            getAjaxValue(url, method, function(data) {
                $('#zone_id').empty();

                $.each(data, function(key, zone) {
                    $('#zone_id').append(
                        `<option value="${zone.id}" selected>${zone.name}</option>`
                    );
                });
            })
        });

	</script>
	<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ktonline/public_html/oxygen.ktonline.in/resources/views/layout/admin/master/designation.blade.php ENDPATH**/ ?>