<?php

namespace App\Http\Controllers;

use Request;
use Requests;
use View;

class routesController extends Controller {

  public function index() {
    return View('routes');
  }
}
