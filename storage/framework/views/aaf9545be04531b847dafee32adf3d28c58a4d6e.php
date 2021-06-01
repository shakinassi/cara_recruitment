

<?php $__env->startSection('content'); ?>

<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="<?php echo e(url('/dashboard')); ?>" class="">Dashboard</a> <i
                data-feather="chevron-right" class="breadcrumb__icon"></i> Cara Com My <a href="" class="breadcrumb--active"></a>
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
                    
                </div>
            </div>
        </div>
        <!-- END: Account Menu -->
    </div>
    <!-- END: Top Bar -->
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-3">
            <div class="grid grid-cols-12 gap-6 mt-5">
                <a href="<?php echo e(url('/dashboard')); ?>" class="col-span-12">
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
            </div>
        </div>
    </div>

   
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
            <div class="modal" id="button-modal-preview">
                <div class="modal__content relative"> <a data-dismiss="modal" href="javascript:;"
                        class="absolute right-0 top-0 mt-3 mr-3"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i>
                    </a>
                    <div class="intro-y flex items-center p-5">
                        <h2 class="text-lg font-medium mr-auto">
                            Add New Job
                        </h2>
                    </div>
                    <form action="<?php echo e(url('store')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="intro-y box p-5">
                            <div>
                                <label>Company</label>
                                <div class="mt-2">
                                    <select name="company" data-placeholder="Select your favorite actors"
                                        class="tail-select w-full">
                                        <option value="" selected>-- Select One --</option>
                                        <option value="Cara Com My">CaraComMy</option>
                                        <option value="NST Data Cara">NSTDataCara</option>
                                        <option value="Cara Skadimo">Cara Skadimo</option>
                                        <option value="Cara Solution">Cara Solution</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label>Category</label>
                                <div class="mt-2">
                                    <select name="category" data-placeholder="Select your favorite actors"
                                        class="tail-select w-full">
                                        <option value="" selected>-- Select One --</option>
                                        <option value="Web Developer">Web Developer</option>
                                        <option value="System Analyst">System Analyst</option>
                                        <option value="Graphic Designer">Graphic Designer</option>
                                        <option value="Technician">Technician</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label>Position</label>
                                <div class="mt-2">
                                    <select name="position" data-placeholder="Select your favorite actors"
                                        class="tail-select w-full">
                                        <option value="" selected>-- Select One --</option>
                                        <option value="PHP Senior Developer">PHP Senior Developer
                                        </option>
                                        <option value="Frontend Developer">Frontend Developer</option>
                                        <option value="UI/UX Designer">UI/UX Designer</option>
                                        <option value="Ionic Developer">Ionic Developer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label>Description</label>
                                <div class="mt-2">
                                    <input type="text" placeholder="Description about the position" name="description"
                                        class="input w-full border col-span-4 form-control">
                                </div>
                            </div>
                            <div class="mt-3">
                                <label>Salary Range</label>
                                <div class="sm:grid grid-cols-2 gap-2">
                                    <div class="relative mt-2">
                                        <div
                                            class="absolute top-0 left-0 rounded-l w-12 h-full flex items-center justify-center bg-gray-100 dark:bg-dark-1 dark:border-dark-4 border text-gray-600">
                                            From</div>
                                        <div class="">
                                            <input type="text" name="salary_from"
                                                class="input pl-12 w-full border col-span-6" placeholder=" RM 00.00">
                                        </div>
                                    </div>
                                    <div class="relative mt-2">
                                        <div
                                            class="absolute top-0 left-0 rounded-l w-12 h-full flex items-center justify-center bg-gray-100 dark:bg-dark-1 dark:border-dark-4 border text-gray-600">
                                            To</div>
                                        <div class="">
                                            <input type="text" name="salary_to"
                                                class="input pl-12 w-full border col-span-6" placeholder=" RM 100.00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label>Active Status</label>
                                <div class="mt-2">
                                    <input type="checkbox" name="status" class="input input--switch border">
                                </div>
                            </div>
                            <div class="text-right mt-5">
                                <button type="button" data-dismiss="modal"
                                    class="button w-24 border dark:border-dark-5 text-gray-700 dark:text-gray-300 mr-1">Cancel</button>
                                <button type="submit" class="button w-24 bg-theme-1 text-white">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropdown-toggle button px-2 box text-gray-700 dark:text-gray-300">
                    <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="list"></i>
                    </span>
                </button>
                <div class="dropdown-box w-40">
                    <div class="dropdown-box__content box dark:bg-dark-1 p-2">
                        <a href=""
                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                            <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </a>
                        <a href=""
                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                            <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                        <a href=""
                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                            <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                    </div>
                </div>
            </div>
            <div class="hidden md:block mx-auto text-gray-600">Showing 1 to 10 of 150 entries</div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-gray-700 dark:text-gray-300">
                    <input type="text" class="input w-56 box pr-10 placeholder-theme-13" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                </div>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        


        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-no-wrap">Name</th>
                        <th class="whitespace-no-wrap">Action</th>
                        
                    </tr>
                </thead>
                <tbody><?php $__currentLoopData = $candidates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="intro-x">
                        <td class="w-40">
                            <div class="font-medium whitespace-no-wrap"><?php echo e($candidate->fullname); ?></div> 
                            
                        </td>
                     
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                        
                                <a href="javascript:;" data-toggle="modal" data-target="#header-footer-modal-preview" class="flex items-center mr-5"> <i data-feather="view" class="w-4 h-4 mr-1"></i> View </a>
                                <a id="<?php echo e($candidate->fullname); ?>"></a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- END: Data List -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-no-wrap items-center">
            <ul class="pagination">
                <li>
                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i>
                    </a>
                </li>
                <li>
                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i>
                    </a>
                </li>
                <li> <a class="pagination__link" href="">...</a> </li>
                <li> <a class="pagination__link" href="">1</a> </li>
                <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                <li> <a class="pagination__link" href="">3</a> </li>
                <li> <a class="pagination__link" href="">...</a> </li>
                <li>
                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i>
                    </a>
                </li>
                <li>
                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i>
                    </a>
                </li>
            </ul>
            <select class="w-20 input box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div>
        <!-- END: Pagination -->
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
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cara_recruitment\resources\views/dashboard/caracommy.blade.php ENDPATH**/ ?>