@extends('layouts.main')

@section('content')
  <div class="container">
      <div class="content">
          <div class="title">Register</div>

          <form action="" method="post">
            <label for="name">Name</label>
            <input name="name" id="name" type="text" />

            <label for="email">Email</label>
            <input name="email" id="email" type="email" />

            <label for="password">Password</label>
            <input name="password" id="password" type="password" />

            <input type="submit" value="Register" />

          </form>

      </div>
  </div>
@endsection
