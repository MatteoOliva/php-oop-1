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
$pizzeria = new Production('Pizza5Stelle', 'italiano', 5);
$piadineria = new Production('PiadaDelCentro', 'turco', 6);
$pasticceria = new Production('BiscottiNelSacco', 'inglese', 5);

$productions = [
    $pizzeria,
    $piadineria,
    $pasticceria,
];
