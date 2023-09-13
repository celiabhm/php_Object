<?php
class Maison{
    public $nom;
    public $longueur;
    public $largeur;

    public function __construct($newNom,$newLongueur, $newLargeur){
        $this->nom = $newNom;
        $this->longueur = $newLongueur;
        $this->largeur = $newLargeur;
    }
    public function surface(){
        echo "<p>La surface de la "  .$this->nom. "<br>". "est égale à" .$this->longueur*$this->largeur ."m2";
    }
}
?>