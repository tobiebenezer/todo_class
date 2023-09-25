<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        
        return view('todo.index',[
            'todos' => $todos,
        ]);

    }

    public function store(Request $request)
    {
        $request->validate([
            'todo' => 'required|string|max:255',
            'done_status' => 'nullable|in:on,'
        ]);
        

        $todo = Todo::create([
            'todo' => $request->todo,
            'done_status' => $request->done_status == 'on'? true : false,
        ]);


        return redirect()->route('store.todo')->with('success','Todo created');

    }

    public function show($id)
    {
        // $todo = Todo::where('id', $id) 
        //                 ->first();
        $todo = Todo::find($id);    
      
        return view('todo.show', compact('todo'));


    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'todo' => 'required|string|max:255',
            'done_status' => 'nullable|in:on,'
        ]);

        $todo = Todo::find($id);

        $todo->update([
            'todo' => $request->todo,
            'done_status' => $request->done_status == 'on' ? true : false,
        ]);

        return redirect()->route('todo')->with('success','Todo updated successfully');
    }

    public function destroy($id)
    {
        // $todo = Todo::find($id);
        // $todo->delete();

        Todo::destroy($id);

        return back()->with('success','Todo Deleted Successfully');
    }
}

