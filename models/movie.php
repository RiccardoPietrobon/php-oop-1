<?php

require_once __DIR__ . "/genere.php";


class Movie{
    public $titolo;
    public $generes; //plurali perchè più di uno
    public $paese;
    public $durata;
    public $valutazione;

    public function __construct(
        string $_titolo,
        array $_generes,
        string $_paese, 
        string $_durata,
        int $_valutazione
    ) {
        $this->titolo = $_titolo;
        $this->generes = $_generes;
        $this->paese=$_paese;
        $this->durata=$_durata;
        $this->setValutazione($_valutazione);
    }

    public function setValutazione($valutazione){
        if($valutazione < 6){
            $this->valutazione = "insufficiente";
        };
    }
}