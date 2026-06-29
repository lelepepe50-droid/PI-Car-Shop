
<?php
include "inc-conexao.php";
// 1. Protege contra SQL Injection garantindo que o ID seja um número inteiro
$id_carro = isset($_GET['id_carro']) ? (int)$_GET['id_carro'] : 0;

// 2. Inicializa as variáveis para evitar avisos de erro (Undefined Variable)
$marca = $modelo = $ano = $quilometragem = $placa = $foto = $cor = $preco = $status = "";

// 3. Executa a busca no banco de dados ANTES de renderizar o HTML
if ($id_carro > 0) {
    $sql = "SELECT * FROM tb_carro WHERE id_carro = $id_carro";
    $resultado = mysqli_query($conexao, $sql);
    
    // Busca os dados do carro correspondente
    if ($linha = mysqli_fetch_assoc($resultado)) {
        $marca          = $linha['marca'];
        $modelo         = $linha['modelo'];
        $ano            = $linha['ano'];
        $quilometragem  = $linha['quilometragem'];
        $placa          = $linha['placa'];
        $foto           = $linha['foto'];
        $cor            = $linha['cor'];
        $preco          = $linha['preco'];
        $status         = $linha['status'];
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Visualizar Veículo</title>
    </head>
<body>
    <?php include "inc-menu.php"; ?>

    <main class="container mt-5">
        <h1>Visualizar Veículo</h1>
        
        <div class="letra-cor">
            <?php if (!empty($foto)): ?>
                <img src="<?=$foto; ?>" alt="<?=$marca . ' ' . $modelo; ?>" class="capa-carro" style="max-width: 300px;"> <br>
            <?php endif; ?>
            
            <strong>Marca:</strong> <?=$marca; ?> <br>
            <strong>Modelo:</strong> <?=$modelo; ?> <br>
            <strong>Ano:</strong> <?=$ano; ?> <br>
            <strong>Quilometragem:</strong> <?=number_format((float)$quilometragem, 0, ',', '.'); ?> km <br>
            <strong>Cor:</strong> <?=$cor; ?> <br>
            <strong>Placa:</strong> <?=$placa; ?> <br>
            <strong>Preço:</strong> R$ <?=number_format((float)$preco, 2, ',', '.'); ?> <br>
            <strong>Status:</strong> <?=$status; ?> <br>
        </div>
    </main>
</body>
</html>