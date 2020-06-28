<?php

class faune extends Animal { 
    const PAYS="France";

    private  $pedigree;

    /*On définit un constructeur pour Chien. De fait,
        *on surcharge le constructeur du parent */
    public function __construct($nouveauNom) 
    {
        parent :: __construct($nouveauNom);
        $this->nom = strtoupper($nouveauNom);
    }

    // On définit deux méthodes spécifiques à Chien
    public function setPedigree($race) 
    {
        $this->pedigree = $race;
    }

    public function getPedigree() 
    {
        return $this->pedigree;
    }

    public function setAdresse($rue, $CP, $ville)
    {
        $this->rue  =  $rue ;
        $this->codePostal  =  $CP ;
        $this->ville = $ville; 
    }

    public function getAdresse()
    {
        return $this->rue. "<br />" .$this->codePostal. "<br />" .
        $this->ville. "<br />" . self::PAYS;
    }
} 
?>
