<?php

namespace Deg540\PHPTestingBoilerplate;

class RomanNumerals {

    /**
     * @param int $numero
     * @return string
     */
    public function convertir(int $numero): string {
        /*
         * Sé que no es bueno tanto comentado pero lo dejo para
         * mi aprendizaje y ver el proceso que he seguido para futuras
         * prácticas.
         *
        // Si el número es inferior a 4, empieza por I
        if($numero == 1){
            return "I";
        }
        // Si el número está entre 5 y 9, empieza por V
        if($numero == 5){
            return "V";
        }
        // Si el número es inferior a 49, empieza por X
        if($numero == 10){
            return "X";
        }
        // Si el número es inferior a 99, empieza por L
        if($numero == 50){
            return "L";
        }
        // Si el número es inferior a 499, empieza por L
        if($numero == 100){
            return "C";
        }
        // Si el número es inferior a 999, empieza por L
        if($numero == 500){
            return "D";
        }
        // A partir de ahora, empiezan por M
        if($numero == 1000){
            return "M";
        }
        */
        /**
         * Mediante lista asociativa
         */
        // Lista asociativa con los números "básicos" romanos
        $numeros_basicos = array(1000=>'M', 900=>'CM', 500=>'D', 400=>'CD', 100=>'C',
                            90=>'XC', 50=>'L', 40=>'XL', 10=>'X', 9=>'IX', 5=>'V',
                            4=>'IV', 1=>'I');
        //Para el número 1
        if ($numero == 1){
            return $numeros_basicos['1'];
        }
        //Para el número 4
        if ($numero == 4){
            return $numeros_basicos['4'];
        }
        //Para el número 5
        if ($numero == 5){
            return $numeros_basicos['5'];
        }
        //Para el número 9
        if ($numero == 9){
            return $numeros_basicos['9'];
        }
        //Para el número 10
        if ($numero == 10){
            return $numeros_basicos['10'];
        }
        //Para el número 40
        if ($numero == 40){
            return $numeros_basicos['40'];
        }
        //Para el número 50
        if ($numero == 50){
            return $numeros_basicos['50'];
        }
        //Para el número 90
        if ($numero == 90){
            return $numeros_basicos['90'];
        }
        //Para el número 100
        if ($numero == 100){
            return $numeros_basicos['100'];
        }
        //Para el número 400
        if ($numero == 400){
            return $numeros_basicos['400'];
        }
        //Para el número 500
        if ($numero == 500){
            return $numeros_basicos['500'];
        }
        //Para el número 900
        if ($numero == 900){
            return $numeros_basicos['900'];
        }
        //Para el número 1000
        if ($numero == 1000){
            return $numeros_basicos['1000'];
        }
    }
}