<?php
    include_once("Database.php");
    include_once("PessoaDAO.php");

    if (isset($_GET["pessoa_id"])) {
        $id2 = $_GET["pessoa_id"];
        $pessoa = getUsuario($id2);
    } else {
        die("Pessoa não encontrada");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pessoa</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f7fc;
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        h2 {
            color: #e86d8e;
            margin-bottom: 20px;
            font-size: 24px;
        }

        label {
            display: block;
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
            text-align: left;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: #fafafa;
        }

        input[type="submit"],
        input[type="submit"],
        .delete-btn {
            width: auto; 
            padding: 8px 15px; 
            border: none;
            border-radius: 5px;
            font-size: 14px; 
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin: 10px auto; 
            display: block; 
}

        input[type="submit"] {
            background-color: #af4c6b;
            color: white;
}

        input[type="submit"]:hover {
            background-color: #4caf93;
}

    .delete-btn {
            background-color: #f25c5c;
            color: white;
}

    .delete-btn:hover {
            background-color: #6b0000;
}


    .footer {
            margin-top: 15px;
            font-size: 12px;
            color: #999;
}

    </style>
</head>
<body>

    <div class="form-container">
        <h2>Editar Pessoa</h2>
        <form action="pessoaControle.php" method="post">
            <input type="hidden" name="id" value="<?php echo $pessoa['idusuario']; ?>">
            
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="<?php echo $pessoa['nome']; ?>" required>

            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo $pessoa['email']; ?>" required>

            <label for="usuario">Usuário</label>
            <input type="text" name="usuario" value="<?php echo $pessoa['usuario']; ?>" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" value="<?php echo $pessoa['senha']; ?>" required>

            <input type="hidden" name="acao" value="editar">
            <input type="submit" value="Salvar alterações">
            
            <button type="submit" name="acao" value="delete" class="delete-btn">Excluir Usuário</button>
        </form>
    </div>

</body>
</html>
            