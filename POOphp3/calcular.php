<?php
    if(isset($_POST["btncalcular"])){
        require_once "secuencia.php";
        $secuencia = new Secuencia();
        $valor = $_POST["txtvalor"];
        $secuencia->setValorsecuencia($valor);
        $secuencia->secuencia();
    }else{

    }
?>