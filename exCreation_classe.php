<?php
class Exemple{
    public $taille;
    public $poids;
    public $nom;

    public function __construct($newNom, $newTaille, $newPoids){
        $this->nom=$newNom;
        $this->taille= $newTaille;
        $this->poids= $newPoids;
    }


    public function crie(){
        switch ($this->nom) {
            case 'chien':
                echo'ouaf';
                break;
            case 'chat':
                echo'miaou';
                break;
            case'oiseau';
                echo 'piou';
                break;
            default:
                echo 'Aucun animal éxiste !';
                break;
        }
    }

    
    public function __toString(){
        return $this->nom. ' '.$this->taille;
    }

    
}

?>
    
