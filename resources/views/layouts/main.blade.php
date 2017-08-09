<!DOCTYPE html>
<html>
    <head>
      <head>
        @include('includes.head')
        @include('includes.css')
      </head>

    </head>
    <body>

      @include('includes.nav')

      @section('content')
          This is the content.
      @show

      @include('includes.js')

    </body>
</html>
