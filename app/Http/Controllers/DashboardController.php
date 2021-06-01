<?php

namespace App\Http\Controllers;


use App\Jobs;

use App\Models\Menu;
use App\Models\MainForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //test1
    public function index()
    {
        $menu = Menu::get();
        
        $current_menu = 1;
        return view('dashboard.index', compact('menu', 'current_menu'));

    }
    public function CCM()
    {

                
        $jobs = Jobs::get();
        $menu = Menu::get();
        $candidates = MainForm::get();
        $current_menu = 1;
        return view('dashboard.caracommy', compact('candidates', 'menu', 'current_menu'));
    }
    public function NST()
    {
        // $jobs = Job::get();
        // $menu = Menu::get();
        // $current_menu = 1;
        // return view('dashboard.nstcara', compact('jobs', 'menu', 'current_menu'));
    }
    public function CSKA()
    {
        // $jobs = Job::get();
        // $menu = Menu::get();
        // $current_menu = 1;
        // return view('dashboard.caraskadimo', compact('jobs', 'menu', 'current_menu'));
    }
    public function CSOL()
    {
        // $jobs = Job::get();
        // $menu = Menu::get();
        // $current_menu = 1;
        // return view('dashboard.carasolution', compact('jobs', 'menu', 'current_menu'));
    }

   
}
