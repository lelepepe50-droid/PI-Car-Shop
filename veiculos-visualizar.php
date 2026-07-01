<?php
include "inc-conexao.php";

$id_carro = isset($_GET['id_carro']) ? (int) $_GET['id_carro'] : 0;

if ($id_carro <= 0) {
    header("Location: veiculos-listagem.php");
    exit;
}

$sql = "select * from tb_carro where id_carro = {$id_carro}";
$resultado = mysqli_query($conexao, $sql);

if (!$linha = mysqli_fetch_assoc($resultado)) {
    mysqli_close($conexao);
    header("Location: veiculos-listagem.php");
    exit;
}

$titulo_da_pagina = "Visualizar Veiculo";
include "include/inc-cabecalho.php";
?>
<body class="d-flex flex-column min-vh-100 bg-light">
    <?php include "include/inc-menu.php"; ?>

    <main class="container my-5 flex-shrink-0">
        <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
            <h1 class="h2 text-dark m-0">Detalhes do Veiculo</h1>
            <a href="index.php" class="btn btn-outline-secondary btn-sm">
                <i class="bi bi-arrow-left"></i> Voltar para a lista
            </a>
        </div>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <img src="<?= htmlspecialchars($linha['foto']) ?>" class="card-img-top" alt="<?= htmlspecialchars($linha['modelo']) ?>" style="height: 360px; object-fit: cover;">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <span class="badge bg-primary mb-3"><?= htmlspecialchars($linha['status']) ?></span>
                        <h2 class="fw-bold mb-1"><?= htmlspecialchars($linha['marca']) ?></h2>
                        <h3 class="h4 text-secondary mb-4"><?= htmlspecialchars($linha['modelo']) ?></h3>

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label class="text-muted small text-uppercase fw-bold">Ano</label>
                                <p class="fs-5"><?= htmlspecialchars($linha['ano']) ?></p>
                            </div>
                            <div class="col-sm-6">
                                <label class="text-muted small text-uppercase fw-bold">Cor</label>
                                <p class="fs-5"><?= htmlspecialchars($linha['cor']) ?></p>
                            </div>
                            <div class="col-sm-6">
                                <label class="text-muted small text-uppercase fw-bold">Placa</label>
                                <p class="fs-5"><?= htmlspecialchars($linha['placa']) ?></p>
                            </div>
                            <div class="col-sm-6">
                                <label class="text-muted small text-uppercase fw-bold">Quilometragem</label>
                                <p class="fs-5"><?= number_format((float) $linha['quilometragem'], 0, ',', '.') ?> km</p>
                            </div>
                        </div>

                        <div class="border-top pt-3 mt-3">
                            <label class="text-muted small text-uppercase fw-bold">Preco</label>
                            <p class="display-6 fw-bold text-primary">R$ <?= number_format((float) $linha['preco'], 2, ',', '.') ?></p>
                        </div>
                    </div>
                    <div class="card-footer bg-white d-flex justify-content-end gap-2 py-3">
                        <a href="veiculos-atualizar.php?id_carro=<?= $id_carro ?>" class="btn btn-warning">
                            <i class="bi bi-pencil-square me-1"></i> Editar
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
