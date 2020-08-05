<?php

require_once("Conexao_Banco.php");
require_once("../view/Cabecalho.php");

$senhaaleatoria= substr(md5(time()),0,8);
$novasenha=md5(md5($senhaaleatoria));



   $email = $_POST["email"];
  

    # code...

      
   $sql     = "select * from usuarios where email=? ";
   $sqlprep = $conexao->prepare($sql);
   $sqlprep->bind_param("s",$email);
   $sqlprep->execute();
   $resultadosql = $sqlprep->get_result();
   
   $vetorUMRegistro = mysqli_fetch_assoc($resultadosql);

 

if (isset($vetorUMRegistro )) {

$email=$vetorUMRegistro['email'];

$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
$headers .= "From: filipismitch@gmail.com\r\n"; // remetente
$headers .= "Return-Path: filipismitch@gmail.com\r\n"; // return-path
if( $envio = mail($email, "Assunto", "Texto", $headers)){

						
                           
$sql_code = " UPDATE  usuarios  SET senha = '$novasenha' WHERE email = '$email' "  ;
$sql_query =mysqli_query($conexao,$sql_code);

echo "deu certo ";
echo $email;


                        



} else  {
    echo "não deu certo "; 

}
}

?>