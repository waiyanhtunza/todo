<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Task $task)
    {


        return view('home',[
            'tasks' => Task::all(),
        ]);
    }
}
