<?php
class Vehicule{
    private ?string $nomVehicule;

    private ?int $roue;

    private ?int $vitesse;

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
}

?>