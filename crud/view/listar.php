<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Listar</title>
</head>
<body>
<a href="formIncluir.php"><button class="btn">Novo Aluno</button></a>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Turno</td>
            <td>Inicio</td>
            <td>Ações</td>
        </tr>

        <?php
        foreach($alunos as $aluno){

    echo " <tr>
                <td>{$aluno['id']}</td>
                <td>{$aluno['nome']}</td>
                <td>{$aluno['turno']}</td>
                <td>{$aluno['inicio']}</td>
    
            </tr>";
        }
        ?>
    </table>;
</body>
</html> 