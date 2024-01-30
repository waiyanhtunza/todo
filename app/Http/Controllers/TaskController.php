<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
    public function store()
    {
        $valid = request()->validate([
            'task' => 'required|min:5|max:50'
        ]);

        Task::create($valid);

        return back()->with('add','Your Task Adding Succeful');

    }

    public function destroy(Task $task)
    {
        $task->delete();
        return back()->with('success','Your Deleting task is successful');
    }

    public function show(Task $task)
    {
        
        return view('action.detail',[
            'task' => $task,
        ]);
    }

    public function edit(Task $task)
    {
        return view('action.update',[
            'task'=>$task
        ]);
    }

    public function update(Task $task,Request $request)
    {
       
        $vail = request()->validate([
            'task'=>'required',
            'img' =>'nullable',
            'note' => 'nullable'
        ]);

        // dd($request);
        if($request->hasFile('img'))
        {
            $name = time().'.'.$request->img->getClientOriginalName();
            $imgPath = $request->file('img')->move('tasks',$name);
            $vail['img'] = $imgPath;

            Storage::disk('public')->delete($task->img ?? '');
        };

        $task->task = $vail['task'];
        $task->img = $vail['img'];
        $task->note = $vail['note'];
        $task->save();
        return redirect()->route('tasks.show',$task->id);
    }
}