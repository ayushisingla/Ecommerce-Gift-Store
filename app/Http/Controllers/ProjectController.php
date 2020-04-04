<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Project;
use View;
class ProjectController extends Controller
{
    public function create(){
        return view('signup');
    }
    public function store(){
    $project = new Project();
    $project->name = request ('name');
    $project->email = request ('email');
    $project->password = request ('password');
    $project->contact = request ('contact');
    $project->city = request ('city');
    $project->address = request ('address');
    $project->save();
    return redirect('/');
    }
}
