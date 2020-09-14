<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> hey </title>
    </head>
   
    <body>
        <?php
        require_once "Voiture.php";

        $voiture1 = new Voiture("Renault", "bleu", "258BD154");
        $voiture2 = new Voiture("Vroum", "Chrome","123AZ789");
        $voiture3 = new Voiture("Ferrari","rouge","147JH852");

        $voitures = array(
          $voiture1,
          $voiture2,
          $voiture3
        );
        foreach ($voitures as $value) {
            $value->afficher();
        }
       ?>
    </body>
</html>