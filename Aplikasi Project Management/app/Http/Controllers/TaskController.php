<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use App\Helpers\Log;
use Auth;
use App\Exports\TaskExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index($id)
    {
        //
        $data_task = Task::where('id_project', $id)->get();
        $user = User::all();
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'on- task');
        return view('project.task.index', compact('data_task', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id)
    {
        $task = new Task();
        $task->id_project = $id;
        $task->judul = $request->judul;
        $task->deskripsi = $request->deskripsi;
        $task->tgl_mulai =$request->tgl_mulai;
        $task->tgl_akhir = $request->tgl_akhir;
        $task->assign_to = $request->assign_to;
        $task->progress = $request->progress;
        $task->save();

        // \App\Task::create($request->all());
         //dd($request->id_project);
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'create data task');
        return redirect('task/'.$id)->with('sukses','Data berhasil diinput');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $task = \App\Task::find($id);   
        $user = User::all();
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'on edit data task');
        return view('project.task.edit', compact('task', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = new Task();
        $task->id_project = $id;
        //
        $task = \App\Task::find($id);
        $task->update($request->all());

        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'update data task');
        return redirect('task/'.$id)->with('sukses','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        $task = \App\Task::find($id);
        $task->delete();

        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'delete data task');
        return redirect('/task')->with('sukses','Data berhasil dihapus');
    }

    public function export() 
    {
        return Excel::download(new TaskExport, 'Task.xlsx');
    }
}
