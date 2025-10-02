<?php
$servidor = "127.0.0.1";
$usuario = "root";
$senha = "usbw";
$banco = "folha_pagto";

$conn = mysqli_connect($servidor,$usuario,$senha,$banco);

if(!$conn){
    die("erro na conexão" . mysqli_connect_error());
}
?>