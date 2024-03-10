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

$spiderman = new Production('spiderman', 'italiano', 8);
$thor = new Production('thor', 'italiano', 25);
$hulk = new Production('hulk', 'inglese', 7);

$productions = [
    $spiderman,
    $thor,
    $hulk,
];
