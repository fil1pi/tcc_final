<?php
require_once "Cabecalho.php";
require_once "../Controllers/Conexao_Banco.php";
require_once '../Controllers/Protege.php';

$usu = $_SESSION["nome"] ;

$sql            = " SELECT * FROM  Produtos_alpha WHERE produtor = '$usu' ";
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
  <title>Produtos</title>
 
  <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity = "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin = "anonymous">
  <link rel = "stylesheet" href = "../css/stile.css">
 
  <body>

  <input type  = "checkbox" id = "check">
  <label for   = "check" id    = "icone"><img src = "../imagens/icone.png"></label>
  <div   class = "barra">
    <nav>
      <a  href  = "Gestao.php"><div class   = "link">Home</div></a>
      <hr class = "featurette-divider">
      <a  href  = "Produtos.php"><div class = "link">Produtos</div></a>
      <hr class = "featurette-divider">
      
      <div class = "container">
        
      <p> <i>Site desenvolvido por Felipe Schmitz & Vitoria santana !</i> </p>
     </div>
    </nav>
  </div>


            <nav   class = "navbar fixed-top navbar-expand-lg navbar-light "style = "background-color: #282828;" >
            <input type  = "checkbox" id                                          = "check">
            <label for   = "check" id                                             = "icone"><img src = "../imagens/icone.png"></label>
            <div   class = "barra">
    <nav>
      <a  href  = ""><div class = "link">Home</div></a>
      <hr class = "featurette-divider">
      <a  href  = ""><div class = "link">Produtos</div></a>
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
  <a   class = "dropdown-item" href            = "../Controllers/Logout.php">Logout</a>
   
  </div>
</div>

    <?php else: ?>
        <a href  = "Login.php" style           = "color: inherit; text-decoration: none">
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
          <br>

    <div class = "container">
    <div class = "alinhar">
    <div class = "row">
    <div class = "col-md-7">
          <br>
          <br>
          <div class = "card">
          <div class = "card-header">
              Novo Produto
            </div>
            <div  class  = "card-body">
            <form action = "../Controllers/NovoProduto.php" method = "post">
              <?php
                            if (isset($_SESSION["ErrorCampo"]) ) {
                              # code...
                              $msgerro = $_SESSION["ErrorCampo"];
                             echo "<div class='alert alert-danger' role='alert'> $msgerro </div>";
                             unset($_SESSION["ErrorCampo"]);
                            }
                            
                            ?>
                            <?php
                            if (isset($_SESSION["Errorqt"]) ) {
                              # code...
                              $msgerro = $_SESSION["Errorqt"];
                             echo "<div class='alert alert-danger' role='alert'> $msgerro </div>";
                             unset($_SESSION["Errorqt"]);
                            }
                            
                            
                            ?>
                             <?php
                            if (isset($_SESSION["Errorvali"]) ) {
                              # code...
                              $msgerro = $_SESSION["Errorvali"];
                             echo "<div class='alert alert-danger' role='alert'> $msgerro </div>";
                             unset($_SESSION["Errorvali"]);
                            }
                            
                            
                            ?>
                              <?php
                            if (isset($_SESSION["Errorv"]) ) {
                              # code...
                              $msgerro = $_SESSION["Errorv"];
                             echo "<div class='alert alert-danger' role='alert'> $msgerro </div>";
                             unset($_SESSION["Errorv"]);
                            }
                            
                            ?>
                            <?php
                            if (isset($_SESSION["Canela"]) ) {
                              # code...
                              $msgerro = $_SESSION["Canela"];
                             echo "<div class='alert alert-danger' role='alert'> $msgerro </div>";
                             unset($_SESSION["Canela"]);
                            }
                            
                            
                            ?>
                             
                <div   class = "form-group">
                <label for   = "nome">Nome</label>
                <input type  = "text" class = "form-control" id = "nome"name = "nome">
                </div>
                
                <div   class = "form-group">
                <label for   = "nota2">Preço De Produção</label>
                <div   class = "input-group">
                <div   class = "input-group-prepend">
                <span  class = "input-group-text">R$</span>
                  </div>
                  
                  <input type = "text" class = "form-control" id = "senha" name = "preco">
                  </div>
                </div>
                <div   class = "form-group">
                <label for   = "nota2">Quantidade</label>
                <input type  = "number" class = "form-control" id = "senha" name = "qtde">
                </div>
                <input  type = "hidden" name  = "id" value = "id">
                <button type = "submit" class = "btn btn-block btn-outline-success">Guardar</button>
                
              </form>
              <br>
              <form action="Produtos.php" method="POST">
                  <button type = "submit" class = "btn btn-block btn-outline-danger">
             
              Cancelar</button>
              
              </form>
            </div>
          </div>
        </div>
        </div>
        
            
            <br>
            <br>
            <div   class = "col-md-9">
            <table class = "table  text-center table-bordered table-striped table-dark">
            <table class = "table   text-center table-bordered table-striped table-dark">
            <thead>
                <th colspan = "9" class = "text-center">Tabela de Produtos</th>
              </thead>
              <thead class = "">
                <tr>
                  <th>Nome</th>
        
                  <th>Preço de Produção</th>
                  <th>Quantidade</th>
                  <th>Total gasto</th>
                  <th colspan = "2">Condição</th>
                  
                  <?php
foreach ($todososvalores as $registro): 

  $preco = number_format($registro["Preco_producao"],2,",",".");
  $toga  = number_format($registro["Total_gasto"],2,",",".");
?>
                </tr>
              </thead>
              <tbody>
                <tr>
                         <th><?= $registro["nome"];?></th>
                  <th>R$ <?= $preco;?></th>
                  
                         <th><?= $registro["quantidade"];?></th>
                  <th>R$ <?= $toga;?></th>
                  <?php
                  if ($registro["quantidade"]<=0) {
                    # code...
                    ?>
                    <th colspan = "2" style="color:red;">Fora de Estoque </th>
                    <?php
                  }else{
                  ?>
                  <th >
                    <form   action = "../Controllers/Removerpro.php" method = "post">
                    <input  type   = "hidden" name                          = "id" value = "<?=$registro["id"];?>">
                    <button type   = "submit" class                         = "btn  btn-large btn-block btn-outline-danger">Remover</button>
                    </form>
</th >
                    <th >
                    <form   action = "Venderpro.php" method = "post">
                    <input  type   = "hidden" name          = "id" value = "<?=$registro["id"];?>">
                    <button type   = "submit" class         = "btn btn-outline btn-large btn-block btn-outline-warning">Vender</button>
                    </form>
                    
                  </th>
                  <?php
                  }
                  ?>
                </tr>
              </tbody>
              <?php  
endforeach?>
            
          </table>
        
        
          <br>
          <br>
          

         
        </div>
    
        </div>
        </div>
      
      <?php require_once 'Rodape.php' ?>
    </body>
  </html>