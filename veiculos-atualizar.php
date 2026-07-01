<?php
$id_carro = isset($_GET['id_carro']) ? (int) $_GET['id_carro'] : 0;

if ($id_carro <= 0) {
    header('Location: veiculos-listagem.php');
    exit;
}

include "inc-conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $marca = mysqli_real_escape_string($conexao, $_POST['marca'] ?? '');
    $modelo = mysqli_real_escape_string($conexao, $_POST['modelo'] ?? '');
    $ano = (int) ($_POST['ano'] ?? 0);
    $quilometragem = (float) ($_POST['quilometragem'] ?? 0);
    $placa = mysqli_real_escape_string($conexao, $_POST['placa'] ?? '');
    $foto = mysqli_real_escape_string($conexao, $_POST['foto'] ?? '');
    $cor = mysqli_real_escape_string($conexao, $_POST['cor'] ?? '');
    $preco = (float) ($_POST['preco'] ?? 0);
    $status = mysqli_real_escape_string($conexao, $_POST['status'] ?? 'disponivel');

    $sql_update = "update tb_carro set
        marca = '{$marca}',
        modelo = '{$modelo}',
        ano = {$ano},
        quilometragem = {$quilometragem},
        placa = '{$placa}',
        foto = '{$foto}',
        cor = '{$cor}',
        preco = {$preco},
        status = '{$status}'
        where id_carro = {$id_carro}";

    mysqli_query($conexao, $sql_update);
    mysqli_close($conexao);

    header('Location: veiculos-listagem.php');
    exit;
}

$sql = "select * from tb_carro where id_carro = {$id_carro}";
$resultado = mysqli_query($conexao, $sql);

$marca = $modelo = $ano = $quilometragem = $placa = $foto = $cor = $preco = $status = "";
if ($linha = mysqli_fetch_assoc($resultado)) {
    $marca = $linha['marca'];
    $modelo = $linha['modelo'];
    $ano = $linha['ano'];
    $quilometragem = $linha['quilometragem'];
    $placa = $linha['placa'];
    $foto = $linha['foto'];
    $cor = $linha['cor'];
    $preco = $linha['preco'];
    $status = $linha['status'];
} else {
    mysqli_close($conexao);
    header('Location: veiculos-listagem.php');
    exit;
}

$titulo_da_pagina = "Atualizar Veiculo";
include "include/inc-cabecalho.php";
?>
<body class="bg-secondary">
    <?php include "include/inc-menu.php"; ?>
    <main class="container mt-4 pt-3 mb-2 text-white">
        <h1>Atualizar Veiculo: <?= htmlspecialchars($marca . " " . $modelo) ?></h1>

        <form method="post" action="veiculos-atualizar.php?id_carro=<?= $id_carro ?>">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <label class="form-label">Marca:</label>
                    <input type="text" name="marca" class="form-control" value="<?= htmlspecialchars($marca) ?>" required>
                </div>
                <div class="col-md-6 mb-2">
                    <label class="form-label">Modelo:</label>
                    <input type="text" name="modelo" class="form-control" value="<?= htmlspecialchars($modelo) ?>" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-2">
                    <label class="form-label">Ano:</label>
                    <input type="number" name="ano" class="form-control" value="<?= htmlspecialchars($ano) ?>" required>
                </div>
                <div class="col-md-4 mb-2">
                    <label class="form-label">Quilometragem:</label>
                    <input type="number" name="quilometragem" class="form-control" value="<?= htmlspecialchars($quilometragem) ?>" min="0" required>
                </div>
                <div class="col-md-4 mb-2">
                    <label class="form-label">Preco:</label>
                    <input type="number" name="preco" class="form-control" value="<?= htmlspecialchars($preco) ?>" min="0" step="0.01" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-2">
                    <label class="form-label">Placa:</label>
                    <input type="text" name="placa" class="form-control" value="<?= htmlspecialchars($placa) ?>" maxlength="10" required>
                </div>
                <div class="col-md-4 mb-2">
                    <label class="form-label">Cor:</label>
                    <input type="text" name="cor" class="form-control" value="<?= htmlspecialchars($cor) ?>" required>
                </div>
                <div class="col-md-4 mb-2">
                    <label class="form-label">Status:</label>
                    <select name="status" class="form-select">
                        <option value="disponivel" <?= $status == 'disponivel' ? 'selected' : '' ?>>Disponivel</option>
                        <option value="vendido" <?= $status == 'vendido' ? 'selected' : '' ?>>Vendido</option>
                        <option value="reservado" <?= $status == 'reservado' ? 'selected' : '' ?>>Reservado</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Foto:</label>
                <input type="text" name="foto" class="form-control" value="<?= htmlspecialchars($foto) ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            <a href="index.php" class="btn btn-light">Cancelar</a>
        </form>
    </main>
<?php
mysqli_close($conexao);
include "include/inc-footer.php";
?>
</body>
</html>
