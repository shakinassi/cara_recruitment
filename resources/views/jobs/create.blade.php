
<div class="modal" id="button-modal-preview">
    <div class="modal__content relative">
        <div class="intro-y flex items-center p-5">
            <h2 class="text-lg font-medium mr-auto">
                Add New Job
            </h2>
        </div>
        
        <form action="{{ route('jobs.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="intro-y box p-5">
                <div>
                    <label>Company</label>
                    <div class="mt-2">
                        <select name="company" data-placeholder="Select your favorite actors"
                        class="input w-full border mt-2 form-control">
                        @foreach ( $company as $company)
                        <option  value="{{ $company->id }}">{{ $company->company }}
                        </option>@endforeach
                    </select>
                </div>
            </div>

            <div class="mt-3">
                <label>Category</label>
                <div class="mt-2">
                    <select name="category" data-placeholder="Select your favorite actors"
                        class="input w-full border mt-2 form-control">
                        @foreach ( $category as $category)
                        <option  value="{{ $category->id }}">{{ $category->category}}
                        </option>@endforeach
                    </select>
            </div>

            <div class="mt-3">
                <label>Position</label>
                <div class="mt-2">
                    <input type="text" placeholder="Job Position" name="position"
                    class="input w-full border col-span-4 form-control">
                   
                </div>
            </div>

            <div class="mt-3">
                <label>Description</label>
                <div class="mt-2" >
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


        </form>



    </div>
</div>







@push('js')
@endpush

                         
                                                                                        