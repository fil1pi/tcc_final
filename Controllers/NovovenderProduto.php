<?php
require_once("../view/cabecalho.php");
require_once("conexao-banco.php");
if ((isset($_POST["id"])) && (isset($_POST["id"])=='id') ) {
    
   

#filipi

    # code...
$idup     = $_POST["id"];
$nome     = $_POST["nome"];
$preco    = $_POST["preco"];
$qtde     = $_POST["qtde"];
$tg       = $_POST["tg"];
$pv       = trim($_POST["pv"]);
$qtdev    = trim($_POST["qtdev"]);
$produtor = $_SESSION['nome'];
$idpro    = $_SESSION['id'];
   
if ((empty($pv)) && (empty($qtdev)))  {
    $_SESSION["Errorv"] = " Venda não cadastrada Todos os campos devem ser preenchidos! ";

    header("location: ../view/produtos.php");
    # code...
}

else{
if (($qtdev)>($qtde)) {
    # code...
    $_SESSION["Errorqt"] = " Venda não cadastrada  voçê tentou vender mais do que possui no estoque !  ";
    header("location: ../view/produtos.php");

}else{

    if (is_numeric($pv)) {


$sql     = " insert into produtos_omega( nome,Preco_producao,quantidade,total_gasto,Preco_Venda,quantida_Venda,total_venda,Total_Final,produtor,idprodutor) values(?,?,?,?,?,?,?,?,?,?)";
$sqlprep = $conexao->prepare($sql);
$total   = $qtdev*$pv;
$totalf  = $total-$tg;
$sqlprep->bind_param("sdiddiddsi" ,$nome,$preco,$qtde,$tg,$pv,$qtdev,$total,$totalf,$produtor,$idpro);
if ($sqlprep->execute()) {
    $q                = $qtde-$qtdev;
    $sql              = " UPDATE `produtos_alpha` SET `quantidade` = $q WHERE `produtos_alpha`.`id` = $idup";
    $resultado_update = mysqli_query($conexao,$sql);
    header("location: ../view/gestao.php");
} else {

    header("location: ../view/404.php");

}
}else{
    $_SESSION["Errorvali"] = "Venda não cadastrada por  Erro no campo Preço Venda  ! ";
    header("location: ../view/produtos.php");
}
}
}
}else{
    header("location: ../view/produtos.php");
}
?>