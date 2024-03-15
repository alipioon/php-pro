<?php


function ExisteUri($uri, $routes){
    return (array_key_exists($uri, $routes)) ? [$uri => $routes[$uri]] : [];
}

function ExisteUriDinamica($uri, $routes){

    // dd2($uri,$routes,'p');

    return array_filter($routes,
    function($value) use($uri){
        $regex = str_replace('/','\/',ltrim($value,'/'));
        return preg_match("/^$regex$/",ltrim($uri,'/'));
    },
    ARRAY_FILTER_USE_KEY
);
}


function params ($uri, $var01){
    
    if(!empty($var01)){
        $var02 = array_keys($var01)[0];
        return array_diff(
            $uri,
            explode('/',ltrim($var02,'/')));
     }
     return [];
}

function formataparametros($uri, $var01){
    $uri = explode('/',ltrim($uri,'/'));
    $params = params($uri, $var01);
    // $uri = explode('/',ltrim($uri,'/'));
   
    $parametros = [];
    foreach($params as $index => $params){
        $parametros[$uri[$index - 1]] = $params;
    }        
    return $parametros;
}


function router(){
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    
    $routes = require 'rotas.php';
    $requestMethod = $_SERVER['REQUEST_METHOD'];

    $var01 = ExisteUri($uri, $routes[$requestMethod]);
    
    $params = [];

    if(empty($var01)){
        // echo('alipio'.$requestMethod);
      
        // $uri = explode('/',ltrim($uri,'/'));
        $var01 = ExisteUriDinamica($uri, $routes[$requestMethod]);
        $params = formataparametros($uri, $var01);
        // dd($parametros,'p');
    }
    
   

    if(!empty($var01)){
        
        return controller($var01, $params);
        // return;
    }
    
    throw new Exception('Algo deu errado');
    

}