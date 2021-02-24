<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\RomanNumerals;
use PHPUnit\Framework\TestCase;

/**
 *
 * Clase de tests de números romanos
 * Primero, ir pasando número los directos: 1, 5, 10...
 * A continuación, combinaciones simples.
 * Finalmente, combinación de números más complejos.
 *
 * Class RomanNumeralsTest
 * @package Deg540\PHPTestingBoilerplate\Test
 */
final class RomanNumeralsTest extends TestCase {

    /**
     * Pasar el número 1 a números romanos
     * @test
     */
    public function pasar_1_a_romanos() {
        // Preparación del test
        $romanNumeral = new RomanNumerals();
        // Ejecución del test
        $result = $romanNumeral->convertir(1);
        // Validación
        $this->assertEquals("I", $result);
    }

    /**
     * Pasar el número 5 a números romanos
     * @test
     */
    public function pasar_5_a_romanos() {
        // Preparación del test
        $romanNumeral = new RomanNumerals();
        // Ejecución del test
        $result = $romanNumeral->convertir(5);
        // Validación
        $this->assertEquals("V", $result);
    }
}
