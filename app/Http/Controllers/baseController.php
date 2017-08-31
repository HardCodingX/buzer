<?php

namespace App\Http\Controllers;

use Session;
use View;

class baseController extends Controller {

  public function __construct() {
    View::share('logued', Session::get('logued', false));
  }

}
