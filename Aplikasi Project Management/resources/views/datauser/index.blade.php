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
                            <li class="active"><a href="/user">Data User</a></li>
                        </ol>
                    </ul>
				</div>
			</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
						<div class="panel-heading"> 
                            <h3 class="panel-title">Data User</h3>
                        </div>
                        <div class="panel-body">
                            <a class="fa fa-plus-square" data-toggle="modal" data-target="#exampleModal" > Tambah </a>
                        @if(count($data_user) > 0)
                            <table class="table table-hover" >
								<thead>
									<tr>
                                    <th>No</th>
                                        <th>Nama</th>    
                                        <th>Email </th>
                                        <th>Alamat</th>
                                        <th>Telpon</th>
                                        <th>Aksi</th>
									</tr>
								</thead>
								<tbody>
                                <?php $i = 0 ?>
                                 @foreach($data_user as $user)
                                    <tr>
                                    <td>{{ ++$i }}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->alamat}}</td>
                                        <td>{{$user->telpon}}</td>
                                        <td>
                                            <a href="/user/{{$user->id}}/edit" class="lnr lnr-pencil">Edit</a>&nbsp&nbsp&nbsp
                                            <a href="/user/{{$user->id}}/delete" class="lnr lnr-trash" onclick="return confirm('Yakin Ingin Menghapus??')">Hapus</a>
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
                    <h5 class="modal-title" id="exampleModalLabel">Input Data User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/user/create" method="POST">
                    {{csrf_field()}}
                    <div class="form-group{{$errors->has('name') ? ' has-error': ''}}">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input name="name" value="{{old('name')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama lengkap">      
                        @if($errors->has('name'))
                            <span class="help-block">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('email') ? ' has-error': ''}}">
                        <label for="exampleInputEmail1">Email</label>
                        <input name="email"  value="{{old('email')}}" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">      
                        @if($errors->has('email'))
                            <span class="help-block">{{$errors->first('email')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('password') ? ' has-error': ''}}">
                        <label for="exampleInputEmail1">Password</label>
                        <input name="password" value="{{old('password')}}" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="password">      
                        @if($errors->has('password'))
                            <span class="help-block">{{$errors->first('password')}}</span>
                        @endif
                    </div>
                    
                    <div class="form-group{{$errors->has('telpon') ? ' has-error': ''}}">
                        <label for="exampleInputEmail1">Telpon</label>
                        <input name="telpon" value="{{old('telpon')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="telpon">     
                        @if($errors->has('telpon'))
                            <span class="help-block">{{$errors->first('telpon')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('alamat') ? ' has-error': ''}}">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="alamat">{{old('alamat')}}</textarea>
                        @if($errors->has('alamat'))
                            <span class="help-block">{{$errors->first('alamat')}}</span>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/user" type="button" class="btn btn-danger" >Batal</a>
                    </form>
                </div>
                </div>
            </div>
@stop

            





