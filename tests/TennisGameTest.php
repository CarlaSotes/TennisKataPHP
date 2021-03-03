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
    public function puntuaciones_a_0() {
        // Preparación del test
        $partido = new TennisGame("Juan", "Pepe");
        // Ejecución del test
        $puntuacion = $partido->getScore();
        // Validación
        $this->assertEquals("Love all", $puntuacion);
    }

    /**
     * El jugador 1 marca un tanto
     * @test
     */
    public function jugador1_marca_punto(){
        // Preparación del test
        $partido = new TennisGame("Juan", "Pepe");
        // Ejecución del test
        $partido->wonPoint("Juan"); // jugador 1 marca punto
        $puntuacion = $partido->getScore(); // comprobar puntuación
        // Validación
        $this->assertEquals("Fifteen - Love", $puntuacion);
    }
}
