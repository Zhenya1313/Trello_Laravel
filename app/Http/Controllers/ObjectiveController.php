<?php

namespace App\Http\Controllers;

use App\Objective;
use App\Project;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ObjectiveController extends Controller
{

    public function index()
    {
//        $objectives = Objective::where('user_login',Auth::user()->email)->get()->toArray();
//        $objectives_users = (User::find(Auth::user()->id))->objectives()->get()->toArray();
////        dd($objectives_users);
////        $index = array_search('pivot', $objectives_users);
//        array_diff_key($objectives_users,['pivot'=>'123']);
//array_push($objectives,$objectives_users );


//        dd($objectives);
        return view('objective.index', [
            'objective' => Objective::where('user_login',Auth::user()->email)->get()
        ]);
    }

    public function create()
    {
        return  view('objective.create' , [
           'objective' => [],
            'projects' => Project::where('user_id',Auth::id())->get(),
            'users'=> User::all(),
            'delimiter' => ''
        ]);
    }

    public function store(Request $request)
    {

        $objective = new Objective();
        $objective->title = $request->input('title');
        $objective->date = $request->input('date');
        $objective->status = $request->input('status');
        $objective->content = $request->input('content');
        $objective->user_login = Auth::user()->email;
        $objective->time = $request->input('time');
        $objective->save();

        if ($request->has('projects')) :
            $objective->projects()->attach($request->input('id'));
        endif;
        if ($request->has('users')) :
            $objective->users()->attach($request->input('id'));
        endif;

        return redirect()->route('objective.index');
    }

    public function show(Objective $objective)
    {
        //
    }


    public function edit(Objective $objective)
    {
        return  view('objective.edit' , [
            'objective' => $objective,
            'projects' => Project::where('user_id',Auth::id())->get(),
            'users'=> User::all(),
            'delimiter' => ''
        ]);
    }


    public function update(Request $request, Objective $objective)
    {
        $objective->update($request->except('projects','users'));


        $objective->projects()->detach();
        if ($request->has('projects')) :
            $objective->projects()->attach($request->input('projects'));
        endif;

        $objective->update($request->except('users'));

        $objective->users()->detach();
        if ($request->has('users')) :
            $objective->users()->attach($request->input('users'));
        endif;

        return redirect()->route('objective.index');
    }


    public function destroy(Objective $objective)
    {

        $objective->delete();
        return redirect()->route('objective.index');
    }


}
