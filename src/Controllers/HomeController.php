<?php

namespace App\Controllers;

class HomeController
{
  public function index()
  {
    require_once(__DIR__ . '/../Views/home.view.php');
  }
  public function deuxieme()
  {
    require_once(__DIR__ . '/../Views/deuxieme.view.php');
  }
}
