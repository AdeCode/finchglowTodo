<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $todos = Todo::all();
        return view('todo/index', compact('todos'));
    }

    public function create()
    {
        return view('todo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $todo = Todo::create($request->all());
        if($todo)
        {
            return redirect(route('todo.index'))->with('message','Task added successfully');
        }
        else
        {

        }
    }

    public function edit(Todo $todo)
    {
        return view ('todo.edit', compact('todo'));
    }

    public function update(Todo $todo)
    {
        $data  = request()->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $todo->update($data);           
        return redirect(route('todo.index'));
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
        return redirect()->back();
    }

    public function details(Todo $todo)
    {
        return view('todo.details', compact('todo'));
    }
}
