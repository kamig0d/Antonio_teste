<!DOCTYPE html>
 <html lang="pt-bt">
        <head>
            <meta charset="utf-8">
            <title>Teste  Web</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="Antonio Izilvane">
            <meta name="description" content="CURSO DE HTML5 E CSS 3">
            <link rel="stylesheet" href="usuario.css">
            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/jquery.mask.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/bootstrap-notify.min.js"></script>
            
            
        
            
            <script type="text/javascript">
                          
            
                 $("document").ready(function(){
                  $("#form4").submit(function(){
                   
                    var dados = $("#form4").serialize();
                    $.ajax({
                      type: "POST",
                      dataType: "html",
                      url: "alteraStatus.php", 
                      data: dados,
                      success: function(msg) {
                        $("#dados").html($consulta);
                      }

                    
                    });
                    
                  });
                });
               
            
            
            </script>

            
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
           <h1>Controle de Férias</h1>
           <hr>
           <br>
           
           <form method="post" name="form4" id="form4" onsubmit="" >

               <br>
               
               Id do motorista :
               <input type="text" autofocus placeholder="Buscar Motorista" name="id" id="id" >
              <br>
              <br>
              
              Alterar status do(a) Motorista por ID:
              <br>
              <br>
              <input type="radio" name="status" id="status" value="ativo" checked>Ativo
              <input type="radio" name="status" id="status" value="inativo">Inativo
              <br>
              <input type="submit" id="ok" name="ok" class="btn" value="ok">
              
            
             
               
           </form>
           
             

              
              
        
           
       </section>
   </div>
</body>
</html>