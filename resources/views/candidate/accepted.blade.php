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
       Accepted Candidate Lists
    </h2>

    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
        <table class="table table-report sm:mt-2">
            <thead>
                <tr>
                    <th class="whitespace-no-wrap">Name</th>
                    <th class="whitespace-no-wrap">Email</th>
                    <th class="text-center whitespace-no-wrap">Phone Number</th>
                    <th class="text-center whitespace-no-wrap">Address</th>
                    {{-- <th class="text-center whitespace-no-wrap">Status</th> --}}
                    <th class="text-center whitespace-no-wrap">Actions</th>
                </tr>
            </thead>
           


            <tbody>@foreach ($candidates as $candidate)
                <tr class="intro-x">
                    <td class="w-40">
                        <div class="font-medium whitespace-no-wrap">{{ $candidate->fullname }}</div> 
                    </td>
                    <td class="w-40">
                        <div class="font-medium whitespace-no-wrap">{{ $candidate->email }}</div> 
                    </td>
                    <td class="w-40" class="text-center">{{ $candidate->contact }}</td>
                    <td class="text-center">{{ $candidate->address }}</td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a href="javascript:;" data-toggle="modal" data-target="#delete-modal-preview" class="flex items-center mr-3"><i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                       
                            <div class="modal" id="delete-modal-preview">
                               
                                <div class="modal__content">
                                    <div class="p-5 text-center"> <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                                        <form action="{{ action('GeneralAcceptedController@destroy', $candidate['id']) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value = "DELETE">
                                            <div class="text-3xl mt-5">Are you sure?</div>
                                            <div class="text-gray-600 mt-2">Do you really want to delete these records? This process cannot be undone.</div>

                                            <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 dark:border-dark-5 dark:text-gray-300 mr-1">Cancel</button> 
                                            <button type="submit" title="delete" class="button w-24 bg-theme-6 text-white" >Delete</button> 
                                         </div>
                                    <div class="px-5 pb-8 text-center"> 
                                </div>
                                        </form>
                            </div>
                            
                        </div>
                            <a href="javascript:;" data-toggle="modal" data-target="#header-footer-modal-preview" class="flex items-center mr-3"> <i data-feather="file-plus" class="w-4 h-4 mr-1"></i> Download </a>
                            <div class="modal" id="header-footer-modal-preview">
                                <div class="modal__content">
                                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">
                                        <h2 class="font-medium text-base mr-auto">Download Resume</h2> <button class="button border items-center text-gray-700 dark:border-dark-5 dark:text-gray-300 hidden sm:flex"> <i data-feather="file"  href="/download" class="w-4 h-4 mr-2"></i> Download Docs </button>

                                        {{-- <div class="dropdown sm:hidden"> <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700 dark:text-gray-600"></i> </a>
                                            <div class="dropdown-box w-40">
                                                <div class="dropdown-box__content box dark:bg-dark-1 p-2"> <a href="javascript:;" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs </a> </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="px-5 py-3 text-right border-t border-gray-200 dark:border-dark-5"> <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 dark:border-dark-5 dark:text-gray-300 mr-1">Cancel</button> </div>
                                </div>
                            </div>
                         
                        </div>
                    </td>
                </tr>      
            </tbody>@endforeach
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
@endsection
@push('js')

@endpush 

                           
                