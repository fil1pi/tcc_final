<?php
require_once("../view/Cabecalho.php");
require_once("Conexao_Banco.php");

if ((isset($_POST["id"])) && (isset($_POST["id"])=='id') ) {

    $idup     = $_POST["id"];
$nome     = $_POST["nome"];
$preco    = $_POST["preco"];
$qtde     = $_POST["qtde"];
$tg       = $_POST["tg"];
$pv       = trim($_POST["pv"]);
$qtdev    = trim($_POST["qtdev"]);
$produtor = $_SESSION['nome'];
$idpro    = $_SESSION['id'];

$total   = $qtdev*$pv;
$totalf  = $total-$tg;





if ((empty($pv)) && (empty($qtdev)))  {
    $_SESSION["Errorv"] = " Venda não cadastrada Todos os campos devem ser preenchidos! ";

    header("location: ../view/Produtos.php");
    # code...
}

else{
if (($qtdev)>($qtde)) {
    # code...
    $_SESSION["Errorqt"] = " Venda não cadastrada  voçê tentou vender mais do que possui no estoque !  ";
    header("location: ../view/Produtos.php");

}else{

    if (is_numeric($pv)) {


       

$sql     = " insert into produtos_omega( nome,Preco_producao,quantidade,total_gasto,Preco_Venda,quantida_Venda,total_venda,Total_Final,produtor,idprodutor) values(?,?,?,?,?,?,?,?,?,?)";
$sqlprep = $conexao->prepare($sql);

$sqlprep->bind_param("sdiddiddsi" ,$nome,$preco,$qtde,$tg,$pv,$qtdev,$total,$totalf,$produtor,$idpro);
if ($sqlprep->execute()) {

    $sql3              = " UPDATE `produtos_alpha` SET `quantidade` = $q WHERE `produtos_alpha`.`id` = $idup";
    $resultado_update = mysqli_query($conexao,$sql3);
    header("location: ../view/Gestao.php");
    
} else {

    header("location: ../view/404.php");

}
        }
    
else{
    $_SESSION["Errorvali"] = "Venda não cadastrada por  Erro no campo Preço Venda  ! ";
    header("location: ../view/Produtos.php");
}
}
}













}