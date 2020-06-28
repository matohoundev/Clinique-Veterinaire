<?php  
require_once('classes.php');
 
                    $serpent = new faune("Kaa");


                    $serpent->setPedigree("Python");
                    
                    //On utilise $classeAnimal comme référence à Animal
                    $classeAnimal = "Animal";


                    echo "<p>".
                    "Nom : " .$serpent->getNom() . "<br />".
                    "vacciné le : " .  $serpent->getdateVaccination(). "<br />". 
                    $serpent->getVaccin(1). "<br />".
                    
                    "Pédigrée : " . $serpent->getPedigree(). "</p>".
                    "<p>".


                    "Nombre de visite : ".  $classeAnimal::totalNbreVisites() . 
                    "</p>";


            $serpent->setAdresse("7, rue de la jungle","75000","Paris");
            echo "Adresse :<br />" . $serpent->getAdresse();
?>