<?php

namespace App\Http\Controllers;

use Session;
use Request;
use View;
use DB;

class buyController extends baseController {

    public function index($id) {
      if (Session::get('logued', false)) {
        $isBuyedQ = DB::table('asientos')
          ->where('id', '=', $id)
          ->where('cliente_id', '=', Session::get('client')->id)
          ->select()
          ->get();
      } else {
        $isBuyedQ = [];
      }

      $isBuyed = (count($isBuyedQ) > 0) ? 1 : 0;

      $sit = DB::table('asientos')
      ->where('id', '=', $id)
      ->select()
      ->get();

      $sit = $sit[0];

      return View('buy', compact('sit', 'isBuyed'));
    }

    public function confirm($id, $confirmed = false) {
      $client = Session::get('client');
      DB::table('asientos')
      ->where('id', '=', $id)
      ->update([
        'cliente_id' => $client->id,
        'pagado' => (!$confirmed) ? 0 : 1
      ]);

      return redirect('buy/'.$id);
    }
}
