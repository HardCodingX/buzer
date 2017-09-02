<?php

namespace App\Http\Controllers;

use Request;
use Requests;
use View;
use DB;

class homeController extends baseController {

  public function index() {
    $rutas = DB::table('rutas')
      ->select()
      ->inRandomOrder()
      ->take(3)
      ->get();

    return View('home', compact('rutas'));
  }
}
