<?php
    if(isset($_POST["btncalcular"])){
        require_once "fibonacci.php";
        $fibonacci = new Fibonacci();
        $valor = $_POST["txtvalor"];
        $fibonacci->setValorserie($valor);
        $fibonacci->fibonaccipara();
    }else{

    }
?>