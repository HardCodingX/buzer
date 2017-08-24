@extends('layouts.main')

@section('content')
  <div class="container">
      <div class="content">
          <div class="title">Login</div>

          <form action="" method="post">

            <label for="email">Email</label>
            <input name="email" id="email" type="email" />

            <label for="password">Password</label>
            <input name="password" id="password" type="password" />

            <input type="submit" value="Login" />

          </form>

      </div>
  </div>
@endsection
