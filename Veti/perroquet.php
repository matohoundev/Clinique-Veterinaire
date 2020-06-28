<?php  
require_once('classes.php');
 
                    $perroquet = new faune("Adoc");


                    $perroquet->setPedigree("Bresilien");
                    
                    //On utilise $classeAnimal comme référence à Animal
                    $classeAnimal = "Animal";


                    echo "<p>".
                    "Nom : " .$perroquet->getNom() . "<br />".
                    "vacciné le : " .  $perroquet->getdateVaccination(). "<br />". 
                    $perroquet->getVaccin(1). "<br />".
                    
                    "Pédigrée : " . $perroquet->getPedigree(). "</p>".
                    "<p>".


                    "Nombre de visite : ".  $classeAnimal::totalNbreVisites() . 
                    "</p>";


            $perroquet->setAdresse("345, rue des Animaux","75000","Paris");
            echo "Adresse :<br />" . $perroquet->getAdresse();
?>