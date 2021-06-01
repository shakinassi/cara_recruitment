
<?php $__env->startSection('content'); ?>

<div class="content">
     <!-- BEGIN: Top Bar -->
     <div class="top-bar">
         <!-- BEGIN: Breadcrumb -->
        <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Application</a> <i
            data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Job</a>
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
    <h2 class="intro-y text-lg font-medium mt-10">
       Candidate Lists
    </h2>

    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
        <table class="table table-report sm:mt-2">
            <thead>
                <tr>
                    <th class="whitespace-no-wrap">Name</th>
                    <th class="whitespace-no-wrap">Email</th>
                    <th class="text-center whitespace-no-wrap">Phone Number</th>
                    <th class="text-center whitespace-no-wrap">Address</th>
                    
                    <th class="text-center whitespace-no-wrap">Actions</th>
                </tr>
            </thead>
            <tbody><?php $__currentLoopData = $candidates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($candidate->status == 0): ?>
                <tr class="intro-x">
                    <td class="w-40">
                        <div class="font-medium whitespace-no-wrap"><?php echo e($candidate->fullname); ?></div> 
                    </td>
                    <td class="w-40">
                        <div class="font-medium whitespace-no-wrap"><?php echo e($candidate->email); ?></div> 
                        <!-- <div class="text-gray-600 text-xs whitespace-no-wrap">PC &amp; Laptop</div> -->
                    </td>
                    <td class="w-40" class="text-center"><?php echo e($candidate->contact); ?></td>
                    <td class="text-center"><?php echo e($candidate->address); ?></td>
                    
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                           
                            <a href="javascript:;" data-toggle="modal" data-target="#header-footer-modal-preview" class="flex items-center mr-3"> <i data-feather="file-plus" class="w-4 h-4 mr-1"></i> Download </a>
                            <div class="modal" id="header-footer-modal-preview">
                                <div class="modal__content">
                                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">
                                        

                                        
                                    </div>
                                    <div class="px-5 py-3 text-right border-t border-gray-200 dark:border-dark-5"> <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 dark:border-dark-5 dark:text-gray-300 mr-1">Cancel</button> </div>
                                </div>
                            </div>
                    
                            <a class="flex items-center mr-3" href="<?php echo e(route('application2',['id'=>$candidate->id])); ?>"> <i data-feather="user-x" class="w-4 h-4 mr-1"></i> Reject </a>
                            <a class="flex items-center " href="<?php echo e(route('application',['id'=>$candidate->id])); ?>"> <i data-feather="user-check" class="w-4 h-4 mr-1"></i> Accept </a>
                        </div>
                    </td>
                </tr> 
                <?php endif; ?>        
            </tbody><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>

    <div class="intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">
        <ul class="pagination">
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
            </li>
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
            </li>
            <li> <a class="pagination__link" href="">...</a> </li>
            <li> <a class="pagination__link" href="">1</a> </li>
            <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
            <li> <a class="pagination__link" href="">3</a> </li>
            <li> <a class="pagination__link" href="">...</a> </li>
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
            </li>
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
            </li>
        </ul>
        <select class="w-20 input box mt-3 sm:mt-0">
            <option>10</option>
            <option>25</option>
            <option>35</option>
            <option>50</option>
        </select>
    </div>




</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?> 

                           
                
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cara_recruitment\resources\views/candidate/generallist.blade.php ENDPATH**/ ?>