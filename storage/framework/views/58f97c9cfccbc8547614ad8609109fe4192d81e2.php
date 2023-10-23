
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
                                <h3>GST Listing

                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Gst Listing</li>
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
                                <button type="button" class="btn btn-primary btn1" data-bs-toggle="modal"
                                    data-original-title="test" data-bs-target="#exampleModal"><i class="fa fa-plus"></i> Add
                                    Gst</button>

                                <div class="btn-popup pull-right">
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Add GST</h5>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="" method="post"
                                                        action="<?php echo e(route('gst.master.store')); ?>"
                                                        enctype="multipart/form-data">
                                                        <?php echo csrf_field(); ?>
                                                        <div class="form">

                                                            <div class="form-group">
                                                                <label for="validationCustom01" class="mb-1">GST
                                                                    Name</label>
                                                                <input class="form-control" name="name" id="gstname"
                                                                    require="" type="text" onblur="myFunction()">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="validationCustom01" class="mb-1">GST
                                                                    Value</label>
                                                                <input class="form-control" name="value" id="gstvalue"
                                                                    require="" type="text">
                                                            </div>


                                                            <div class="form-group">
                                                                <label for="validationCustom01" class="mb-1">GST
                                                                    Description</label>
                                                                <input class="form-control" name="description"
                                                                    id="description" require="" type="text">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="validationCustom01"
                                                                    class="mb-1">Status</label>
                                                                <select name="status"
                                                                    class="custom-select w-100 form-control" required="">


                                                                    <option value="1">Active</option>
                                                                    <option value="0">Inactive</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">

                                                            <button
                                                                onclick="return confirm('Are you sure, you want to Save it?')"
                                                                class="btn btn-primary" type="submit">Save</button>
                                                            <button class="btn btn-secondary" type="button"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="card-body">
                                
                                <div class="btn-popup pull-right">
                                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Update GST</h5>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="" method="post"
                                                        action=""
                                                        enctype="multipart/form-data">
                                                        
                                                        <div class="form">
                                                            <input class="form-control" id="editid" name="editid" type="hidden"
                                                            required="true">
                                                            <div class="form-group">
                                                                <label for="validationCustom01" class="mb-1">GST
                                                                    Name</label>
                                                                <input class="form-control" name="editgstname" id="editgstname"
                                                                    require="" type="text" onblur="myFunction()">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="validationCustom01" class="mb-1">GST
                                                                    Value</label>
                                                                <input class="form-control" name="editgstvalue" id="editgstvalue"
                                                                    require="" type="text">
                                                            </div>


                                                            <div class="form-group">
                                                                <label for="validationCustom01" class="mb-1">GST
                                                                    Description</label>
                                                                <input class="form-control" name="editgstdescription"
                                                                    id="editgstdescription" require="" type="text">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="validationCustom01"
                                                                    class="mb-1">Status</label>
                                                                <select name="editgststatus"
                                                                    class="custom-select w-100 form-control" required="" id="editgststatus">


                                                                    <option value="1">Active</option>
                                                                    <option value="0">Inactive</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">

                                                            <button
                                                                onclick="return confirm('Are you sure, you want to Update it?')"
                                                                class="btn btn-primary" id="btnupdate" type="submit">Update</button>
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
                                
                                <div class="card-body">
                                    <table class="table" id="table" data-click-to-select="true" data-sort-name="id"
                                        data-sort-order="asc" data-mobile-responsive="true" data-toggle="table"
                                        data-sort="true" data-pagination="true" data-search="true" data-show-columns="true"
                                        data-show-refresh="true" data-key-events="true" data-resizable="true"
                                        data-cookie="true" data-show-export="true" data-click-to-select="true"
                                        data-toolbar="#toolbar">

                                        <thead>
                                            <tr>
                                                <th data-field="id" data-sortable="true">ID</th>
                                                <th data-field="name" data-sortable="true">GST</th>
                                                <th data-field="value" data-sortable="true">GST Value</th>
                                                <th data-field="description" data-sortable="true">Description</th>

                                                <th data-field="status" data-sortable="true"> Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $gst; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gst): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($loop->iteration); ?></td>


                                                    <td><?php echo e($gst->gst_name); ?></td>
                                                    <td><?php echo e($gst->value); ?></td>
                                                    <td><?php echo e($gst->description); ?></td>

                                                    <td>
                                                        

                                                        <label class="switch">
                                                            <?php if($gst->status  == 1): ?>{
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
                                                               
                                                                    <span class="off">Inactive </span>
                                                               
                                                                    <span class="on">Active</span>
                                                                
                                                                <!--ADDED HTML -->


                                                                <!--END-->
                                                            </div>
                                                        </label>

                                </div>

                                </td>


                                <td>
                                    <span class="d-flex">

                                        <button type="button" class="edit_department btn btn-secondary mx-1" value="<?php echo e($gst->id); ?>">
                                            <i class="fa fa-pencil"></i></button>

                                        
                                        <form action="<?php echo e(route('gst.master.destroy', $gst->id)); ?>" method="post">
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
    <script>
        
        $(document).on('click','.btn1', function(e){
            
            $('#gstname').val('');
            $('#gstvalue').val('');
            $('#description').val('');
            $('#status').val('');
        
         });

            
    $(document).on('click','.edit_department', function(e){
        var editroute1='';
        var htmlPlan='';
    e.preventDefault();
    var id = $(this).val();
    //    console.log(pin_id);
    // alert(id);
    $('#exampleModal1').modal('show');

    //console.log ($id)
    $.ajax({
        //   data: $('').serialize(),  <?php echo e(url('admin/pincode1')); ?>/"+pin_id+"/edit"
          url: "<?php echo e(url('admin/editgst')); ?>/"+id+"/edit",          
          type: "get",
          dataType: 'json',
          success: function (response) {
              console.log(response);
            // alert('test');
                if(response.status == 404)
                {
                // alert('test');
                $('successmessage').html('');
                $('successmessage').addClass('alert alert-danger');
                $('successmessage').text(response.message);
                }
                else{
                    $('#editid').val(response.editdepartment.id);
                    $('#editgstname').val(response.editdepartment.gst_name);
                    $('#editgstvalue').val(response.editdepartment.value);
                    $('#editgstdescription').val(response.editdepartment.description);
                    $('#editgststatus').val(response.editdepartment.status);
                }  
            }
        
      });
    




    });

    $(document).on('click','#btnupdate', function(e){
    //    alert('test');

         e.preventDefault(e);
    var id = $('#editid').val();
    //  alert(id);


    
    var name = $('#editgstname').val();
    var value = $('#editgstvalue').val();
    var description = $('#editgstdescription').val();
    var status = $('#editgststatus').val();
    
        //alert ( name);
   
  //  var url ="<?php echo e(route('zonalupdate', ":updateid")); ?>";
   // url = url.replace(":updateid", updateid);
    $.ajax({
        //   data: $('').serialize(),    <?php echo e(url('admin/zonalupdate')); ?>/"+id+"/update"
             // url: "<?php echo e(url('admin/zonalupdate')); ?>/"+updateid,
              //console.log(id);
         url: "<?php echo e(url('admin/gstupdate')); ?>/"+id+"/update", 
         type: "POST",
          data: {_token : `<?php echo e(csrf_token()); ?>`,
            gst_name:name,
            value:value,
            description:description,
            status:status
        },
         dataType: 'html',
          success: function (response) {
               //console.log(response);

               $('#exampleModal1').modal('hide');
               location.reload();   
                
         
            }
        
      });
    });
        </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ktonline/public_html/oxygen.ktonline.in/resources/views/layout/admin/master/gst.blade.php ENDPATH**/ ?>