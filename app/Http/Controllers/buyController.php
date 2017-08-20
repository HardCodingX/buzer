<?php

namespace App\Http\Controllers;

use Request;
use View;
use DB;

class buyController extends Controller {

    public function index($id) {
      $sit = DB::table('asientos')
      ->where('id', '=', $id)
      ->select()
      ->get();

      $sit = $sit[0];

      return View('buy', compact('sit'));
    }

    public function confirm($id) {
      DB::table('asientos')
      ->where('id', '=', $id)
      ->update([
        'cliente_id' => 1
      ]);

      return redirect('buy/'.$id);
    }
}
