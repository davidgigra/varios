
@extends('layaouts.app')

@section('title', 'Entrenadores')

@section('content')
	<div class="row">	
		@foreach($trainers as $trainer)	
				<div class="col-sm">
					<div class="form-group">
						<div class="card text-center" style="width: 18rem; margin-top: 50px;">
							 <img style="height: 100px; margin: 20px; width: 100px; background-color: #efefef" class="card-img-top rounded-circle mx-auto d-block" src="images/{{ $trainer->avatar }}" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">{{ $trainer->nombre }}</h5>
								<p class="card-text">{{ $trainer->descripcion }}</p>
								<a href="/trainers/{{ $trainer->slug }}" class="btn btn-primary">Ver Entrenador</a>
							</div>
						</div>
					</div>
				</div>
		@endforeach
	</div>
@endsection
