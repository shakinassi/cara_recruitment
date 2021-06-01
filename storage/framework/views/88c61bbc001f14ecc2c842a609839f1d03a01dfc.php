

<?php $__env->startSection('content'); ?>

<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="<?php echo e(url('/dashboard')); ?>" class="">Dashboard</a> <i
                data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active"></a>
        </div>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Search -->

        <!-- END: Notifications -->
        <!-- BEGIN: Account Menu -->
        <div class="intro-x dropdown w-8 h-8">
            <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                <img alt="Cara Tailwind HTML Admin Template" src="<?php echo e(asset('assets/images/profile-6.jpg')); ?>">
            </div>
            <div class="dropdown-box w-56">
                <div class="dropdown-box__content box bg-theme-38 dark:bg-dark-6 text-white">
                    <div class="p-4 border-b border-theme-40 dark:border-dark-3">
                        <div class="font-medium">Admin</div>
                        <div class="text-xs text-theme-41 dark:text-gray-600">Hafeez Handsome</div>
                    </div>
                    <div class="p-2 border-t border-theme-40 dark:border-dark-3">
                        <a href="" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                            class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                            <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                        <form id="logout-form" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Account Menu -->
    </div>
    <!-- END: Top Bar -->
    

   
        <div class="grid grid-cols-12 mt-8 ">
            
            <a href="<?php echo e(url('CaraComMy')); ?>" class="col-span-3">
                <div class="cardcardcard grid grid-cols-12">
                    <div class="col-span-8">
                        <div class="logo mt-1">
                            <img src="./assets/images/Logo-cara/COMColor.png">
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div class="label" style="color: #fff;">
                            total apply
                        </div>
                        <div class="badge-blue text-center blink">
                            123
                        </div>
                    </div>
                </div>
            </a>

            <a href="<?php echo e(url('NSTCara')); ?>" class="col-span-3">
                <div class="cardcardcard grid grid-cols-12">
                    <div class="col-span-8">
                        <div class="logo mt-1">
                            <img src="./assets/images/Logo-cara/NSTColor.png">
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div class="label" style="color: #fff;">
                            total apply
                        </div>
                        <div class="badge-green text-center blink">
                            123
                        </div>
                    </div>
                </div>
            </a>

            <a href="<?php echo e(url('CaraSkadimo')); ?>" class="col-span-3">
                <div class="cardcardcard grid grid-cols-12">
                    <div class="col-span-8">
                        <div class="logo mt-1">
                            <img src="./assets/images/Logo-cara/SKAColor.png">
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div class="label" style="color: #fff;">
                            total apply
                        </div>
                        <div class="badge-yellow text-center blink">
                            123
                        </div>
                    </div>
                </div>
            </a>

            <a href="<?php echo e(url('CaraSolution')); ?>" class="col-span-3">
                <div class="cardcardcard grid grid-cols-12">
                    <div class="col-span-8">
                        <div class="logo mt-1">
                            <img src="./assets/images/Logo-cara/SOLColor.png">
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div class="label" style="color: #fff;">
                            total apply
                        </div>
                        <div class="badge-red text-center blink">
                            123
                        </div>
                    </div>
                </div>
            </a>

        </div>



        <div class="grid grid-cols-12 mt-8 ">
            <div class="cardcardcard col-span-9">
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="cardcardcard col-span-3">bb
            </div>
        </div>



</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Cara Com My', 'NST Cara', 'Cara Skadimo', 'Cara Solution'],
                datasets: [{
                    label: 'Applicants', 
                    data: [3, 5, 2, 3],
                    fill:false,
                    borderColor: [
                        'rgba(255, 255, 255, .5)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    tension: 0.1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cara_recruitment\resources\views/dashboard/index.blade.php ENDPATH**/ ?>