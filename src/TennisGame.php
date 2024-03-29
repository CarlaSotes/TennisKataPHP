<?php

namespace Deg540\PHPTestingBoilerplate;

class TennisGame {

    /** ATRIBUTOS **/
    public string $jug1; // nombre jugador 1
    public string $jug2; // nombre jugador 2
    public int $score_jugador1; // puntuación jugador 1
    public int $score_jugador2; // puntuación jugador 2
    public int $contador1; // si jugador 1 tiene ventaja, para volver a marcar
    public int $contador2; // si jugador 1 tiene ventaja, para volver a marcar

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
        $this->contador1 = 0; // ninguno tiene ventaja
        $this->contador2 = 0; // ninguno tiene ventaja
    }

    /**
     * @return string
     */
    public function getScore():string {
        if (($this->score_jugador1 == 0) && ($this->score_jugador2 == 0)) {
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
        } elseif (($this->score_jugador1 == 40) && ($this->score_jugador2 == 40) && ($this->contador1==0) && ($this->contador2==0)) { //ninguno está en ventaja, solo han empatado
            return "Deuce";
        } elseif (($this->score_jugador1 == 40) && ($this->score_jugador2 == 15)) {
            return "Forty - Fifteen";
        } elseif (($this->score_jugador1 == 40) && ($this->score_jugador2 == 30)) {
            return "Forty - Thirty";
        } elseif (($this->score_jugador1 == 15) && ($this->score_jugador2 == 40)) {
            return "Fifteen - Forty";
        } elseif (($this->score_jugador1 == 30) && ($this->score_jugador2 == 40)) {
            return "Thirty - Forty";
        } elseif (($this->score_jugador1 == 50) && ($this->score_jugador2 <= 30)) {
            return "Win ".$this->jug1;
        } elseif (($this->score_jugador1 <= 30) && ($this->score_jugador2 == 50)) {
            return "Win ".$this->jug2;
        } elseif (($this->score_jugador1 == 40) && ($this->score_jugador2 == 40) && ($this->contador1==1)) { // empate pero con 1 ventaja
            return "Advantage ".$this->jug1;
        } elseif (($this->score_jugador1 == 40) && ($this->score_jugador2 == 40) && ($this->contador1==2)) { // empate pero con 2 ventaja
            return "Win ".$this->jug1;
        } elseif (($this->score_jugador1 == 40) && ($this->score_jugador2 == 40) && ($this->contador2==1)) { // empate pero con 1 ventaja
            return "Advantage ".$this->jug2;
        } elseif (($this->score_jugador1 == 40) && ($this->score_jugador2 == 40) && ($this->contador2==2)) { // empate pero con 1 ventaja
            return "Win ".$this->jug2;
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
        if (($this->score_jugador1 == 50) && ($this->score_jugador2 == 40)) {
            $this->score_jugador1 = 40; // vuelven a estar en empate
            $this->contador1 = $this->contador1 + 1; // se le da una ventaja
        }
        if (($this->score_jugador1 == 40) && ($this->score_jugador2 == 50)) {
            $this->score_jugador2 = 40; // vuelven a estar en empate
            $this->contador2 = $this->contador2 + 1; // se le da una ventaja
        }
    }
}