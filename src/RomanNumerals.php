<?php

namespace Deg540\PHPTestingBoilerplate;

class RomanNumerals {

    /**
     * El planteamiento es: dado un número, busco en la lista el primero que sea
     * menor o igual, convertir a romano, y al árabe original, le resto el ya calculado
     * y repetimos el proceso con dicho número.
     * @param int $numero
     * @return string
     */
    public function convertir(int $numero): string {
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
                    // Decrementar el número original
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