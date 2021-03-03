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
     * @param string $jugador1
     * @param string $jugador2
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
        } elseif(($this->score_jugador1 == 15) && ($this->score_jugador2 == 0)) {
            return "Fifteen - Love";
        } elseif (($this->score_jugador1 == 0) && ($this->score_jugador2 == 15)) {
            return "Love - Fifteen";
        } elseif (($this->score_jugador1 == 15) && ($this->score_jugador2 == 15)) {
            return "Fifteen all";
        } elseif (($this->score_jugador1 == 30) && ($this->score_jugador2 == 0)) {
            return "Thirty - Love";
        } elseif (($this->score_jugador1 == 0) && ($this->score_jugador2 == 30)) {
            return "Love - Thirty";
        } elseif (($this->score_jugador1 == 30) && ($this->score_jugador2 == 30)) {
            return "Thirty all";
        } elseif (($this->score_jugador1 == 30) && ($this->score_jugador2 == 15)) {
            return "Thirty - Fifteen";
        } elseif (($this->score_jugador1 == 15) && ($this->score_jugador2 == 30)) {
            return "Fifteen - Thirty";
        } elseif (($this->score_jugador1 == 0) && ($this->score_jugador2 == 40)) {
            return "Love - Forty";
        } elseif (($this->score_jugador1 == 40) && ($this->score_jugador2 == 0)) {
            return "Forty - Love";
        }
        return 0;
    }

    /**
     * @param string $jugador
     */
    public function wonPoint(string $jugador) {
        // Primero, comprobar qué jugador ha marcado
        if (strcmp($jugador,$this->jug1) == 0){
            // Ver si son menos de 40 (osea hasta 30) puntos porque entonces se suma de 10 en 10
            if ($this->score_jugador1 < 30){
                $this->score_jugador1 = $this->score_jugador1 + 15;
            } else{
                $this->score_jugador1 = $this->score_jugador1 + 10;
            }
        }else{
            if ($this->score_jugador2 < 30){
                $this->score_jugador2 = $this->score_jugador2 + 15;
            } else{
                $this->score_jugador2 = $this->score_jugador2 + 10;
            }
        }
    }
}