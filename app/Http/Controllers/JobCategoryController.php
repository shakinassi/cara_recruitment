<?php

namespace App\Http\Controllers;


use App\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $categories = Category::get();
        $menu = Menu::get();
        $current_menu = 7;
        $categories = Category::latest()->paginate(5);
        // $category = Jobcategory::
        //         join('company', 'company.id', '=', 'jobs.company')->get();

       

        return view('category.index', compact('categories', 'menu', 'current_menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
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
            
        ]);


        $categories = new Category();
        $categories->company = $request->company;
        $categories->category = $request->category;
        $categories->save();
       

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('category.edit', compact('category'));
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
        $request->validate([
            'company' => 'required',
            'category' => 'required',
           
        ]);

        $categoryupdate=Category::where('id',$id)->first();

        $categoryupdate->company=$request->company;
        $categoryupdate->category=$request->category;
   
        $categoryupdate->save();

        return redirect()->route('category.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
                            
                    
        return redirect()->route('category.index');
    }
}
