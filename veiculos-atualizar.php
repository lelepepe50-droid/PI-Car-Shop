<?php
$id_carro = $_GET['id_carro'] ?? null;

if (!$id_carro) {
    die("Erro: ID do carro não fornecido.");
}

include "inc-conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $marca     = $_POST['marca'];
    $modelo      = $_POST['modelo'];
    $ano    = $_POST['ano'];
    $quilometragem = $_POST['quilometragem'];
    $placa    = $_POST['placa'];
    $foto = $_POST['foto'];
    $cor    = $_POST['cor'];
    $preco    = $_POST['preco'];

    $sql_update = "update tb_carro set marca='{$marca}', modelo='{$modelo}', ano='{$ano}', quilometragem='{$quilometragem}', placa='{$placa}', foto='{$foto}', cor='{$cor}'preco='{$preco}' where id_carro={$id_carro}";
    mysqli_query($conexao, $sql_update);

    mysqli_close($conexao);
    
    header('Location:veiculos-listagem.php');
}

$sql = "select * from tb_carro where id_carro = {$id_carro}";
$resultado = mysqli_query($conexao, $sql);

$marca = $modelo = $ano  = $quilometragem = $placa = $foto = $preco = "";
if($linha = mysqli_fetch_assoc($resultado)){
    $marca     = $linha['marca'];
    $modelo      = $linha['modelo'];
    $ano    = $linha['ano'];
    $quilometragem = $linha['quilometragem'];
    $placa    = $linha['placa'];
    $foto    = $linha['foto'];
    $preco    = $linha['preco'];
}

$titulo_da_pagina = "Atualizar Carro";
include "include/inc-cabecalho.php";
?>
<body>
    <?php include "include/inc-menu.php"; ?>
    <main class="container mt-4 pt-3 mb-2">
        <h1>veiculos atualizar <?= htmlspecialchars($marca) ?></h1>
        
        <form method="post" action="cliente-atualizar.php?id_cliente=<?= $id_carro ?>">
            
            <div class="mb-2">
                <label class="form-label">marca:</label>
                <input type="text" name="marca" class="form-control" value="<?= htmlspecialchars($marca) ?>">
            </div>
            
            <div class="mb-2">
                <label class="form-label">modelo:</label>
                <input type="text" name="modelo" class="form-control" value="<?= htmlspecialchars($modelo) ?>">
            </div>
            
            <div class="mb-2">
                <label class="form-label">ano:</label>
                <input type="ano" name="ano" class="form-control" value="<?= htmlspecialchars($ano) ?>">
            </div>

            <div class="mb-2">
                <label class="form-label">quilometragem:</label>
                <input type="text" name="quilometragem" class="form-control" value="<?= htmlspecialchars($quilometragem) ?>">
            </div>

            <div class="mb-2">
                <label class="form-label">placa:</label>
                <input type="text" name="placa" class="form-control" value="<?= htmlspecialchars($placa) ?>">
            </div>

             <div class="mb-2">
                <label class="form-label">foto:</label>
                <input type="link" name="foto" class="form-control" value="<?= htmlspecialchars($foto) ?>">
            </div>

            div class="mb-2">
                <label class="form-label">preco:</label>
                <input type="decimal" name="preco" class="form-control" value="<?= htmlspecialchars($preco) ?>">
            </div>
            
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            <a href="veiculos-listagem.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </main>
<?php
mysqli_close($conexao);
include "include/inc-footer.php";
?>
</body>