<?php

    if(isset($_POST["btncalcular"])){
        require_once "Moneda.php";
        $objmoneda = new Moneda();
        $valor = $_POST["txtvalorpesos"];
        $objmoneda->setValorpesos($valor);
/*
        print "lo que hay en el atributo de valorPesos es: " . $objmoneda->getValorpesos();
        $objmoneda->getValorpesos();*/

        print "la conversion de " . $valor . " es " . $objmoneda->calcularConversion();
    }else{
        print "Error";
    }

    
?>