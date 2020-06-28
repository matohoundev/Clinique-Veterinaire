<?php  
require_once('classes.php');
 
                    $poisson = new faune("Nemo");


                    $poisson->setPedigree("Poisson-clown");
                    
                    //On utilise $classeAnimal comme référence à Animal
                    $classeAnimal = "Animal";


                    echo "<p>".
                    "Nom : " .$poisson->getNom() . "<br />".
                    "vacciné le : " .  $poisson->getdateVaccination(). "<br />". 
                    $poisson->getVaccin(1). "<br />".
                    
                    "Pédigrée : " . $poisson->getPedigree(). "</p>".
                    "<p>".


                    "Nombre de visite : ".  $classeAnimal::totalNbreVisites() . 
                    "</p>";


            $poisson->setAdresse("32, rue monde de nemo","75000","Paris");
            echo "Adresse :<br />" . $poisson->getAdresse();
?>