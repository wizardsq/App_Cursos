@extends('adminlte::page')

@section('title', 'CURSOS FITEC')

@section('content_header')
    <h1>Crear nuevo Role</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.roles.store']) !!}
               
                @include('admin.roles.partials.form')

                @error('permissions')
                <small class="text-danger">
                    <strong>{{$message}}</strong>
                </small>
                <br>
            @enderror
            
                {!! Form::submit('Crear role', ['class' => 'btn btn-primary mt-2']) !!}
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