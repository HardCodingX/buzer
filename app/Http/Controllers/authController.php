<?php

namespace App\Http\Controllers;

use Request;
use View;
use DB;
use Hash;
use Session;

class authController extends baseController {

  public function register() {
    return View('register');
  }

  public function doRegister() {
    $name = Request::get('name', '');
    $email = Request::get('email', '');
    $password = Hash::make(Request::get('password', ''), ['cost' => 20]);

    DB::table('clientes')->insert(compact('name', 'email', 'password'));

    return View('register');
  }

  public function login() {
    return View('login');
  }

  public function doLogin() {
    $email = Request::get('email', '');
    $password = Request::get('password', '');

    $client = DB::table('clientes')
      ->where(['email' => $email])
      ->get();

    if (count($client) == 1) {
      if (Hash::check($password, $client[0]->password)) {
        Session::put('logued', true);
        Session::put('client', $client[0]);

        $sit = Session::get('current_sit', 0);
        if ($sit > 0) {
          return redirect('/buy/'.$sit);
        } else {
          //return redirect('/buy/'.$sit);
          return redirect()->action('homeController@index');
        }
      }
    }

    return View('login');
  }

  public function logout() {
    Session::flush();
    return redirect()->action('authController@login');
  }

  public function changePassword() {
    $currentPassword = Request::get('currentPassword', '');
    $newPassword = Request::get('newPassword', '');

    $client = DB::table('clientes')
      ->where('id', '=', Session::get('client')->id)
      ->get();

    if (count($client) == 1) {
      //  if (Hash::check($currentPassword, $client[0]->password)) {

        $password = Hash::make($newPassword, ['cost' => 20]);

        DB::table('clientes')
          ->where(['id' => Session::get('client')->id])
          ->update([
            'password' => $password
          ]);

        Session::flush();
        return redirect()->action('authController@login');
      //  } else {
      //    return redirect()->action('profileController@index');
      //  }
    } else {
        return redirect()->action('profileController@index');
    }
  }
}
