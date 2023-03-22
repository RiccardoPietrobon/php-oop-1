<?php

require_once __DIR__ . "/genere.php";


class Movie{
    public $titolo;
    public $genere;
    public $paese;
    public $durata;
    public $valutazione;

    public function __construct($_titolo, Genere $_genere, $_paese, $_durata,  $_valutazione){
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->paese=$_paese;
        $this->durata=$_durata;
        $this->valutazione=$_valutazione;
    }

    public function setValutazione($valutazione){
        if($valutazione < 6){
            $this->valutazione = "insufficiente";
        };
    }
}