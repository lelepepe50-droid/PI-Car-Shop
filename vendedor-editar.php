<?php
$id_vendedor = $_GET['id_vendedor'] ?? null;

if (!$id_vendedor) {
    die("Erro: ID do vendedor não fornecido.");
}

include "inc-conexao.php";

$sql = "select * from tb_vendedor where id_vendedor = {$id_vendedor}";
$resultado = mysqli_query($conexao, $sql);

$nome = $cpf = $email = $telefone = $senha = $nome_da_loja = $endereco = "";

if ($linha = mysqli_fetch_assoc($resultado)) {
    $nome          = $linha['nome'];
    $cpf           = $linha['cpf'];
    $email         = $linha['email'];
    $telefone      = $linha['telefone'];
    $senha         = $linha['senha'];
    $nome_da_loja  = $linha['nome_da_loja'] ?? ""; // Evita erro se não existir
    $endereco      = $linha['endereco'] ?? "";     // Evita erro se não existir
} else {
    die("Erro: Vendedor não encontrado.");
}

$titulo_da_pagina = "Editar Vendedor";
include "include/inc-cabecalho.php";
?>
<body class="bg-secondary">
    <?php include "include/inc-menu.php"; ?>
    <main class="container text-white pt-3 mb-2">
        <h1>Editar Vendedor: <?= htmlspecialchars($nome) ?></h1>
        
        <form method="post" action="vendedor-atualizar.php?id_vendedor=<?= $id_vendedor ?>">
            
            <div class="mb-2">
                <label class="form-label">Nome:</label>
                <input type="text" name="nome" class="form-control" value="<?= htmlspecialchars($nome) ?>" required>
            </div>
            
            <div class="mb-2">
                <label class="form-label">CPF:</label>
                <input type="text" name="cpf" class="form-control" value="<?= htmlspecialchars($cpf) ?>">
            </div>

            <div class="mb-2">
                <label class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($email) ?>" required>
            </div>
            
            <div class="mb-2">
                <label class="form-label">Telefone:</label>
                <input type="text" name="telefone" class="form-control" value="<?= htmlspecialchars($telefone) ?>">
            </div>
            
            <div class="mb-2">
                <label class="form-label">Nome da Loja:</label>
                <input type="text" name="nome_da_loja" class="form-control" value="<?= htmlspecialchars($nome_da_loja) ?>">
            </div>

            <div class="mb-2">
                <label class="form-label">Endereço:</label>
                <input type="text" name="endereco" class="form-control" value="<?= htmlspecialchars($endereco) ?>">
            </div>

            <div class="mb-2">
                <label class="form-label">Senha:</label>
                <input type="password" name="senha" class="form-control" value="<?= htmlspecialchars($senha) ?>" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Atualizar Vendedor</button>
            <a href="vendedor-listagem.php" class="btn btn-light">Cancelar</a>
        </form>
    </main>
<?php
mysqli_close($conexao);
include "include/inc-footer.php";
?>
</body>
</html>
