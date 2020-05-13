<?php

namespace App\Http\Controllers;

use App\Objective;
use App\Project;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ObjectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('objective.index', [
            'objective' => Objective::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('objective.create' , [
           'objective' => [],
            'projects' => Project::where('user_id',Auth::id())->get(),
            'delimiter' => ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $objective = new Objective();
        $objective->title = $request->input('title');
        $objective->date = $request->input('date');
        $objective->status = $request->input('status');
        $objective->user_login = Auth::user()->email;
        $objective->time = $request->input('time');
        $objective->save();

        if ($request->has('projects')) :
            $objective->projects()->attach($request->input());
        endif;

        return redirect()->route('objective.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Objective  $objective
     * @return \Illuminate\Http\Response
     */
    public function show(Objective $objective)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Objective  $objective
     * @return \Illuminate\Http\Response
     */
    public function edit(Objective $objective)
    {
        return  view('objective.edit' , [
            'objective' => $objective,
            'projects' => Project::where('user_id',Auth::id())->get(),
            'delimiter' => ''
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Objective  $objective
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Objective $objective)
    {
        $objective->update($request->except('projects'));

        $objective->projects()->detach();
        if ($request->has('projects')) :
            $objective->projects()->attach($request->input('projects'));
        endif;

        return redirect()->route('objective.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Objective  $objective
     * @return \Illuminate\Http\Response
     */
    public function destroy(Objective $objective)
    {

        $objective->delete();
        return redirect()->route('objective.index');
    }

//    public function deleteObjective($id){
//        Objective::find($id)->delete();
//        return redirect()->route('objective.destroy', $id)->with('success', 'Задача была удалена!');
//    }
}
