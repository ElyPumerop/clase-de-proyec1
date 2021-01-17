<?php

    class Calculador{

        public $CantidadUno = 0;
        public $CantidadDos = 0;
        public $Resultado = 0;

        function __construct($valor1,$valor2){

            $this->CantidadUno = $valor1 ;
            $this->CantidadDos = $valor2 ;
        }

        public function sumar(){

            $this->Resultado = $this->CantidadUno + $this->CantidadDos;
            return $this->Resultado;
        }
        public function restar(){

            $this->Resultado = $this->CantidadUno - $this->CantidadDos;
            return $this->Resultado;
        }
        public function multiplicar(){

            $this->Resultado = $this->CantidadUno * $this->CantidadDos;
            return $this->Resultado;
        }
        public function dividir(){

            $this->Resultado = $this->CantidadUno / $this->CantidadDos;
            return $this->Resultado;
        }


    }


?>