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

} 



?>