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
                            <li class="active"><a href="/agenda">Agenda</a></li>
                        </ol>
                    </ul>
				</div>
			</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
						<div class="panel-heading">
                            <h3 class="panel-title">Agenda</h3> 
                            <div class="right">
                            <a class="fa fa-plus-square" data-toggle="modal" data-target="#exampleModal" > Tambah </a>
                            </div>
                        </div>
                        <div class="panel-body">
                        @if(count($data_agenda) > 0)
                            <table class="table table-hover">
								<thead>
									<tr>
                                    <th>No</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Tanggal</th>
                                        <th>Jam</th>
                                        <th>Peserta</th>
                                        <th>Lokasi</th>
                                        <th>Aksi</th>
									</tr>
								</thead>
								<tbody>
                                <?php $i = 0 ?>
                                 @foreach($data_agenda as $agenda)
                                    <tr>
                                    <td>{{ ++$i }}</td>
                                        <td>{{$agenda->judul}}</td>
                                        <td>{{$agenda->deskripsi}}</td>
                                        <td>{{$agenda->tanggal}}</td>
                                        <td>
                                        {{$agenda->jam_mulai}} s/d
                                        {{$agenda->jam_selesai}}
                                        </td>
                                         <td>{{$agenda->peserta}}</td>
                                        <td>{{$agenda->lokasi}}</td>
                                        <td>
                                            <a href="/agenda/{{$agenda->id}}/edit" class="lnr lnr-pencil">Edit</a>&nbsp&nbsp&nbsp
                                            <a href="/agenda/{{$agenda->id}}/delete" class="lnr lnr-trash" onclick="return confirm('Yakin Ingin Menghapus??')">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
								</tbody>
							</table>
                            @else
			                    <p>Tidak ada data agenda.</p>
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
                    <h5 class="modal-title" id="exampleModalLabel">Input Data Agenda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/agenda/create" method="POST">
                    {{csrf_field()}}
                        <div class="form-group{{$errors->has('judul') ? ' has-error': ''}}">
                            <label for="exampleInputEmail1">Judul</label>
                            <input name="judul"  value="{{old('judul')}}"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="judul">      
                            @if($errors->has('judul'))
                                <span class="help-block">{{$errors->first('judul')}}</span>
                            @endif
                        </div>
                            <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                                    <textarea name="deskripsi"  class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="deskripsi">{{old('deskripsi')}}</textarea>
                               
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal</label>
                                    <input name="tanggal"  value="{{old('tanggal')}}" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tanggal">      
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jam Mulai</label>
                                    <input name="jam_mulai" value="{{old('jam_mulai')}}"  type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jam_mulai">      
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jam Selesai</label>
                                    <input name="jam_selesai"  value="{{old('jam_selesai')}}" type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jam_selesai">      
                                </div>
                                <div class="form-group{{$errors->has('peserta') ? ' has-error': ''}}">
                                    <label for="exampleInputEmail1">Peserta</label>
                                    <input name="peserta" value="{{old('peserta')}}"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="peserta">      
                                    @if($errors->has('peserta'))
                                        <span class="help-block">{{$errors->first('peserta')}}</span>
                                    @endif
                                </div>
                                <div class="form-group{{$errors->has('lokasi') ? ' has-error': ''}}">
                                    <label for="exampleInputEmail1">Lokasi</label>
                                    <input name="lokasi" value="{{old('lokasi')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="lokasi">      
                                    @if($errors->has('lokasi'))
                                        <span class="help-block">{{$errors->first('lokasi')}}</span>
                                    @endif
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

            





