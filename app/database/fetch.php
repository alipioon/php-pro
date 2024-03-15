<?php

function All($table, $fields ='*'){
    try{
        $conect = connect();
        $query = "Select {$fields} from {$table} ";
        $result = $conect->query($query);
        return $result->fetchAll();
        
    }catch(PDOException $e){{
        dd($e->getMessage(),'');
    }}
     

}


function findBy($table, $field, $value, $fields='*'){
    try{
        $conect = connect();
        $prepare = $conect->prepare("select {$fields} from {$table} where {$field} = :{$field};");
        // dd($prepare,'p');

        $prepare->execute([
            $field => $value
        ]);
        return $prepare->fetch();

    }catch(PDOException $e){
        dd ($e->getMessage(),'');
    }

function findAll($table, $field, $value, $fields ='*'){
        try{
            $conect = connect();
            $query = "Select {$fields} from {$table} where {$field} = :{$field}; ";
            dd($query,'p');
            $result = $conect->queryAll($query);
            return $result->fetchAll();
            
        }catch(PDOException $e){{
            dd($e->getMessage(),'');
        }}
         
    
    }


}