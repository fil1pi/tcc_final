<?php
require_once('Cabecalho.php');
require_once("../Controllers/Conexao_Banco.php");
$usu=$_SESSION["nome"];

$sql    = " SELECT * from usuarios where nome = '$usu'";
$buscar = mysqli_query($conexao,$sql);
while($dados = mysqli_fetch_array($buscar)){
 $nonome  = $dados['nome'];
 $noemail  = $dados['email'];
  $nosenha =md5( $dados['senha']);
   
}
?>
<link rel   = "stylesheet" href = "../css/css.css">
<div  class = "card" id         = "telalogin">
<div  class = "card-body text-center">

  <h1 class = "font-italic">Siscul</h1>



                <form action = "../Controllers/UpdadtesUsuarios.php" method = "post">
                    
                <h2 class = "font-italic " style="color:  ghostwhite;" >Atualização de dados</h2>
                <div class = "form-group">

                        <p class = "text-center text-danger"> </p>
                        <label for  = "Novo Nome"style="color:  ghostwhite;">Novo Nome</label>
                        <input type = "text" class = " rounded-pill form-control" id = "nome"name = "nome" placeholder = "Nome"
                        
                        ><code>Atua nome : <?=$nonome?></code>
                    </div>
                <div class = "form-group">

                        <p class = "text-center text-danger"> </p>
                        <label for  = "Novo email"style="color:  ghostwhite;">Novo email</label>
                        <input type = "text" class = " rounded-pill form-control" id = "email"name = "email" placeholder = "Email"
                        ><code>Atual email : <?=$noemail?></code>
                    </div>
                    <div   class = "form-group">
                    <label for   = "Nova senha"style="color:  ghostwhite;">Nova senha</label>
                    <input type  = "password" class = " rounded-pill form-control" id = "senha" name = "senha" placeholder = "Senha"
                    >
                    </div><code></code>
                 
                    <button type = "submit" class = "btn btn-outline-primary btn-lg btn-block" name = "butaum">Enviar </button>
                    <br>
                <br>
                </form>
                
                  
                    

  </div>
</div>
<div id = "aleatorio"></div>
<?php
require_once('Footer.php');
?>