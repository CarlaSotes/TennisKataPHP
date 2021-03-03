<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\TennisGame;
use PHPUnit\Framework\TestCase;

/**
 * Class TennisGameTest
 * En cada test, simularemos un partido
 * @package Deg540\PHPTestingBoilerplate\Test
 */
class TennisGameTest extends TestCase {

    /**
     * Los dos jugadores cpmienzan con puntiación 0
     * @test
     */
    public function los_dos_a_0_devuelve_loveall() {
        // Preparación del test
        $tennisGame = new TennisGame("Juan", "Pepe");
        // Ejecución del test
        $score = $tennisGame->getScore();
        // Validación
        $this->assertEquals("Love all", $score);
    }

    /**
     * El jugador 1 marca un tanto
     * @test
     */
    public function jugador1_marca_punto_devuelve_Fifteen_Love(){
        // Preparación del test
        $tennisGame = new TennisGame("Juan", "Pepe");
        // Ejecución del test
        $tennisGame->wonPoint("Juan"); // jugador 1 marca punto
        $score = $tennisGame->getScore(); // comprobar puntuación
        // Validación
        $this->assertEquals("Fifteen - Love", $score);
    }

    /**
     * El jugador 2 marca un tanto
     * @test
     */
    public function jugador2_marca_punto_devuelve_Love_Fifteen(){
        // Preparación del test
        $tennisGame = new TennisGame("Juan", "Pepe");
        // Ejecución del test
        $tennisGame->wonPoint("Pepe"); // jugador 2 marca punto
        $score = $tennisGame->getScore(); // comprobar puntuación
        // Validación
        $this->assertEquals("Love - Fifteen", $score);
    }

    /**
     * Ambos jugadores meten tanto y quedan en empate a 15
     * @test
     */
    public function empate_a_15(){
        // Preparación del test
        $tennisGame = new TennisGame("Juan", "Pepe");
        // Ejecución del test
        $tennisGame->wonPoint("Juan"); // jugador 1 marca punto
        $tennisGame->wonPoint("Pepe"); // jugador 2 marca punto
        $score = $tennisGame->getScore(); // comprobar puntuación
        // Validación
        $this->assertEquals("Fifteen all", $score);
    }
}
