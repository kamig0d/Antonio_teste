<?php 

include_once("conecta.php");


    $nome  = (isset($_POST['nome']))? $_POST['nome']: '';
    $data_nasc = (isset($_POST['data_nasc']))? $_POST['data_nasc']: '';
    $cpf = (isset($_POST['cpf']))? $_POST['cpf']: '';
    $sexo = (isset($_POST['sexo']))? $_POST['sexo']: '';


    

$sql = "INSERT INTO passageiro(nome,cpf_cnpj,data_nasc,sexo) VALUES ('$nome','$cpf','$data_nasc','$sexo')";
    
    

if(mysqli_query($conn,$sql)){
    echo "Dado inserido!";
    exit;
  }
  else {
    echo "Error: " . "<br/>" . $conn-> error;
    exit;
  }

mysqli_close($conn);

?>