 @include('inc.header')
	<div class="container">
		<div class="row">
			<legend><br>Solicitud de citas:</legend>
			<div class="row">
				<div class="col-md-30 col-lg-30">
					@if(session('info'))
						<div class="alert alert-success">
							{{session('info')}}
						</div>	
					@endif
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Edad</th>
						<th>Telefono</th>
						<th>Razón</th>
						<th>Correo</th>
						<th>Departamento</th>
						<th>Fecha</th>
						<th>Doctor</th>
						<th>Duración de cita</th>
						<th width="280px">Action</th>
					</tr>
				</thead>
				<tbody>
					@if(count($articles) > 0)
						@foreach($articles->all() as $article)
						<tr>
							<td>{{ $article->id }}</td>
							<td>{{ $article->nombre }}</td>
							<td>{{ $article->edad }}</td>
							<td>{{ $article->telefono }}</td>
							<td>{{ $article->razon }}</td>
							<td>{{ $article->email }}</td>
							<td>{{ $article->departamento }}</td>
							<td>{{ $article->fecha }}</td>
							<td>{{ $article->doctor }}</td>
							<td>{{ $article->tiempo }}</td>
							<td>
								<a href='{{ url("/read/{$article->id}") }}' class="btn btn-primary">Read</a> |
								<a href='{{ url("/update/{$article->id}") }}' class="btn btn-success">Update</a> |
								<a href='{{ url("/delete/{$article->id}") }}' class="btn btn-danger"  onclick="return confirm('Are you sure you want to delete this item?');">Delete</a> 
							</td>
						</tr>
						@endforeach
					@endif
				</tbody>
			</table>
		</div>
	</div>
@include('inc.footer')