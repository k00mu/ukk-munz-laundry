<?php

namespace App\Controllers;

class Admin extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Admin',
    ];
    return view('home', $data);
  }
}
