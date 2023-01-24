<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $projects = Project::all();
        $number_of_proj = count($projects);

        $last_project = Project::orderBy('id', 'desc')->first();

        return view('admin.home', compact('number_of_proj', 'last_project'));
    }

    public function profile(){
        return view('admin.profile');
    }
}
