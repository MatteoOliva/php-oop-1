<?php
class Production {
    public $titolo;
    public $lingua;
    public $voto;

    function __construct(string $titolo, string $lingua,int $voto,)
        {
            $this->titolo = $titolo;
            $this->lingua = $lingua;
            $this->voto = $this->votoMax($voto);
        }
        public function votoMax($voto) {
            if($voto >= 10) {
                return 10;
        } else {
            return $voto;
        }
    }
}

$pizzeria = new Production('Pizza5Stelle', 'italiano', 5);
$piadineria = new Production('PiadaDelCentro', 'turco', 25);
$pasticceria = new Production('BiscottiNelSacco', 'inglese', 5);

$productions = [
    $pizzeria,
    $piadineria,
    $pasticceria,
];
