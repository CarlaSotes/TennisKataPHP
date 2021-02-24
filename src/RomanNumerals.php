<?php

namespace Deg540\PHPTestingBoilerplate;

class RomanNumerals {

    /**
     * @param int $numero
     * @return string
     */
    public function convertir(int $numero): string {
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
    }
}