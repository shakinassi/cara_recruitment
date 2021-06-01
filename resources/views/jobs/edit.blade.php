<div class="modal" id="header-footer-modal-preview" style="z-index:50;">
    <div class="modal__content relative" style="margin-top: -5rem;">
        <div class="intro-y flex items-center p-5">
            <h2 class="text-lg font-medium mr-auto">
                Edit Job
            </h2>
        </div>
        
        <form action="{{ route('jobs.update', $job->id) }}" method="post">
            @csrf
            @method('PUT')
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
                                <div class="mt-3">
                                    <input type="text" placeholder="Job Position" name="position"
                                    class="input w-full border col-span-4 form-control tail-select" value="{{ $job->position}}">
                                    
                                </div>
                            </div>
                            
                            <div class="mt-3">
                                <label>Description</label>
                                {{-- <div class="mt-3">
                                    <input type="text" placeholder="Job Description" name="description"
                                    class="input w-full border col-span-4 form-control tail-select" value="{{ $job->description}}">
                                    
                                </div> --}}
                                
                                <div class="mt-2" >
                                    
                                    <div class="modal-body">
                                        <form>
                                            <textarea style="width:100%;" name="description" id="editor" rows="10" cols="80">"{{ $job->description}}"</textarea>
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
                