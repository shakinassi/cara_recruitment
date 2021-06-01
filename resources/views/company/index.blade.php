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
                    {{-- <div class="p-2 border-t border-theme-40 dark:border-dark-3">
                        <a href="" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                            class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                            <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div> --}}
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
            @include('company.create')
           
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
                <tbody>@foreach ($company as $jobcompany)
                    <tr class="intro-x">
                        <td class="w-40">
                            <img style="height:100px;width:170px"
                            src="{{ asset('/storage'.$jobcompany->company_logo) }}"></img>
                            
                        </td>
                        <td class="w-80">
                            <div class="font-medium whitespace-no-wrap">{{$jobcompany->company}}</div> 
                            
                        </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a href="javascript:;" data-toggle="modal" data-target="#delete-modal-preview" class="flex items-center text-theme-6 mr-3"><i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                
                
                                <a href="javascript:;" data-toggle="modal" data-target="#header-footer-modal-preview" class="flex items-center mr-5"> <i data-feather="edit" class="w-4 h-4 mr-1"></i> Edit </a>
                                @include('company.edit')
                            </div>
                        </td>
                    </tr>
                </tbody>@endforeach
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
         {{-- <div class="modal" id="delete-confirmation-modal">
            <div class="modal__content">
                <div class="p-5 text-center">
                    <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i> 
                    <div class="text-3xl mt-5">Are you sure?</div>
                    <div class="text-gray-600 mt-2">Do you really want to delete these records? This process cannot be undone.</div>
                </div>
                <div class="px-5 pb-8 text-center">
                    <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button>
                    <button type="button" class="button w-24 bg-theme-6 text-white">Delete</button>
                </div>
            </div>
        </div> --}}
        <!-- END: Delete Confirmation Modal -->

        @foreach ($company as $jobcompany)
                        <div class="modal" id="delete-modal-preview" style="z-index:50;">
                            <div class="modal__content" style="margin-left: 8rem !important">
                                <div class="p-5 text-center"> <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                                    <form action="{{ route('company.destroy', $jobcompany->id) }}" method="POST">
                                        
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
                            </div>
    </div>

@endsection  

           

@push('js')

@endpush

                   
                                 
                   
               