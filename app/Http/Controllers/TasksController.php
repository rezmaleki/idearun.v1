<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class TasksController extends Controller
{
    protected $tasks;

    public function index()
    {
        $tasks = Task::all();
        $tasks = $tasks->sortBy('status');
        return View('Tasks.index',compact('tasks'));
    }


    public function create(request $request)
    {
        return View('Tasks.create');
    }



    public function store(request $request)
    {
      $input = $request->all();

        Task::create($input);
        return redirect()->back();
    }



    public function edit($id , request $request)
    {

        $task = Task::find($id);
        if($task->status == 0) {
            $task->status = 1;
            $task->save();

        }
        return redirect()->back();

    }



    public function destroy($id)
    {

        $task = Task::find($id);

        if($task->status==0) {
            $task->delete();
        }
        return redirect()->back();
    }
}
