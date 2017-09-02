<?php

namespace App\Http\Controllers;

use Session;
use View;

class baseController extends Controller {

  public function __construct() {
    View::share('buy_status', [ 'No Pagado', 'Pagado' ]);
    View::share('logued', Session::get('logued', false));
  }

}
