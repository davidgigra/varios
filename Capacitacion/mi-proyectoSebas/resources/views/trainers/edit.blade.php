
@extends('layaouts.app')

@section('title', 'Editar Entrenador')

@section('content')
	{!! Form::model($trainer,['route' => ['trainers.update', $trainer], 'method' => 'PUT', 'files' => true] ) !!}

		@include('trainers.form')
		
		{!! Form::submit('Editar',['class' => 'btn btn-primary']) !!}
	{!! Form::close(); !!}
@endsection