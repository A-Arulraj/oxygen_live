
<?php $__env->startSection('contents'); ?>
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
  <script id="MathJax-script" async
          src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js">
  </script>
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
							<h3>Package 
								
							</h3>
						</div>
					</div>
					<div class="col-lg-6">
						<ol class="breadcrumb pull-right">
							<li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
							<li class="breadcrumb-item active">Package </li>
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
							
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal"><i class="fa fa-plus"></i>  Add Package</button>
							
							<div class="btn-popup pull-right">
								
                            <div class="modal fade" id="exampleModal" tabindex="-1"  role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title f-w-600" id="exampleModalLabel">Add Package</h5>
												<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
											</div>
											<div class="modal-body">
												<form class="" method="post" action="<?php echo e(route('staffpackage.store')); ?>" enctype="multipart/form-data">
													<?php echo csrf_field(); ?>
													<div class="form">
                                                        
														<div class="row">
															<div class="col-md-6">														
														<div class="form-group">
															<label for="validationCustom01" class="mb-1">Pack</label>
															<input class="form-control" id="" required=""  name="name" type="text">
														</div>
														</div><div class="col-md-6">	
														<div class="form-group">
															<label for="validationCustom01" class="mb-1">Status</label>
															<select class="custom-select w-100 form-control" name="status" required="">
																
																
																<option value="1">Active</option>
																<option value="0">Inactive</option>
																
															</select>
															
														</div>
														</div>
														</div>
														
                                                        <div class="form-group">
															<label for="validationCustom01" class="mb-1">Price</label>
															<input class="form-control" id="" required="" name="price" type="text">
														</div>


														<div class="row">
															<div class="col-md-6">														
														
															<div class="form-group">
															<label for="validationCustom01" class="mb-1">Validity</label>
															<input class="form-control" id="" required="" name="validity" type="text">
														</div>
														</div><div class="col-md-6">	
														<div class="form-group">
															<label for="validationCustom01" class="mb-1">++ Days</label>
															<input class="form-control" id="" required=""  name="days" type="text">
														</div>
														</div>
														</div>
                                                        <div class="form-group">
															<label for="validationCustom01" class="mb-1">Wallet </label>
															<input class="form-control" id="" required="" name="wallet" type="text">
														</div>
														   <div class="form-group">
															<label for="validationCustom01" class="mb-1">Commission %</label>
															<input class="form-control" id="" required="" name="commission" type="text">
														</div>
														
														<div class="form-group">
															<label for="validationCustom01" class="mb-1">Description</label>
															<textarea class="ckeditor form-control" rows="3" id="description"  required="" name="description"></textarea>
											
														</div>
                                                       
														
													</div>
												
											</div>
											<div class="modal-footer">
                                                <a href="" onclick="return confirm('Are you sure, you want to Save it?')"> <button class="btn btn-primary" type="submit">Save</button></a>
												<button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
											</div>
										</form>
										</div>
									</div>
								</div>
							</div>
							
							<div class="modal fade" id="exampleupdateModal" tabindex="-1"  role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title f-w-600" id="exampleupdateModalLabel">Update Package</h5>
											<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
										</div>
										<div class="modal-body">
											 <form class="" method="post"  enctype="multipart/form-data"> 
												 <?php echo csrf_field(); ?> 
												<div class="form">
													<input type="hidden" id=package_id name=package_id>
													<div class="row">
														<div class="col-md-6">														
													<div class="form-group">
														<label for="validationCustom01" class="mb-1">Pack</label>
														<input class="form-control" id="editname" required=""  name="editname" type="text">
													</div>
													</div><div class="col-md-6">	
													<div class="form-group">
														<label for="validationCustom01" class="mb-1">Status</label>
														<select class="custom-select w-100 form-control" name="editstatus" id="editstatus" required="">
															
															
															<option value="1">Active</option>
															<option value="0">Inactive</option>
															
														</select>
														
													</div>
													</div>
													</div>
													
															  
															
													<div class="form-group">
														<label for="validationCustom01" class="mb-1">Price</label>
														<input class="form-control" id="editprice" required="" name="editprice" type="text">
													</div>


													<div class="row">
														<div class="col-md-6">														
													
														<div class="form-group">
														<label for="validationCustom01" class="mb-1">Validity</label>
														<input class="form-control" id="editvalidity" required="" name="editvalidity" type="text">
													</div>
													</div><div class="col-md-6">	
													<div class="form-group">
														<label for="validationCustom01" class="mb-1">++ Days</label>
														<input class="form-control" id="editdays" required=""  name="editdays" type="text">
													</div>
													</div>
													</div>
													<div class="form-group">
														<label for="validationCustom01" class="mb-1">Wallet </label>
														<input class="form-control" id="editwallet" required="" name="editwallet" type="text">
													</div>
													   <div class="form-group">
														<label for="validationCustom01" class="mb-1">Commission %</label>
														<input class="form-control" id="editcommission" required="" name="editcommission" type="text">
													</div>
													
													<div class="form-group">
														<label for="validationCustom01" class="mb-1">Description</label>
														<textarea class="ckeditor form-control" rows="3" id="editdescription"  required="" name="editdescription">
															
														</textarea>
														
													</div>
												   
													
												</div>
											
										</div>
										<div class="modal-footer">
											<button id="update_package" onclick="return confirm('Are you sure, you want to Update it?')"  class="btn btn-primary" type="submit">Update</button>
											<button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
										</div>
									 </form> 
									</div>
								</div>
							</div>
						</div>
							
							
							<div class="datatable-dashv1-list custom-datatable-overright">
								
								
								<table class="table" id="table"  data-click-to-select="true" data-show-columns="true" data-sort-name="id" data-sort-order="asc" data-mobile-responsive="true" data-toggle="table" data-sort="true" data-pagination="true" data-search="true"  data-show-refresh="true" data-key-events="true"  data-resizable="true" data-cookie="true"
								data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
									
                               
                                    <thead>
										<tr>
											<th>SNO</th>
											<th>Name</th>
											
											
                                            <th>Price</th>
											<th>Validity</th>
											
											<th>++ Days</th>
											<th>wallet</th>
											<th>Commission</th>
											<th>Description</th>
											
											
											<th> Status</th>
											<th>Action</th>
										</tr>
									</thead>
                                    <tbody>
										<?php $__currentLoopData = $package; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td>#<?php echo e($loop->iteration); ?></td>
											<td><?php echo e($package->name); ?></td>
											
										
											<td><?php echo e($package->price); ?></td>
											<td><?php echo e($package->validity); ?></td>
											<td><?php echo e($package->days); ?></td>
											<td><?php echo e($package->wallet); ?></td>
											<td><?php echo e($package->commission); ?></td>
											<td><?php echo $package->description; ?></td>
										
										
										
								<td>	


									<label class="switch">
										
										 <?php if($package->status  == 1): ?>{
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
											<button type="button" class="edit_package btn btn-secondary mx-1" value="<?php echo e($package->id); ?>">
											<i class="fa fa-pencil"></i></button>
											
											<form
												action="<?php echo e(route('staffpackage.destroy', $package->id)); ?>"
												method="post">
												<?php echo method_field('DELETE'); ?>
												<?php echo csrf_field(); ?>
												<button type="submit" class="btn btn-warning mx-1" value="<?php echo e($package->id); ?>"
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
	
	<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

<script type="text/javascript">

    $(document).ready(function() {

       $('.ckeditor').ckeditor();

    });

</script>
<script>
	CKEDITOR.replace( 'description' );
	CKEDITOR.replace( 'editdescription' );
	timer = setInterval(updateDiv,100);
    function updateDiv(){
        var editorText = CKEDITOR.instances.editdescription.getData();
        $('#trackingDiv').html(editorText);
    }
</script>

<script>

$(document).on('click','.edit_package', function(e){
        var editroute1='';
        var htmlPlan='';
    e.preventDefault();
    var pack_id = $(this).val();
    //    console.log(pin_id);
    $('#exampleupdateModal').modal('show');
    $.ajax({
        //   data: $('').serialize(),
          url: "<?php echo e(url('staff/package')); ?>/"+pack_id+"/edit",          
          type: "get",
          dataType: 'json',
          success: function (response) {
              // console.log(response);
             //alert(response);
                if(response.status == 404)
                {
                // alert('test');
                $('successmessage').html('');
                $('successmessage').addClass('alert alert-danger');
                $('successmessage').text(response.message);
                }
                else{
                    $('#editname').val(response.packages.name);
                    //$('#editstatus').val(response.packages.status);
					var sts = response.packages.status;
					// alert(sts);
					if(sts == 1)
					{
						$('#editstatus').val(1);

					}
					else{
						$('#editstatus').val(0);
					}
		
					// var img= response.packages.image;
					// //alert(img);
					// // var path= $('#editimage1').attr('src');
					// // var mergeimage = path + img;
					// // $('#editimage1').val(mergeimage);
					// $('#oldeditimage1').val(img);
                    $('#editprice').val(response.packages.price);
                    $('#editvalidity').val(response.packages.validity);
                    $('#editdays').val(response.packages.days);
                    $('#editwallet').val(response.packages.wallet);
                    $('#editcommission').val(response.packages.commission);
                    var desc= (response.packages.description);
// alert(desc);
					// var editorText = CKEDITOR.instances.description.getData();
					 CKEDITOR.instances.editdescription.setData(desc);
					// alert(editorText);
					$('#package_id').val(pack_id);
                    // var editroute_id = response.pincodee.route_id;
                    // //alert(editroute_id);
                    // var editzone_id = response.pincodee.zonal_id;
                    // //alert(editzone_id);
                    
                    // var editzonal = JSON.stringify(response.editzonal);
                    // var editzonal1 = JSON.parse(editzonal);
       
                }
     
                
         
            }
        
      });

    });
	</script>
	
	  <script>
		/*update*/
     $(document).on('click','#update_package', function(e){
    //  alert('test');

        //  e.preventDefault(e);
    var updateid = $('#package_id').val();
     //alert(updateid);
	 var name = $('#editname').val();
    var status = $('#editstatus').val();
	// alert(status);
    var price = $('#editprice').val();
    var  validity = $('#editvalidity').val();
    var days = $('#editdays').val();
    var  wallet = $('#editwallet').val();
	var  commission = $('#editcommission').val();
	var description = CKEDITOR.instances.editdescription.getData();
	// var  description = $('#editdescription').val();

    var url ="<?php echo e(route('staffpackage.update', ":updateid")); ?>";
    url = url.replace(":updateid", updateid);
    $.ajax({

        //   data: $('').serialize(),
            //  url: "<?php echo e(url('admin/pincode1/update')); ?>/"+updatepin_id,
            
			// contentType: 'multipart/form-data',

            url:url,
          
          type: "PUT",
    //
	
	data: {	 		_token : `<?php echo e(csrf_token()); ?>`,
           name:name,status:status,price:price,validity:validity,days:days,wallet:wallet,commission:commission,description:description
	},
         dataType: 'html',
          success: function (response) {
               //console.log(response);

               $('#exampleupdateModal').modal('hide');
               location.reload();
           
            }
        
      });
    

    });
	</script>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ktonline/public_html/oxygen.ktonline.in/resources/views/layout/staff/master/package.blade.php ENDPATH**/ ?>