@extends('layout.app')

@section('content')
{{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" /> --}}
<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="{{ url('/dashboard') }}" class="">Dashboard</a> <i
                data-feather="chevron-right" class="breadcrumb__icon"></i> NST Data Cara <a href="" class="breadcrumb--active"></a>
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
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-3">
            <div class="grid grid-cols-12 gap-6 mt-5">
                <a href="{{ url('/dashboard') }}" class="col-span-12">
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
                    <form action="{{ url('store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
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
                    <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i>
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
                            <!-- <div class="font-medium whitespace-no-wrap"><img src="{{ asset('assets/images/LOGO_COMPANY_CARA_NST_DATACARA_2021-01.png') }}" alt=""></div> -->
                            <div class="font-medium whitespace-no-wrap">{{ $job->company }}</div>

                        </td>
                        <td class="w-40">
                            <div class="font-medium whitespace-no-wrap">{{ $job->category }}</div>
                            <!-- <div class="text-gray-600 text-xs whitespace-no-wrap">PC &amp; Laptop</div> -->
                        </td>

                        <td class="w-40">
                            <div class="font-medium whitespace-no-wrap">{{ $job->position }}</div>
                        </td>
                        <td class="text-center">{{ $job->description}}</td>
                        <td class="text-center">{{ $job->salary_from}} - {{ $job->salary_to}}</td>
                        <td class="w-40">
                            <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square"
                                    class="w-4 h-4 mr-2"></i> Active </div>
                        </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a href="javascript:;" data-toggle="modal" data-target="#delete-modal-preview"
                                    class="flex items-center text-theme-6 mr-3"><i data-feather="trash-2"
                                        class="w-4 h-4 mr-1"></i> Delete </a>
                                <div class="modal" id="delete-modal-preview">
                                    <div class="modal__content">
                                        <div class="p-5 text-center"> <i data-feather="x-circle"
                                                class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                                            <div class="text-3xl mt-5">Are you sure?</div>
                                            <div class="text-gray-600 mt-2">Do you really want to delete these
                                                records? This process cannot be undone.</div>
                                        </div>
                                        <div class="px-5 pb-8 text-center"> <button type="button" data-dismiss="modal"
                                                class="button w-24 border text-gray-700 dark:border-dark-5 dark:text-gray-300 mr-1">Cancel</button>
                                            <button type="button" class="button w-24 bg-theme-6 text-white"
                                                href="{{ route('job.delete',$job->id) }}">Delete</button> </div>
                                    </div>
                                </div>
                                <!-- <a href="javascript:;" data-toggle="modal" data-target="#header-footer-modal-preview" class="flex items-center mr-5"> <i data-feather="edit" class="w-4 h-4 mr-1" href=""></i> Edit </a> -->
                                <div class="btn-group">
                                    <a class="btn btn-primary light" onclick="edit(1)"
                                        style="margin-left:8px; border-radius: 10%;"><i class="fa fa-edit"></i>
                                        Edit</a>
                                    <a class="btn btn-danger light" onclick="delete1()"
                                        style="margin-left:8px; border-radius: 10%;"><i class="fa fa-trash"></i>
                                        Delete</a>
                                </div>
                                <div class="modal" id="editModal">
                                    <div class="modal__content">
                                        <div
                                            class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">

                                            <!-- <h2 class="font-medium text-base mr-auto">Edit Job</h2> <button class="button border items-center text-gray-700 dark:border-dark-5 dark:text-gray-300 hidden sm:flex"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs </button>
                                                <div class="dropdown sm:hidden"> <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700 dark:text-gray-600"></i> </a>
                                                    <div class="dropdown-box w-40">
                                                        <div class="dropdown-box__content box dark:bg-dark-1 p-2"> <a href="javascript:;" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs </a> </div>
                                                    </div>
                                                </div> -->


                                            <form action="{{ route('job.updatejob', $job->id) }}" method="post">
                                                <!-- @csrf -->
                                                <div class="intro-y box p-5">
                                                    <div>
                                                        <label>Company</label>
                                                        <div class="mt-2">
                                                            <select name="company"
                                                                data-placeholder="Select your favorite actors"
                                                                class="form-control tail-select w-full"
                                                                value="{{ $job->company }}">
                                                                <option @if($job->company === 'Cara Com My')
                                                                    selected @endif value="Cara Com My">CaraComMy
                                                                </option>
                                                                <option @if($job->company === 'NST Data Cara')
                                                                    selected @endif value="NST Data Cara">NSTDataCara
                                                                </option>
                                                                <option @if($job->company === 'Cara Skadimo')
                                                                    selected @endif value="Cara Skadimo" >Cara
                                                                    Skadimo</option>
                                                                <option @if($job->company === 'Cara Solution')
                                                                    selected @endif value="Cara Solution">Cara
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
                                                                value="{{ $job->category}}">
                                                                <option @if($job->category === 'Web Developer')
                                                                    selected @endif value="Web Developer">Web
                                                                    Developer</option>
                                                                <option @if($job->category === 'System Analyst')
                                                                    selected @endif value="System Analyst">System
                                                                    Analyst</option>
                                                                <option @if($job->category === 'Graphic Designer')
                                                                    selected @endif value="Graphic Designer">Graphic
                                                                    Designer</option>
                                                                <option @if($job->category === 'Technician')
                                                                    selected @endif value="Technician">Technician
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <label>Position</label>
                                                        <div class="mt-2">
                                                            <select name="position"
                                                                data-placeholder="Select your favorite actors"
                                                                class="form-control tail-select w-full"
                                                                value="{{ $job->position}}">
                                                                <option @if($job->position === 'PHP Senior
                                                                    Developer') selected @endif value="PHP
                                                                    Senior Developer">PHP Senior Developer
                                                                </option>
                                                                <option @if($job->position === 'Frontend
                                                                    Developer') selected @endif value="Frontend
                                                                    Developer">Frontend Developer</option>
                                                                <option @if($job->position === 'UI/UX Designer')
                                                                    selected @endif value="UI/UX Designer">UI/UX
                                                                    Designer</option>
                                                                <option @if($job->position === 'Ionic
                                                                    Developer') selected @endif value="Ionic
                                                                    Developer">Ionic Developer</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <label>Description</label>
                                                        <div class="mt-2">
                                                            <input type="text" name="description" class="form-control"
                                                                value="{{ $job->description}}">
                                                            <p>Content of the editor.</p>
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
                                                                        value="{{ $job->salary_from}}">
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
                                                                        value="{{ $job->salary_to}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <label>Active Status</label>
                                                        <div class="mt-2">
                                                            <input type="checkbox" name="status"
                                                                class="form-control input input--switch border"
                                                                value="{{ $job->status}}">
                                                        </div>
                                                        <div class="text-right mt-5">
                                                            <button type="button" data-dismiss="modal"
                                                                class="button w-24 border text-gray-700 dark:border-dark-5 dark:text-gray-300 mr-1">Cancel</button>
                                                            <button type="submit">Update</button>
                                                        </div>

                                                        <!-- <button type="button" class="button w-24 border dark:border-dark-5 text-gray-700 dark:text-gray-300 mr-1">Cancel</button>
                                <button type="submit" class="button w-24 bg-theme-1 text-white">Save</button> -->
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- <div>
                                            </div>
                                            <div class="px-5 py-3 text-right border-t border-gray-200 dark:border-dark-5"> <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 dark:border-dark-5 dark:text-gray-300 mr-1">Cancel</button> </div>
                                        </div>
                                    </div>
                                    <input type="checkbox" class="input input--switch border">
                                </div>
                            </td>
                        </tr> -->

                </tbody> @endforeach
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
</div>
@endsection

@push('js')

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

@endpush