<?php

namespace App\Controllers;

use Core\View;
use Core\Util;

class Home
{
    public function __construct()
    {
        date_default_timezone_set('America/Lima');
        session_start();
        if(!empty($_SESSION['user'])){
            header('Location:'.Util::baseUrl().'inicio');
        }
    }

    public function index()
    {
        View::login(['home/index'], ['title' => 'Autenticacion']);
    }

    public function ingresandoSistema()
    {
        $user = $_POST['user'];
        if($user == 'tm_oficial'){
            $_SESSION['user'] = $user;
            $res = 'Entrando al sistema';
        }else{
            $res = 'Acceso Denegado';
        }
        View::renderJson($res);
    }

    public function cerrar_sesion()
    {
        session_destroy();
        header('Location: '.Util::baseUrl());
		exit;
    }
}
