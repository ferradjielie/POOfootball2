<?php
class Contrat {            

private $debutContrat;
private  Equipe $equipe;
private Joueur $joueur;

public function __construct (string $debutContrat,  Joueur $joueur , Equipe $equipe,) {
     $this -> debutContrat = substr($debutContrat, 0, 4);
    $this-> equipe = $equipe;
     $this-> joueur = $joueur;
     $this -> joueur ->ajouterContrat($this);
   $this-> equipe-> ajouterContrat($this);
}

public function getDebutContrat () {
    return $this-> debutContrat;
}
public function getEquipe (){
    return $this-> equipe;
}
public function getJoueur () {
    return $this -> joueur;
}








public function __toString () {
    return $this-> debutContrat . $this-> joueur . $this-> equipe;
}



}