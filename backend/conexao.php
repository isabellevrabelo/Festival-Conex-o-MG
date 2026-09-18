<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "festival_conexao";
$port = 3306;

/** @var mysqli $conexao */
$conexao = mysqli_connect($host,$user,$pass,$db,$port);

if (!$conexao) {
    die("Erro de conexão.Tente novamente mais tarde!");
    error_log("Erro" . mysqli_connect_error());
} 
// else {
//     echo"S";
// }
?>