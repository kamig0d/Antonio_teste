<?php 

include_once("conecta.php");


    $nome  = (isset($_POST['nome']))? $_POST['nome']: '';
    $data_nasc = (isset($_POST['data_nasc']))? $_POST['data_nasc']: '';
    $cpf = (isset($_POST['cpf']))? $_POST['cpf']: '';
    $modelo = (isset($_POST['modelo']))? $_POST['modelo']: '';
    $sexo = (isset($_POST['sexo']))? $_POST['sexo']: '';
    $status = (isset($_POST['status']))? $_POST['status']: '';

    

$sql = "INSERT INTO motorista(nome,cpf_cnpj,data_nasc,mod_car,sexo,status) VALUES ('$nome','$cpf','$data_nasc','$modelo','$sexo','$status')";
    
    

if(mysqli_query($conn,$sql)){
    echo "Dado inserido!";
    exit;
  }
  else {
    echo "Error: " . "<br/>" . $conn-> error;
    exit;
  }


?>