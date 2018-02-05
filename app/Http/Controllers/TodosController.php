<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todo')->with('todos', $todos);
    }

    public function add(Request $request)
    {
        // dd($request->all());
        $todo = new Todo();
        $todo->todo = $request->todo;
        $todo->save();
        return redirect()->back();
    }
}
