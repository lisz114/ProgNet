<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
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

        .login-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 350px;
            text-align: center;
        }

        .login-container h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .login-container label {
            font-size: 14px;
            color: #666;
            text-align: left;
            margin-bottom: 5px;
            display: block;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
            background-color: #fafafa; 
        }

        .login-container input[type="submit"] {
            background-color: #af4c6b   ;   
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .login-container input[type="submit"]:hover {
            background-color: #4caf93; 
        }

        .login-container a {
            color: #af4c6b; 
            text-decoration: none;
            font-size: 14px;
        }

        .login-container a:hover {
            text-decoration: underline;
        }

        .footer {
            margin-top: 15px;
            font-size: 12px;
            color: #999;
        }

    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="loginControle.php" method="post">
            <label for="usuario">Usuário</label>
            <input type="text" name="usuario" id="usuario" placeholder="Digite seu usuário" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>

            <input type="submit" value="Entrar">
        </form>
        <div class="footer">
            <a href="Cadastrar.php">Não possui login? Cadastre-se.</a>
        </div>
    </div>
</body>
</html>
