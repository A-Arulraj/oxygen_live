
<?php $__env->startSection('contents'); ?>
    <?php echo $__env->make('paritials.auth.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('paritials.js.offer.offer-create-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('paritials.js.time-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- page-wrapper Start-->
    <?php echo $__env->make('paritials.auth.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        <?php echo $__env->make('paritials.auth.sidemenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                                <h3>Offer Create

                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="dashboard.php"><i data-feather="home"></i></a></li>

                                <li class="breadcrumb-item active">Offer Create</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container">
                <div class="col-sm-9">

                    <div class="card">

                        <div class="card-body">

							<?php if($errors->any()): ?>    
								<ul>
								<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li><?php echo e($error); ?></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							<?php endif; ?>
                            <form id="frmOffer" name="frmOffer" class="needs-validation" method="POST" action="<?php echo e(route('offer.main.store')); ?>">
							 <?php echo csrf_field(); ?>	
                                <div class="row">
                                    <div class="col-sm-12">

                                        <div class="form-group row">

                                            <div class="col-md-12">
                                                <label class="form-group mb-3"><b>Offer Title</b></label>

                                                <input class="form-control" id="offertitle" name="offertitle" type="text"
                                                    required="">
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label class="mb-3"><b>Offer Type</b></label>
                                            <div class="col-md-12">
                                                <div class="checkbox-primary">


                                                    <label class="d-block mb-2" for="edo-ani12">
                                                        <input class="radio_animated" onchange="buyxgety();" checked=""
                                                            type="radio" name="type" value="Buy X Get Y Free">
                                                        Buy X Get Y Free
                                                    </label>

                                                    <label class="d-block mb-2" for="edo-ani12">
                                                        <input class="radio_animated" onchange="buyxgety();" checked=""
                                                            type="radio" name="type" value="Buy X @ Y">
                                                        Buy X @ Y
                                                    </label>

                                                    <label class="d-block mb-2" for="edo-ani12">
                                                        <input class="radio_animated" onchange="cashbackoffer();"
                                                            type="radio" name="type" value="Cashback Offer">
                                                        Cashback Offer
                                                    </label>
                                                    <label class="d-block mb-2" for="edo-ani12">
                                                        <input class="radio_animated" onchange="freedelivery();"
                                                            type="radio" name="type" value="Free Delivery">
                                                        Free Delivery
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="card" id="buyxgetydiv">

                        <div class="card-body">
                            <div class="form-group row ">

                                <div class="col-md-4">
                                    <label class="fw-bold">Buy</label>
                                    <input class="form-control" id="txtBuyOffer" name="txtBuyOffer" type="text" required="">
                                </div>
                                <div class="col-md-1 text-center mt-3">
                                    <span class="h4 ">+</span>
                                </div>
                                <div class="col-md-4">
                                    <label class="fw-bold">Get</label>
                                    <input class="form-control" id="txtGetOffer" name="txtGetOffer" type="text" required="">

                                </div>
                            </div>
                        </div>

                    </div>




                    <div class="card" id="cashbackdiv">

                        <div class="card-body">
                            <div class="col-md-8">
                                <label class="bold"><b>Cashback Value</b></label>
                                <div class="col-md-12">
                                    <div class="checkbox-primary">


                                        <label class="d-block" for="edo-ani12">
                                            <input class="radio_animated" type="radio" checked="" onchange="fixed();"
                                                name="cashback" value="Fixed">
                                            Fixed (₹)
                                        </label>
                                        <div id="fixedcashback">
                                            <div class="col-md-6 px-5">
                                                <input class="form-control px-5" id="fixedcashback" name="fixedcashback" type="text" value="">
                                            </div>
                                        </div>
                                        <label class="d-block" for="edo-ani12">
                                            <input class="radio_animated" type="radio" onchange="percentage();"
                                                name="cashback" value="Percentage">
                                            Percentage (%)
                                        </label>
                                        <div id="percentagecashback">
                                            <div class="col-md-6 px-5">
                                                <input class="form-control" id="percentagecashback" name="percentagecashback" type="text" value="">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="card">

                        <div class="card-body">
                            <div class="col-md-8">
                                <label class="bold"><b>Active Dates</b></label>
                                <div class="col-md-12">
                                    <div class="" id="dates">
                                        <div class="form-group row">


                                            <div class="col-md-6">
                                                <label class="">Start Date</label>
                                                <input id="startdate" name="startdate" type="date" class="form-control"
                                                    placeholder="dd/mm/yy" />
                                            </div>
                                            <div class="col-md-3">
                                                <label class="">Start Time</label>
                                                <input type="time" id="starttime" name="starttime" value="00:00" class="form-control" />
                                            </div>

                                        </div>
                                        <div class="form-group row">


                                            <div class="col-md-6">
                                                <label class="">End Date</label>
                                                <input id="enddate" name="enddate" type="date" class="form-control"
                                                    placeholder="dd/mm/yy" />
                                            </div>
                                            <div class="col-md-3">
                                                <label class="">End Time</label>
                                                <input type="time" id="endtime" name="endtime" value="00:00" class="form-control" />
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="card">

                        <div class="card-body">
                            <div class="form-group">
                                <label for="" class="fw-bold">Add Below Sections In Offers As Well </label>

                                <div class="checkbox-primary">


                                    <label class="d-block mb-2" for="">
                                        <input class="radio_animated" checked="" type="radio" name="offertype" value="Fixed Discount">
                                        Fixed Discount
                                    </label>

                                    <label class="d-block mb-2" for="">
                                        <input class="radio_animated" type="radio" name="offertype" value="Percentage">
                                        Percentage
                                    </label>


                                </div>
                            </div>


                        </div>

                    </div>





                    <div class="card">

                        <div class="card-body">
                            <div class="form-group">
                                <label for="validationCustom02" class="mb-1 fw-bold"> Background Image :</label>
                                <input class="form-control" require="" type="file">
                            </div>
                            <div class="form-group">
                                <label for="validationCustom02" class="mb-1 fw-bold"> TEXT ALIGN :</label>
                                <input class="form-control" id="txtalign" name="txtalign" type="text" value="">
                            </div>

                        </div>

                    </div>

                    <div class="card">

                        <div class="card-body">
                            <div class="form-group">
                                <label class="d-block mb-2 fw-bold" for="">
                                    Value
                                </label>

                                <label class="d-block mb-2 " for="">
                                    Discount Amount
                                </label>
                                <input type="text" class="form-control" name="txtvalue">
                            </div>
                        </div>

                    </div>

                    <div class="card">

                        <div class="card-body">
                            <div class="form-group">
                                <label class="d-block mb-2" for="">
                                    <input class="radio_animated" checked="" type="radio" name="types" value="None">
                                    None
                                </label>

                                <label class="d-block mb-2" for="">
                                    <input class="radio_animated" type="radio" name="types" value="Minimum Purchase Amount">
                                    Minimum Purchase Amount
                                </label>
                                <label class="d-block mb-2" for="">
                                    <input class="radio_animated" type="radio" name="types" value="Minimum Quantity Of Items">
                                    Minimum Quantity Of Items
                                </label>
                            </div>
                        </div>

                    </div>

                </div>







                <div class="form-group row ">
                    <div class="text-center">
                        <div class="col-xl-8 col-md-8">
                            <button class="btn btn-primary  btn-sm pull-right" type="submit">Save</button>

                        </div>
                    </div>
                    </form>


                </div>
            </div>








        </div>
        <!-- Container-fluid Ends-->

    </div>
    </div>

    <!-- footer start-->

    <!-- footer end-->

    </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\oxygen-new\resources\views/layout/admin/offer/offers-create.blade.php ENDPATH**/ ?>