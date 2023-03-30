<?php

class Movie {

    public $titolo;
    public $anno_di_uscita;
    public $regia;
    public $casa_di_produzione;
    public $genere;
    public $durata;

    function __construct($_titolo, $_regia, $_casa_di_produzione, $_genere, $_durata) 
    {

        $this->titolo = $_titolo;
        $this->regia = $_regia;
        $this->casa_di_produzione = $_casa_di_produzione;
        $this->genere = $_genere;
        $this->durata = $_durata;

    }

    function getYearOfRelease() 
    {
        if(!isset($this->anno_di_uscita)) {
            return 'Anno di uscita non disponibile';
        }

        return $this->anno_di_uscita;
    }

    function getMovie() 
    {
        $movie_Card = $this->titolo . ' = ' . $this->regia . ', ' . $this->casa_di_produzione . ', ' . $this->genere . ', ' . $this->durata . ', ' . $this->anno_di_uscita . '.';

        return $movie_Card;
    }

} 



?>