<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Redirect;

class taskController extends Controller
{
    public function index()
    {
        return view('tasks')->with('todo_arr', Task::all());
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // $todo = Task::find($id);
        $todo = new Task();
        // $todo = $request->input('name');
        $todo->name = $request->name;
        $todo->save();
        return redirect('/');
    }

    public function destroy(Task $todo, $id)
    {
        $row = Task::destroy($id);
        return redirect('/');
    }

    public function edit(Task $todo, $id)
    {
        $todo = Task::find($id);
        return view('edit')->with('todo_arr', $todo);
    }

    public function update(Request $request , Task $todo, $id)
    {
        $todo = Task::find($id);
        $todo->name = $request->name;
        $todo->save();
        return redirect('/');
    }
}
