<?php

namespace App\Http\Controllers;

use Request;
use View;

class ejemploController extends baseController
{
   public function hello() {
    return View::make('hello');
   }
}
