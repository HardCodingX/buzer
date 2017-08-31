@extends('layouts.main')

@section('content')
  <div class="container">
      <div class="content">
          <div class="title">Profile</div>

          <div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#history" aria-controls="history" role="tab" data-toggle="tab">History</a></li>
              <li role="presentation"><a href="#password" aria-controls="password" role="tab" data-toggle="tab">Password</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="history">
                History
              </div>


              <div role="tabpanel" class="tab-pane" id="password">

                <form action="changePassword" method="post">

                  <label for="currrentPassword">Password</label>
                  <input name="currrentPassword" id="currrentPassword" type="password" />

                  <label for="newPassword">New Password</label>
                  <input name="newPassword" id="newPassword" type="password" />

                  <input type="submit" value="Change" />

                </form>


              </div>
            </div>
          </div>

      </div>
  </div>
@endsection
