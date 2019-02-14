<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use Illuminate\Support\Facades\Session;

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
        Session::flash('success', 'Successfully created');
        return redirect()->back();
    }

    public function delete($id)
    {
        //dd($id);
        $todo = Todo::find($id);
        $todo->delete();
        Session::flash('success', 'Successfully deleted');
        return redirect()->back();
    }

    public function edit($id)
    {
        //dd($id);
        $todo = Todo::find($id);
        return view('edit')->with('todo', $todo);
    }

    public function save(Request $request, $id)
    {
        //dd($request->all());
        $todo = Todo::find($id);
        $todo->todo = $request->todo;
        $todo->save();
        Session::flash('success', 'Successfully updated');
        return redirect()->route('todo');
    }

    public function completed($id)
    {
        $todo = Todo::find($id);
        $todo->completed = 1;
        $todo->save();
        Session::flash('success', 'Successfully complated');
        return redirect()->route('todo');
    }
}
