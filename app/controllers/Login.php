<?php
namespace app\controllers;

session_start();

class Login{

public function index(){
 
    // dd('vou mostrar login','p');

    if(!isset($_SESSION["usuario_logado"])){
       return [
        'view' => 'Login.php',
        'data' => ['title' => 'Login']
        ];
    }
}

public function autenticar(){

// session_start();

    $user_ok = 'alipio';
    $pass_ok =  '123';

    $user_dig = $_POST["user"];
    $pass_dig = $_POST["passwd"];

    if($user_ok == $user_dig and $pass_ok == $pass_dig){
        $_SESSION["usuario_logado"] = $user_dig ;
        $_SESSION["contagem"] = 0;

        $menus = All('menu');
        $submenu = All('submenu');

        // dd($submenu,'p');

        // for ($k=0; $k < count($menus) ; $k++){  
     
        //      dd($menus[$k]->menu_id,'');
        //      dd($menus[$k]->nome,'');
        // }

        // die();

        return [
            'view' => 'Menu.php',
            'data' => ['title' => 'Menu', 'menus' => $menus,'submenu' => $submenu]
        ];
    
    }else{
   
        return [
            'view' => 'Login.php',
            'data' => ['title' => 'Login']
            ];
        

    }
    
  
}



}
