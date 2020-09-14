<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> hey </title>
    </head>
   
    <body>
        <?php
        $marque = "Renault";
        $couleur = "bleu";
        $immatriculation = "256AB34";

        /*$voiture = array(
            "marque" => "$marque", 
            "couleur" => "$couleur",
            "immatriculation" => "$immatriculation"
        );*/
        if (empty($voiture)){
            echo "cheh";
        }else{
        echo <<< EOT
        <p> 
        Voici la voiture :<br>
        <ul> <li> marque : $marque </li> 
        <li> immatriculation : $immatriculation </li> 
        <li> couleur : $couleur </li></ul>
        </p>    
EOT;
        }
       ?>
    </body>
</html>