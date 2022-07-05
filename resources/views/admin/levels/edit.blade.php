@extends('adminlte::page')

@section('title', 'CURSOS FITEC')

@section('content_header')
    <h1>Editar nivel</h1>
@stop

@section('content')
    @if(session('info'))

    <div class="alert alert-success">
        {{session('info')}}
    </div>

    @endif
        {!! Form::model($level,['route' => ['admin.levels.update', $level], 'method' => 'PUT']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class'=> 'form-control', 'placeholder'=> 'Ingrese el nombre del nivel']) !!}
            @error('name')
                <span class="text-danger text-sm">{{$message}}</span>
            @enderror
        </div>

        {!! Form::submit('Actualizar Nivel',['class'=> 'btn btn-primary']) !!}
        {!! Form::close() !!}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop