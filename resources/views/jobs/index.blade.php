@extends('layout.app')
@section('content')
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
                <img alt="Cara Tailwind HTML Admin Template" src="{{ asset('assets/images/profile-6.jpg') }}">
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
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
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
            <!-- <a class="btn btn-success" class="button text-white bg-theme-1 shadow-md mr-2" href="{{ route('jobs.create') }}">Add New Job</a> -->
            
            <a href="{{ route('jobs.create') }}" data-toggle="modal" data-target="#button-modal-preview"
            class="button text-white bg-theme-1 shadow-md mr-2">Add New Job</a> 
            @include('jobs.create')

           
         
            
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
        {{-- <div class="w-56 relative text-gray-700 dark:text-gray-300">
            <input type="text" class="input w-56 box pr-10 placeholder-theme-13" placeholder="Search...">
            <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
        </div> --}}
    </div>
</div>
<!-- BEGIN: Data List -->
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
        <tbody>@foreach ($jobs as $job)

            <tr class="intro-x">
                <td class="w-40">
                    {{-- <div class="font-medium whitespace-no-wrap"><img src="{{ asset('assets/images/LOGO_COMPANY_CARA_NST_DATACARA_2021-01.png') }}" alt=""></div> --}}
                    
                    <img style="height:100px;width:170px"
                    src="{{ asset('/storage'.$job->company_logo) }}"></img>
                    
                    {{-- <div class="font-medium whitespace-no-wrap">{{ $job->company_logo }}</div> --}}
                    
                </td>
                <td class="w-40">
                    <div class="font-medium whitespace-no-wrap">{{ $job->category }}</div>
                    <!-- <div class="text-gray-600 text-xs whitespace-no-wrap">PC &amp; Laptop</div> -->
                </td>
                
                <td class="w-40">
                    <div class="font-medium whitespace-no-wrap">{{ $job->position }}</div>
                </td>
                <td class="text-center " style=" white-space: nowrap !important;
                overflow: hidden !important;
                text-overflow: ellipsis !important;
                max-width: 100% !important; max-height:100% !important; height:130px; display: -webkit-box !important;
                -webkit-line-clamp: 2 !important; /* number of lines to show */
                -webkit-box-orient: vertical !important;">@php echo $job->description @endphp</td>
                <td class="text-center">{{ $job->salary_from}} - {{ $job->salary_to}}</td>
                <td class="w-40">
                    {{-- <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square"
                        class="w-4 h-4 mr-2"></i> Active </div> --}}
                        <div class="flex justify-center items-center">
                            {{-- class="input input--switch border" 
                            
                                {{-- {{csrf_field()}}
                                <input <?php if($job->status == 1) {echo"checked";} ?> type="button" value="play" onclick="" id="play" name="status" class="input input--switch border">
                                <input type="hidden" name="jobId" value="{{$job->id}}">
                                <input class="btn btn primary" type="submit" value="yes"> --}}

                                <div class="mt-2">
                                    <input type="checkbox" class="input input--switch border" id ="yes" @if ($job->status == 1) checked  @endif onchange="status({{ $job->id }})">
                                </div>
                
                    
                            {{-- <label class="switch">
                                <input type="button"  class="input input--switch border" id ="play" @if ($job->status == 1) checked                                    
                                @endif onchange="status({{ $job->id }})">
                                <span class="slider round"></span>
                            </label> --}}
                            {{-- <div id="myDIV">
                                ding dong
                            </div>  --}}
                            
                            {{-- <input name="status" type="checkbox" class="input input--switch border" {{$job->status == 1 ? 'checked' : ''}}> --}}
                        </div>
                    </td>
                    <td class="table-report__action w-56">
                        
                        <div class="flex justify-center items-center">
                            <a href="javascript:;" data-toggle="modal" data-target="#delete-modal-preview" class="flex items-center text-theme-6 mr-3"><i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                            
                            
                            <a href="javascript:;" data-toggle="modal" data-target="#header-footer-modal-preview" class="flex items-center mr-5"> <i data-feather="edit" class="w-4 h-4 mr-1" ></i> Edit </a> 
                            @include('jobs.edit')
                                            

            

        </tbody>@endforeach
        </table>
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

                                @foreach ($jobs as $job)
                                <div class="modal" id="delete-modal-preview" style="z-index:50;">
                                    <div class="modal__content" style="margin-left: 8rem !important">
                                        <div class="p-5 text-center"> <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                                            <form action="{{ route('jobs.destroy', $job->id) }}" method="POST">
                                                
                                                @csrf
                                                @method('DELETE')
                                                
                                                <div class="text-3xl mt-5">Are you sure?</div>
                                                <div class="text-gray-600 mt-2">Do you really want to delete these records? This process cannot be undone.</div>
                                                {{-- <button type="submit" title="delete" style="border: none; background-color:transparent;"> <i class="fas fa-trash fa-lg text-danger">Delete</i> --}}
                                                    
                                                    <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 dark:border-dark-5 dark:text-gray-300 mr-1">Cancel</button> 
                                                    <button type="submit" title="delete" class="button w-24 bg-theme-6 text-white" >Delete</button> 
                                                    
                                                </div>
                                                <div class="px-5 pb-8 text-center"> 
                                                    {{-- <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 dark:border-dark-5 dark:text-gray-300 mr-1">Cancel</button> 
                                                    <button type="button" class="button w-24 bg-theme-6 text-white" >Delete</button>  --}}
                                                </div>
                                            </form>
                                        </div>
                                        @endforeach
    @endsection

    @push('js')
                                <script>
                                
                                    function status(jobId){
                                                if ($('#yes').is(':checked')) {
                                                    var value = 1;
                                                } else {
                                                    var value = 0;
                                                }

                                                $.ajax({
                                                        type: 'POST',
                                                        url: "{{route('status')}}",
                                                        dataType: "JSON",
                                                        data: {
                                                            "_token": "{{ csrf_token() }}",
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
                                            
                                            @endpush
                                                                                            