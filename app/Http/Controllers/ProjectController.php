<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{

    public function index() {

        $projects = Project::all();
        return view('projects.index', ['projects' => $projects]);
    }

    public function create() {
        return view('projects.create');
    }

    public function store(Request $request) {
        
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'difficulty' => 'required'
        ]);

        $project = Project::create($data);
        return redirect('/')->with('success', 'Project created successfully');

    }

    public function edit($id) {

        $project = Project::find($id);
        return view('projects.edit', ['project' => $project]);

    }

    public function update($id, Request $request) {

        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'difficulty' => 'required'
        ]);

        $project = Project::find($id);        
        $project->update($data);
        return redirect('/')->with('success', 'Project updated successfully');

    }

    public function search(Request $request) {
        $projects = Project::query()
            ->where('name', 'LIKE', "%{$request->name}%")
            ->get();
        return view('projects.index', ['projects' => $projects]);        
    }

    public function delete($id) {
        $project = Project::find($id);
        $project->delete();
        return redirect('/')->with('success', 'Project deleted successfully');
    }

}
