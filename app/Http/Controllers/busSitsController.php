<?php

namespace App\Http\Controllers;

use Request;
use Requests;
use View;
use DB;

class busSitsController extends baseController {

  public function index($id) {

    $sits = DB::table('asientos')
      ->where('hora_salida_id', '=', $id)
      ->where('cliente_id', '=', null)
      ->select()
      ->get();

    return View('busSits', compact('sits'));
  }
}
