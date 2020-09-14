<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        Voici le résultat du script PHP : 
        <?php
          // Ceci est un commentaire PHP sur une ligne
          /* Ceci est le 2ème type de commentaire PHP
          sur plusieurs lignes */
           
          // On met la chaine de caractères "hello" dans la variable 'texte'
          // Les noms de variable commencent par $ en PHP
          $texte = "hello world !";

          // On écrit le contenu de la variable 'texte' dans la page Web
          echo $texte;
        ?>
        <br><br>
        <?php
        $prenom = "marc";
		echo'<br>';
		echo "Bonjour " . $prenom;
		echo '<br>';
		echo "2:Bonjour $prenom";
		echo'<br>';
		echo 'Bonjour $prenom';
		echo'<br>';
		echo $prenom;
		echo "$prenom";
		?>

		<br><br>

		<?php
        $marque = "Renault";
        $couleur = "bleu";
        $immatriculation = "256AB34";

        $voiture = array(
        	"marque" => "$marque", 
        	"couleur" => "$couleur",
        	"immatriculation" => "$immatriculation"
        );
        var_dump($voiture);


        echo <<< EOT
        <p> 
        Voici la voiture :<br>
        <ul> <li> marque : $marque </li> 
        <li> immatriculation : $immatriculation </li> 
        <li> couleur : $couleur </li></ul>
        </p>;
EOT;
       ?>
    </body>
</html> 