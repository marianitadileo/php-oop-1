<?php
class Movie {
   public $titolo;
   public $genere;
   public $durata; 
   public $voto;

   function __construct($_titolo, $_genere, $_durata, $_voto) {
    $this->titolo = $_titolo;
    $this-> genere = $_genere;
    $this-> durata = $_durata;
    $this-> voto = $_voto;
   }
 
    public function getMovie() {
        return "Titolo: {$this->titolo}; Genere: {$this->genere}; Durata: {$this-> durata}; Voto: {$this-> voto};";
   }
}

$film = new Movie("Star Wars: la minaccia fantasma", "Fantascienza", "136 Minuti", "10");
var_dump($film);
$film2 = new Movie("The Conjuring","Horror","110 Minuti", "9");
var_dump($film2);

echo $film->getMovie();
echo '<br/>';
echo $film2->getMovie();

?>