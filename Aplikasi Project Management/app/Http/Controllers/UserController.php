<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_user = \App\User::all();
        return view('datauser.index', ['data_user' => $data_user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $this->validate($request,[
            'nama_lengkap' => 'required|min:5|alpha',
            'email' => 'required|email|unique:users',
            'username' => 'required|min:5',
            'password' => 'required|min:8',
            'alamat' => 'required|alpha_num',
            'telpon' => 'required|numeric|unique:users'
          ]);

        \App\User::create($request->all());
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

    public function login()
    {
        //
        return view('auths.login');
    }

    public function logout()
    {
        //
        \App\User::logout();
        return redirect('/login');
    }

    public function postlogin(Request $request)
    {
        //
        if(\App\User::attempt($request->only('email', 'password'))){
            return redirect('/dashboard');
        }
        return redirect('/login');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = \App\User::find($id);
        return view('datauser.edit',['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = \App\User::find($id);
        $user->update($request->all());
        return redirect('/user')->with('sukses','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
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
