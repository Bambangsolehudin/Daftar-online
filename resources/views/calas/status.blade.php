@extends('layouts.master')		
@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container">
				<div class="container-fluid	">
					<div class="row">
						<div class="col-md-10">					
							<div class="panel">
								<!-- BASIC TABLE -->
								<div class="panel-heading">
									<h3 class="panel-title">STATUS KELULUSAN</h3>
								  	 
								</div>
									<div class="panel-body">
									
									<h4>{{auth()->user()->calas->status_kelulusan}}</h4>
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
