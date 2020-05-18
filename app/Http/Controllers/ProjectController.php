<?php

namespace App\Http\Controllers;
use App\Project;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('project.index', [
           'projects' => Project::where('user_id',Auth::id())->get()
        ]);
    }
    public function create()
    {
        return view(' project.create', [
            'project' => [],
            'projects' => Project::where('user_id',Auth::id())->get(),
            'users'=> User::all(),
            'delimiter' => ''
        ]);
    }
    public function store(Request $request)
    {
        $project = new Project();
        $project->title = $request->input('title');
        $project->date = $request->input('date');
        $project->time = $request->input('time');
        $project->status = $request->input('status');
        $project->parent_id = $request->input('parent_id');
        $project->user_id = Auth::id();
        $project->user_email = Auth::user()->email;
        $project->save();

        if ($request->has('users')) :
            $project->users()->attach($request->input());
        endif;

        return redirect()->route('project.index');
    }
    public function show(Project $project)
    {

        return view('project.show', [
            'objective' => $project->objectives
        ]);
    }
    public function edit(Project $project)
    {
        return view(' project.edit', [
            'project' => $project,
            'projects' => Project::where('user_id',Auth::id())->get(),
            'users'=> User::all(),
            'delimiter' => ''
        ]);
    }
    public function update(Request $request, Project $project)
    {
        $project->update($request->except('users'));


        $project->users()->detach();
        if ($request->has('users')) :
            $project->users()->attach($request->input('users'));
        endif;
        return redirect()->route('project.index');
    }
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('project.index');
    }
}
