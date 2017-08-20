@extends('layouts.main')

@section('content')
  <div class="container">
      <div class="content">
          <div class="title">Sits</div>

          <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Sits</div>

            <!-- Table -->
            <table class="table">
              @foreach ($sits as $sit)
                <tr>
                  <td><a href="/buy/{{ $sit->id }}">{{ $sit->id }}</a></td>
                  <td>{{ $sit->numero }}</td>
                  <td>Comprar</td>
                </tr>
              @endforeach
            </table>
          </div>


      </div>
  </div>
@endsection
