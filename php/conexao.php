<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "bd_magcine");
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

?>