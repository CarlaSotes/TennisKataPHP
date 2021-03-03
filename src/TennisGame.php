<?php

namespace Deg540\PHPTestingBoilerplate;

class TennisGame {

    /** ATRIBUTOS **/
    public string $jug1; // nombre jugador 1
    public string $jug2; // nombre jugador 2
    public int $score_jugador1; // puntuación jugador 1
    public int $score_jugador2; // puntuación jugador 2

    /**
     * TennisGame constructor.
     * @param $jugador1
     * @param $jugador2
     */
    public function __construct(string $jugador1, string $jugador2) {
        $this->jug1 = $jugador1; // dar valor al atributo del nombre del jugador 1
        $this->jug2 = $jugador2; // dar valor al atributo del nombre del jugador 2
        $this->score_jugador1 = 0; // jugador 1 empieza con 0 puntos
        $this->score_jugador2 = 0; // jugador 2 empieza con 0 puntos
    }

    /**
     * @return string
     */
    public function getScore():string {
        if (($this->score_jugador1 == 0) && ($this->score_jugador2 == 0)){
            return "Love all";
        }
        return 0;
    }

}