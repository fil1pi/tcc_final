<?php
require_once("../Controllers/conexao-banco.php");
require_once('cabecalho.php');
require_once('../Controllers/protege.php');

$sql            = " SELECT * FROM  usuarios ";
$resultado      = mysqli_query($conexao, $sql);
$umvalor        = mysqli_fetch_assoc($resultado);
$todososvalores = array();
while ($umvalor != null) {
	array_push($todososvalores, $umvalor);
    $umvalor = mysqli_fetch_assoc($resultado);

   
}



?>

<!DOCTYPE html>
<html lang = "pt-br">
<head>
  <meta charset = "UTF-8">
  <meta name    = "viewport" content = "width=device-width, initial-scale=1.0">
  <title>Usuarios</title>
 
  <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity = "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin = "anonymous">
  <link rel = "stylesheet" href = "../css/stile.css">
  <body>

  <input type  = "checkbox" id = "check">
  <label for   = "check" id    = "icone"><img src = "../imagens/icone.png"></label>
  <div   class = "barra">
    <nav>
      
      <a  href  = "Homeadm.php"><div class      = "link">Home</div></a>
      <hr class = "featurette-divider">
      <a  href  = "Listusuarios.php"><div class = "link">usuarios</div></a>
      <hr class = "featurette-divider">
      

      <div class = "container">
      <p><i>Site desenvolvido por Felipe Schmitz & Vitoria santana !</i></p>
     </div>
      
    
    </nav>
  </div>

            <nav   class = "navbar fixed-top navbar-expand-lg navbar-light "style = "background-color: #282828;">
            <input type  = "checkbox" id                                          = "check">
            <label for   = "check" id                                             = "icone"><img src = "../imagens/icone.png"></label>
            <div   class = "barra">
    <nav>
      <a  href  = ""><div class = "link">Home</div></a>
      <hr class = "featurette-divider">
      <a  href  = ""><div class = "link">Usuarios</div></a>
      <hr class = "featurette-divider">
    
    </nav>
  </div>
              <div class = "nav">
              <img src   = "../imagens/ricardo.png" width = "40" height = "40" >
              <a   class = "navbar-brand" href            = "#">Silcul</a>
            
            <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarSupportedContent" aria-controls = "navbarSupportedContent" aria-expanded = "false" aria-label = "Toggle navigation">
            <span   class = "navbar-toggler-icon"></span>
            </button>

            <div class = "collapse navbar-collapse" id = "navbarSupportedContent">
            <ul  class = "navbar-nav mr-auto">
                
                <div class = "ladonav">
                
                <?php
    
    if (isset($_SESSION["nome"])): ?>
        <div    class = "dropdown">
        <button class = "btn btn-light  dropdown-toggle" type                                              = "button" id = "dropdownMenu2" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
        <img    src   = "https://cdn.pixabay.com/photo/2017/02/25/22/04/user-icon-2098873_960_720.png" alt = "" style    = "width: 25px; height: 25px;">
                <?= $_SESSION["nome"]; ?>
  </button>
  <div class = "dropdown-menu" aria-labelledby = "dropdownMenu2">
  <a   class = "dropdown-item" href            = "../Controllers/logout.php">Logout</a>
   
  </div>
</div>
    <?php else: ?>
        <a      href  = "login.php" style           = "color: inherit; text-decoration: none">
        <button type  = "button" class              = "btn btn-light mr-sm-2">
        <i      class = "fa fa-sign-in" aria-hidden = "true"></i>
                Fazer login
            </button>
        </a>

    <?php
    endif;
    ?>
                  
                  </div>
              </ul>
              </div>
              </div>
              
            </div>
          </nav>
          <div class = "container">
        
              <div class = "row">
                 


          
          <div class = "col-md-7">
          <br>
          <br>
          <br>
              <div class = "card">
              <div class = "card-header">
                      Cadastrar Novo Usuario
                  </div>
                      <div  class  = "card-body">
                      <form action = "../Controllers/Novousuarioadm.php" method = "post">
                      <?php
                            if (isset($_SESSION["Errorusu"]) ) {
                              # code...
                              $msgerro = $_SESSION["Errorusu"];
                             echo "<div class='alert alert-danger' role='alert'> $msgerro </div>";
                             unset($_SESSION["Errorusu"]);
                            }
                            
                            ?>
                <div   class = "form-group">
                <label for   = "nome">Nome</label>
                <input type  = "text" class = "form-control" id = "nome"name = "nome">
                </div>
                <div   class = "form-group">
                <label for   = "email">Email</label>
                <input type  = "text" class = "form-control" id = "email" name = "email">
                </div>
                <div   class = "form-group">
                <label for   = "nota2">Senha</label>
                <input type  = "password" class = "form-control" id = "senha" name = "senha">
                </div>
                <div   class = "form-group">
                <label for   = "nota2">Tipo</label>
                <input type  = "text" class = "form-control" id = "senha" name = "adm">
                </div>
                <input  type = "hidden" name  = "id" value = "id">
                <button type = "submit" class = "btn btn-outline-primary">Salvar</button>
              </form>
                      </div>

                  
              </div>
          </div>
                            <div class = "col-md-9">
                      <br>
                      <br>

                
          <table class = "table table-bordered table-dark text-center ">
          <table class = "table table-bordered table-dark text-center">
              <thead>
                <th colspan = "6" class = "text-center">Listagen de Usuarios </th>
              </thead>
              <thead class = "text-center">
                <tr>
                
                  <th>Nome</th>
                  <th>email</th>
                  <th>condição</th>
                  <th>opção</th>
                  
                  <?php
foreach ($todososvalores as $registro): 
    if ( $registro["adm"] ==1 ) {
        $condicao = "Adm";
        # code...
    }else{
        $condicao = "usuario";
    }
?>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th><?= $registro["nome"];?></th>
                  <th><?= $registro["email"];?></th>
                  <th><?php echo  " $condicao"; ?></th>
                
                  <th>
                    <form   action = "../Controllers/Remover.php" method = "post">
                    <input  type   = "hidden" name                       = "idv" value = "<?=$registro["id"];?>">
                    <button type   = "submit" class                      = "btn btn-large btn-block btn-outline-danger">Remover</button>
                    </form>
                  </th>
                </tr>
              </tbody>
              <?php endforeach?>
            </table>
          </table>
          </div>
  
        
        
        
          </div>
              </div>
          </div>

</body>
<script src = "https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity                       = "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin = "anonymous"></script>
<script src = "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity   = "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin = "anonymous"></script>
<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity = "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin = "anonymous"></script>
<script src = "../js/script.js"></script>
</html>