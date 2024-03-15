<?php
namespace app\controllers;

class Home{

public function index($params){

    $menus = All('menu');
    $submenu = All('submenu');
    // dd($menus,'p');
    // dd($submenu,'p');


    return [
        'view' => 'Home.php',
        'data' => ['title' => 'Home', 'menus' => $menus]
    ];

}


}
