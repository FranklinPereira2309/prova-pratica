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
        <h1><a>Gerenciamento de tarefas</a></h1>
        <ul class="content-ul">
            <li><a href="cadastroUsuarios.php">Cadastro de Usuário</a></li>
            <li><a href="cadastroTarefas.php">Cadastro de Tarefas</a></li>
            <li><a href="gerenciarTarefas.php">Gerenciamento de tarefas</a></li>
        </ul>
    </div>
    <div>

    </div>

    <h1>Tarefas</h1>
    <div class="minhas-tarefas">
        <div class="container-tarefas">
            <div class="aFazer">
                <h2>A Fazer</h2>
                <div class="content-tarefa">
                    <div class="tarefa">
                        <div class="conteudo">
                            <span><strong>Descrição: </strong>Descrição da Tarefa</span><br>
                            <span><strong>Setor:</strong>Setor Y</span><br>
                            <span><strong>Prioridade: </strong>Alta</span><br>
                            <span><strong>Usuário: </strong>Usuário A</span><br>
                        </div>

                        <button class="editar">Editar</button>
                        <button class="excluir">Excluir</button><br>
                        <select class="status">
                            <option hidden value="">Selecione o Status</option>
                            <option value="afazer">A Fazer</option>
                            <option value="fazendo">Fazendo</option>
                            <option value="pronto">Pronto</option>
                        </select>
                        <button type="button">Salvar Status</button>

                    </div>
                    <div class="tarefa">
                        <div class="conteudo">
                            <span><strong>Descrição:  </strong>Descrição da Tarefa</span><br>
                            <span><strong>Setor: </strong>Setor X</span><br>
                            <span><strong>Prioridade: </strong>Baixa</span><br>
                            <span><strong>Usuário: </strong>Usuário B</span>
                        </div>

                        <button class="editar">Editar</button>
                        <button class="excluir">Excluir</button><br>
                        <select class="status">
                            <option hidden value="">Selecione o Status</option>
                            <option value="afazer">A Fazer</option>
                            <option value="fazendo">Fazendo</option>
                            <option value="pronto">Pronto</option>
                        </select>
                        <button type="button">Salvar Status</button>

                    </div>
                </div>
            </div>
            <div class="fazendo">
                <h2>Fazendo</h2>
                <div class="content-tarefa">
                    <div class="tarefa">
                        <div class="conteudo">
                            <span><strong>Descrição:  </strong>Descrição da Tarefa</span><br>
                            <span><strong>Setor: </strong>Setor X</span><br>
                            <span><strong>Prioridade: </strong>Baixa</span><br>
                            <span><strong>Usuário: </strong>Usuário B</span>
                        </div>

                        <button class="editar">Editar</button>
                        <button class="excluir">Excluir</button><br>
                        <select class="status">
                            <option hidden value="">Selecione o Status</option>
                            <option value="afazer">A Fazer</option>
                            <option value="fazendo">Fazendo</option>
                            <option value="pronto">Pronto</option>
                        </select>
                        <button type="button">Salvar Status</button>

                    </div>
                    <div class="tarefa">
                        <div class="conteudo">
                            <span><strong>Descrição:  </strong>Descrição da Tarefa</span><br>
                            <span><strong>Setor: </strong>Setor X</span><br>
                            <span><strong>Prioridade: </strong>Baixa</span><br>
                            <span><strong>Usuário: </strong>Usuário B</span>
                        </div>

                        <button class="editar">Editar</button>
                        <button class="excluir">Excluir</button><br>
                        <select class="status">
                            <option hidden value="">Selecione o Status</option>
                            <option value="afazer">A Fazer</option>
                            <option value="fazendo">Fazendo</option>
                            <option value="pronto">Pronto</option>
                        </select>
                        <button type="button">Salvar Status</button>

                    </div>
                </div>
            </div>
            <div class="finalizado">
                <h2>Finalizado</h2>
                <div class="content-tarefa">
                    <div class="tarefa">
                        <div class="conteudo">
                            <span><strong>Descrição: </strong>Descrição da Tarefa</span><br>
                            <span><strong>Setor: </strong>Setor X</span><br>
                            <span><strong>Prioridade: </strong>Baixa</span><br>
                            <span><strong>Usuário: </strong>Usuário B</span>
                        </div>

                        <button class="editar">Editar</button>
                        <button class="excluir">Excluir</button><br>
                        <select class="status">
                            <option hidden value="">Selecione o Status</option>
                            <option value="afazer">A Fazer</option>
                            <option value="fazendo">Fazendo</option>
                            <option value="pronto">Pronto</option>
                        </select>
                        <button type="button">Salvar Status</button>

                    </div>
                    <div class="tarefa">
                        <div class="conteudo">
                            <span><strong>Descrição:  </strong>Descrição da Tarefa</span><br>
                            <span><strong>Setor: </strong>Setor X</span><br>
                            <span><strong>Prioridade: </strong>Baixa</span><br>
                            <span><strong>Usuário: </strong>Usuário B</span>
                        </div>

                        <button class="editar">Editar</button>
                        <button class="excluir">Excluir</button><br>
                        <select class="status">
                            <option hidden value="">Selecione o Status</option>
                            <option value="afazer">A Fazer</option>
                            <option value="fazendo">Fazendo</option>
                            <option value="pronto">Pronto</option>
                        </select>
                        <button type="button">Salvar Status</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>