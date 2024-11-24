<?php
if(isset($_POST['submit'])){
    include_once 'conexao.php';

    $usuario_id = $_POST['usuario'];
    $descricao = $_POST['input-descricao'];
    $setor = $_POST['input-setor'];
    $prioridade = $_POST['select-prioridade'];

    $result = mysqli_query($conn, "INSERT INTO tarefas (usuario_id, descricao, setor, prioridade)
    VALUES ('$usuario_id', '$descricao', '$setor', '$prioridade')");

    if($result){ 
        echo "<script>alert('Tarefa cadastrada com sucesso!');</script>"; 
    } else { 
        echo "<script>alert('Erro ao cadastrar tarefa: " . mysqli_error($conn) . "');</script>"; 
    }
}
?>

<?php
include_once 'conexao.php';

$sql = "SELECT id, nome FROM usuarios"; 
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Tarefas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-nav">
        <h1><a>Gerenciamento de Tarefas</a></h1>
        <ul class="content-ul">
            <li><a href="cadastroUsuarios.php">Cadastro de Usuário</a></li>
            <li><a href="cadastroTarefas.php">Cadastro de Tarefas</a></li>
            <li><a href="gerenciarTarefas.php">Gerenciamento de Tarefas</a></li>
        </ul>
    </div>
    <form action="cadastroTarefas.php" method="post">
        <div class="container-cadastro">
            <h1>Cadastro de Tarefas</h1>
            <label for="textarea-descricao">Descrição</label>
            <input name="input-descricao" id="input-descricao"></>
            <label for="input-setor">Setor</label>
            <input type="text" name="input-setor" id="input-setor" placeholder="Digite um setor" >
            <label for="usuario">Usuário</label>
            <select name="usuario" id="usuario"> 
                <?php 
                if ($result->num_rows > 0) { 
                    while($row = $result->fetch_assoc()) { 
                        echo "<option value='" . $row["id"] . "'>" . $row["nome"] ."</option>"; 
                    } 
                } else { 
                    echo "<option value=''>Nenhum usuário encontrado</option>"; 
                } 
                ?> 
            </select>
            <label for="select-prioridade">Prioridade</label>
            <select name="select-prioridade" id="select-prioridade">
                <option hidden value="">Selecione uma Prioridade</option>
                <option value="baixa">Baixa</option>
                <option value="media">Média</option>
                <option value="alta">Alta</option>
            </select>
            <input type="submit" name="submit" value="Cadastrar">
        </div>
    </form>
</body>
</html>
