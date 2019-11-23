@extends('layouts.master')		
@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container">
				<div class="container-fluid	">
					<div class="row">
						<div class="col-md-12">					
							<div class="panel">
								<!-- BASIC TABLE -->
								<div class="panel-heading">
									<h3 class="panel-title">Data Calas</h3>
								  	 								
									 @if (session('status'))
									    <div class="alert alert-success">
									        {{ session('status') }}
									    </div>
								 	 @endif	 
								</div>
									<div class="panel-body">
									<table class="table" id="data_table">
										<thead>
											<tr>
												<th>No</th>
												<th>NPM</th>
												<th>Nama</th>
												<th>Kelas</th>
												<th>Jurusan</th>
												<th>Fakultas</th>
												<th>Alamat</th>
												<th>Nomor Telepon</th>
												<th>KRS</th>
												<th>Avatar</th>
												<th>Status</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											@foreach($calas as $c)
											<tr>
												<td>{{$loop->iteration}}</td>
												<td>{{$c->npm}}</td>
												<td>{{$c->nama}}</td>
												<td>{{$c->kelas}}</td>
												<td>{{$c->jurusan}}</td>
												<td>{{$c->fakultas}}</td>
												<td>{{$c->alamat}}</td>
												<td>{{$c->nomor_telepon}}</td>
												<td><img src="{{ url($c->krs) }}" width="50px"></td>
												<td><img src="{{ url($c->avatar) }}" width="50px"></td>
												<td>{{$c->status_kelulusan}}</td>
												<td>
													<a href="calas/{{$c->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
													<!-- <a href="/calas/{{$c->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('yakin mau dihapus?')">Delete</a> -->
													
												</td>
											
											</tr>
											@endforeach
										</tbody>
									</table>
									
							</div>
							<!-- END BASIC TABLE -->
						</div>
						</div> 	
					</div>
				</div>
			</div>
		</div>
	</div>

	
@stop

@section('footer')
<script>
	$(document).ready(function(){
		$('#data_table').DataTable()
	});
</script>
@stop
