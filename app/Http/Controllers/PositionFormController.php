<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\Menu;
use App\Traits\UploadTrait;
use App\Models\PositionForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PositionFormController extends Controller
{
    use UploadTrait;

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        
        return view('pcandidate.index');

        // $jobs = Jobs::get();
        // $jobs = Jobs::select('*', 'jobs.id as jobs_id', 'jobs.company as jobcompany_id')->
        // join('companies', 'companies.id', '=', 'jobs.company')
        // ->get();
        // // dd($jobs[0]->jobs_id);
        // return view('pcandidate.apply', compact('jobs'));
       
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request, [
            'fullname' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'category' => 'required',
            'position' => 'required',
            'attachment' => 'required',
             ]);
    
    
            $input = $request->all();
            
    
            if ($request->has('attachment')) {
              
                // Get image file
                $image = $request->file('attachment');
                // $text = $file->getClientOriginalExtension();
                // Make a image name based on user name and  timestamp
                $name = $input['fullname'];
                // Define folder path
                $folder = '/uploads/images/';
                // Make a file path where image will be stored [ folder path + file name + file extension]
                $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
                // Upload image
                $this->uploadOne($image, $folder, 'public', $name);
                // Set user profile image path in database to filePath
            
            }
    
            $save = PositionForm::firstOrCreate([
                'fullname' => $input['fullname'],
                'email' => $input['email'],
                'contact' =>$input['contact'] ,
                'address' =>$input['address'],
                'category' =>$input['category'],
                'position' =>$input['position'],
                'attachment' => $filePath
                
            ]);
    
           
             
            return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PositionForm $candidates)
    {
      
    }

    public function postApprove($id)
     {
        
        $candidates = PositionForm::find($id);

        if($candidates)
        {
            $candidates->status = 1;
            $candidates->save();
            $candidates=PositionForm::where('status' , '1')->get();
            $menu = Menu::get();
            $current_menu = 2;
            return back();
            // return view('candidate.generalaccepted', compact('candidates', 'menu', 'current_menu'));
           

        }
        
    }

    public function postReject($id)
     {
        
        $candidates = PositionForm::find($id);

        if($candidates)
        {
            $candidates->status = 2;
            $candidates->save();
            $candidates=PositionForm::where('status' , '2')->get();
            $menu = Menu::get();
            $current_menu = 2;
            
            return back();
           

        }
        
    }

    public function applyposition($id) 
    {
        // dd($id);
        $jobs = DB::select('select * from jobs where id = ?',[$id]);
        return view('pcandidate.apply',compact('jobs'));

       
       
    }
}
