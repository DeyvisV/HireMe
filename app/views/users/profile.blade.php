@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Edita tu perfil</h1>

            {{ Form::model($candidate, ['route' => 'update_profile', 'method' => 'PUT', 'role' => 'form', 'novalidate']) }}

                <div class="form-group">
                    {{ Form::label('website_url', 'Url del Sitio') }}
                    {{ Form::url('website_url', null, ['class' =>'form-control']) }}
                    {{ $errors->first('website_url', '<p class="error_message">:message</p>') }}
                </div>

                <div class="form-group">
                    {{ Form::label('description', 'Descripción') }}
                    {{ Form::textarea('description', null, ['class' =>'form-control']) }}
                    {{ $errors->first('description', '<p class="error_message">:message</p>') }}
                </div>

                <div class="form-group">
                    {{ Form::label('job_type', 'Tipo de Trabajo') }}
                    {{ Form::select('job_type', $job_types, null, ['class' =>'form-control']) }}
                    {{ $errors->first('job_type', '<p class="error_message">:message</p>') }}
                </div>
                
                <div class="form-group">
                    {{ Form::label('category_id', 'Categoria') }}
                    {{ Form::select('category_id', $categories, null, ['class' =>'form-control']) }}
                    {{ $errors->first('category_id', '<p class="error_message">:message</p>') }}
                </div>


                <div class="form-group">
                    {{ Form::label('available', 'Disponible') }}
                    {{ Form::checkbox('available') }}
                    {{ $errors->first('available', '<p class="error_message">:message</p>') }}
                </div>

                <p>
                    <input type="submit" value="Guardar perfil" class="btn btn-success">
                </p>

            {{ Form::close() }}

        </div>
    </div>
</div>

@endsection