<?php

namespace App\Http\Controllers;

use Request;
use Requests;
use View;
use DB;

class schedulsController extends baseController {

  public function index($id) {

    $route = DB::table('rutas')
      ->where('id', '=', $id)
      ->select()
      ->get();

    $schedul = DB::table('salidas')
      ->where('ruta_id', '=', $id)
      ->select()
      ->get();

    return View('scheduls', compact('route', 'schedul'));
  }
}
