<?php
class Contrat {            

private $debutContrat;
private Equipe $equipe;
private Joueur $joueur;

public function __construct (string $debutContrat, Equipe $equipe, Joueur $joueur) {
     $this -> debutContrat = substr($debutContrat, 0, 4);
     $this-> equipe = $equipe;
     $this-> joueur = $joueur;
     $this -> equipe ->ajouterContrat($this);
     $this-> joueur-> ajouterContrat($this);
}

public function getDebutContrat () {
    return $this-> debutContrat;
}

public function getEquipe() {
    return $this-> equipe;
}
public function getJoueur(){
    return $this -> joueur;
}

public function __toString () {
    return $this-> debutContrat;
}

}