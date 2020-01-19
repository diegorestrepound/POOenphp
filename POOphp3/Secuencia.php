<?php
    class Secuencia{
        private $valorSecuencia;

        public function __construct(){
            $this->valorsecuencia = 0;
        }

        public function getValorsecuencia(){
            return $this->valorsecuancia;
        }

        public function setValorsecuencia($valor){
            $this->valorsecuancia = $valor;
        }

        public function secuencia(){
            
            $numeros = NULL;  
            echo "Los numeros del vector...<br />";
            for ($i = 1; $i <=$this->getValorsecuencia() ; $i++ ) {
                $numeros[$i] = $i;
                echo $numeros[$i]. " ";
            }
            print "<br/><br />";
        
            $suma=0;
            foreach($numeros as $numero){
                $suma += $numero;
            }
            print "Suma: $suma";

        }
    }
?>