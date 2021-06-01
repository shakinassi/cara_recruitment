
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
        Job Listing
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
            <!-- <a class="btn btn-success" class="button text-white bg-theme-1 shadow-md mr-2" href="<?php echo e(route('jobs.create')); ?>">Add New Job</a> -->
            
            <a href="<?php echo e(route('jobs.create')); ?>" data-toggle="modal" data-target="#button-modal-preview"
            class="button text-white bg-theme-1 shadow-md mr-2">Add New Job</a> 
            
            <div class="modal" id="button-modal-preview">
                <div class="modal__content relative"> 
                    <!-- <a data-dismiss="modal" href="javascript:;"
                        class="absolute right-0 top-0 mt-3 mr-3"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i>
                    </a> -->
                    <div class="intro-y flex items-center p-5">
                        <h2 class="text-lg font-medium mr-auto">
                            Add New Job
                        </h2>
                    </div>
                    <form action="<?php echo e(route('jobs.store')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="intro-y box p-5">
                            <div>
                                <label>Company</label>
                                <div class="mt-2">
                                    <select name="company" data-placeholder="Select your favorite actors"
                                    class="tail-select w-full">
                                    <?php $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option  value="<?php echo e($company->id); ?>"><?php echo e($company->company); ?>

                                    </option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label>Category</label>
                            <div class="mt-2">
                                <select name="category" data-placeholder="Select your favorite actors"
                                    class="tail-select w-full">
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option  value="<?php echo e($category->id); ?>"><?php echo e($category->category); ?>

                                    </option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label>Position</label>
                        <div class="mt-2">
                            <input type="text" placeholder="Job Position" name="position"
                            class="input w-full border col-span-4 form-control">
                            <!-- <select name="position" data-placeholder="Select your favorite actors"
                                class="tail-select w-full">
                                <option value="" selected>-- Select One --</option>
                                <option value="PHP Senior Developer">PHP Senior Developer
                                </option>
                                <option value="Frontend Developer">Frontend Developer</option>
                                <option value="UI/UX Designer">UI/UX Designer</option>
                                <option value="Ionic Developer">Ionic Developer</option>
                            </select> -->
                        </div>
                    </div>
                    <div class="mt-3">
                        <label>Description</label>
                        <!-- <div class="mt-2">
                            <input type="text" placeholder="Description about the position" name="description"
                            class="input w-full border col-span-4 form-control">
                        </div> -->
                        
                        <div class="mt-2" >
                            <!-- <div class="preview" id="editor" >
                                <textarea  data-simple-toolbar="true" class="editor" name="description"></textarea>
                            </div> -->
                            <div class="modal-body">
                                <form>
                                    <textarea name="description" id="editor" rows="10" cols="80">This is my textarea to be replaced with CKEditor.</textarea>
                                </form>
                            </div>
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
        <!-- <button class="dropdown-toggle button px-2 box text-gray-700 dark:text-gray-300">
            <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i>
            </span>
        </button> -->
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
    <div class="hidden md:block mx-auto text-gray-600"></div>
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
                <th class="whitespace-no-wrap">Company</th>
                <th class="whitespace-no-wrap">Category</th>
                <th class="text-center whitespace-no-wrap">Position</th>
                <th class="text-center whitespace-no-wrap">Description</th>
                <th class="text-center whitespace-no-wrap">Salary</th>
                <th class="text-center whitespace-no-wrap">Status</th>
                <th class="text-center whitespace-no-wrap">Actions</th>
                
            </tr>
        </thead>
        <tbody><?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="intro-x">
                <td class="w-40">
                    
                    
                    <img style="height:100px;width:170px"
                    src="<?php echo e(asset('/storage'.$job->company_logo)); ?>"></img>
                    
                    
                    
                </td>
                <td class="w-40">
                    <div class="font-medium whitespace-no-wrap"><?php echo e($job->category); ?></div>
                    <!-- <div class="text-gray-600 text-xs whitespace-no-wrap">PC &amp; Laptop</div> -->
                </td>
                
                <td class="w-40">
                    <div class="font-medium whitespace-no-wrap"><?php echo e($job->position); ?></div>
                </td>
                <td class="text-center " style=" white-space: nowrap !important;
                overflow: hidden !important;
                text-overflow: ellipsis !important;
                max-width: 100% !important; max-height:100% !important; height:130px; display: -webkit-box !important;
                -webkit-line-clamp: 2 !important; /* number of lines to show */
                -webkit-box-orient: vertical !important;"><?php echo $job->description ?></td>
                <td class="text-center"><?php echo e($job->salary_from); ?> - <?php echo e($job->salary_to); ?></td>
                <td class="w-40">
                    
                        <div class="flex justify-center items-center">
                            

                                <div class="mt-2">
                                    <input type="checkbox" class="input input--switch border" id ="yes" <?php if($job->status == 1): ?> checked  <?php endif; ?> onchange="status(<?php echo e($job->id); ?>)">
                                </div>
                
                    
                            
                            
                            
                            
                        </div>
                    </td>
                    <td class="table-report__action w-56">
                        
                        <div class="flex justify-center items-center">
                            <a href="javascript:;" data-toggle="modal" data-target="#delete-modal-preview" class="flex items-center text-theme-6 mr-3"><i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                            
                            
                            <a href="javascript:;" data-toggle="modal" data-target="#header-footer-modal-preview" class="flex items-center mr-5"> <i data-feather="edit" class="w-4 h-4 mr-1" ></i> Edit </a> 
                            <div class="modal" id="header-footer-modal-preview" style="z-index:50;">
                                <div class="modal__content relative" style="margin-top: -5rem;">
                                    <div class="intro-y flex items-center p-5">
                                        <h2 class="text-lg font-medium mr-auto">
                                            Edit Job
                                        </h2>
                                    </div>
                                    
                                    <form action="<?php echo e(route('jobs.update', $job->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <div class="intro-y box p-5">
                                            <div>
                                                <label>Company</label>
                                                <div class="mt-2">
                                                    <select name="company"
                                                    data-placeholder="Select your favorite actors"
                                                    class="form-control tail-select w-full"
                                                    value="<?php echo e($job->company); ?>">
                                                    <option <?php if($job->company === 'Cara Com My'): ?>
                                                        selected <?php endif; ?> value="Cara Com My">CaraComMy
                                                    </option>
                                                    <option <?php if($job->company === 'NST Data Cara'): ?>
                                                        selected <?php endif; ?> value="NST Data Cara">NSTDataCara
                                                    </option>
                                                    <option <?php if($job->company === 'Cara Skadimo'): ?>
                                                        selected <?php endif; ?> value="Cara Skadimo" >Cara
                                                        Skadimo</option>
                                                        <option <?php if($job->company === 'Cara Solution'): ?>
                                                            selected <?php endif; ?> value="Cara Solution">Cara
                                                            Solution</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="mt-3">
                                                    <label>Category</label>
                                                    <div class="mt-2">
                                                        <select name="category"
                                                        data-placeholder="Select your favorite actors"
                                                        class="form-control tail-select w-full"
                                                        value="<?php echo e($job->category); ?>">
                                                        <option <?php if($job->category === 'Web Developer'): ?>
                                                            selected <?php endif; ?> value="Web Developer">Web
                                                            Developer</option>
                                                            <option <?php if($job->category === 'System Analyst'): ?>
                                                                selected <?php endif; ?> value="System Analyst">System
                                                                Analyst</option>
                                                                <option <?php if($job->category === 'Graphic Designer'): ?>
                                                                    selected <?php endif; ?> value="Graphic Designer">Graphic
                                                                    Designer</option>
                                                                    <option <?php if($job->category === 'Technician'): ?>
                                                                        selected <?php endif; ?> value="Technician">Technician
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="mt-3">
                                                            <label>Position</label>
                                                            <div class="mt-3">
                                                                <input type="text" placeholder="Job Position" name="position"
                                                                class="input w-full border col-span-4 form-control tail-select" value="<?php echo e($job->position); ?>">
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="mt-3">
                                                            <label>Description</label>
                                                            
                                                            
                                                            <div class="mt-2" >
                                                                
                                                                <div class="modal-body">
                                                                    <form>
                                                                        <textarea style="width:100%;" name="description" id="editor" rows="10" cols="80">"<?php echo e($job->description); ?>"</textarea>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <div class="mt-3">
                                                            <label>Salary</label>
                                                            <div class="sm:grid grid-cols-3 gap-2">
                                                                <div class="relative mt-2">
                                                                    <div
                                                                    class="absolute top-0 left-0 rounded-l w-12 h-full flex items-center justify-center bg-gray-100 dark:bg-dark-1 dark:border-dark-4 border text-gray-600">
                                                                    From</div>
                                                                    <div class="pl-3">
                                                                        <input type="text" name="salary_from"
                                                                        class="form-control input pl-12 w-full border col-span-4"
                                                                        placeholder="Amount"
                                                                        value="<?php echo e($job->salary_from); ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <div
                                                                    class="absolute top-0 left-0 rounded-l w-12 h-full flex items-center justify-center bg-gray-100 dark:bg-dark-1 dark:border-dark-4 border text-gray-600">
                                                                    To</div>
                                                                    <div class="pl-3">
                                                                        <input type="text" name="salary_to"
                                                                        class="form-control input pl-12 w-full border col-span-4"
                                                                        placeholder="Amount"
                                                                        value="<?php echo e($job->salary_to); ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                                <div class="text-right mt-5">
                                                                    <button type="button" data-dismiss="modal"
                                                                    class="button w-24 border text-gray-700 dark:border-dark-5 dark:text-gray-300 mr-1">Cancel</button>
                                                                    <button type="submit" class="button w-24 bg-theme-1 text-white">Update</button>
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                    </form>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                            
                                        </tbody> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                </div>
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
                            <!-- BEGIN: Delete Confirmation Modal -->
                            
                            <!-- <div class="p-5 text-center">
                                <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i> 
                                <div class="text-3xl mt-5">Are you sure?</div>
                                <div class="text-gray-600 mt-2">Do you really want to delete these records? This process cannot be undone.</div>
                            </div>
                            <div class="px-5 pb-8 text-center">
                                <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button>
                                <button type="button" class="button w-24 bg-theme-6 text-white">Delete</button>
                            </div> -->
                        </div>
                        <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="modal" id="delete-modal-preview" style="z-index:50;">
                            <div class="modal__content" style="margin-left: 8rem !important">
                                <div class="p-5 text-center"> <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                                    <form action="<?php echo e(route('jobs.destroy', $job->id)); ?>" method="POST">
                                        
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
                            <?php $__env->stopSection(); ?>
                            
                            
                            
                            <?php $__env->startPush('js'); ?>
                            <script>
                               
                                function status(jobId){
                                            if ($('#yes').is(':checked')) {
                                                var value = 1;
                                            } else {
                                                var value = 0;
                                            }

                                            $.ajax({
                                                    type: 'POST',
                                                    url: "<?php echo e(route('status')); ?>",
                                                    dataType: "JSON",
                                                    data: {
                                                        "_token": "<?php echo e(csrf_token()); ?>",
                                                        'jobId': jobId,
                                                        'value': value,
                                                    },
                                                    success: function (response) {
                                                        if (response.success == 'success') {
                                                            $('#load_notification').html('<span style="color:dodgerblue" class = "fa fa-check" > < /span>');
                                                            }
                                                        },
                                                        error: function (xhr, textStatus, thrownError) {
                                                            alert('Data Fetching error');
                                                        }
                                            });
                                }
                                        
                                        </script>
                                        
                                        <?php $__env->stopPush(); ?>
                                        
                                                                                        
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cara_recruitment\resources\views/jobs/joblist.blade.php ENDPATH**/ ?>