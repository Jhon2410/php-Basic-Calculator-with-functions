<?php
  function sumar($n1,$n2){
            return $n1 + $n2 ;
        }
        function restar($n1,$n2){
            return $n1 - $n2 ;
        }
        function multiplicar($n1,$n2){
            return $n1 * $n2 ;
        }
        function dividir($n1,$n2){
            return $n1 / $n2 ;
        }
        
        //CREAR UN FUNCION LLAMADA OPERACIONES
        
        
        function operaciones($numero1 , $numero2, $tipoOperacion){
            $Total = 0; 
            switch (strtolower($tipoOperacion)){
                case "sumar" : $Total =  sumar($numero1, $numero2); break; 
                case "restar" : $Total = restar($numero1, $numero2); break; 
                case "multiplicar" :$Total = multiplicar($numero1, $numero2); break; 
                case "dividir" : $Total =   dividir($numero1, $numero2); break; 
                default : $Total =  sumar($numero1, $numero2);
            }
            return $Total ; 
        }