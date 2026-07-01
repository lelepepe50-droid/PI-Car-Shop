<?php
include "inc-conexao.php";

$id_vendedor = isset($_GET['id_vendedor']) ? (int) $_GET['id_vendedor'] : 0;

if ($id_vendedor <= 0) {
    header("Location: vendedor-listagem.php");
    exit;
}

$sql = "select nome, cpf, email, telefone, nome_da_loja, endereco from tb_vendedor where id_vendedor = {$id_vendedor}";
$resultado = mysqli_query($conexao, $sql);

if (!$linha = mysqli_fetch_assoc($resultado)) {
    mysqli_close($conexao);
    header("Location: vendedor-listagem.php");
    exit;
}

$titulo_da_pagina = "Vendedor Visualizar";
include "include/inc-cabecalho.php";
?>
<body>
    <?php include "include/inc-menu.php"; ?>

    <main class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
            <h1 class="h2 text-dark m-0">Visualizar Detalhes do Vendedor</h1>
            <a href="vendedor-listagem.php" class="btn btn-outline-secondary btn-sm">
                <i class="bi bi-arrow-left"></i> Voltar para a lista
            </a>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white py-3">
                        <h5 class="card-title mb-0 d-flex align-items-center">
                            <i class="bi bi-person-vcard me-2 fs-4"></i> Info. do Perfil
                        </h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="row g-4">
                            <div class="col-12">
                                <label class="text-muted small text-uppercase fw-bold mb-1">Nome Completo</label>
                                <p class="fs-5 text-dark border-bottom pb-2 mb-0 fw-semibold"><?= htmlspecialchars($linha['nome']) ?></p>
                            </div>

                            <div class="col-sm-6">
                                <label class="text-muted small text-uppercase fw-bold mb-1">CPF</label>
                                <p class="fs-6 text-dark border-bottom pb-2 mb-0"><?= htmlspecialchars($linha['cpf']) ?></p>
                            </div>

                            <div class="col-sm-6">
                                <label class="text-muted small text-uppercase fw-bold mb-1">Telefone / WhatsApp</label>
                                <p class="fs-6 text-dark border-bottom pb-2 mb-0"><?= htmlspecialchars($linha['telefone']) ?></p>
                            </div>

                            <div class="col-12">
                                <label class="text-muted small text-uppercase fw-bold mb-1">E-mail Cadastrado</label>
                                <p class="fs-6 text-dark border-bottom pb-2 mb-0">
                                    <a href="mailto:<?= htmlspecialchars($linha['email']) ?>" class="text-decoration-none text-primary"><?= htmlspecialchars($linha['email']) ?></a>
                                </p>
                            </div>

                            <div class="col-sm-6">
                                <label class="text-muted small text-uppercase fw-bold mb-1">Nome da Loja</label>
                                <p class="fs-6 text-dark border-bottom pb-2 mb-0"><?= htmlspecialchars($linha['nome_da_loja']) ?></p>
                            </div>

                            <div class="col-sm-6">
                                <label class="text-muted small text-uppercase fw-bold mb-1">Endereco</label>
                                <p class="fs-6 text-dark border-bottom pb-2 mb-0"><?= htmlspecialchars($linha['endereco']) ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-light d-flex justify-content-end gap-2 py-3">
                        <a href="vendedor-editar.php?id_vendedor=<?= $id_vendedor ?>" class="btn btn-warning px-4">
                            <i class="bi bi-pencil-square me-1"></i> Editar Dados
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php
mysqli_close($conexao);
include "include/inc-footer.php";
?>
</body>
</html>
