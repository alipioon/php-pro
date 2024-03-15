<?php



function connect(){
    $conn = new PDO("pgsql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME, DB_USER,DB_PASS,
    [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);
      
    return $conn;
}

    // // $conn = pg_connect("host=$serv port=$port dbname=$bcod user=$user password=$pass");

    // if(!$conn){
    //     echo 'erro na conexao ' . pg_last_error($conn);
    //     }
 
    // $stmt = $conn->prepare("select mm.nome as nome,ms.menu_id,ms.class as class,ms.method 
    //                         from menu mm 
    //                         join submenu ms on ms.menu_id = mm.menu_id   order by ms.menu_id");

    // $stmt->execute();
  
    // $aux = array();
    // while($menu = $stmt->fetchObject()){
    //      $var1 = $menu->nome;
    //      $var2 = $menu->menu_id;
    //      $var3 = $menu->class;
    //      $var4 = $menu->method;
    //      $aux2 = array($var1,$var2,$var3,$var4);
    //      array_push($aux, $aux2);
    // };
  
    // $_POST = $aux;
    
    // dd($_POST);
    //  die();


    // for ($k=0; $k < count($_POST) ; $k++){ 
    //     $vl = $_POST[$k][0];
    
    //     echo $k . '...' . $vl . '<br>';
    //  if ($vl = $_POST[$k][0]){
    //     echo $vl;
    //     echo '<br';
    //      for ($i=0; $i < count($_POST) ; $i++){ 
    //         if($vl = $_POST[$i][0]){
    //            echo $i . '...' . $_POST[$i][0];
    //         }    
    //     }
    //     $vl = '';    
    //  } 

    // }        
    
    // die();

    
?>
