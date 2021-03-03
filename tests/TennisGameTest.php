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
    public function empate_a_15_devuelve_Fifteen_all(){
        // Preparación del test
        $tennisGame = new TennisGame("Juan", "Pepe");
        // Ejecución del test
        $tennisGame->wonPoint("Juan"); // jugador 1 marca punto (15)
        $tennisGame->wonPoint("Pepe"); // jugador 2 marca punto (15)
        $score = $tennisGame->getScore(); // comprobar puntuación
        // Validación
        $this->assertEquals("Fifteen all", $score);
    }

    /**
     * El jugador 1 mete 2 tantos (30pto) y el jugador 2, nada
     * @test
     */
    public function jugador1_30puntos_jugador2_0puntos_devuelve_Thirty_Love(){
        // Preparación del test
        $tennisGame = new TennisGame("Juan", "Pepe");
        // Ejecución del test
        $tennisGame->wonPoint("Juan"); // jugador 1 marca punto (15)
        $tennisGame->wonPoint("Juan"); // jugador 1 marca punto (30)
        $score = $tennisGame->getScore(); // comprobar puntuación
        // Validación
        $this->assertEquals("Thirty - Love", $score);
    }

    /**
     * El jugador 2 mete 2 tantos (30pto) y el jugador 1, nada
     * @test
     */
    public function jugador2_30puntos_jugador1_0puntos_devuelve_Love_Thirty(){
        // Preparación del test
        $tennisGame = new TennisGame("Juan", "Pepe");
        // Ejecución del test
        $tennisGame->wonPoint("Pepe"); // jugador 1 marca punto (15)
        $tennisGame->wonPoint("Pepe"); // jugador 1 marca punto (30)
        $score = $tennisGame->getScore(); // comprobar puntuación
        // Validación
        $this->assertEquals("Love - Thirty", $score);
    }

    /**
     * Ambos jugadores meten dos tantos y empatan a 30
     * @test
     */
    public function empate_a_30_devuelve_Thirty_all(){
        // Preparación del test
        $tennisGame = new TennisGame("Juan", "Pepe");
        // Ejecución del test
        $tennisGame->wonPoint("Pepe"); // jugador 1 marca punto (15)
        $tennisGame->wonPoint("Pepe"); // jugador 1 marca punto (30)
        $tennisGame->wonPoint("Juan"); // jugador 2 marca punto (15)
        $tennisGame->wonPoint("Juan"); // jugador 2 marca punto (30)
        $score = $tennisGame->getScore(); // comprobar puntuación
        // Validación
        $this->assertEquals("Thirty all", $score);
    }

    /**
     * El jugador hace dos tantos y el otro solo uno
     * @test
     */
    public function jugador1_30puntos_jugador2_15puntos_devuelve_Thirty_Fifteen(){
        // Preparación del test
        $tennisGame = new TennisGame("Juan", "Pepe");
        // Ejecución del test
        $tennisGame->wonPoint("Juan"); // jugador 1 marca punto (15)
        $tennisGame->wonPoint("Juan"); // jugador 1 marca punto (30)
        $tennisGame->wonPoint("Pepe"); // jugador 2 marca punto (15)
        $score = $tennisGame->getScore(); // comprobar puntuación
        // Validación
        $this->assertEquals("Thirty - Fifteen", $score);
    }

    /**
     * El jugador 2 hace dos tantos y el otro solo uno
     * @test
     */
    public function jugador2_30puntos_jugador1_15puntos_devuelve_Fifteen_Thirty(){
        // Preparación del test
        $tennisGame = new TennisGame("Juan", "Pepe");
        // Ejecución del test
        $tennisGame->wonPoint("Pepe"); // jugador 2 marca punto (15)
        $tennisGame->wonPoint("Pepe"); // jugador 2 marca punto (30)
        $tennisGame->wonPoint("Juan"); // jugador 1 marca punto (15)
        $score = $tennisGame->getScore(); // comprobar puntuación
        // Validación
        $this->assertEquals("Fifteen - Thirty", $score);
    }

    /**
     * Jugador 2 llega hasta 40 puntos y el jugador 1 no ha marcado nada
     * @test
     */
    public function jugador1_0puntos_jugador2_40puntos_devuelve_Love_Forty(){
        // Preparación del test
        $tennisGame = new TennisGame("Juan", "Pepe");
        // Ejecución del test
        $tennisGame->wonPoint("Pepe"); // jugador 2 marca punto (15)
        $tennisGame->wonPoint("Pepe"); // jugador 2 marca punto (30)
        $tennisGame->wonPoint("Pepe"); // jugador 2 marca punto (40)
        $score = $tennisGame->getScore(); // comprobar puntuación
        // Validación
        $this->assertEquals("Love - Forty", $score);
    }

    /**
     * Jugador 1 llega hasta 40 puntos pero el jugador 2 no marca nada
     * @test
     */
    public function jugador1_40puntos_jugador2_0puntos_devuelve_Forty_Love(){
        // Preparación del test
        $tennisGame = new TennisGame("Juan", "Pepe");
        // Ejecución del test
        $tennisGame->wonPoint("Juan"); // jugador 1 marca punto (15)
        $tennisGame->wonPoint("Juan"); // jugador 1 marca punto (30)
        $tennisGame->wonPoint("Juan"); // jugador 1 marca punto (40)
        $score = $tennisGame->getScore(); // comprobar puntuación
        // Validación
        $this->assertEquals("Forty - Love", $score);
    }


}
