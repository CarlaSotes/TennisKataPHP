<?php

namespace Deg540\PHPTestingBoilerplate;

class RomanNumerals {

    /**
     * @param int $numero
     * @return string
     */
    public function convertir(int $numero): string {
        // Si el número es inferior a 5, empieza por I
        if($numero == 1){
            return "I";
        }
        // Si el número está entre 5 y 10, empieza por V
        if($numero == 5){
            return "V";
        }
    }
}