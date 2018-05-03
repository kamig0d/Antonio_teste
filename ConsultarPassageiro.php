<?php
                      
    include_once("conecta.php");
    $pesq_pass  = (isset($_POST['pesq_pass']))? $_POST['pesq_pass']: '';
    $sql = "SELECT * from passageiro where nome like '%$pesq_pass%' order by nome";
    $consulta = mysqli_query($conn,$sql);  
    $registros = mysqli_num_rows($consulta);
                      
?>


<!DOCTYPE html>
 <html lang="pt-bt">
        <head>
            <meta charset="utf-8">
            <title>Teste  Web</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="Antonio Izilvane">
            <meta name="description" content="CURSO DE HTML5 E CSS 3">
            <link rel="stylesheet" href="styleConsulta.css">
            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/jquery.mask.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/bootstrap-notify.min.js"></script>
            

            
        </head>
        
<body>
           
    <div class="container">
       <nav>
           <ul class="menu">
               <li><a href="Motorista.html">Motorista Cadastro</a></li>
               <li><a href="Passageiro.html">Passageiro Cadastro</a></li>
               <li><a href="RegistraCorrida.html">Registrar Corrida</a></li>
               <li><a href="consultarCorridas.php">Consultar Corrida</a></li>
               <li><a href="ConsultarMotorista.php">Consultar Motoristas</a></li>
               <li><a href="ConsultarPassageiro.php">Consultar Passageiro</a></li>
               <li><a href="ControleFerias.php">Controle de Ferias</a></li>
           </ul>
       </nav>
       
       <section>
           <h1>Consulta de Passageiros</h1>
           <hr>
           <br>
           
           <form method="post" name="form5" id="form5" onsubmit="" >
               
               <input type="submit" id="procurar" name="submit" class="btn procurar" value="Procurar" >
               

               <br>
               <br>
               
               Pesquisar Passageiro :
               <input type="text" autofocus placeholder="Buscar Passageiro" name="pesq_pass" id="pesq_pass" >
               
                  <div id="dados" name="dados">
                      
                      <?php
                      
                      print "<br>";
                      print "$registros registros encontrados<br><br>";
                      
                      while($exibir = mysqli_fetch_array($consulta)){
                          
                          
                          $nome = $exibir[0];
                          $cpf_cnpj = $exibir[1];
                          $data_nasc = $exibir[2];
                          $sexo = $exibir[3];
                          $id = $exibir[4];
                          
                          print "<article>";
                              print "ID: $id<br>";
                              print "Passageiro: $nome<br>";;
                              print "CPF_CNPJ: $cpf_cnpj<br>";
                              print "Sexo: $sexo<br>";
                              print "data de nascimento: $data_nasc<br><br>";
                          
                           print "</article>";  
                      }
                      mysqli_close($conn);
                          
                      ?>
                                                    
                         
                              

                      
                  </div>
               
           </form>
           

       </section>
   </div>
</body>
</html>