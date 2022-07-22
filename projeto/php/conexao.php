<?php
$hostname = "localhost";
$bancodedados = "banco_car";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if($mysqli -> connect_errno) {
    echo "Falha ao conectar com o banco: ( . $mysqli->connect_errno . )" . $mysqli->connect_errno;
}
?>