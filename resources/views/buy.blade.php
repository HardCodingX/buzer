@extends('layouts.main')

@section('content')
  <div class="container">
      <div class="content">
          <div class="title">Sits</div>

          <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Sits</div>

            <!-- Table -->

            <p>Número: <bold>{{ $sit->numero }}</bold></p>

            <a href="/buy/{{ $sit->id }}/confirm">Comprar</a>
          </div>


      </div>
  </div>
@endsection
