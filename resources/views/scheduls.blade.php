@extends('layouts.main')

@section('content')
  <div class="container">
      <div class="content">
          <div class="title">Salidas {{$id}}</div>


          <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Panel heading</div>

            <!-- Table -->
            <table class="table">
              @foreach ($schedul as $exit)
                <tr>
                  <td><a href="/sits/{{ $exit->id }}">{{ $exit->id }}</a></td>
                  <td>{{ $exit->hora_salida }}</td>
                  <td>{{ $exit->precio }}</td>
                </tr>
              @endforeach
            </table>
          </div>
      </div>
  </div>
@endsection
