<?php
// "Importando" os arquivos necessários
    include_once("Database.php");
    include_once("PessoaDAO.php");
   
// Ativa a exibição de erros para facilitar o diagnóstico durante o desenvolvimento 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 // Verifica a ação do formulário é (significa que o formulário de cadastrar foi enviado)

    if (isset($_POST["acao"]) && $_POST["acao"] == "cadastrar") {
//Verifica se ta tudo preenchido
        if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["usuario"]) && isset($_POST["senha"])) {
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];
    //chamando função de salvar
            save($nome, $email, $usuario, $senha); 
    //redirecionando o usuario
            header("Location: Listar.php");
        } else {
            echo "Todos os campos são obrigatórios.";
        }

    }
    if (isset($_POST["acao"]) && $_POST["acao"] == "editar") {
        if (isset($_POST["id"]) && isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["usuario"]) && isset($_POST["senha"])) {
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"]; 
            editUsuario($id, $nome, $email, $usuario, $senha); 
            header("Location: Listar.php");
            exit();
        } else {
            echo "Erro ao editar usuário";
        }
    }
    
    if (isset($_POST["acao"]) && $_POST["acao"] == "delete") {
        if (isset($_POST["id"])) {
            $id = $_POST["id"];
            deletUsuario($id);
            header("Location: Listar.php");

            }

            }
    


?>