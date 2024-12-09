<?php
include_once("database.php");
function insere_usuario($nome, $email){
    $db = connecta_db();
    $sql= "INSERT INTO usuario(nome,email) VALUES (?,?)"
    $stmt=$db->prepare($sql);
    $stmt->binValue(0, $nome, PDO::PARAM_STR);
    $stmt->binValue(1, $email, PDO::PARAM_STR);
try{
    $stmt->execute();
    echo "Usuario inserido com sucesso!";
}catch(PDOException $e){
    echo "Erro ao inserir usuário: " .$e->getMessage();
}
$db = null;
}

function recupera_lista_usuarios(){
    $bd=connecta_db();
    $sql = "SELECT * FROM usuario";
    $stmt=$bd->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($resultado);
}
recupera_lista_usuarios();
?>