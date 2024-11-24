<?php
if(isset($_POST['submit'])){
    include_once 'conexao.php';

    $nome = $_POST['input-nome'];
    $email = $_POST['input-email'];
    

    $result = mysqli_query ($conn,"INSERT INTO usuarios (nome,email) VALUES ('$nome','$email')");

    if($result){ 
        echo "<script>alert('Usuário cadastrado com sucesso!');</script>"; 
    } else { 
        echo "<script>alert('Erro ao cadastrar usuário: " . mysqli_error($conn) . "');</script>"; 
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container-nav">
        <h1><a>Gerenciamento de tarefas</a></h1>
        <ul class="content-ul">
            <li><a href="cadastroUsuarios.php">Cadastro de Usuário</a></li>
            <li><a href="cadastroTarefas.php">Cadastro de Tarefas</a></li>
            <li><a href="gerenciarTarefas.php">Gerenciamento de tarefas</a></li>
        </ul>
    </div>
    <div>

    </div>
    <form action="cadastroUsuarios.php" method="post">
        <div class="container-cadastro">
            <h1>Cadastro de Usuário</h1>
            <label for="input-nome">Usuário</label>
            <input type="text" name="input-nome" id="input-nome" placeholder="Digite um nome">
            <label for="input-email">Email</label>
            <input type="email" name="input-email" id="input-email" placeholder="Digite um email">
            <input type="submit" name="submit" value="Cadastrar">
        </div>
    </form>

    </form>

</body>

</html>