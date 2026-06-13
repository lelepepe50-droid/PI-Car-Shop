<?php
$id = $_GET['id'];
include "inc-conexao.php";
$sql = "select * from tb_cliente where id_cliente = {$id_cliente}";
$resultado = mysqli_query($conexao, $sql);
$nome = $artista = $foto = $tipo = $ano = "";
while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha['nome'];
    $cpf = $linha ['cpf'];
    $email = $linha ['email'];
    $telefone = $linha ['telefone'];
    $senha = $linha ['senha'];
}

include "inc-cabecalho.php";
?>
<body>
    <?php include "inc-menu.php"; ?>
    <main class="container">
        <h1>Editar Disco: <?= $nome?></h1>
        <form method="post" action="discografia-atualizar.php?id_cliente=<?= $id_cliente ?>">
            Artista: <input name="artista" value="<?= $artista?>"> <br>
            nome do álbum: <input name="nome" value="<?= $nome ?>"> <br>
            cpf: <input type="number" name="cpf" value="<?= $cpf ?>"> <br>
            email: <input name="email" value="<?= $email ?>"> <br>
            email: <input name="email" value="<?= $email ?>"> <br>
            email: <input name="email" value="<?= $email ?>"> <br>
            Tipo:
            <select name="tipo">
                <option value=""></option>
                <option value="álbum" <?php if($tipo == 'album'){ echo "selected";} ?>>Álbum</option>
                <option value="single"<?php if($tipo == 'single'){ echo "selected";} ?>>Single</option>
                <option value="EP" <?php if($tipo == 'EP'){ echo "selected";} ?>>EP</option>
            </select><br>
            <button type="submit">Atualizar disco</button>
        </form>
    </main>
<?php
mysqli_close($conexao);
include "inc-rodape.php";
?>
</body>