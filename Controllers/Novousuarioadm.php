<?php
require_once("../view/cabecalho.php");
require_once("conexao-banco.php");

if ((isset($_POST["id"])) && (isset($_POST["id"])=='id') ) {
    
   
#filipi


    # code...


    $nome  = trim($_POST["nome"]);
    $senha = trim($_POST["senha"]);
    $email = trim($_POST["email"]);
    $adm   = trim($_POST["adm"]);
if ((empty($nome))&& empty($senha))  {
    $_SESSION["Errorusu"] = "Todos os campos devem ser preenchidos ";
    header("location: ../view/Listusuarios.php");
    # code...
}else if ((empty($email)) && empty($adm)) {

     $_SESSION["Errorusu"] = "Todos os campos devem ser preenchidos ";
    header("location: ../view/Listusuarios.php");
}else{







$sql     = "insert into usuarios( email,senha,nome,adm) values(?,?,?,?)";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("sssi" ,$email,$senha,$nome,$adm);
if ($sqlprep->execute()) {
    header("location: ../view/Listusuarios.php");
} else {
    header("location: ../view/404.php");

}
}
}
?>
