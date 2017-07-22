<?php

namespace App\Http\Controllers;

use Request;
use Requests;
use View;

class busSitsController extends Controller {

  public function index() {
    return View('busSits');
  }
}
