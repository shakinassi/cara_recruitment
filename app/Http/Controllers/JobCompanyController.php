<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Company;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class JobCompanyController extends Controller
{
    use UploadTrait;

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $company = Company::get();
        $menu = Menu::get();
        $current_menu = 6;
        $company = Company::latest()->paginate(5);
       
        return view('company.index', compact('company', 'menu', 'current_menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public funtion insert_logo(Request $request)
    // {

    // }
    public function insert_logo(Request $request)
    {
        $company = new Company();

        $company->company    = request('company');
        $company->company_logo    = request('company_logo|file|image|max:10,485,760');


        // uploading image file to database
       if
       ($file = $request->hasFile('company_logo')) {
           $file = $request->file('company_logo');

           $filename = time() . '.' .$file->getClientOriginalName();
           $destinationPath = public_path('/uploads/images/');

           $file->move($destinationPath, $filename);
           $company->company_logo = $filename;
       }
       $company->save();
       return back();

    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function fetch_logo($image_id)
    {
        $image = Company::findOrFail($image_id);
        $image_file = Company::make($image->company_logo);
        $response = Response::make($image_file->encode('jpeg'));
        $response->header('Content-Type', 'image/jpeg');
        
        return $response;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
                            
                    
        return redirect()->route('company.index');
    }

    public function update(Request $request, $id)

    {
    
        $this->validate($request, [
            'company_logo' => 'required|image|max:2048',
            'company' => 'required',

        ]);
    //    dd(123);
        $company = Company::find($id)->first();
        // dd($company);
    

        // $company = Company::where(['companies.id' => $id])->first();
        if($request->file != '')
        {
            $path = public_path().'/uploads/images/';

            if($company->file != ''  && $company->file != null)
            {
                $file_old = $path.$company->file;
                unlink($file_old);
            }
            $file = $request->file;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            
            $company->update(['file' => $filename]);

            return redirect()->route('company.index');

        }
       

    }

    public function edit($id)
    {
        return view('jobs.edit', compact('job'));
    }



}
