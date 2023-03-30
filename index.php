<?php

class Movie {

    public $titolo;
    public $anno_di_uscita;
    public $regia;
    public $casa_di_produzione;
    public $genere;
    public $durata;

} 

$interstellar = new Movie();
$interstellar->titolo = 'Interstellar';
$interstellar->anno_di_uscita = '2014';
$interstellar->regia = 'Christopher Nolan';
$interstellar->casa_di_produzione = 'Legendary Pictures, Syncopy Films, Lynda Obst Productions';
$interstellar->genere = 'Fantascienza';
$interstellar->durata = '169 min';



?>