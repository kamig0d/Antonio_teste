<?php

include_once("conecta.php");

    $motorista  = (isset($_POST['motorista']))? $_POST['motorista']: '';
    $passageiro = (isset($_POST['passageiro']))? $_POST['passageiro']: '';
    $valor = (isset($_POST['valor']))? $_POST['valor']: '';
    
    $sql_moto = "SELECT  * FROM motorista WHERE STATUS like 'ativo%' and nome='$motorista' ";
    $sql_pass = "SELECT  * FROM passageiro WHERE nome='$passageiro' ";
    
    $consulta_moto = mysqli_query($conn,$sql_moto);
    $consulta_pass = mysqli_query($conn,$sql_pass);
    
    $conta_moto = mysqli_num_rows($consulta_moto);
    $conta_pass = mysqli_num_rows($consulta_pass);

    if($conta_moto > 0 && $conta_pass > 0){
        $sql = "INSERT INTO corridas (motorista,passageiro,valor_corrida) VALUES ('$motorista','$passageiro','$valor') ";
        $registra = mysqli_query($conn,$sql);
        echo "Registro efetuado com sucesso!";
    }
    else{
        echo "Erro no registro. Verifique se ambos estão registrados no sistema ou se o motorista nao esta inativo.";
        echo "Os nomes devem ser inseridos corretamente.";
    }

    mysqli_close($conn);

?>