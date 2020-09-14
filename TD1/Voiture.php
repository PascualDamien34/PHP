<?php
class Voiture {
   
  private $marque;
  private $couleur;
  private $immatriculation;
      
  // un getter      
  public function getMarque() {
       return $this->marque;  
  }
     
  // un setter 
  public function setMarque($marque2) {
       $this->marque = $marque2;
  }

  public function getCouleur() {
       return $this->couleur;  
  }
     
  // un setter 
  public function setCouleur($marque2) {
       $this->couleur = $marque2;
  }

  public function getImmatriculation() {
       return $this->immatriculation;  
  }
     
  // un setter 
  public function setImmatriculation($marque2) {
      if (strlen($marque2)>8){
        for ($i = 0 ; $i<8 ; $i++){
          $newImmat[$i] = $marque2[$i];
        }
      }
      $newImmat = $marque2;
      return $this->immatriculation = $newImmat;
  }
      
  // un constructeur
  public function __construct($m, $c, $i)  {
   $this->marque = $m;
   $this->couleur = $c;
   $this->immatriculation = $i;
  } 
           
  // une methode d'affichage.
  public function afficher() {
    echo "<ul>";
    foreach ($this as $key => $value) {
      echo "<li> $key : $value </li>";
    }
    echo "</ul>";
  }
}
?>