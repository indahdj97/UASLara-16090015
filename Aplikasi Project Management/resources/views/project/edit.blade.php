@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Data Project</h3>       
                        </div>
                        <div class="panel-body">
                            <form action="/project/{{$project->id}}/update" method="POST">
                            {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Instansi</label>
                                    <input name="nama_instansi" value="{{$project->nama_instansi}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama project">      
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Project</label>
                                    <input name="nama_project" value="{{$project->nama_project}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama instansi">      
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Mulai</label>
                                    <input name="tgl_mulai" value="{{$project->tgl_mulai}}" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="agama">      
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Akhir</label>
                                    <input name="tgl_akhir" value="{{$project->tgl_akhir}}" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="agama">      
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Pilih Status</label>
                                    <select name="status_project" class="form-control" id="exampleFormControlSelect1">
                                        <option value="New" @if($project->status_project == 'New') selected @endif>New</option>
                                        <option value="Pending" @if($project->status_project == 'Pending') selected @endif>Pending</option>
                                        <option value="Completed" @if($project->status_project == 'Completed') selected @endif>Completed</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-warning">Update</button>
                                    <a href="/project" type="button" class="btn btn-danger" >Batal</a>
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


