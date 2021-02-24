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
        // Lista asociativa con los números "básicos" y "peculiares" romanos
        $numeros_basicos = array(1000=>'M', 900=>'CM', 500=>'D', 400=>'CD', 100=>'C',
                            90=>'XC', 50=>'L', 40=>'XL', 10=>'X', 9=>'IX', 5=>'V',
                            4=>'IV', 1=>'I');

        // Obtener el número romano básico: return $numeros_basicos[$numero];

        // Es necesario que pare cuando el número sea 0 porque vamos a ir restando
        while ($numero > 0) {
            foreach($numeros_basicos as $arabe=>$romano) {
                if($numero == $arabe){
                    return $romano;
                }
            }
        }
    }
}