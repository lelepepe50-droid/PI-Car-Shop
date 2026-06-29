<<<<<<< Updated upstream
<?php
include "inc-conexao.php";

// CORREÇÃO 1: Protege contra SQL Injection garantindo que o ID seja um número inteiro
$id_carro = isset($_GET['id_carro']) ? (int)$_GET['id_carro'] : 0;

<body>
    <?php include "inc-menu.php";?>
    <main class="container mt-5">
        <h1>Visualizar Discografia </h1>
    <div class= "letra-cor">
       <img src="<?=$marca; ?>" alt="<?=$modelo; ?>"  class= "capa-carro" > <br>
        Artista:    <?=$artista; ?> <br>
        Nome do álbum:   <?=$album; ?> <br>
        Ano de lançamento: <?=$ano; ?>    <br>
        Tipo:   <?=$tipo; ?> <br>
    </div>
    </main>

 
$sql = "select * from tb_carro where id_carro = $id_carro";
$resultado = mysqli_query($conexao, $sql);
 
$marca = $modelo = $ano = $quilometragem = $placa = $foto = $cor = $preco = $status = "";

// Alterado para IF, pois a busca por ID só retorna 1 carro
if($linha = mysqli_fetch_assoc($resultado)){
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
?>
<body>
    <main class="container mt-5">
        <h1>Veículo Visualizar</h1>
        
        <div class="letra-cor">
            <img src="<?=$foto; ?>" alt="<?=$marca . ' ' . $modelo; ?>" class="capa-album"> <br>
            
            Marca: <?=$marca; ?> <br>
            Modelo: <?=$modelo; ?> <br>
            Ano: <?=$ano; ?> <br>
            Quilometragem: <?=number_format((float)$quilometragem, 0, ',', '.'); ?> km <br>
            Cor: <?=$cor; ?> <br>
            Placa: <?=$placa; ?> <br>
            Preço: R$ <?=number_format((float)$preco, 2, ',', '.'); ?> <br>
            Status: <?=$status; ?> <br>
        </div>
    </main>
</body>