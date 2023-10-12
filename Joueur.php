<?php

class Joueur {
    
    private $nomJoueur;
    private $pays = [];
    private array $contrats;
    private array $equipe;
    
    
   // private $equipe = [];
    

    public function __construct( string $nomJoueur, Pays $pays, array $equipe = []) {
        
         $this -> nomJoueur = $nomJoueur;
         $this -> pays = $pays;
         $this-> contrats = [];
        //  $this-> equipe = [];
         $this -> equipe = $equipe;
         foreach ($this->equipe as $equipe) {
             $equipe -> ajouterJoueur($this);
         }
        // $this -> equipe = $equipe;
    
        
        $this -> pays -> ajouterJoueur($this);
         
    }
    public function ajouterContrat(Contrat $contrat) {
        $this->contrats []= $contrat;
     }

    public function ajouterEquipe(Equipe $equipes) {
        $this->equipe[] = $equipes;
        // Ajouter le joueur à l'équipe
        
    }
    
    public function afficherLesEquipes () {
        echo "Le joueur". " ".$this-> nomJoueur." ". "a joué pour les équipes suivantes :";
        echo "<ul>";
       
        foreach($this-> contrats  as $contrat) {
            echo "<li>". $contrat->getEquipe()." (". $contrat->getDebutContrat().")". "</li>";
        }
        echo "</ul>";
    }

    

    
    

    

    

  
   

    public function getNomJoueur(){
        return $this-> nomJoueur ;
    }

    public function getEquipe(){
        return $this-> equipe ;
    }

    public function getDebutContrat(){
        return $this-> contrats;
    }

    public function __toString () {
        return  $this-> nomJoueur ;

}
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
    

     /*public function afficherContrat()
    {
        foreach ($this->contrats as $contrat) {
            echo $contrat;
        }
    } */
