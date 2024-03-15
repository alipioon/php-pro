<?php

namespace app\controllers;

class Sair{



function index(){
    // session_start();
    session_destroy();
    
    return [
        'view' => 'Login.php',
        'data' => ['title' => 'Login']
        ];
    
}


}

