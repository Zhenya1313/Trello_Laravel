<?php

namespace App\Http\Controllers;

use \Input as Input;
use App\models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\models\Task;

class TaskController extends Controller
{
    public function submit(TaskRequest $req) {
        $task =new Task();
        $task->task = $req->input('task');
        $task->details = $req->input('details');
        $task->date = $req->input('date');
        $req->file('image')->store('uploads','public');
        $task->path = $req->file('image')->hashName();
        $task->save();

        return redirect()->route('task-data-one', ['id' => $task->id]);
    }

    public function allTask(){
        $task = new Task;
        return view('tasks', ['data'=> $task->all()]);
    }

    public function showOneTask($id){
        $task = new Task;
        return view('one-tasks', ['data' => $task->find($id)]);
    }

    public function updateTask($id){
        $task = new Task;
        return view('update-tasks', ['data' => $task->find($id)]);
    }

    public function updateTaskSubmit($id, TaskRequest $req) {
        $task = Task::find($id);
        $task->task = $req->input('task');
        $task->details = $req->input('details');
        $task->date = $req->input('date');
        $path=$req->file('file')->store('uploads');


        $task->published = ($req->input('published') === '1') ? true : false;
        $task->save();
//        return view('default', ['path' => $path]);


        return redirect()->route('task-data-one', $id)->with('success', 'Задача успешно обновлена!');
    }

    public function deleteTask($id){
        Task::find($id)->delete();
        return redirect()->route('task-data', $id)->with('success', 'Задача была удалена!');
    }
}
