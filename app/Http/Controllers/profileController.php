<?php

namespace App\Http\Controllers;

use Session;
use Request;
use View;
use DB;

class profileController extends baseController {

    public function index() {
      /*$sits = DB::table('asientos')
        ->select()
        ->where('cliente_id', '=', Session::get('client')->id)
        ->get();*/

      $sits = DB::table('rutas')
            ->join('salidas', 'rutas.id', '=', 'salidas.ruta_id')
            ->join('asientos', 'salidas.id', '=', 'asientos.hora_salida_id')
            ->select('rutas.origen', 'rutas.destino', 'salidas.precio', 'salidas.hora_salida', 'asientos.numero', 'asientos.pagado')
            ->where('asientos.cliente_id', '=', Session::get('client')->id)
            ->get();

      return View('profile', compact('sits'));
    }
}
