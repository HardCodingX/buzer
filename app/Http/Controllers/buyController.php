<?php

namespace App\Http\Controllers;

use Session;
use Request;
use View;
use DB;

class buyController extends baseController {

    public function index($id) {
      $sit = DB::table('asientos')
      ->where('id', '=', $id)
      ->select()
      ->get();

      $sit = $sit[0];

      return View('buy', compact('sit'));
    }

    public function confirm($id) {
      $client = Session::get('client');
      DB::table('asientos')
      ->where('id', '=', $id)
      ->update([
        'cliente_id' => $client->id
      ]);

      return redirect('buy/'.$id);
    }
}
