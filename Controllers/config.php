<?php
include('./conexao.php');
//capturando os dados de forma segura
$name = $mysqli->real_escape_string($_REQUEST['name']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
$message = $mysqli->real_escape_string($_REQUEST['message']);

//inserindo os dados na tabela
$sql = "INSERT INTO dados (name, email, message) VALUES('$name','$email','$message')";
if($mysqli->query($sql)==true){
    echo "Dados inseridos com sucesso!";
}else{
    echo "ERRO ao inserir os dados";
}

$mysqli->close();