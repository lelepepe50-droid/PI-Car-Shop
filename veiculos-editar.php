<?php
$id_carro = $_GET['id_carro'];
include "inc-conexao.php";
$sql = "select * from tb_carro where id_carro = {$id_carro} ";
$resultado = mysqli_query($conexao, $sql);
$marca = $modelo = $ano = $quilometragem = $placa = $foto = $cor = $preco = "";
while($linha = mysqli_fetch_assoc($resultado)){
    $marca = $linha['marca'];
    $modelo = $linha['modelo'];
    $ano = $linha['ano'];
    $quilometragem = $linha['quilometragem'];
    $placa = $linha['placa'];
    $foto = $linha['foto'];
    $cor = $linha['cor'];
    $preco = $linha['preco'];
}
$titulo_da_pagina = "Editar carrro";
include "include/inc-cabecalho.php";
?>
<body class="bg-secondary">
    <?php include "include/inc-menu.php"; ?>
    <main class="container pt-3 mb-2">
        <h1>Editar veiculos: <?= $marca?></h1>
        <form method="post" action="veiculos-salvar-atualizacao.php?id_carro=<?= $id_carro ?>">
            <div class="mb-2">
                <label class="form-label">marca:</label>
                <input type="text" name="marca" class="form-control" value="<?= $marca ?>">
            </div>
            <div class="mb-2">
                <label class="form-label">modelo:</label>
                <input type="modelo" name="modelo" class="form-control" value="<?= $modelo ?>">
            </div>
            <div class="mb-2">
                <label class="form-label">ano:</label>
                <input type="text" name="ano" class="form-control" value="<?= $ano ?>">
            </div>
            <div class="mb-2">
                <label class="form-label">quilometragem:</label>
                <input type="password" name="quilometragem" class="form-control" value="<?= $quilometragem ?>">
            </div>
            <div class="mb-2">
                <label class="form-label">placa:</label>
                <input type="password" name="placa" class="form-control" value="<?= $placa ?>">
            </div>
            <div class="mb-2">
                <label class="form-label">foto:</label>
                <input type="password" name="foto" class="form-control" value="<?= $foto ?>">
            </div>
             <div class="mb-2">
                <label class="form-label">cor:</label>
                <input type="password" name="cor" class="form-control" value="<?= $cor ?>">
            </div>
             <div class="mb-2">
                <label class="form-label">preco:</label>
                <input type="password" name="preco" class="form-control" value="<?= $preco ?>">
            </div>
            <button type="submit" class="btn btn-primary">Atualizar carro</button>
        </form>
    </main>
<?php
mysqli_close($conexao);
include "include/inc-footer.php";
?>
</body>