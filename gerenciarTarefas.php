<?php
include_once('conexao.php');

// Consultas SQL para cada status
$sqls = [
    'a fazer' => "SELECT tarefas.id, usuarios.nome, tarefas.descricao, tarefas.setor, tarefas.prioridade, tarefas.data_cadastro, tarefas.status
                  FROM tarefas
                  JOIN usuarios ON tarefas.usuario_id = usuarios.id
                  WHERE tarefas.status = 'a fazer'",
    'fazendo' => "SELECT tarefas.id, usuarios.nome, tarefas.descricao, tarefas.setor, tarefas.prioridade, tarefas.data_cadastro, tarefas.status
                  FROM tarefas
                  JOIN usuarios ON tarefas.usuario_id = usuarios.id
                  WHERE tarefas.status = 'fazendo'",
    'pronto'  => "SELECT tarefas.id, usuarios.nome, tarefas.descricao, tarefas.setor, tarefas.prioridade, tarefas.data_cadastro, tarefas.status
                  FROM tarefas
                  JOIN usuarios ON tarefas.usuario_id = usuarios.id
                  WHERE tarefas.status = 'pronto'"
];

// Resultados das consultas
$tarefas = [];
foreach ($sqls as $status => $query) {
    $result = $conn->query($query);
    $tarefas[$status] = $result->num_rows > 0 ? mysqli_fetch_all($result, MYSQLI_ASSOC) : [];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Tarefas</title>
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

    <h1>Tarefas</h1>
    <div class="minhas-tarefas">
        <!-- Exibindo as tarefas de cada status -->
        <?php foreach ($tarefas as $status => $lista): ?>
            <div class="container-tarefas">
                <div class="<?php echo str_replace(' ', '', $status); ?>">
                    <h2><?php echo ucfirst($status); ?></h2>
                    <div class="content-tarefa">
                        <?php if (empty($lista)): ?>
                            <div class="tarefa">
                                <div class="conteudo-oculto">
                                    <span><strong>Descrição:</strong> null</span><br>
                                    <span><strong>Setor:</strong> null</span><br>
                                    <span><strong>Prioridade:</strong> null</span><br>
                                    <span><strong>Usuário:</strong> null</span><br>
                                </div>
                            </div>
                        <?php else: ?>
                            <?php foreach ($lista as $tarefa): ?>
                                <div class="tarefa">
                                    <div class="conteudo">
                                        <span><strong>Descrição:</strong> <?php echo $tarefa['descricao']; ?></span><br>
                                        <span><strong>Setor:</strong> <?php echo $tarefa['setor']; ?></span><br>
                                        <span><strong>Prioridade:</strong> <?php echo $tarefa['prioridade']; ?></span><br>
                                        <span><strong>Usuário:</strong> <?php echo $tarefa['nome']; ?></span><br>
                                    </div>
                                    <button class="editar">Editar</button>
                                    <button class="excluir">Excluir</button><br>
                                    <select name="select-status" id="select-status">
                                        <option value="a fazer" <?php echo $tarefa['status'] == 'a fazer' ? 'selected' : ''; ?>>A Fazer</option>
                                        <option value="fazendo" <?php echo $tarefa['status'] == 'fazendo' ? 'selected' : ''; ?>>Fazendo</option>
                                        <option value="pronto" <?php echo $tarefa['status'] == 'pronto' ? 'selected' : ''; ?>>Pronto</option>
                                    </select>
                                    <button type="button">Salvar Status</button>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
