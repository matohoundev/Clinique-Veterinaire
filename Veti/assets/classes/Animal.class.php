<?php


class Animal {
    protected $nom;
    protected $dateVaccination;
    protected static $nbreVisites;
    
    const VACCIN = "contre la rage";
    
        // Méthode constructeur de notre classe Animal
        public function __construct($nouveauNom) 
        {
		    $this->nom = $nouveauNom;
		    $this->dateVaccination = date("d-m-Y H:i:s");
            self::$nbreVisites++;
		}           
            
        //Un getter ou accesseur sert à récupérer
        public function getNom()
        {
            return $this->nom;
        }
            
        public function getDateVaccination()
        {
        	return $this->dateVaccination;
        }
            
        public function getVaccin($posologie)
        {
            return $posologie. " dose(s) ".self::VACCIN;
         }

        public static function totalNbreVisites()
        {
            return self::$nbreVisites;
        }

}
?>