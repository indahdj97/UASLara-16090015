@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Data Agenda</h3>       
                        </div>
                        <div class="panel-body">
                            <form action="/agenda/{{$agenda->id}}/update" method="POST">
                            {{csrf_field()}}
                                <div class="form-group{{$errors->has('judul') ? ' has-error': ''}}">
                                    <label for="exampleInputEmail1">Judul</label>
                                    <input name="judul" value="{{$agenda->judul}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="judul">      
                                    @if($errors->has('judul'))
                                        <span class="help-block">{{$errors->first('judul')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$agenda->deskripsi}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal</label>
                                    <input name="tanggal" value="{{$agenda->tanggal}}" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tanggal">      
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jam Mulai</label>
                                    <input name="jam_mulai" value="{{$agenda->jam_mulai}}" type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jam_mulai">      
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jam Selesai</label>
                                    <input name="jam_selesai" value="{{$agenda->jam_selesai}}" type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jam_selesai">      
                                </div>
                                <div class="form-group{{$errors->has('peserta') ? ' has-error': ''}}">
                                    <label for="exampleInputEmail1">Peserta</label>
                                    <input name="peserta" value="{{$agenda->peserta}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="peserta">      
                                    @if($errors->has('peserta'))
                                        <span class="help-block">{{$errors->first('peserta')}}</span>
                                    @endif
                                </div>
                                <div class="form-group{{$errors->has('lokasi') ? ' has-error': ''}}">
                                    <label for="exampleInputEmail1">Lokasi</label>
                                    <input name="lokasi" value="{{$agenda->lokasi}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="lokasi">      
                                    @if($errors->has('lokasi'))
                                        <span class="help-block">{{$errors->first('lokasi')}}</span>
                                    @endif
                                </div>
                                
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-warning">Update</button>
                                    <a href="/agenda" type="button" class="btn btn-danger" >Batal</a>
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


