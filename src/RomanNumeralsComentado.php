<?php

namespace Deg540\PHPTestingBoilerplate;


class RomanNumeralsComentado {
    /**
     * El planteamiento es: dado un número, busco en la lista el primero que sea
     * menor o igual, traducir a romano, y al árabe original, le resto el ya calculado
     * y repetimos el proceso.
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

        // Es necesario que pare cuando el número sea 0 porque vamos a ir restando
        $resultado = "";
        while ($numero > 0) {
            // recorrer la lista hasta dar con el primer elemento <= al que buscamos
            foreach($numeros_basicos as $arabe=>$romano) {
                if($numero >= $arabe){
                    // Decrementamos el número menos el número asociado que hemos encontrado
                    // para seguir calculando su romano
                    $numero = $numero-$arabe;
                    // Almacenar el resultado concatenando a lo que ya había
                    $resultado .= $romano;
                    // Salir del foreach para volver a mirar el array desde el principio
                    break;
                }
            }
        }
        return $resultado;
    }
}