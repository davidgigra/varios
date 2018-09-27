
@extends('layaouts.app')

@section('title', 'Crear Entrenador')

@section('content')
	@include('common.errors')

	{!! Form::open(['route' => 'trainers.store', 'method' => 'POST', 'files' => true]) !!}
		
		@include('trainers.form')

		{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}
	{!! Form::close(); !!}
@endsection