<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_task($id)
    {
        $project = Project::find($id);
        return view('project.add_task', compact('project','id'));
    }

    
    
    public function store_task(Request $request, $id)
    {
        
        try{
            
            $data_insert = Task::create([
                'project_id' => $id,
                'name' => $request->name,
                'description' => $request->description,
                'due_date' => $request->due_date,
                'status' => $request->status,
            ]);
            return redirect()->route('add.task', $id)->with('success','Task Successfully Created');
        }
        catch(\Exception $e){
            return redirect()->route('add.task', $id)->with('failed','Task failed');
        }
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
    public function destroy($id)
    {
        //
    }
}