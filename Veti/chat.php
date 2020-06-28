<?php  
require_once('classes.php');
 
                    $chat = new faune("Cat");


                    $chat->setPedigree("Romain");
                    
                    //On utilise $classeAnimal comme référence à Animal
                    $classeAnimal = "Animal";


                    echo "<p>".
                    "Nom : " .$chat->getNom() . "<br />".
                    "vacciné le : " .  $chat->getdateVaccination(). "<br />". 
                    $chat->getVaccin(1). "<br />".
                    
                    "Pédigrée : " . $chat->getPedigree(). "</p>".
                    "<p>".


                    "Nombre de visite : ".  $classeAnimal::totalNbreVisites() . 
                    "</p>";


            $chat->setAdresse("2, rue des C","750976","Rome");
            echo "Adresse :<br />" . $chat->getAdresse();
?>