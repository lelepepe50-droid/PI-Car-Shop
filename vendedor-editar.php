<?php
$id_vendedor = $_GET['id_vendedor'];
include "inc-conexao.php";
$sql = "select * from tb_vendedor where id_vendedor = {$id_vendedor} ";
$resultado = mysqli_query($conexao, $sql);
$nome = $cpf = $email = $telefone = $senha = "";
while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha['nome'];
    $cpf = $linha['cpf'];
    $email = $linha['email'];
    $telefone = $linha['telefone'];
    $senha = $linha['senha'];
}
$titulo_da_pagina = "Editar vendedor";
include "inc-cabecalho.php";
?>
<body class="bg-secondary">
    <?php include "inc-menu.php"; ?>
    <main class="container pt-3 mb-2">
        <h1>Editar Cliente: <?= $nome?></h1>
        <form method="post" action="vendedor-salvar-atualizacao.phpid_vendedor=<?= $id_vendedor ?>">
            <div class="mb-2">
                <label class="form-label">Nome:</label>
                <input type="text" name="nome" class="form-control" value="<?= $nome ?>">
            </div>
            <div class="mb-2">
                <label class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" value="<?= $email ?>">
            </div>
            <div class="mb-2">
                <label class="form-label">Telefone:</label>
                <input type="text" name="telefone" class="form-control" value="<?= $telefone ?>">
            </div>
            <div class="mb-2">
                <label class="form-label">Senha:</label>
                <input type="password" name="senha" class="form-control" value="<?= $senha ?>">
            </div>
            <button type="submit" class="btn btn-primary">Atualizar cliente</button>
        </form>
    </main>
<?php
mysqli_close($conexao);
include "inc-footer.php";
?>
</body>