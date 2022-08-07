<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::select('*')->get();
        return view('project.create', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update($project)
    {
        $project = Project::find($project);
        return view('project.edit', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->all();
        $result = Project::updateOrCreate([
            'id' => $request->id,
        ],$data);
        return redirect()->back()->with('success','Project sucessfully added');
    }

    public function store_update($project, Request $request)
    {
        $project = Project::find($project);
        $project->update([
            'name' => $request->name
        ]);
        return redirect()->route('project.index',compact('project'))->with('success','Project Sucessfully Updated.');

    }

    public function delete($id)
    {
        Project::find($id)->delete();
        return back()->with('success','Project deleted.');
    }
    
}
