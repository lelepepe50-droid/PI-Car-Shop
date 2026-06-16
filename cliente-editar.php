<?php
// Captura o ID do cliente que veio na URL (id_cliente=2)
$id_cliente = $_GET['id_cliente'] ?? $_GET['id'] ?? null;

include "inc-conexao.php";

// Busca os dados do cliente no banco
$sql = "select * from tb_cliente where id_cliente = {$id_cliente} ";
$resultado = mysqli_query($conexao, $sql);

$nome = $cpf = $email = $telefone = $senha = "";

while($linha = mysqli_fetch_assoc($resultado)){
    $nome     = $linha['nome'];
    $cpf      = $linha['cpf'];
    $email    = $linha['email'];
    $telefone = $linha['telefone'];
    $senha    = $linha['senha'];
}

$titulo_da_pagina = "Editar Cliente";
include "inc-cabecalho.php";
?>
<body>
    <?php include "inc-menu.php"; ?>
    <main class="container">
        <h1>Editar Cliente: <?= $nome ?></h1>
        
        <form method="post" action="cliente-atualizar.php?id_cliente=<?= $id_cliente ?>">
            
            <div class="mb-2">
                <label class="form-label">Nome:</label>
                <input type="text" name="nome" class="form-control" value="<?= $nome ?>">
            </div>
            
            <div class="mb-2">
                <label class="form-label">CPF:</label>
                <input type="text" name="cpf" class="form-control" value="<?= $cpf ?>">
            </div>
            
            <div class="mb-2">
                <label class="form-label">E-mail:</label>
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
include "inc-rodape.php";
?>
</body>