<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
            max-width: 400px;
            text-align: center;
        }

        .form-container h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .form-container label {
            font-size: 14px;
            color: #666;
            text-align: left;
            margin-bottom: 5px;
            display: block;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
            background-color: #fafafa;
        }

        .form-container input[type="submit"] {
            background-color: #af4c6b;   
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .form-container input[type="submit"]:hover {
            background-color: #4caf93; 
        }

        .form-container .footer {
            margin-top: 15px;
            font-size: 12px;
            color: #999;
        }

        .form-container .footer a {
            color: #af4c6b; 
            text-decoration: none;
            font-size: 14px;
        }

        .form-container .footer a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

    <div class="form-container">
        <h1>Cadastro</h1>
        <form action="pessoaControle.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Digite seu email" required>

            <label for="usuario">Usuário</label>
            <input type="text" name="usuario" id="usuario" placeholder="Escolha um nome de usuário" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>

            <input type="text" name="acao" value="cadastrar" hidden>
            <input type="submit" value="Cadastrar">
        </form>

        <div class="footer">
            <a href="login.php">Já possui conta? Faça login.</a>
        </div>
    </div>

</body>
</html>
