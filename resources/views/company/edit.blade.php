<div class="modal" id="header-footer-modal-preview">
    <div class="modal__content">

        <div class="intro-y flex items-center p-5">
            <h2 class="text-lg font-medium mr-auto">
                Edit Company
            </h2>
        </div>

        <form action="{{ route('company.update', $jobcompany->id) }}" method="post">
            @csrf
            @method('PUT')
            
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
                        class="input w-full border col-span-4 form-control tail-select" value="{{ $jobcompany->company}}">
                        
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