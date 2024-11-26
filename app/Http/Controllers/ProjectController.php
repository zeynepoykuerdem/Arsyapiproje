<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::simplePaginate(9); // Or use pagination: Project::paginate(9);
        return view('projects.index', compact('projects'));
    }
    public function show($id)
    {
        $project = Project::findOrFail($id);
        if (!$project){
            return redirect()->back()->with('error','Project not Found!');
        }
        return view('projects.show', compact('project'));
    }





}
