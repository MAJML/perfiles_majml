<?php

namespace App\Controllers;

use Core\View;
use Core\Util;

class Inicio
{
    public function __construct()
    {
        session_start();
        if(empty($_SESSION['user'])){
            session_destroy();
            header('Location: '.Util::baseUrl());
            exit;
        }
    }

    public function index()
    {
        View::render(['inicio/index'], ['title' => 'Ig perfiles']);
    }

}
