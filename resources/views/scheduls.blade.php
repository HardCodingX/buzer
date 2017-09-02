@extends('layouts.main')

@section('content')
  <div class="container">
      <div class="content">
          <div class="title">Salidas</div>


          <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading">{{ $route[0]->origen }} a {{ $route[0]->destino }} - {{ $route[0]->duracion }}</div>

            <!-- Table -->
            <table class="table table-striped">
              @foreach ($schedul as $exit)
                <tr>
                  <td><a class="btn btn-primary" href="/sits/{{ $exit->id }}">Comprar</a></td>
                  <td>{{ $exit->hora_salida }}</td>
                  <td><span class="badge">${{ $exit->precio }}</span></td>
                </tr>
              @endforeach
            </table>
          </div>
      </div>
  </div>
@endsection
