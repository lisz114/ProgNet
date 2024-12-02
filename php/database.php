<?php

function connecta_db(){
    $user="root";
    $pass="aluno";
    $database="crud";
    $host="localhost";
    
    $db=new PDO(dsn: "mysql:host=$host;dbname=$database", username:$user, password:$pass);
    //definindo o modo de erro para excecçãos
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    try{
        $db->exec('SHOW TABLES');
    }catch(PDOException $e){
        echo "". $e->getMessage() ."";
    }
//checando se a conexão foi estabelecida com sucesso e retornando a conexão
    if($db){
        return $db;
    }else{
        return false;
    }
}

   function check_conn($conn_id){
    if($conn_id){
        echo "Conexão estabelecida com sucesso";
    }else{
        echo "Erro ao conectar com o banco de dados!";
    }
   }
   var_dump(connecta_db());
   check_conn(connecta_db());
?>