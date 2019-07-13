<?php

namespace App\Http\Controllers;

use Hash;
use Auth;
use App\User;
use App\Helpers\Log;
use Illuminate\Http\Request;

class MemberController extends Controller
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
        $data_user = \App\User::all();

        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'on data user');
        return view('datauser.index', ['data_user' => $data_user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'name' => 'required|alpha|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'alamat' => 'required|alpha_num',
            'telpon' => 'required|numeric|unique:users'
          ]);
        
        $input['password'] = Hash::make($request->password);
        User::create($input);
        
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'create data user');
        return redirect('/user')->with('sukses','Data berhasil diinput');
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
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = \App\User::find($id);

        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'on edit data user');
        return view('datauser.edit',['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|alpha|min:5',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'alamat' => 'required|alpha_num',
            'telpon' => 'required|numeric'
          ]);
        $user = \App\User::find($id);
        $user->update($request->all());

        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'update data user');
        return redirect('/user')->with('sukses','Data berhasil diupdate');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */

    public function delete($id)
    {
        //
        $user = \App\User::find($id);
        $user->delete();
        return redirect('/user')->with('sukses','Data berhasil dihapus');
    }
    public function destroy(User $user)
    {
        //
    }

}
