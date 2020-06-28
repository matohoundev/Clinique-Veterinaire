<?php  
require_once('classes.php');
 
                    $chien = new faune("Belle");


                    $chien->setPedigree("Labrador");
                    
                    //On utilise $classeAnimal comme référence à Animal
                    $classeAnimal = "Animal";


                    echo "<p>".
                    "Nom : " .$chien->getNom() . "<br />".
                    "vacciné le : " .  $chien->getdateVaccination(). "<br />". 
                    $chien->getVaccin(1). "<br />".
                    
                    "Pédigrée : " . $chien->getPedigree(). "</p>".
                    "<p>".


                    "Nombre de visite : ".  $classeAnimal::totalNbreVisites() . 
                    "</p>";


            $chien->setAdresse("2, rue des Cerisiers","75014","Paris");
            echo "Adresse :<br />" . $chien->getAdresse();
?>