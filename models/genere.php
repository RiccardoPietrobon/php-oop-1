<?php

class Genere{
    public $nome;
    public $tipo;
    public $preferenza;

    public function __construct($_nome, $_tipo, $_preferenza){
        $this->nome = $_nome;
        $this->tipo = $_tipo;
        $this->preferenza=$_preferenza;
    }
}