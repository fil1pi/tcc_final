<?php
require_once("../view/Cabecalho.php");

if (empty($_SESSION["email"])  && empty($_SESSION["id"]) ) {


  $_SESSION["ErrorLogin"] ="Usuario deslogado ";
  header('location: ../view/Login.php');
#filipi
}

?>
