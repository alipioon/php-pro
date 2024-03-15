<?php

function controller($var01, $params){

    // list($controller, $method) = explode('@',array_values($var01)[0]);
    [$controller, $method] = explode('@',array_values($var01)[0]);
    $classe = CONTROLLER_PATH.$controller;

    if(!class_exists($classe)){
        throw new Exception("Controller -> $controller não existe");
    }

    $ControllerIntancie = new $classe;

    
    if(!method_exists($ControllerIntancie, $method)){
        throw new Exception("O metodo ..  $method .. nao existe dentro do controller --> $controller");
    }


     return $ControllerIntancie->$method($params);



}