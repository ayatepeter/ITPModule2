<?php

namespace App\Http\Controllers;

use App\Models\todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    public function showAllData(){
        return view('fetchedData')->with('TodoArr',todolist::all());
    }

    public function delete($id){
        todolist::destroy(array('id', $id));
        return redirect('/');
    }

    public function todo_submit(Request $req){
        $todo = new todolist;
        $todo->task = $req->input('task');
        $todo->save();
        return redirect('/');
    }

    public function todo_edit($id){
        return view('edit')->with('TodoArr_task',todolist::find($id));
    }

    public function edit_submit(Request $req, $id){
        $todo = todolist::find($id);
        $todo->task = $req->input('task');
        $todo->save();
        return redirect('/');
    }
}
