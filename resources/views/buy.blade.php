@extends('layouts.main')

@section('content')
  <div class="container">
    <div class="content">
      <div class="panel panel-primary">
        <div class="panel-heading">Compra tu asiento</div>
        @if ($isBuyed)
          <p>Ya tienes reservado este asiento</p>
        @else
          <p>Número: <bold>{{ $sit->numero }}</bold></p>

          <p>Opciones de pago</p>

          <a href="/buy/{{ $sit->id }}/confirm/tc">Tarjeta de credito</a>
          <a href="/buy/{{ $sit->id }}/confirm/pp">Pay Pal</a>
          <a href="/buy/{{ $sit->id }}/confirm">Oxxo</a>
        @endif
      </div>
    </div>
  </div>
@endsection
