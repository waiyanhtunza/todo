<?php

namespace App\Http\Controllers;

use App\Models\DoneTask;
use Illuminate\Http\Request;

class DonetaskController extends Controller
{
    public function destroy($id)
    {
        $doneTask = DoneTask::findOrFail($id);
        $doneTask->delete();
        return back()->with('success','Your Deleting task is successful');
    }

    public function show($id)
    {
        $doneTask = DoneTask::findOrFail($id);

        return view('donetasks.detail',[
            'doneTask' => $doneTask
        ]);
    }

    public function index(DoneTask $doneTask)
    {
        
        return view('action.complete',[
            'doneTasks' => DoneTask::orderBy('created_at','desc')->paginate(6),
        ]);
        
    }

}
