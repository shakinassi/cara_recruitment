
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
        Job Company
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
            <a href="javascript:;" data-toggle="modal" data-target="#button-modal-preview" class="button text-white bg-theme-1 shadow-md mr-2">Add New Company</a>
            <div class="modal" id="button-modal-preview">
                <div class="modal__content relative"> <a data-dismiss="modal" href="javascript:;" class="absolute right-0 top-0 mt-3 mr-3"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
                    <div class="intro-y flex items-center p-5">
                        <h2 class="text-lg font-medium mr-auto">
                            Add New Company
                        </h2>
                    </div>
                    <form method="post" action="<?php echo e(route('insert_logo')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="intro-y box p-5">
                        <div class="mt-3">
                            <label>Company Logo</label>
                            <div class="mt-2">
                                <div class="mt-2">
                                    <div class="row mt-4">
                                        <div class="col-md-8">
                                            <input type="file" name="company_logo"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label>Company Name</label>
                            <input type="text" class="input w-full border mt-2 form-control" name="company" placeholder="Company Name">
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
           
        </div>
          <!-- BEGIN: Data List -->
          <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-no-wrap">Company Logo</th>
                        <th class="whitespace-no-wrap">Company Name</th>
                        <th class="whitespace-no-wrap">Action</th>
                    </tr>
                </thead>
                <tbody><?php $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jobcompany): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="intro-x">
                        <td class="w-40">
                            <img style="height:100px;width:170px"
                            src="<?php echo e(asset('/storage'.$jobcompany->company_logo)); ?>"></img>
                            
                        </td>
                        <td class="w-80">
                            <div class="font-medium whitespace-no-wrap"><?php echo e($jobcompany->company); ?></div> 
                            
                        </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a href="javascript:;" data-toggle="modal" data-target="#delete-modal-preview" class="flex items-center text-theme-6 mr-3"><i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                
                
                                <a href="javascript:;" data-toggle="modal" data-target="#header-footer-modal-preview" class="flex items-center mr-5"> <i data-feather="edit" class="w-4 h-4 mr-1"></i> Edit </a>
                                <div class="modal" id="header-footer-modal-preview">
                                    <div class="modal__content">

                                        <div class="intro-y flex items-center p-5">
                                            <h2 class="text-lg font-medium mr-auto">
                                                Edit Company
                                            </h2>
                                        </div>

                                        <form action="<?php echo e(route('company.update', $jobcompany->id)); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>
                                            
                                            <div class="intro-y box p-5">
                                                <div>
                                                    <label>Company Logo</label>
                                                    <div class="mt-2">
                                                        <div class="mt-2">
                                                            <div class="row mt-4">
                                                                <div class="col-md-8">
                                                                    <input type="file" name="company_logo"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mt-3">
                                                        <input type="text" placeholder="Company Name" name="company"
                                                        class="input w-full border col-span-4 form-control tail-select" value="<?php echo e($jobcompany->company); ?>">
                                                        
                                                    </div>

                                                    <div class="text-right mt-5">
                                                        <button type="button" data-dismiss="modal"
                                                        class="button w-24 border text-gray-700 dark:border-dark-5 dark:text-gray-300 mr-1">Cancel</button>
                                                        <button type="submit" class="button w-24 bg-theme-1 text-white">Update</button>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>

                                        </form>

                                   
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
        <!-- END: Data List -->
        <!-- BEGIN: Pagination -->
          <!-- BEGIN: Pagination -->
          <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-no-wrap items-center">
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
        <!-- END: Pagination -->

         <!-- BEGIN: Delete Confirmation Modal -->
         
        <!-- END: Delete Confirmation Modal -->

        <?php $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jobcompany): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="modal" id="delete-modal-preview" style="z-index:50;">
                            <div class="modal__content" style="margin-left: 8rem !important">
                                <div class="p-5 text-center"> <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                                    <form action="<?php echo e(route('company.destroy', $jobcompany->id)); ?>" method="POST">
                                        
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        
                                        <div class="text-3xl mt-5">Are you sure?</div>
                                        <div class="text-gray-600 mt-2">Do you really want to delete these records? This process cannot be undone.</div>
                                        
                                            
                                            <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 dark:border-dark-5 dark:text-gray-300 mr-1">Cancel</button> 
                                            <button type="submit" title="delete" class="button w-24 bg-theme-6 text-white" >Delete</button> 
                                            
                                        </div>
                                        <div class="px-5 pb-8 text-center"> 
                                            
                                        </div>
                                    </form>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
    </div>

<?php $__env->stopSection(); ?>  

           

<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>

                   
                                 
                   
               
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cara_recruitment\resources\views/company/index.blade.php ENDPATH**/ ?>