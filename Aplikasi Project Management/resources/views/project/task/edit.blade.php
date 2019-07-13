@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Task</h3>       
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('update-task', Request::segment(2)) }}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                    <label for="exampleFormControlSelect1">Assign To</label>
                                    <select name="assign_to" class="form-control" id="exampleFormControlSelect1">
                                    <?php foreach($user as $u) { ?>
                                        <?php if($u->id == $task->assign_to) { ?>
                                        <option value="<?php echo $u->id ?>" selected ><?php echo $u->name ?></option>
                                        <?php } ?>
                                    <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Judul</label>
                                    <input name="judul" value="{{$task->judul}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="judul">      
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$task->deskripsi}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Mulai</label>
                                    <input name="tgl_mulai" value="{{$task->tgl_mulai}}" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >      
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Akhir</label>
                                    <input name="tgl_akhir" value="{{$task->tgl_akhir}}" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">      
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Progress</label>
                                    <input name="progress" value="{{$task->progress}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">      
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


