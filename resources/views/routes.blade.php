@extends('layouts.main')

@section('content')
  <div class="container">
      <div class="content">
          <div class="title">Rutas</div>

          <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading">Nuevas rutas</div>

            <!-- Table -->
            <table class="table table-striped">
              @foreach ($main_routes as $route)
                <tr>
                  <td><a class="btn btn-primary" href="/scheduls/{{ $route->id }}">Comprar</a></td>
                  <td>{{ $route->origen }}</td>
                  <td>{{ $route->destino }}</td>
                  <td><span class="badge">{{ $route->duracion }}</span></td>
                </tr>
              @endforeach
            </table>
          </div>


      </div>
  </div>
@endsection
