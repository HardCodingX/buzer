<?php

namespace App\Http\Controllers;

use Request;
use View;

class profileController extends baseController {

    public function index() {
      return View('profile');
    }
}
