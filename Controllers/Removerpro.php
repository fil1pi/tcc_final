<?php
    require_once("conexao-banco.php");

    $id = $_POST["id"];
    $sql = "delete from produtos_alpha where id=?";
    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("i",$id);
    if($sqlprep->execute()){

        header("location: ../view/produtos.php");
    }else{
        echo "Dados não podem ser removidos";


        

    }
?>