@include('inc.header')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form class="form-horizontal" method="post" action="{{ url('/insert')}}">
					{{csrf_field()}}
				  <fieldset>
					  <br>
				    <legend>Agenda tu cita aquí</legend>
				    @if(count($errors) >0 )
				    	@foreach($errors->all() as $error)
				    		<div class="alert alert-danger">
				    			{{$error}}
				    		</div>
				    	@endforeach
				    @endif
						<div class="col-lg-4 info_box_col" id="registro">
							<div class="info_form_title">Agenda tu cita aquí</div>
							<div class="info_form_container">
								<form action="#" class="info_form" id="info_form">
									<select name="info_form_dep" id="info_form_dep" class="info_form_dep info_input info_select">
										<option>Cuidado Dental</option>
										<option>Cirugía</option>
										<option>Neurología</option>
									</select>
									<select name="info_form_doc" id="info_form_doc" class="info_form_doc info_input info_select" >
										<option>Doctor</option>
										<option>Jefferson Gutierritos</option>
										<option>Alvin Yakitori</option>
									</select>
									<input type="text" class="info_input" placeholder="Nombre" >
									<input type="text" class="info_input" placeholder="Correo" >
									<input type="date" class="info_input" placeholder="Fecha"  >
									<input type="text" class="info_input" placeholder="Razón"  >
									<input type="text" class="info_input" placeholder="Telefono">
									<select name="info_form_doc" id="info_form_doc" class="info_form_doc info_input info_select">
										<option>Duración de la cita</option>
										<option>30 minutos</option>
										<option>1 Hora</option>
									</select>
								</form>
				 	</div>

				 	<div class="form-group">
				 		<div class="col-lg-10 col-lg-offset-2">
				 			<button type="submit" class="btn btn-primary">Submit</button>


				 			<a href="{{ url('/')}}" class="btn btn-primary">Back</a>
				 		</div>
				 	</div>
				  </fieldset>
				</form>
			</div>
		</div>
	</div>
@include('inc.footer')