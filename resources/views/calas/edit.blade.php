@extends('layouts.master')		

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container">
				<div class="container-fluid	">
					<div class="row">
						<div class="col-md-10">					
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Data Siswa</h3>
								</div>
								<div class="panel-body">
									<form action="/calas/{{$calas->id}}/update" method="post" enctype="multipart/form-data">
				        				@csrf
				        				<label for="exampleInputEmail1" >NPM</label>
						                <input type="text" class="form-control"  placeholder="NPM" name="npm" value="{{$calas->npm}}" readonly=""> <br>
										
										<label for="exampleInputEmail1">Nama</label>
						    			<input type="text" class="form-control" placeholder="Nama" name="nama" value="{{$calas->nama}}" readonly=""> <br>

										<label for="exampleInputEmail1">Kelas</label>
						    			<input type="text" class="form-control" placeholder="Kelas" name="kelas" value="{{$calas->kelas}}" readonly=""> <br>

						    			<label for="exampleInputEmail1">jurusan</label>
						    			<input type="text" class="form-control" placeholder="jurusan" name="jurusan" value="{{$calas->jurusan}}" readonly=""> <br>
						    			
						    			<label for="exampleInputEmail1">jurusan</label>
						    			<input type="text" class="form-control" placeholder="jurusan" name="jurusan" value="{{$calas->jurusan}}" readonly=""> <br>

						    			<label for="exampleInputEmail1">fakultas</label>
						    			<input type="text" class="form-control" placeholder="fakultas" name="fakultas" value="{{$calas->fakultas}}" readonly=""> <br>

						    			<label for="exampleInputEmail1">alamat</label>
						    			<input type="text" class="form-control" placeholder="alamat" name="alamat" value="{{$calas->alamat}}" readonly=""> <br>

						    			<label for="exampleInputEmail1">nomor_telepon</label>
						    			<input type="text" class="form-control" placeholder="nomor_telepon" name="nomor_telepon" value="{{$calas->nomor_telepon}}" readonly=""> <br>

						    			<label for="exampleForControlSelect1">Pilih Status</label>
										<select class="form-control" name="status_kelulusan">
							  			<option value="Lulus" @if($calas->status_kelulusan=='Lulus') selected @endif>Lulus</option>
							  			<option value="Tidak Lulus" @if($calas->status_kelulusan=='Tidak Lulus') selected @endif>Tidak Lulus</option>
							  			<option value="Tidak Ada Status" @if($calas->status_kelulusan=='Tidak Ada Status') selected @endif>Tidak Ada Status</option>
							  	 	
										</select> <br>

						   				<button type="submit" class="btn btn-warning">Update</button>
					      
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