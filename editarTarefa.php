<?php
    include_once('CONFIG.PHP');

    if(isset($_POST['update']))
    {   
        $id = $_POST['id'];
        $descricao=$_POST['text-area-descricao'];
        $setor = $_POST['input-setor'];
        $usuario_id = $_POST['id'];
        $prioridade = $_POST['select-prioridade'];
        $status = $_POST['afazer'];

        $sqlUpdate = "UPDATE tarefas SET descricao='$descricao', setor='$setor', usuario_id='$usuario_id', 
            prioridade='$prioridade', status='$status' WHERE id='$id'";
        
        $result = $conexao -> query($sqlUpdate);
    }

    header('Location: sistema.php');


?>