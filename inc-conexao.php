<?php
$conexao = mysqli_connect("localhost","root","", "db_carros_projeto_integrador");
if(!$conexao){
    die("<h3>erro</h3>" . mysqli_connect_errno());
}
?>