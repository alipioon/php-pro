<?php

function dd($p1 = [],$para = ''){
    echo '<pre>';
    print_r($p1);
    echo '</pre>';
    if($para == 'p'){
        die();
    }
}


function dd2($p1 = [],$p2 = [],$para = ''){
    echo '<pre>';
    print_r($p1);
    echo '</pre>';
    if(!empty($p2)){
        echo '<pre>';
        print_r($p2);
        echo '</pre>';
    }
    if($para == 'p'){
        die();
    }
}

function redirect($to){

    return header('Location: ' . $to);

}