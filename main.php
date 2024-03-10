<?php
class Production
{
    public $titolo;
    public $lingua;
    public $voto;

    function __construct(string $titolo, string $lingua, int $voto, )
    {
        $this->titolo = $titolo;
        $this->lingua = $lingua;
        $this->voto = $this->votoMax($voto);
    }
    public function votoMax($voto)
    {
        if ($voto >= 10) {
            return 10;
        } else {
            return $voto;
        }
    }
}
class Movie extends Production
{
    public $profitti;
    public $durata;

    function __construct(string $titolo, string $lingua, int $voto, int $profitti, int $durata)
    {
        $this->titolo = $titolo;
        $this->lingua = $lingua;
        $this->voto = $this->votoMax($voto);
        $this->profitti = $profitti;
        $this->durata = $durata;
    }
}

class TVSerie extends Production
{
    public $numero_stagioni;
    function __construct(string $titolo, string $lingua, int $voto, $numero_stagioni)
    {
        $this->titolo = $titolo;
        $this->lingua = $lingua;
        $this->voto = $this->votoMax($voto);
        $this->numero_stagioni = $numero_stagioni;
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


