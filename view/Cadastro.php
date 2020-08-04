<?php
require_once('cabecalho.php');
require_once('../Controllers/protege.php');
?>
<link rel   = "stylesheet" href = "../css/css.css">
<div  class = "card" id         = "telalogin">
<div  class = "card-body text-center">

  <h1 class = "font-italic">Siscul</h1>
  <h3 class = "font-italic">A nossa plataforma de gerenciamento!</h3>
<br>
                        <p class = "font-italic"> Cadastrar novo usuario</p>
                        <?php
                            if (isset($_SESSION["ErrorCadas"]) ) {
                              # code...
                              $msgerro = $_SESSION["ErrorCadas"];
                             echo "<div class='alert alert-danger' role='alert'> $msgerro </div>";
                             unset($_SESSION["ErrorCadas"]);
                            }
                            
                            ?>

<form  action = "../Controllers/Cadastrar.php" method = "post" enctype                  = "multipart/form-data">
<div   class  = "form-group">
<label for    = "nome"> </label>
<input type   = "text" class                          = " rounded-pill form-control" id = "nome"name = "nome" placeholder = "nome de usuario">

        
            </div>

            <div   class = "form-group">
            <label for   = "preco"></label>
            <input type  = "text" class = " rounded-pill form-control" id = "email" name = "email" placeholder = "email valido">

            </div>
            <div   class = "form-group">
            <label for   = "exampleFormControlFile1"></label>
            <input type  = "password" class = " rounded-pill form-control" id = "senha" name = "senha" placeholder = "Senha">
            </div>
           

            <input  type = "hidden" name  = "id" value = "id">
            <button type = "submit" class = "btn btn-outline-primary btn-lg btn-block">cadastrar</button>
        </form>
        

  </div>
</div>
<div id = "aleatorio"></div>
<?php
require_once('footer.php');
?>