<?php
require_once("../Controllers/conexao-banco.php");
require_once('cabecalho.php');
require_once('../Controllers/protege.php');
$usu = $_SESSION['nome'];

$pag = (isset($_GET['pagina']))?$_GET['pagina'] : 1;
    
$busca = "SELECT *FROM Produtos_omega ";
$todos = mysqli_query($conexao, "$busca");

$registros = "10";

$tr = mysqli_num_rows($todos);
$tp = ceil($tr/$registros);

$inicio = ($registros*$pag)-$registros;
$limite = mysqli_query($conexao, "$busca LIMIT $inicio, $registros");

$anterior = $pag -1;
$proximo  = $pag +1;




?>
<!DOCTYPE html>
<html lang = "pt-br">
<head>
  <meta charset = "UTF-8">
  <meta name    = "viewport" content = "width=device-width, initial-scale=1.0">
  <title>Home</title>
 
  <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity = "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin = "anonymous">
  <link rel = "stylesheet" href = "../css/stile.css">
  <!-- Grafico de barra -->
  <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js"></script>
  <script type = "text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          [' ', 'produto', 'Vendidos', 'Produzidos'],
          <?php
$sql    = " SELECT * from Produtos_omega  ORDER BY quantida_Venda asc";
$buscar = mysqli_query($conexao,$sql);
while($dados = mysqli_fetch_array($buscar)){

  $n  = $dados['produtor'];
  $tg = $dados['quantida_Venda'];
  $tv = $dados['quantidade'];
  $tf = $dados['nome'];

          ?>
          ['<?php echo $n ?>', '<?php echo  $tf ?>', '<?php echo $tg ?>', '<?php echo $tv ?>'],
          
<?php } ?>
        ]);

        var options = {
          chart: {
            title   : 'Siscul Company ',
            subtitle: '',
          },
          bars: 'vertical'  // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    
    </script>
 
</head>
  <body>

  <input type  = "checkbox" id = "check">
  <label for   = "check" id    = "icone"><img src = "../imagens/icone.png"></label>
  <div   class = "barra">
    <nav>
      <a  href  = "Homeadm.php"><div class      = "link">Home</div></a>
      <hr class = "featurette-divider">
      <a  href  = "Listusuarios.php"><div class = "link">Usuarios</div></a>
      <hr class = "featurette-divider">
    
      <div class = "container">
      <p><i>Site desenvolvido por Felipe Schmitz & Vitoria santana !</i></p>
     </div>
    
    </nav>
  </div>

            <nav   class = "navbar fixed-top navbar-expand-lg navbar-light"style = "background-color: #282828;">
            <input type  = "checkbox" id                                         = "check">
            <label for   = "check" id                                            = "icone"><img src = "../imagens/icone.png"></label>
            <div   class = "barra">
    <nav>
      <a  href  = ""><div class = "link">Home</div></a>
      <hr class = "featurette-divider">
      <a  href  = ""><div class = "link">Usuarios</div></a>
      <hr class = "featurette-divider">
     
      <div class = "container">
      <p><i> Site desenvolvido por Felipe Schmitz & Vitoria santana ! </i></p>
     </div>
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
          <div class = "col-md-6">
         <br>
         
           <br>
          <br>
          
          <div id = "barchart_material" style = "width: 1110px; height: 500px;"></div>
          
          </div>
          </div>
          <br>
          <br>
         
          <div class = "row">
            <br>
            <br>
          <table class = "table text-center table-bordered  table-striped table-dark">
          <thead>
                <th colspan = "7" class = "text-center">Monitoramento de Usuarios </th>
              </thead>
            <thead>
                <tr >
                <th scope = "col"> ID </th>
                <th scope = "col"> Produtor </th>
                   
                    
                    
                    <th scope = "col"> Quantidade de produtos </th>
                    <th scope = "col" > Total Gasto  </th>
                   
                    <th scope = "col">Vendidos</th>
                    <th scope = "col"> Total Da Venda </th>
                    <th scope = "col"> Lucro Final </th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                while($dados = mysqli_fetch_array($limite)){
                    $id = $dados['idproduto'];
                   
                    
                    $QTT = $dados['quantidade'];
                    $TGG = $dados['Total_gasto'];
                  
                    $QVV = $dados['quantida_Venda'];
                    $TVF = $dados['total_venda'];
                    $LF  = $dados['Total_Final'];
                    $p   = $dados['produtor'];

                   
                    $totalgas = number_format($TGG,2,",",".");
                   
                    $totalven = number_format( $TVF,2,",",".");
                    $totalfin = number_format(  $LF,2,",",".");
                ?>
                <tr>
                    <th scope  = "row"><?= $id?></th>
                        <td><?= $p?></td>
                    
                    
                           <td><?= $QTT?></td>
                    <td>R$ <?= $totalgas?></td>
                   
                           <td><?= $QVV?></td>
                    <td>R$ <?= $totalven?></td>
                    <td>R$ <?= $totalfin?></td>
                    
                </tr> 
                <?php }?>
            </tbody>
        </table>
        
            <ul class = "pagination">
                <?php
                if($pag >1){
                ?>
                <li   class       = "page-item">
                <a    class       = "page-link" href = "?pagina=<?=$anterior;?>" aria-label = "Anterior">
                <span aria-hidden = "true">Anterior</span>
                    </a>
                </li>
                <?php }?>
                
                <?php
                for($i=1; $i<=$tp; $i++){
                    if($pag == $i ){
                        echo "<li class='page-item active'><a class='page-link' href='?pagina=$i'>$i</a></li>";
                    }else{
                        echo "<li class='page-item'><a class='page-link' href='?pagina=$i'>$i</a></li>";
                    }
                }
                ?>
                
                
                
                <?php 
                if($pag < $tp){
                ?>
                <li   class       = "page-item">
                <a    class       = "page-link" href = "?pagina=<?=$proximo;?>" aria-label = "Próximo">
                <span aria-hidden = "true">Próximo</span>
                        
                    </a>
                </li>
                <?php }?>
            </ul>
        
    

          </div>
          </div>
          
</body>
<script src = "https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity                       = "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin = "anonymous"></script>
<script src = "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity   = "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin = "anonymous"></script>
<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity = "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin = "anonymous"></script>
</html>