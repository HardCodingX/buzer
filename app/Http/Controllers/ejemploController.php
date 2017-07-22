<?php

namespace App\Http\Controllers;

use Request;
use View;

class ejemploController extends Controller
{
   public function hello() {
    return View::make('hello');
   }
}
