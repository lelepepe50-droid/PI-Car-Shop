<?php
$id_cliente = isset($_GET['id_cliente']) ? (int) $_GET['id_cliente'] : 0;

if ($id_cliente <= 0) {
    header("Location: cliente-listagem.php");
    exit;
}

include "inc-conexao.php";

$sql = "select * from tb_cliente where id_cliente = {$id_cliente}";
$resultado = mysqli_query($conexao, $sql);

$nome = $cpf = $email = $telefone = $senha = "";
if ($linha = mysqli_fetch_assoc($resultado)) {
    $nome = $linha['nome'];
    $cpf = $linha['cpf'];
    $email = $linha['email'];
    $telefone = $linha['telefone'];
    $senha = $linha['senha'];
} else {
    mysqli_close($conexao);
    header("Location: cliente-listagem.php");
    exit;
}

$titulo_da_pagina = "Editar cliente";
include "include/inc-cabecalho.php";
?>
<body class="bg-secondary">
    <?php include "include/inc-menu.php"; ?>
    <main class="container pt-3 mb-2 text-white">
        <h1>Editar Cliente: <?= htmlspecialchars($nome) ?></h1>
        <form method="post" action="cliente-atualizar.php?id_cliente=<?= $id_cliente ?>">
            <div class="mb-2">
                <label class="form-label">Nome:</label>
                <input type="text" name="nome" class="form-control" value="<?= htmlspecialchars($nome) ?>" required>
            </div>
            <div class="mb-2">
                <label class="form-label">CPF:</label>
                <input type="text" name="cpf" class="form-control" value="<?= htmlspecialchars($cpf) ?>" required>
            </div>
            <div class="mb-2">
                <label class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($email) ?>" required>
            </div>
            <div class="mb-2">
                <label class="form-label">Telefone:</label>
                <input type="text" name="telefone" class="form-control" value="<?= htmlspecialchars($telefone) ?>" required>
            </div>
            <div class="mb-2">
                <label class="form-label">Senha:</label>
                <input type="password" name="senha" class="form-control" value="<?= htmlspecialchars($senha) ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar cliente</button>
            <a href="cliente-listagem.php" class="btn btn-light">Cancelar</a>
        </form>
    </main>
<?php
mysqli_close($conexao);
include "include/inc-footer.php";
?>
</body>
</html>
