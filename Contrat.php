<?php
class Contrat {            

private $debutContrat;
//private  array  $equipe;
//private Joueur $joueur;

public function __construct (string $debutContrat) {
     $this -> debutContrat = substr($debutContrat, 0, 4);
   //  $this-> equipe = $equipe;
    // $this-> joueur = $joueur;
    // $this -> joueur ->ajouterEquipe($this);
//     $this-> joueur-> ajouterContrat($this);
}

public function getDebutContrat () {
    return $this-> debutContrat;
}








public function __toString () {
    return $this-> debutContrat;
}



}