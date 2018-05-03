<?php 

$servidor="localhost";
$usuario="root";
$senha="";
$database="teste_web";

$conn = new mysqli($servidor,$usuario,$senha,$database);

if (!$conn){
    die ('Falha na conexão com o banco de dados');
}


?>