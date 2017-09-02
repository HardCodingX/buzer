@extends('layouts.main')

@section('content')
  <div class="container">
      <div class="content">
          <div class="title">Buzer</div>

          @foreach ($rutas as $ruta)
            <a class="home_image" href="/scheduls/{{ $ruta->id }}">
              <img src="/images/ruta_{{ $ruta->id }}.jpeg" />
              <p>{{ $ruta->destino }}</p>
            </a>
          @endforeach

      </div>
  </div>
@endsection
