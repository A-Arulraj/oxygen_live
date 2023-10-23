<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    
    <?php echo $__env->make('paritials.website.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('website.partials.js.frontendjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('website.partials.css.frontendcss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    
   
</head>

<body class="theme-color-29">


    <!-- loader start -->

    <!-- loader end -->


    <!-- header start -->
    
    <!-- header end -->
   
   

    <!-- section start -->
    <section class="p-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="error-section">
                        <h1>404</h1>
                        <h2>page not found</h2>
                        <a href="<?php echo e(url( '/' )); ?>" class="btn btn-solid">back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    
   
</body>

</html><?php /**PATH C:\xampp\htdocs\skap\oxygen-new\resources\views/website/front-end/404.blade.php ENDPATH**/ ?>