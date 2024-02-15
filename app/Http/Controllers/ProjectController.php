<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function new_project()
    {
        return view('project.new_project');
    }

    public function store_project(Request $request){
        try{
            $data_insert = Project::create([
                'name' => $request->name,
                'description' => $request->description,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'status' => $request->status,
            ]);
            return redirect()->route('new.project')->with('success','Project Successfully Created');
        }
        catch(\Exception $e){
            return redirect()->route('new.project')->with('failed','Project failed');
        }
    }

    public function project_list(){
        $projects = Project::all();
        return view('project.project_list', compact('projects'));
    }

   
}