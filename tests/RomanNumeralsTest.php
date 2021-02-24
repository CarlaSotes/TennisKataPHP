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

    /**
     * Pasar el número 10 a números romanos
     * @test
     */
    public function pasar_10_a_romanos() {
        // Preparación del test
        $romanNumeral = new RomanNumerals();
        // Ejecución del test
        $result = $romanNumeral->convertir(10);
        // Validación
        $this->assertEquals("X", $result);
    }

    /**
     * Pasar el número 50 a números romanos
     * @test
     */
    public function pasar_50_a_romanos() {
        // Preparación del test
        $romanNumeral = new RomanNumerals();
        // Ejecución del test
        $result = $romanNumeral->convertir(50);
        // Validación
        $this->assertEquals("L", $result);
    }

    /**
     * Pasar el número 100 a números romanos
     * @test
     */
    public function pasar_100_a_romanos() {
        // Preparación del test
        $romanNumeral = new RomanNumerals();
        // Ejecución del test
        $result = $romanNumeral->convertir(100);
        // Validación
        $this->assertEquals("C", $result);
    }

    /**
     * Pasar el número 500 a números romanos
     * @test
     */
    public function pasar_500_a_romanos() {
        // Preparación del test
        $romanNumeral = new RomanNumerals();
        // Ejecución del test
        $result = $romanNumeral->convertir(500);
        // Validación
        $this->assertEquals("D", $result);
    }

    /**
     * Pasar el número 1000 a números romanos
     * @test
     */
    public function pasar_1000_a_romanos() {
        // Preparación del test
        $romanNumeral = new RomanNumerals();
        // Ejecución del test
        $result = $romanNumeral->convertir(1000);
        // Validación
        $this->assertEquals("M", $result);
    }

    /**
     * Pasar los números concretos a romanos; modificamos
     * el código, empleando una lista asociativa
     * @test
     */
    public function pasar_basicos_a_romanos() {
        // Preparación del test
        $romanNumeral = new RomanNumerals();
        // Ejecución y Validación
        $this->assertEquals("I", $romanNumeral->convertir(1));
        $this->assertEquals("IV", $romanNumeral->convertir(4));
        $this->assertEquals("V", $romanNumeral->convertir(5));
        $this->assertEquals("IX", $romanNumeral->convertir(9));
        $this->assertEquals("X", $romanNumeral->convertir(10));
        $this->assertEquals("XL", $romanNumeral->convertir(40));
        $this->assertEquals("L", $romanNumeral->convertir(50));
        $this->assertEquals("XC", $romanNumeral->convertir(90));
        $this->assertEquals("C", $romanNumeral->convertir(100));
        $this->assertEquals("CD", $romanNumeral->convertir(400));
        $this->assertEquals("CM", $romanNumeral->convertir(900));
        $this->assertEquals("M", $romanNumeral->convertir(1000));
    }

}
