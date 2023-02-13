<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;
use App\Http\Requests\TaskRequest;


class TaskController extends Controller
{
    public function __construct(){
        $this -> middleware('auth');
        $this -> middleware('verified');
        //$this -> middleware('is_admin', ['except' => ['index']]);
    }

    public function index(Request $request){
        if($request -> search) {
            $task = Task::where('task','LIKE',"%$request->search%")->get();
            return $task;
        }
        //$task = DB::table('tasks')->get();
        $task = Task::paginate(3);
        return view('task.index', [
            'data' => $task
        ]);
    }
    
    public function search($id){
        $task = Task::find($id);
        return $task;
    }

    public function create(){
        return view('task.create');
    }

    public function edit($id){
        $task = Task::find($id);
        return view('task.edit', compact('task'));
    }

    public function store(TaskRequest $request){

        Task::create([
            'task' => $request->task,
            'user' => $request->user
        ]);
        return redirect('/tasks');
        /* $this -> tasklist[request()->param] = request()->task;
        return $this -> tasklist; */
    }

    public function update(TaskRequest $request,$id){
        $task = Task::find($id);
        $task->update([
            'task' => $request->task,
            'user' => $request->user
        ]);

        return 'Updated successfully: ';
        return $task;

        /* $this -> tasklist[request()->param] = request()->task;
        return $this -> tasklist; */
    }

    public function delete($id){
        $task = Task::find($id)
        ->delete();
        return 'Deleted';
        /* DB::table('tasks')->where('id',$id)->delete();
        return 'Deleted successfully!'; */
/*         unset($this -> tasklist[$param]);
        return $this -> tasklist; */
    }






}
