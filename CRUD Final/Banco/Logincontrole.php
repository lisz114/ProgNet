<?php

session_start();


$pathPessoaDAO = __DIR__ . '/PessoaDAO.php'; // Define o caminho para o arquivo PessoaDAO.php

if (!file_exists($pathPessoaDAO)) {
    die("Erro: O arquivo PessoaDAO.php não foi encontrado no caminho: " . $pathPessoaDAO);
}
include_once($pathPessoaDAO); //Inclui o arquivo PessoaDAO.php para usar suas funções e classes (Import do java )


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    
    if (empty($usuario) || empty($senha)) {
        echo "<script>alert('Por favor, preencha todos os campos!'); window.location.href = 'login.php';</script>";
        exit();
    }

    
    if (!function_exists('login')) {
        die("Erro: A função 'login()' não foi encontrada no arquivo PessoaDAO.php.");
    }

    $resultado = login($usuario, $senha);

    if ($resultado) {
        
        $_SESSION['usuario_id'] = $resultado['idusuario']; 
        $_SESSION['usuario_nome'] = $resultado['nome'];
        header("Location: Listar.php");
        exit();
    } else {
        
        echo "<script>alert('Usuário ou senha incorretos!'); window.location.href = 'login.php';</script>";
        exit();
    }
}
