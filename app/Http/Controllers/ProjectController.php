<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Employee;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('indexProject', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createProject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new \App\Project();
        $project->name = $request['name'];
        $project->description = $request['description'];
        $project->save();

        return redirect('/project')->with('status', 'Project is successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('showProject', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('editProject', compact('project'));
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
        $validatedData = $request->validate([
            'name' => 'required|max:45',
            'description' => 'required',
        ]);
        Project::whereId($id)->update($validatedData);

        return redirect('/project')->with('status', 'Project is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employees = Employee::where('project_id', '=', $id);
        foreach($employees as $employee) {
            $employee->project_id = "";
            $employee->save();
        }
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect('/project')->with('status', 'Project is successfully deleted');
    }
}
