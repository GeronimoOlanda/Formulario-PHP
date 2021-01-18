<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname="escalademo";
try{
    //conectando ao db usando POO
$mysqli = new mysqli($servidor, $usuario, $senha, $dbname);


}catch(Exception $e){
    echo "Erro " , $e->getMessage();
}
