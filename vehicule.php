<!-- Va contenir la classe -->
<?php
class Vehicule{
    public ?string $nomVehicule;

    public ?int $roue;

    public ?int $vitesse;

    public function __construct(?string $newNom,?int $newRoue,?int $newVitesse){
        $this->nomVehicule = $newNom;
        $this->roue = $newRoue;
        $this->vitesse = $newVitesse;
    }

    public function detect(){
        if($this->roue == 4){
            return " Voiture !";
        }
        else return " Moto !";
    }

    public function boost():void{
        $this->vitesse +=50;
    }

    public function plusRapide(Vehicule $rival):?string{
        if($this->vitesse > $rival->vitesse){
            return $this->nomVehicule;
        }else if($this-> vitesse == $rival->vitesse){
            return "Identique";
        }else{
            return $rival->nomVehicule;
        }
    }
    public function getNom():?string{
        return $this->nomVehicule;
    }
    public function setNom(?string $nom):void{
        $this->nom = $nom;
    }
    public function getRoue():?int{
        return $this->roue;
    }
    public function setRoue(?int $roue):void{
        $this->roue = $roue;
    }
    public function getVitesse():?int{
            return $this->vitesse;
        }
    public function setVitesse(?int $vitesse):void{
        $this->vitesse = $vitesse;
    }
}
?>



<!-- -Objet voiture (nomVehicule = « Mercedes CLK », nbrRoue = 4, vitesse 250),
-Objet moto (nomVehicule = « Honda CBR », nbrRoue = 2, vitesse = 280), -->