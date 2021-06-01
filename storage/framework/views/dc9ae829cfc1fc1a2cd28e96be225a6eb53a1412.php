<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8">
    <link href="dist/images/cara-01.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Cara admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cara admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Cara Recruitment</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/app.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/stylan.css')); ?>" />
    
    <!-- END: CSS Assets-->
</head>

<body class="app">
    <?php echo $__env->make('layout.menu_mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="flex">
        <?php echo $__env->make('layout.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <div id="modal-div"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"
        integrity="sha512-nhY06wKras39lb9lRO76J4397CH1XpRSLfLJSftTeo3+q2vP7PaebILH9TqH+GRpnOhfAGjuYMVmVTOZJ+682w=="
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
   
    
    <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendors.min.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    

    <?php echo $__env->yieldPushContent('js'); ?>
</body><?php /**PATH C:\xampp\htdocs\cara_recruitment\resources\views/layout/app.blade.php ENDPATH**/ ?>