<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MainForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;

class GeneralCandidateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $candidates = MainForm::get();
        $menu = Menu::get();
        $current_menu = 2;
        $candidates  = MainForm::latest()->paginate(5);
        return view('candidate.list', compact('candidates', 'menu', 'current_menu'));
       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'attachment' => 'required|mimes:pdf,docx,doc|max:2048',
            
        ]);

        $input = $request->all();

        if ($request->has('attachment')) {
          
            // Get image file
            $file = $request->file('attachment');
            $text = $file->getClientOriginalExtension();
            // Make a image name based on user name and  timestamp
            $name = $input['fullname'];
            // Define folder path
            $folder = '/uploads/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $file->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($file, $folder, 'public', $name);
            // Set user profile image path in database to filePath
        

        }
       

        MainForm::create($request->all());

        return view('form.index');
   

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
    public function destroy(MainForm $candidates)
    {
        
    }

    public function postApprove($id)
     {
        
        $candidates = MainForm::find($id);

        if($candidates)
        {
            $candidates->status = 1;
            $candidates->save();
            $candidates=MainForm::where('status' , '1')->get();
            $menu = Menu::get();
            $current_menu = 2;
            return back();
            // return view('candidate.generalaccepted', compact('candidates', 'menu', 'current_menu'));
           

        }
        
    }

    public function postReject($id)
     {
        
        $candidates = MainForm::find($id);

        if($candidates)
        {
            $candidates->status = 2;
            $candidates->save();
            $candidates=MainForm::where('status' , '2')->get();
            $menu = Menu::get();
            $current_menu = 2;
            // return view('candidate.generalrejected', compact('candidates', 'menu', 'current_menu'));
            return back();
        

        }
        
    }

    public function download($file)
    {
        $file = MainForm::find($file);
        $filepath = public_path('uploads/images/'.$file);
        return response()->download( $filepath);
    }

    // public function download(Request $request) 
    // { 
    //     public_path('uploads/images/'. $request->get('file'));
    // }

    // public function get_file($filename)
    // {
    //       $file_path = storage_path('uploads') . "/" . $filename;
    //       return Response::download($file_path);
    // }

    

   
}
