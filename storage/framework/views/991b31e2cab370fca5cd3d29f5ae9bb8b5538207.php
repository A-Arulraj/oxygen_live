
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
            <div class="container-fluid" >
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Role Create
                                    <small>oxygen Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Role Create</li>
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
                     	
    <div class="card-body">
                
                        <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                           
                            <div class="card-body">
							 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal"><i class="fa fa-plus"></i>  Role</button>
                                   
                                <div class="btn-popup pull-right">
								
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog " role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Role</h5>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="" method="post" action="<?php echo e(route('roll.store')); ?>" onsubmit="return confirm('Are you sure, you want to ADD it?')" >
                                                        <div class="form">
                                                            <?php echo csrf_field(); ?>

                                                            <div class="form-group">
                                                                <label for="role" class="mb-1 fw-bold">Select Department </label>
                                                                
                                                                <select class="form-control" name="role" id="role">
                                                                    <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>                                                              
                                                                
                                                                
                                                            </div>
															
															<div class="form-group">
                                                                <label for="description" class="mb-1 fw-bold"> Description </label>
                                                                <input class="form-control" id="description" type="text" name="description" required >
                                                            </div>
															
														
															<div class="form-group">
                                                                <label for="permission[]" class="mb-4 fw-bold"> Permission </label><br>
																<div class="form-group">
                                                                <input class="form-group" id="permission1" type="checkbox" name="permission[1]" value="1" > Dashboard	&nbsp;															
																<input class="form-group" id="permission2" type="checkbox" name="permission[2]" value="2" > Category	&nbsp;															
																<input class="form-group" id="permission3" type="checkbox" name="permission[3]" value="3" > Products	&nbsp;															
																<input class="form-group" id="permission4" type="checkbox" name="permission[4]" value="4" > Sales	    &nbsp;																	
                                                                <input class="form-group" id="permission5" type="checkbox" name="permission[5]" value="5" > Coupons		&nbsp;	
                                                                </div>
                                                                <div class="form-group">
																<input class="form-group" id="permission6" type="checkbox" name="permission[6]" value="6" > Banners		&nbsp;														
																<input class="form-group" id="permission7" type="checkbox" name="permission[7]" value="7" > Auction		&nbsp;														
																<input class="form-group" id="permission8" type="checkbox" name="permission[8]" value="8" > Offer		&nbsp;														
																<input class="form-group" id="permission9" type="checkbox" name="permission[9]" value="9" > Marketing	&nbsp;															
																<input class="form-group" id="permission10" type="checkbox" name="permission[10]" value="10" > Staff      &nbsp;
                                                                </div>
                                                                <div class="form-group">
																<input class="form-group" id="permission11" type="checkbox" name="permission[11]" value="11" > Role			&nbsp;													
																<input class="form-group" id="permission12" type="checkbox" name="permission[12]" value="12" > Vendors		&nbsp;														
																<input class="form-group" id="permission13" type="checkbox" name="permission[13]" value="13" > Activity Tracker	&nbsp;															
																<input class="form-group" id="permission14" type="checkbox" name="permission[14]" value="14" > Master				&nbsp;												
																<input class="form-group" id="permission15" type="checkbox" name="permission[15]" value="15" > Settings			&nbsp;													
																</div>
                                                            </div>	
															
															<div class="form-group">
                                                        <label for="status" class="mb-1 fw-bold">Status</label>
                                                        <select class="custom-select w-100 form-control" name="status" required>
                                               
                                               
                                                         <option value="1">Active</option>
                                                            <option value="0">Inactive</option>
                                              
                                                        </select>
                                                              
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

                                



                                

                                <div class="btn-popup pull-right">
								
                                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog " role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Edit Role</h5>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?php echo e(route('roll.update', 0)); ?>" method="post" onsubmit="return confirm('Are you sure, you want to Update it?')" >
                                                        <div class="form">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <input class="form-control" id="role_id" type="hidden" name="role_id"  >
                                                            <div class="form-group">
                                                                <label for="role" class="mb-1 fw-bold"> Select Department </label>
                                                                <select class="form-control" name="editrole" id="editrole">
                                                                    
                                                                    <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>  
                                                            </div>
															
															<div class="form-group">
                                                                <label for="description" class="mb-1 fw-bold"> Description </label>
                                                                <input class="form-control" id="editdescription" type="text" name="editdescription" required >
                                                            </div>
															
														
															<div class="permissionselect form-group" >
                                                                <label for="editpermission[]" class="mb-4 fw-bold"> Permission </label><br>
																<div class="permissionselect form-group">
                                                                <input class="permissionselect  form-group" id="editpermission1" type="checkbox" name="editpermission[1]" value="1" > Dashboard	&nbsp;															
																<input class="permissionselect  form-group" id="editpermission2" type="checkbox" name="editpermission[2]" value="2" > Category	&nbsp;															
																<input class="permissionselect  form-group" id="editpermission3" type="checkbox" name="editpermission[3]" value="3" > Products	&nbsp;															
																<input class="permissionselect  form-group" id="editpermission4" type="checkbox" name="editpermission[4]" value="4" > Sales	    &nbsp;																	
                                                                <input class="permissionselect  form-group" id="editpermission5" type="checkbox" name="editpermission[5]" value="5" > Coupons		&nbsp;	
                                                                </div>
                                                                <div class="permissionselect form-group">
																<input class="permissionselect form-group" id="editpermission6" type="checkbox" name="editpermission[6]" value="6" > Banners		&nbsp;														
																<input class="permissionselect form-group" id="editpermission7" type="checkbox" name="editpermission[7]" value="7" > Auction		&nbsp;														
																<input class="permissionselect form-group" id="editpermission8" type="checkbox" name="editpermission[8]" value="8" > Offer		&nbsp;														
																<input class="permissionselect form-group" id="editpermission9" type="checkbox" name="editpermission[9]" value="9" > Marketing	&nbsp;															
																<input class="permissionselect form-group" id="editpermission10" type="checkbox" name="editpermission[10]" value="10" > Staff      &nbsp;
                                                                </div>
                                                                <div class="permissionselect form-group">
																<input class="permissionselect form-group" id="editpermission11" type="checkbox" name="editpermission[11]" value="11" > Role			&nbsp;													
																<input class="permissionselect form-group" id="editpermission12" type="checkbox" name="editpermission[12]" value="12" > Vendors		&nbsp;														
																<input class="permissionselect form-group" id="editpermission13" type="checkbox" name="editpermission[13]" value="13" > Activity Tracker	&nbsp;															
																<input class="permissionselect form-group" id="editpermission14" type="checkbox" name="editpermission[14]" value="14" > Master				&nbsp;												
																<input class="permissionselect form-group" id="editpermission15" type="checkbox" name="editpermission[15]" value="15" > Settings			&nbsp;													
																</div>
                                                            </div>	
															
															<div class="form-group">
                                                        <label for="status" class="mb-1 fw-bold">Status</label>
                                                        <select class="custom-select w-100 form-control" name="editstatus" required>
                                               
                                               
                                                         <option value="1">Active</option>
                                                            <option value="0">Inactive</option>
                                              
                                                        </select>
                                                              
                                                            </div>
                                                        </div>
                                                   
                                                        </div>
                                                        <div class="modal-footer">
                                                    <button class="btn btn-primary"  type="submit">Update</button>
                                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                                        </div>												
												 </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>





								
								<div class="datatable-dashv1-list custom-datatable-overright">

                            
                                <table class="table fcolor" id="table"  data-click-to-select="true"  data-sort-name="id" data-sort-order="asc" data-mobile-responsive="true" data-toggle="table" data-show-columns="true" data-sort="true" data-pagination="true" data-search="true"  data-show-refresh="true" data-key-events="true"  data-resizable="true" data-cookie="true"
                                    data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">  
                                    <thead>
                                     <tr>
                                       <th data-field="id" data-sortable="true">Id</th> 
                                        
                                        <th data-field="role" data-sortable="true">Role</th>

                                        <th data-field="description" data-sortable="true">Description</th>
                                       
                                       <th data-field="status" data-sortable="true">Status</th>
									   <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                   
                                   
                                            <?php $__currentLoopData = $roll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>#<?php echo e($loop->iteration); ?></td>
                                            
                                            
                                            <td><?php echo e($item->name); ?></td>

                                            <td><?php echo e($item->rolldescription); ?></td>
                                            
                                            <td>
                                            <<label class="switch">
                                                
                                                 <?php if($item->status  == 1): ?>{
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

                                            </div>

                                            </td>

                                            <td> 
                                                <span class="mt-3 d-flex">
                                                <button  id="editroll" value="<?php echo e($item->roll_id); ?>" class="btn btn-secondary mx-1" data-original-title="Edit"><i class="fa fa-pencil"></i> </button>
                                            <form
                                                action="<?php echo e(route('roll.destroy', $item->roll_id)); ?>"
                                                method="post">
                                                <?php echo method_field('DELETE'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-warning mx-1"
                                                    onclick="return confirm('Are you sure, you want to delete it?')" title="" data-original-title="Delete"><i
                                                        class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                             
                                                </span>
                                            </td>                                              
                                            </tr>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                    </tbody>
                                </table> </div>
                            </div>
                        </div>
                    </div>
	
			</div>
			</div>
			
		</div>
		</div></div>
		
		</div>
		</div>	

    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('scripts'); ?>
    <script>

           
    $(document).on('click','#editroll', function(e){
        var editroute1='';
        var htmlPlan='';
    e.preventDefault();
    var id = $(this).val();
        console.log( id);
    $('#exampleModal1').modal('show');

    var url ="<?php echo e(route('roll.edit', ":id")); ?>";

    url = url.replace(":id", id);
    //console.log (url);
    $.ajax({
        //   data: $('').serialize(),  <?php echo e(url('admin/pincode1')); ?>/"+pin_id+"/edit"
          url: url,          
          type: "get",
          dataType: 'json',
          success: function (response) {
              // console.log(response);
             //alert('response');
                if(response.status == 404)
                {
                // alert('test');
                $('successmessage').html('');
                $('successmessage').addClass('alert alert-danger');
                $('successmessage').text(response.message);
                }
                else{
                    
                    console.log(response);
                    //alert(response);
                    $('#role_id').val(response.roll.id);
                    $('#editrole').val(response.roll.roll);
                    $('#editdescription').val(response.roll.description);
                    //$("#editpermission[1]").prop("checked", "1");
                    var permission        =   (response.roll.permission_id);
                     let per     =  JSON.parse(permission);                   
                    
                         //$("#editpermission1").prop("checked", true);

                   // $('#editpermission[3]').val(3).prop("checked", true);
                    //const test = {a: 1, b: 2, c: 3};
                    $('.permissionselect').prop('checked', false);

                    for (const [key, value] of Object.entries(per)) {                 
                   let chech = $('#editpermission'+key+'').prop('checked', true);
                   }
                    // $('#editstatus').val(response.editdepartment.status);
                }  
            }
        
      });
    });


    $(document).on('click','#update_btn', function(e){
       //alert('test');

         e.preventDefault(e);
    var id = $('#role_id').val();
     //alert(id);


    
     var roll = $('#editrole').val();
     var description = $('#editdescription').val();  
     var permission_id = $('#editpermission').val();   
    
    var url ="<?php echo e(route('roll.update', ":id")); ?>";

        url = url.replace(":id", id);
   

    $.ajax({
        //   data: $('').serialize(),    <?php echo e(url('admin/zonalupdate')); ?>/"+id+"/update"
             // url: "<?php echo e(url('admin/zonalupdate')); ?>/"+updateid,
              //console.log(id);
            url: url,          
          type: "put",   
          data: {
            _token: "scrf",
            roll:roll,
            description:description,
            permission_id:permission_id

          },     
         dataType: "json",
          success: function (response) {
               console.log(response);
                alert(response);
               $('#exampleModal1').modal('hide');
               //location.reload();   
                
         
            }
        
      });
    });

</script>
    <?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\mano\oxygen-new\resources\views/layout/admin/role/role-create.blade.php ENDPATH**/ ?>