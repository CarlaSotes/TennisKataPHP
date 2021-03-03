<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\TennisGame;
use PHPUnit\Framework\TestCase;

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
}
