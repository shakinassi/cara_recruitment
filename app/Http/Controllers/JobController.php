<?php

namespace App\Http\Controllers;

use App\Category;
use App\Jobs;
use App\Models\Menu;
use App\Models\Company;
use Illuminate\Http\Request;


class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $company = Company::get();
        $category = Category::get();
        $menu = Menu::get();
        $current_menu = 4;
        $jobs = Jobs::latest()->paginate(5);
        $jobs = Jobs::
        join('companies', 'companies.id', '=', 'jobs.company')
            ->get();
       
    
        return view('jobs.index', compact('jobs', 'company', 'category', 'menu', 'current_menu'));

       

        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        
            'company' => 'required',
            'category' => 'required',
            'position' => 'required',
            'description' => 'required',
            'salary_from' => 'required',
            'salary_to' => 'required',
            
        ]);


        Jobs::create($request->all());

        return redirect()->route('jobs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'company' => 'required',
            'category' => 'required',
            'position' => 'required',
            'description' => 'required',
            'salary_from' => 'required',
            'salary_to' => 'required',
            
        ]);

        $jobupdate=Jobs::where('id',$id)->first();

        $jobupdate->company=$request->company;
        $jobupdate->category=$request->category;
        $jobupdate->position=$request->position;
        $jobupdate->description=$request->description;
        $jobupdate->salary_from=$request->salary_from;
        $jobupdate->salary_to=$request->salary_to;
        

        $jobupdate->save();

 

        return redirect()->route('jobs.index');
    }

   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobs $job)
    {
        $job->delete();

        return redirect()->route('jobs.index');
    }

    public function active(Request $request)
    {
        
        $job = Jobs::where('company',$request->jobId)->first();
        $activeVal=request()->get('value');
        // dd($activeVal);
        if($activeVal == 1)
        {
            $activeVal=1;
        }else{
            $activeVal=0;
        }
        $job->status=$activeVal;
        $job->save();

        $output['success'] = 'success';

        return response()->json($output, 200);

    }
}
