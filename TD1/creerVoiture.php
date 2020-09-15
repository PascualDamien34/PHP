<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> creer voiture </title>
    </head>
   
    <body>
        <?php
        require_once "Voiture.php";

        $voiture1 = new Voiture($_POST["marque"], $_POST["couleur"], $_POST["immatriculation"]);

        $voitures = array(
          $voiture1,
        );
        
        /*foreach ($voitures as $value) {
            $value->afficher();
        }*/
       ?>
    </body>
</html>