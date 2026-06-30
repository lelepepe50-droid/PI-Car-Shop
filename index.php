<?php
$titulo_da_pagina = "página principal";
include "include/inc-cabecalho.php"
?>

<body class="d-flex flex-column min-vh-100 ">
  <main>
    <?php include "include/inc-menu.php" ?>
    
    <?php include "include/inc-carrousel-marcas.php" ?>
    
    <?php include "include/inc-historia-das-marcas.php" ?>

    <h1 class="text-center fs-3 mt-4 mb-4 text-uppercase fw-bold">Carros Disponíveis</h1>

<div class="container">
    <div class="row">
        <?php 
        include "inc-conexao.php";
        $sql = "select * from tb_carro order by marca, ano";
        $resultado = mysqli_query($conexao, $sql);
        
        while ($linha = mysqli_fetch_assoc($resultado)) { 
        ?>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="cartao">
                    <img src="<?= $linha['foto']; ?>" alt="<?= $linha['modelo']; ?>" class="img-cartao">
                    
                    <div class="cor-cartao">
                        <div class="texto-cartao p-3">
                            <h1 class="fs-4 m-0"><?= mb_strtoupper($linha['marca']); ?></h1>
                            <h2 class="fs-5 m-0"><?= $linha['modelo']; ?></h2>
                            <h3 class="fs-6 mt-1 mb-2"><?= $linha['ano']; ?> — <?= $linha['cor']; ?></h3>
                            
                            <div class="fw-bold fs-5 text-warning">
                                R$ <?= number_format($linha['preco'], 2, ',', '.'); ?>
                            </div>
                        </div>    
                    </div>  
                </div>
            </div>
        <?php 
        } 
        ?>
    </div>   
</div>

  </main>
  <?php include "include/inc-footer.php" ?>
</body>

</html>