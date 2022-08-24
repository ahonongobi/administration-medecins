<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::where("user_id",Auth::user()->id)->get();
        return view("user-dash.todo", compact("todos"));
    }
    // store todo
    public function store(Request $request)
    {
        $v = Validator::make($request->all(),[
            "todo" => "required",
        ]);
        if ($v->fails())
            {
                return back()->withErrors($v);
            }
        else{
            $todo = new Todo();
            $todo->title = $request->input("todo");
            $todo->user_id = Auth::user()->id;
            $todo->save();
            return back();
        }
    }

    //to do completed
    public function completed($id)
    {
        $todo = Todo::find($id);
        $todo->completed = 1;
        $todo->save();
        return back();
    }
    //undo completed
    public function undo($id)
    {
        $todo = Todo::find($id);
        $todo->completed = 0;
        $todo->save();
        return back();
    }
    //delete todo
    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return back();
    }
  // delete all deletealltodo
    public function deletealltodo()
    {
        $todos = Todo::where("user_id",Auth::user()->id)->get();
        foreach($todos as $todo)
        {
            $todo->delete();
        }
        return back();
    }

}
