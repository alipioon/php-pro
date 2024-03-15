<?php
namespace app\controllers;

Class Categorias{


public function index(){

    
    $cat_se = All('categoria_se');
    $atr_se = All('atributos_se');
    //  dd($cat_se,' ');
    //  dd($atr_se,'p');


    return [
        'view' => 'Categoria.php',
        'data' => ['title' => 'Categoria', 'cat_se' => $cat_se, 'atr_se' => $atr_se]
    ];



}

public function show_se(){
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $id_categ  = explode('/',ltrim($uri,'/'));
    $categoria_id = $id_categ[2];
   
    $atr_se = [];
   
    $atr_se = FindAll('atributos_se', 'categoria_se_id',$categoria_id,'*');
    
   
    dd($atr_se,'p');    

        // SELECT * FROM public.atributos_se where categoria_se_id = 2


}



}


