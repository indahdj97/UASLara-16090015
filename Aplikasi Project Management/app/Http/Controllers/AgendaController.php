<?php

namespace App\Http\Controllers;

use App\Helpers\Log;
use Auth;
use App\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'on agenda');
        $data_agenda = \App\Agenda::all();
        return view('agenda.index', ['data_agenda' => $data_agenda]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create(Request $request)
    {
        //
        $this->validate($request,[
            'judul' => 'required|min:10',
            'peserta' => 'required|min:5',
            'lokasi' => 'required|min:10',
          ]);
          
        \App\Agenda::create($request->all());
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'create data agenda');
        return redirect('/agenda')->with('sukses','Data berhasil diinput');
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
     * @param  \App\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(Agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $agenda = \App\Agenda::find($id);
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'on edit agenda');
        return view('agenda.edit',['agenda' => $agenda]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $this->validate($request,[
            'judul' => 'required|min:10',
            'peserta' => 'required|min:5',
            'lokasi' => 'required|min:10',
          ]);

        $agenda = \App\Agenda::find($id);
        $agenda->update($request->all());

        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'update data agenda');
        return redirect('/agenda')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
        //
        $agenda = \App\Agenda::find($id);
        $agenda->delete();

        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'delete data agenda');
        return redirect('/agenda')->with('sukses','Data berhasil dihapus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agenda $agenda)
    {
        //
    }
}
