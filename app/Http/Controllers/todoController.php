<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class todoController extends Controller
{
    public function index()
    {
        $todos = todo::all();
        return view('todo', compact('todos'));
    }
}
