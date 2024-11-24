<?php
if(isset($_POST['submit'])){
    include_once 'conexao.php';

    $usuario_id = $_POST['usuario_id'];
    $descricao=$_POST['text-area-descricao'];
    $setor = $_POST['input-setor'];
    $prioridade = $_POST['select-prioridade'];
    

    

    $result = mysqli_query ($conexao,"INSERT INTO usuarios (usuario_id, descricao, setor, prioridade)
    VALUES ('$usuario_id', '$descricao','$setor')");
}

?>

<?php

include_once 'conexao.php';

$sql = "SELECT id, nome FROM usuarios"; 
$result = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="py-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Tarefas</title>
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
    <form action="cadastroTarefas.php" method="post">
        <div class="container-cadastro">
            <h1>Cadastro de Tarefas</h1>
            <label for="textarea-descricao">Descrição</label>
            <textarea name="textarea-descricao" id="text-area-descricao" cols="30" rows="10"></textarea>
            <label for="input-setor">Setor</label>
            <input type="text" name="input-setor" id="input-setor" placeholder="Digite um setor" >
            <label for="select-usuario">Usuário</label>
            <select name="usuario" id="usuario"> 
                <?php if ($result->num_rows > 0) { 
                            while($row = $result->fetch_assoc()) { 
                                echo "<option value='" . $row["id"] . "'>" . $row["nome"] ."</option>"; 
                            } 
                        }else { 
                            echo "<option value=''>Nenhum usuário encontrado</option>"; 
                        } 
                ?> 
            </select>
            <!-- <select name="select-usuario" id="select-usuario" >
                <option hidden value="">Selecione um Usuário</option>
            </select> -->
            <label for="select-prioridade">Prioridade</label>
            <select name="select-prioridade" id="select-prioridade">
                <option hidden value="">Selecione uma Prioridade</option>
                <option value="baixa">Baixa</option>
                <option value="media">Média</option>
                <option value="alta">Alta</option>
            </select>
            <input type="submit" value="Cadastrar">
        </div>
    </form>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tarefas"])) { 
            $usuario_id = $_POST["usuario"]; 
           
        } 
        $conn->close(); 
    ?>
</body>
</html>