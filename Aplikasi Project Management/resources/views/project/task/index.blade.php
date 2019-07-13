@extends('layouts.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
        <div class="row">
		        <div class="col-md-12">
                    <ul class="nav navbar-right">
                        <ol class="breadcrumb">
                            <li><a href="/"><i class="lnr lnr-home"></i> Dashboard</a></li>
                            <li><a href="/project"><i class="lnr lnr-dice"></i>Daftar Project</a></li>
                            <li class="active"><a href="/task">Task</a></li>
                        </ol>
                    </ul>
				</div>
			</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
						<div class="panel-heading">
                            
                            <h1 class="panel-title">Task</h1> 
                            
                        </div>
                        <div class="panel-body">
                            <a id="project" value="{{ Request::segment(2) }}" class="fa fa-plus-square" data-toggle="modal" data-target="#exampleModal" > Tambah </a>&nbsp&nbsp&nbsp
                            <!--<a href="/task/export" class="lnr lnr-download" >Excel </a> -->
                        @if(count($data_task) > 0)
                            <table class="table table-hover">
                            
								<thead>
									<tr>
                                    <th>No</th>
                                        <th>Assign To</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Akhir</th>
                                        <th>Progress</th>
                                        <th>Aksi</th>
									</tr>
								</thead>
								<tbody>
                                <?php $i = 0 ?>
                                 @foreach($data_task as $task)
                                    <tr>
                                    <td>{{ ++$i }}</td>
                                        <td>{{$task->user->name}}</td>
                                        <td>{{$task->judul}}</td>
                                        <td>{{$task->deskripsi}}</td>
                                        <td>{{$task->tgl_mulai}}</td>
                                        <td>{{$task->tgl_akhir}}</td>
                                        <td>{{$task->progress}}</td>
                                        <td>
                                            <a href="/task/{{$task->id}}/edit" class="lnr lnr-pencil">Edit</a>&nbsp&nbsp&nbsp
                                            <a href="/task/{{$task->id}}/delete" class="lnr lnr-trash" onclick="return confirm('Yakin Ingin Menghapus??')">Hapus</a></td>
                                    </tr>
                                @endforeach
								</tbody>
							</table>
                            @else
			                    <p>Tidak ada data task.</p>
		                    @endif
						</div>
				    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('create-task', Request::segment(2)) }}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" id="hidden">
                    <div class="form-group">
                                    <label for="exampleFormControlSelect1">Assign To</label>
                                    <select name="assign_to" class="form-control" id="exampleFormControlSelect1">
                                    <?php foreach($user as $u) { ?>
                                        <option value="<?php echo $u->id ?>" ><?php echo $u->name ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Judul</label>
                                    <input name="judul"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="judul">      
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="deskripsi"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Mulai</label>
                                    <input name="tgl_mulai"  type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">      
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Akhir</label>
                                    <input name="tgl_akhir"  type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">      
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Progress</label>
                                    <input name="progress" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan angka 0 s/d 100">      
                                </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    
                    </form>
                </div>
                </div>
            </div>
<script>


$("#project").on('click',function(e) {
    e.preventDefault();
    console.log(this.value); // or alert($(this).attr('id'));
});


</script>
@stop



            





