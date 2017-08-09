<?php

namespace App\Http\Controllers;

use Request;
use Requests;
use View;

class schedulsController extends Controller {

  public function index($id) {

    $schedul = [
      ['id' => 1, 'exit_time' => '11:00', 'price' => '1200'],
      ['id' => 2, 'exit_time' => '12:00', 'price' => '1100'],
      ['id' => 3, 'exit_time' => '13:00', 'price' => '1150']
    ];

    return View('scheduls', compact('id', 'schedul'));
  }
}
