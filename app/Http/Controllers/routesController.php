<?php

namespace App\Http\Controllers;

use Request;
use Requests;
use View;

use Hash;
use DB;

class routesController extends Controller {

  public function index() {
    //  $secret = Hash::make('stringtobehashed', array('cost' => 20));

    $main_routes = DB::table('rutas')->select()->get();

    /*$main_routes = [
      ['id' => 1, 'origin' => 'Monterrey', 'destiny' => 'Guadalaja', 'duration' => '11'],
      ['id' => 2, 'origin' => 'Monterrey', 'destiny' => 'Ciudad de México', 'duration' => '8'],
      ['id' => 3, 'origin' => 'Monterrey', 'destiny' => 'Saltillo', 'duration' => '2']
    ];*/

    return View('routes', compact('main_routes'));
  }
}
