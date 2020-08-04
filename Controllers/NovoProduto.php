<?php
require_once("../view/cabecalho.php");
require_once("conexao-banco.php");

if ((isset($_POST["id"])) && (isset($_POST["id"])=='id') ) {
    
   


    # code...
#filipi

$nome  = trim($_POST["nome"]);
$preco = trim($_POST["preco"]);

$qtde     = trim($_POST["qtde"]);
$produtor = $_SESSION['nome'];

    


if (empty($nome)) {
    $_SESSION["ErrorCampo"] = "Todos os campos devem ser preenchidos ";
    header("location: ../view/produtos.php");
    # code...
}else if ((empty($preco)) && empty($qtde)) {

     $_SESSION["ErrorCampo"] = "Todos os campos devem ser preenchidos ";
    header("location: ../view/produtos.php");
   
}else{
  


    if (is_numeric($preco)) {

$sql     = "insert into produtos_alpha( nome,Preco_producao,quantidade,total_gasto,produtor) values(?,?,?,?,?)";
$sqlprep = $conexao->prepare($sql);
$total   = $qtde*$preco;
$sqlprep->bind_param("sdids" ,$nome,$preco,$qtde,$total,$produtor);
if ($sqlprep->execute()) {
    header("location: ../view/produtos.php");
} else {
    header("location: ../view/404.php");


}
}else{
    $_SESSION["Errorvali"] = "O campo Preço de produção deve receber apenas numeros ! ";
    header("location: ../view/produtos.php");
}
}

}

?>
