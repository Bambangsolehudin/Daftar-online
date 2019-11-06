@extends('layouts.frontend')

@section('content')
<section class="banner-area relative about-banner" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Pendaftaran	
							</h1>
							<p class="text-white link-nav"><a href="index.html"> Home |</a> <span class="inr inr-arrow-right"></span> <a href="about.html">
								Pendaftaran
							</a></p>
							
						</div>										
					</div>
				</div>					
			</section>
<section class="search-course-area relative"  style="background: unset;">
				
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-5 col-md-6 search-course-left">
							<h1 class="">
								Pendaftaran Online Aslab Manajemen<br>
								
							</h1>
							<p>
								jurgen blackpink jurgen blackpink jurgen blackpink jurgen blackpink jurgen blackpinkjurgen blackpinkjurgenjurgen blackpink jurgen blackpinkjurgen blackpink
							</p>
							
						</div>
						<div class="col-lg-5 col-md-6 search-course-right section-gap">
							<form class="form-wrap" action="/postregister" method="post" enctype="multipart/form-data">
								@csrf
								<h4 class="text-white pb-20 text-center mb-30">Search for Available Course</h4>	
								<input type="text" class="form-control" name="npm" placeholder="Masukan NPM">	
								<input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
								<input type="text" class="form-control" name="kelas" placeholder="Masukan kelas">
								<input type="text" class="form-control" name="jurusan" placeholder="Masukan jurusan">	
								<input type="text" class="form-control" name="fakultas" placeholder="Masukan fakultas">
								<input type="text" class="form-control" name="alamat" placeholder="Masukan alamat">
								<input type="text" class="form-control" name="nomor_telepon" placeholder="Masukan nomor telepon">
								<label>Masukan KRS</label>
								<input type="file" class="form-control" name="krs">
								<label>Masukan Photo</label>
								<input type="file" class="form-control" name="avatar">
								<hr>
								<br>

								
								<input type="email" class="form-control" name="email" placeholder="Masukan email">
								<input type="password" class="form-control" name="password" placeholder="password">

																
								<button class="primary-btn text-uppercase">Submit</button>
							</form>

						</div>
					</div>
				</div>	
			</section>
@stop