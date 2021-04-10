<?php

namespace App\Http\Controllers;
use App\Models\todo;
use Illuminate\Http\Request;
use App\Http\Requests\ToDoRequest;
use Validator;

class ToDoController extends Controller {

  public function submit(ToDoRequest $request){

    $todo_list = new todo();
    $todo_list->name = $request->input('name');
    $todo_list->body = $request->input('body');
    $todo_list->locate = $request->input('locate');

    $todo_list->save();

    return redirect()->route('home')->with('success', 'Напоминание было добавлено!');
  }

  public function home() {
    $todo_list = new todo();
    return view('to-do', ['data' => $todo_list->orderBy('created_at', 'desc')->get()]);
  }

}
