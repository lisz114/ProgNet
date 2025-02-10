<?php 
    include_once("Database.php");
    
//função de salvar um novo usuario      
    function save($nome, $email, $usuario, $senha) {
        $db = conecta();
    
        $sql = "insert into usuario (nome, email, usuario, senha) values (?, ?, ?, ?)";

        // Liga os valores das variáveis aos parâmetros da consulta SQL
        $stmt = $db->prepare($sql);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $email);
        $stmt->bindValue(3, $usuario);
        $stmt->bindValue(4, $senha);
        $stmt->execute();
    }
    
 // Função para buscar todos os usuários da tabela 'usuario'    
    function getUsuarios(){
        $db =conecta();
        $sql = "select * from usuario";
        $stmt = $db->prepare($sql);
        $stmt->execute();
// Recupera todos os resultados como um array associativo
        $resultado = $stmt->fetchALL(PDO::FETCH_ASSOC);
        return $resultado;
    }
    function login($usuario, $senha) {
        $db = conecta();
        
        $sql = "SELECT * FROM usuario WHERE usuario = ?";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(1, $usuario);
        $stmt->execute();
        
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($resultado && $senha == $resultado['senha']) { 
            return $resultado;
        } else {
            return false;
        }
    }
    
// Buscando usuário pelo seu ID
    function getUsuario($id){
        $db =conecta();
        $sql = "select * from usuario where idusuario = ?";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        return $usuario;
    }

// Deletando usuario
    function deletUsuario($id){
        $db = conecta();
        $sql = "DELETE FROM usuario WHERE idusuario = ?";
        $stmt = $db -> prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();
    }
    function editUsuario($id, $nome, $email, $usuario, $senha) {
        $db = conecta();
        $sql = "UPDATE usuario SET nome = ?, email = ?, usuario = ?, senha = ? WHERE idusuario = ?";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $email);
        $stmt->bindValue(3, $usuario);
        $stmt->bindValue(4, $senha);
        $stmt->bindValue(5, $id);
        $stmt->execute();
    }
    
?>