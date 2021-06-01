<div class="modal" id="button-modal-preview">
    <div class="modal__content relative"> <a data-dismiss="modal" href="javascript:;" class="absolute right-0 top-0 mt-3 mr-3"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
    
        <div class="intro-y flex items-center p-5">
            <h2 class="text-lg font-medium mr-auto">
                Add New Category
            </h2>
        </div>
        <form method="post" action="{{ route('category.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="intro-y box p-5">
            <div>
                <label>Company</label>
                <div class="mt-2">
                    <input type="text" class="input w-full border mt-2 form-control" name="company" placeholder="Company Name">
            </div>
            <div class="mt-3">
                <label>Category</label>
                <input type="text" class="input w-full border mt-2 form-control" name="category" placeholder="Category">
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