<?php

namespace App\Http\Controllers;

use Request;
use Requests;
use View;

class schedulsController extends Controller {

  public function index($id) {
    
    return View('scheduls', compact('id'));
  }
}
