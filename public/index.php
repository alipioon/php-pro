<?php

require '../vendor/autoload.php';
require 'bootstrap.php';

// session_start();


try{
  
    // if(!isset($_SESSION["usuario_logado"])){
        
    //     $view = 'Login.php'; 
    //     require VIEWS.'master_login.php';
    //     // require VIEWS.'Login.php';


    // }else{

        $data = router();
    
        if(!isset($data['data'])){
            throw new Exception('Falta o indice');
        }

        if(!isset($data['data']['title'])){
            throw new Exception('Nao foi passado o title');
        }

        if(!isset($data['view'])){
            throw new Exception ("o indice view nao existe ");
        }

        if(!file_exists(VIEWS.$data['view'])){
            throw new Exception("Arquivo view {$data['view']} nao existe");
        }

        extract($data['data']);
        $view = $data['view'];
        
        require VIEWS.'master.php';
    }

// }
catch(Exception $e){
    dd($e->getMessage(),'');
}

// }