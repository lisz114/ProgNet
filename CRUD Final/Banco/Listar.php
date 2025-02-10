<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;  
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 10px;
        }
        th {
            background-color:#c97190;
        }
        td {
            height: 50px;
        }
        h2 {
            color:#db6e94;
        }
        .btn-cadastrar {
            position: fixed;
            bottom: 20px; 
            right: 20px;
            background-color: #c97190;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-cadastrar:hover {
            background-color: #4caf93;
        }
    </style>
</head>
<body>

<?php
    include_once("Database.php");
    include_once("PessoaDAO.php");

    $listaPessoa = getUsuarios();
?>

    <h2>Lista de Usuários</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Usuário</th>
            <th>Senha</th> 
        </tr>
        <?php
        foreach ($listaPessoa as $pessoa) {
        ?>
            <tr>
                <td>
                    <a href="editPessoa.php?pessoa_id=<?php echo $pessoa['idusuario']; ?>">
                        <?php echo $pessoa['idusuario']; ?>
                    </a>
                </td>
                <td><?php echo $pessoa['nome']; ?></td>
                <td><?php echo $pessoa['email']; ?></td>
                <td><?php echo $pessoa['usuario']; ?></td>
                <td><?php echo $pessoa['senha']; ?></td> 
            </tr>
        <?php
        }
        ?>
    </table>

    <a href="Cadastrar.php">
        <button class="btn-cadastrar">Cadastrar Novo Usuário</button>
    </a>

</body>
</html>
