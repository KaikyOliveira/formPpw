<?php

$nome = $_GET['nome1'];
$email = $_GET['email'];
$data = $_GET['data'];
$senha = $_GET['password'];
$criptografada = crypt($senha);

$mysqli = new mysqli("localhost","root","","form");
$mysqli->query("INSERT INTO cadastro VALUES('$nome','$email','$data','$criptografada')");

header('Location: ./index.html#form');


?>