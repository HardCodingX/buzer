<?php

namespace App\Http\Controllers;

use Request;
use Requests;
use View;
use DB;

class busSitsController extends baseController {

  public function index($id) {

    $route = DB::table('rutas')
          ->join('salidas', 'rutas.id', '=', 'salidas.ruta_id')
          ->select('rutas.origen', 'rutas.destino', 'salidas.precio', 'salidas.hora_salida')
          ->where('salidas.id', '=', $id)
          ->get();

    $sits = DB::table('asientos')
      ->where('hora_salida_id', '=', $id)
      ->where('cliente_id', '=', null)
      ->select()
      ->get();

    return View('busSits', compact('route', 'sits'));
  }
}
