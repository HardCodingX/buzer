@extends('layouts.main')

@section('content')
  <div class="container">
      <div class="content">
          <div class="title">Asientos</div>

          <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading"> {{ $route[0]->origen }} a {{ $route[0]->destino }} - {{ $route[0]->hora_salida }} - {{ $route[0]->precio }}</div>

            <!-- Table -->
            <table class="table table-striped">
              @foreach ($sits as $sit)
                <tr>
                  <td><a class="btn btn-primary" href="/buy/{{ $sit->id }}">Comprar</a></td>
                  <td><span class="badge">{{ $sit->numero }}</span></td>
                </tr>
              @endforeach
            </table>
          </div>


      </div>
  </div>
@endsection
