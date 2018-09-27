<div class="form-group">
	{!! Form::label('name', 'Nombre'); !!}
	{!! Form::text('nombre', null, ['class' => 'form-control']); !!}
</div>
<div class="form-group">
	{!! Form::label('name', 'Descripción'); !!}
	{!! Form::textArea('descripcion', null, ['class' => 'form-control']); !!}
</div>
<div class="form-group">
	{!! Form::label('name', 'Avatar'); !!}
	{!! Form::file('avatar'); !!}
</div>
<div class="form-group">
	{!! Form::label('name', 'Slug'); !!}
	{!! Form::text('slug', null, ['class' => 'form-control']); !!}
</div>