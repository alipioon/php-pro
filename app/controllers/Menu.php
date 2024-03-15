<?php
namespace app\controllers;

use Exception;

class Menu{


function index(){

    $menus = All('menu');
    $submenu = All('submenu');

    return [
        'view' => 'Menu.php',
        'data' => ['title' => 'Menu', 'menus' => $menus,'submenu' => $submenu]
    ];
    
}

function show($params){
   
    if(!isset($params['menu'])){
        return redirect('/');
    }

    $menu = findBy('menu','menu_id',$params['menu'],'menu_id,nome');

    dd($menu,'p');

}

}
