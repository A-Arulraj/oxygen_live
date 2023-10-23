
<?php $__env->startSection('contents'); ?>
    <?php echo $__env->make('paritials.css.login-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        <div class="authentication-box">
            <div class="container">
                <div class="row">

                    <div class="col-md-5 m-auto p-0">
                        <div class="card">
                            <div class="card-body">
                                <div class="logo-wrapper text-center">
                                    <a href="index.html"><img class="blur-up lazyloaded"
                                            src="<?php echo e(asset('assets/images/dashboard/logo/newlogo.png')); ?>" alt=""></a>
                                </div>
                                <h5 style="color:red"><?php echo e(@$error); ?></h5>
                                <br>
                                <form action="<?php echo e(route('vendorlogin')); ?>" method="post">
                                 <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="username">Username:</label>
                                        <input type="text" class="form-control" id="username" name="username" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Password:</label>
                                        <input type="password" class="form-control" id="pwd" name="password" required>
                                    </div>

                                    <div class="form-terms">
                                        <div class="form-check mesm-2">
                                            <input type="checkbox" class="form-check-input" id="customControlAutosizing">
                                            <label class="form-check-label ps-2" for="customControlAutosizing">Remember
                                                me</label>
                                            <a href="#" class="btn btn-default forgot-pass">lost your password</a>
                                        </div>
                                    </div>
                                    <div class="form-button text-center">

                                        <button type="submit" name="submit" class="btn btn-secondary">Login</button>
                                        <button type="submit" name="submit" class="btn btn-warning">Cancel</button>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\oxygen_bcup\oxygen.ktonline.in\resources\views/auth/vendorlogin.blade.php ENDPATH**/ ?>