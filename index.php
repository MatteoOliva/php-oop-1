<?php

class Production {
    public $titolo;
    public $lingua;
    public $voto;

    function __construct(string $titolo, string $lingua,int $voto,)
        {
            $this->titolo = $titolo;
            $this->lingua = $lingua;
            $this->voto = $voto;
        }
    }
$Pizza5Stelle = new Production('pizzeria', 'italiano', 5);
var_dump($Pizza5Stelle);
$PiadaDelCentro = new Production('piadineria', 'turco', 6);
var_dump($PiadaDelCentro);
$BiscottiNelSacco = new Production('Pasticceria', 'inglese', 5);
var_dump($BiscottiNelSacco);

$productions = [
    $Pizza5Stelle,
    $PiadaDelCentro,
    $BiscottiNelSacco,
];
var_dump($productions);