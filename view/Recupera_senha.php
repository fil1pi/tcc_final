<?php
require_once('Cabecalho.php');

?>
<link rel   = "stylesheet" href = "../css/css.css">
<div  class = "card" id         = "telalogin">
<div  class = "card-body text-center">

  <h1 class = "font-italic">Siscul</h1>
  <h3 class = "font-italic">A nossa plataforma de gerenciamento!</h3>


                <form action = "../Controllers/Recuperar.php" method = "post">
                    
                
                <div class = "form-group">
 <br>
 
                        <p class = "font-italic"> Recuperar Senha</p>
                        <p class = "text-center text-danger">
                            <?php
                            #filipi

                            if (isset($_SESSION["ErroEmail"]) ) {
                              # code...
                              $msgerro = $_SESSION["ErroEmail"];
                             echo "<div class='alert alert-danger' role='alert'> $msgerro </div>";
                             unset($_SESSION["ErroEmail"]);
                            }
                            
                            ?>

                       </p>
                        <label for  = "email"></label>
                        <input type = "text" class = " rounded-pill form-control" id = "email"name = "email" placeholder = "Email">
                        <code>Insira o email cadastrado e receba um link Na sua caixa de Entrada.</code>
                    </div>
                    
                    <button type = "submit" class = "btn btn-outline-primary btn-lg btn-block" name = "butaum">Enviar</button>
                    <br>
                <br>
                </form>
                
                   
                    

  </div>
</div>
<div id = "aleatorio"></div>
<?php
require_once('Footer.php');
?>