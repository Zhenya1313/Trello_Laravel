<?php

namespace App\Http\Controllers;
use App\Project;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        $user = Auth::id();
        $users = DB::select("
                SELECT * FROM projects LEFT JOIN project_user ON  projects.id = project_user.project_id
                left JOIN users ON project_user.user_id = users.id
                Where projects.user_id = '$user' OR users.id = '$user'
            ");

            return view('project.index', [
                'projects' => $users
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
    public function store(ProjectRequest $request)
    {
        $project = new Project();
        $project->title = $request->input('title');
        $project->date = $request->input('date');
        $project->time = $request->input('time');
        $project->status = $request->input('status');
        $project->parent_id = $request->input('parent_id');
        $project->host = $request->input('host');
        $project->port = $request->input('port');
        $project->host_name = $request->input('hos_name');
        $project->parol = $request->input('parol');
        $project->user_id = Auth::id();
        $project->user_email = Auth::user()->email;
        $project->save();

        if ($request->has('users')) :
            $project->users()->attach($request->input('id'));
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
    public function update(ProjectRequest $request, Project $project)
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
