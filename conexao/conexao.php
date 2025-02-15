<?php
// conexao/conexao.php

$servidor = "br536.hostgator.com.br";
$usuario_bd = "fel28016_felipealmeidadev";
$senha_bd   = "seis@91seise23";
$banco      = "fel28016_petshop";

$conn = mysqli_connect($servidor, $usuario_bd, $senha_bd, $banco);

if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}
?>
