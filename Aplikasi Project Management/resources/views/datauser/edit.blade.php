@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Data User</h3>       
                        </div>
                        <div class="panel-body">
                            <form action="/user/{{$user->id}}/update" method="POST">
                            {{csrf_field()}}
                                <div class="form-group{{$errors->has('name') ? ' has-error': ''}}">
                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                    <input name="name" value="{{$user->name}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama lengkap">      
                                    @if($errors->has('nama_lengkap'))
                                        <span class="help-block">{{$errors->first('nama_lengkap')}}</span>
                                    @endif
                                </div>
                                <div class="form-group{{$errors->has('email') ? ' has-error': ''}}">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input name="email" value="{{$user->email}}" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">      
                                    @if($errors->has('email'))
                                        <span class="help-block">{{$errors->first('email')}}</span>
                                    @endif
                                </div>
                                <div class="form-group{{$errors->has('password') ? ' has-error': ''}}">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input name="password" value="{{$user->password}}" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="password">      
                                    @if($errors->has('password'))
                                        <span class="help-block">{{$errors->first('password')}}</span>
                                    @endif
                                </div>
                                
                                <div class="form-group{{$errors->has('telpon') ? ' has-error': ''}}">
                                    <label for="exampleInputEmail1">Telpon</label>
                                    <input name="telpon" value="{{$user->telpon}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="telpon">      
                                    @if($errors->has('telpon'))
                                        <span class="help-block">{{$errors->first('telpon')}}</span>
                                    @endif
                                </div>
                                <div class="form-group{{$errors->has('alamat') ? ' has-error': ''}}">
                                    <label for="exampleFormControlTextarea1">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$user->alamat}}</textarea>
                                    @if($errors->has('alamat'))
                                        <span class="help-block">{{$errors->first('alamat')}}</span>
                                    @endif
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-warning">Update</button>
                                    <a href="/user" type="button" class="btn btn-danger" >Batal</a>
                            </form>
                                </div> 
                        </div>
                    </div>        
                </div>
            </div>
        </div>
    </div>
</div>
@stop



