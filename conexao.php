<?php
$servername = "localhost";
$database = "usuario";
$username = "root";
$password = "";
# cria a conexão
$conn = mysqli_connect($servername, $username, $password, $database);
# verifica a conexão
if (!$conn){
    die("A conexão falhou!" . mysqli_connect_error());
}
?>