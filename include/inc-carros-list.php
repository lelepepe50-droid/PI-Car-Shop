<body>
    <?php include "inc-menu.php";?>
    <main class="container mt-5">
        <h1>Visualizar Discografia </h1>
    <div class= "letra-cor">
       <img src="<?=$foto; ?>" alt="<?=$album; ?>" class= "capa-album" > <br>
        Artista:    <?=$artista; ?> <br>
        Nome do álbum:   <?=$album; ?> <br>
        Ano de lançamento: <?=$ano; ?>    <br>
        Tipo:   <?=$tipo; ?> <br>
    </div>
    </main>
 
    <?php include "inc-rodape.php"?>
</body>
