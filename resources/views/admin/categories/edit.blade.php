@extends('adminlte::page')

@section('title', 'CURSOS FITEC')

@section('content_header')
    <h1>Editar categorias</h1>
@stop

@section('content')

    @if(session('info'))

        <div class="alert alert-success">
            {{session('info')}}
        </div>

    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($category, ['route' => ['admin.categories.update', $category], 'method' => 'PUT']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                     {!! Form::text('name', null, ['class'=> 'form-control', 'placeholder'=> 'Ingrese el nombre']) !!}
                     @error('name')
                         <span class="text-danger text-sm">{{$message}}</span>
                     @enderror
                </div>

                {!! Form::submit('Actualizar categoria',['class'=> 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop