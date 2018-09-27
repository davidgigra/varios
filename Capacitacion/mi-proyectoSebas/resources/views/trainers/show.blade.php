
@extends('layaouts.app')

@section('title', 'Entrenador')

@section('content')
	@include('common.succes')
	<img style="height: 100px; margin: 20px; width: 100px; background-color: #efefef" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{ $trainer->avatar }}" alt="Card image cap">
	<div class="text-center">
		<h5 class="card-title">{{ $trainer->nombre }}</h5>
		<p class="card-text">{{ $trainer->descripcion }}</p>
		<a href="/trainers/{{ $trainer->slug }}/edit" class="btn btn-primary">Editar</a>
		{!! Form::open([ 'route' => ['trainers.destroy', $trainer->slug], 'method' => 'DELETE' ]) !!}
			{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
		{!! Form::close() !!}
	</div>
@endsection
