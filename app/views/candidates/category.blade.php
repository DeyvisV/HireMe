@extends('layout')

@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>HireMe</h1>
        <p>Proyecto de Laravel Profesional.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Postúlate &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <h1>{{ $category->name }}</h1>

      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Tipo de trabajo</th>
            <th>Descripción</th>
            <th>Ver</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($category->paginate_candidates as $candidate)
          <tr>
            <td>{{ $candidate->user->full_name }}</td>
            <td>{{ $candidate->job_type_title }}</td>
            <td>{{ $candidate->description }}</td>
            <td width="50">
              <a href="{{ route('candidate', [$candidate->slug, $candidate->id]) }}" class="btn btn-info">
                Ver
              </a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>

      {{ $category->paginate_candidates->links() }}

    </div>

@stop