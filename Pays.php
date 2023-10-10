<?php

class Pays {
    private $nomPays;
    private $equipe = [];
    private $joueur = []; 

    public function __construct(string $nomPays) {
        $this -> nomPays = $nomPays;
        $this -> equipe = [];
        $this -> joueur = [];
    }
    public function getNomPays() {
        return $this -> nomPays;
    }

    public function __toString () {
        return $this-> nomPays;
    }

    public function ajouterEquipe(Equipe $equipes) {
        $this -> equipe [] = $equipes;
    }

    public function ajouterJoueur (Joueur $joueurs) {
        $this-> joueur[] = $joueurs;
    }
    public function afficherEquipe(){
        echo "les equipes appartenant au championnat de". " " . $this->nomPays ." ". " ". " ". "sont le " ; 
        foreach($this-> equipe as $equipes) {
            echo $equipes ;
            echo "<br>";
        }
    }

    public function afficherJoueur () {
        echo "le/les joueurs appartenant au pays suivant =>  ". $this-> nomPays. " ". "sont les suivants : "."<br>". " " ;
        foreach($this-> joueur as $joueurs) {
            echo $joueurs  ."<br>";
        }
    }
}