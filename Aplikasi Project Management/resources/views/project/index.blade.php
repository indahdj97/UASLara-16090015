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
                            <li class="active"><a href="/project">Daftar Project</a></li>
                        </ol>
                    </ul>
				</div>
			</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
						<div class="panel-heading">
                            <h3 class="panel-title">Daftar Project</h3>    
                                 
                        </div>
                        <div class="panel-body">
                            <a class="fa fa-plus-square" data-toggle="modal" data-target="#exampleModal">Tambah </a>&nbsp&nbsp&nbsp 
                            <a href="/project/export" class="lnr lnr-download" >Excel </a> 
                        @if(count($data_project) > 0)
                            <table class="table table-hover">
								<thead>
									<tr>
                                    <th>No</th>
                                        <th>Nama Instansi</th>
                                        <th>Nama Project</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Akhir</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
									</tr>
								</thead>
								<tbody>
                                <?php $i = 0 ?>
                                 @foreach($data_project as $project)
                                    <tr>
                                    <td>{{ ++$i }}</td>
                                        <td>{{$project->nama_instansi}}</td>
                                        <td>{{$project->nama_project}}</td>
                                        <td>{{$project->tgl_mulai}}</td>
                                        <td>{{$project->tgl_akhir}}</td>
                                        <td>{{$project->status_project}}</td>
                                        <td>
                                            <a href="/task/{{$project->id}}" class="fa fa-random">Task</a>&nbsp&nbsp&nbsp
                                            <a href="/project/{{$project->id}}/edit" class="lnr lnr-pencil">Edit</a>&nbsp&nbsp&nbsp
                                            <a href="/project/{{$project->id}}/delete" class="lnr lnr-trash" onclick="return confirm('Yakin Ingin Menghapus??')">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
								</tbody>
							</table>
                            @else
			                    <p>Tidak ada data user.</p>
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
                    <h5 class="modal-title" id="exampleModalLabel">Input Data Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/project/create" method="POST">
                    {{csrf_field()}}
                        <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Instansi</label>
                                    <input name="nama_instansi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama instansi">      
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Project</label>
                                    <input name="nama_project"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama project">      
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Mulai</label>
                                    <input name="tgl_mulai"  type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >      
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Akhir</label>
                                    <input name="tgl_akhir"  type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >      
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Pilih Status</label>
                                    <select name="status_project" class="form-control" id="exampleFormControlSelect1">
                                        <option value="New" >New</option>
                                        <option value="Pending" >Pending</option>
                                        <option value="Completed">Completed</option>
                                    </select>
                                </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    
                    </form>
                </div>
                </div>
            </div>
@stop

            





