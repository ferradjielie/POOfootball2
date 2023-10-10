<?php

class Joueur {
    private $prenom;
    private $nom;
    private $pays = [];
    private array $contrat;
   // private $equipe = [];
    

    public function __construct(string $prenom, string $nom, Pays $pays) {
         $this-> prenom = $prenom;
         $this -> nom = $nom;
         $this -> pays = $pays;
        // $this -> equipe = $equipe;
    
        
        $this -> pays -> ajouterJoueur($this);
         
    }

    

    /*public function ajouterEquipe(Equipe $equipes) {
        $this -> equipe [] = $equipes;
    } */

    /*public function afficherEquipeJoueur(){
        foreach($this-> equipe as $equipes) {
            echo "les equipes pour qui le joueur". " " . $this-> nom ." ". " ". " ". " a joué sont " ; 
        foreach($this-> equipe as $equipes) {
            echo $equipes ;
            echo "<br>";   }
        }
    }  */
     public function ajouterContrat(Contrat $contrats) {
        $this->contrat []= $contrats;
     }

     public function afficherContrat()
    {
        foreach ($this->contrat as $contrats) {
            echo $contrats;
        }
    }

    public function getPrenom() {
        return $this-> prenom; 
      
    }

    public function getNom(){
        return $this-> nom ;
    }

    public function __toString () {
        return $this-> prenom. " ". $this-> nom;
    }

}