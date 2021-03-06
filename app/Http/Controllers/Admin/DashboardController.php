<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Objective;
use App\Project;
use App\User;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;


class DashboardController extends Controller
{

    public function dashboard(){

        return view('admin.dashboard', [
            'projects' => Project::where('user_id',Auth::id())->get(),
            'objectives' => Objective::where('user_login',Auth::user()->email)->lastObjectives(5),
            'count_projects_all' => Project::where('user_id',Auth::id())->count(),
            'count_projects_ready' => Project::where('user_id',Auth::id())->where('status', '=', 1)->count(),
            'count_projects_process' => Project::where('user_id',Auth::id())->where('status', '=', 2)->count(),
            'count_objectives' => Objective::where('user_login',Auth::user()->email)->count(),
            'count_users' => User::count(),
            'user' => Auth::user(),
        ]);


    }

}
