<?php
                      
    include_once("conecta.php");
    $pesq_corr  = (isset($_POST['pesq_corr']))? $_POST['pesq_corr']: '';
    $sql = "SELECT * from corridas where motorista like '%$pesq_corr%' order by id";
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
               
               Pesquisar Corridas (A busca pode ser efetuada por qualquer nome):
               <input type="text" autofocus placeholder="Buscar corridas" name="pesq_corr" id="pesq_corr" >
               
                  <div id="dados" name="dados">
                      
                      <?php
                      
                      print "<br>";
                      print "$registros registros encontrados<br><br>";
                      
                      while($exibir = mysqli_fetch_array($consulta)){
                          
                          
                          $id = $exibir[0];
                          $motorista = $exibir[1];
                          $passageiro = $exibir[2];
                          $valor = $exibir[3];

                          
                          print "<article>";
                              print "ID: $id<br>";
                              print "Motorista: $motorista<br>";;
                              print "Passageiro: $passageiro<br>";
                              print "Valor Corrida: $valor<br><br>";
                          
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