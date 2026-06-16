<?php
// 1. Captura o ID que veio lá do link da listagem
$id_cliente = $_GET['id_cliente'] ?? null;

if (!$id_cliente) {
    die("Erro: ID do cliente não fornecido.");
}

include "inc-conexao.php";

// 2. SE O USUÁRIO CLICOU EM "SALVAR" (Envio via POST)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome     = $_POST['nome'];
    $cpf      = $_POST['cpf'];
    $email    = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha    = $_POST['senha'];

    // Faz a atualização no banco de dados
    $sql_update = "update tb_cliente set nome='{$nome}', cpf='{$cpf}', email='{$email}', telefone='{$telefone}', senha='{$senha}' where id_cliente={$id_cliente}";
    mysqli_query($conexao, $sql_update);

    mysqli_close($conexao);
    
    // Redireciona de volta para a listagem
    header('Location: cliente-listagem.php');
    exit;
}

// 3. SE O USUÁRIO ACABOU DE CHEGAR DA LISTAGEM (Apenas carregar os dados na tela)
$sql_busca = "select * from tb_cliente where id_cliente = {$id_cliente}";
$resultado = mysqli_query($conexao, $sql_busca);

$nome = $cpf = $email = $telefone = $senha = "";
if($linha = mysqli_fetch_assoc($resultado)){
    $nome     = $linha['nome'];
    $cpf      = $linha['cpf'];
    $email    = $linha['email'];
    $telefone = $linha['telefone'];
    $senha    = $linha['senha'];
}

$titulo_da_pagina = "Atualizar Cliente";
include "inc-cabecalho.php";
?>
<body>
    <?php include "inc-menu.php"; ?>
    <main class="container mt-4 pt-3 mb-2">
        <h1>Atualizar Cliente: <?= htmlspecialchars($nome) ?></h1>
        
        <form method="post" action="cliente-atualizar.php?id_cliente=<?= $id_cliente ?>">
            
            <div class="mb-2">
                <label class="form-label">Nome:</label>
                <input type="text" name="nome" class="form-control" value="<?= htmlspecialchars($nome) ?>">
            </div>
            
            <div class="mb-2">
                <label class="form-label">CPF:</label>
                <input type="text" name="cpf" class="form-control" value="<?= htmlspecialchars($cpf) ?>">
            </div>
            
            <div class="mb-2">
                <label class="form-label">E-mail:</label>
                <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($email) ?>">
            </div>

            <div class="mb-2">
                <label class="form-label">Telefone:</label>
                <input type="text" name="telefone" class="form-control" value="<?= htmlspecialchars($telefone) ?>">
            </div>

            <div class="mb-2">
                <label class="form-label">Senha:</label>
                <input type="password" name="senha" class="form-control" value="<?= htmlspecialchars($senha) ?>">
            </div>
            
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            <a href="cliente-listagem.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </main>
<?php
mysqli_close($conexao);
include "inc-footer.php";
?>
</body>