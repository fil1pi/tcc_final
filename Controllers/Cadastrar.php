<?php
require_once("../view/Cabecalho.php");
require_once("Conexao_Banco.php");

if ((isset($_POST["id"])) && (isset($_POST["id"])=='id') ) {
   
#filipi



    #filipi

$nome  = trim($_POST["nome"]);
$senha = trim($_POST["senha"]);
$md5   = md5($senha);
$email = trim($_POST["email"]);

if (empty($nome)) {
    $_SESSION["ErrorCadas"] = "Todos os campos devem ser preenchidos ";
    header("location: ../view/Cadastro.php");
    # code...
}else if ((empty($senha)) && empty($email)) {

     $_SESSION["ErrorCadas"] = "Todos os campos devem ser preenchidos ";
    header("location: ../view/Cadastro.php");
}else{
    function Validaemail($email){
        if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
            return TRUE;
         }else{
            return false;
         }
          }
    if (Validaemail($email)) {








$sql     = "insert into usuarios( email,senha,nome) values(?,?,?)";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("sss" ,$email,$md5,$nome);
if ($sqlprep->execute()) {
    header("location: ../view/Login.php");
} else {
    header("location: ../view/404.php");
}
}
}
}

?>
