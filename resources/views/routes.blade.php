@extends('layouts.main')

@section('content')
  <div class="container">
      <div class="content">
          <div class="title">Rutas</div>

          <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Panel heading</div>

            <!-- Table -->
            <table class="table">
              @foreach ($main_routes as $route)
                <tr>
                  <td><a href="/scheduls/{{ $route->id }}">{{ $route->id }}</a></td>
                  <td>{{ $route->origen }}</td>
                  <td>{{ $route->destino }}</td>
                  <td>{{ $route->duracion }}</td>
                </tr>
              @endforeach
            </table>
          </div>


      </div>
  </div>
@endsection
