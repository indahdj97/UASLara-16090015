<?php

namespace App\Http\Controllers;

use App\Exports\ProjectExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Project;
use App\Helpers\Log;
use Auth;
use Illuminate\Http\Request;

class ProjectController extends Controller
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
    
    public function index()
    {
        //
       // $data_project = Project::orderBy('id')->pagination(10);
       $data_project = \App\Project::all();

       Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'on daftar project');
        return view('project.index', ['data_project' => $data_project]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        \App\Project::create($request->all());

        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'create data project');
        return redirect('/project')->with('sukses','Data berhasil diinput');
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
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $project = \App\Project::find($id);

        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'on edit data project');
        return view('project.edit',['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $project = \App\Project::find($id);
        $project->update($request->all());

        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'update data project');
        return redirect('/project')->with('sukses','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */

    public function delete($id)
    {
        //
        $project = \App\Project::find($id);
        $project->delete();

        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'delete data project');
        return redirect('/project')->with('sukses','Data berhasil dihapus');
    }
    public function task($id)
    {
        //
        $project = \App\Project::find($id);

        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'on task');
        return view('project.task.index', ['data_task' => $data_task]);
    }

    public function export() 
    {
        return Excel::download(new ProjectExport, 'Project.xlsx');
    }
}
