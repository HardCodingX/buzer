<?php

namespace App\Http\Controllers;

use Request;
use Requests;
use View;

class homeController extends baseController {

  public function index() {
    return View('home');
  }
}
