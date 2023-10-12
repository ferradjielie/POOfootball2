<?php
 class Equipe {

    private string $nomEquipe;
    private $dateCreation;
    private Pays $pays;
    private array $joueur;
    private array $contrats;
   
  //  private $joueur ;
   


    public function __construct(string $nomEquipe, string $dateCreation, Pays $pays/*Joueur $joueur */  ) {
        $this -> nomEquipe = $nomEquipe;
        $this->dateCreation = date('d/m/Y', strtotime($dateCreation));
        $this -> pays = $pays;
      
      
        $this -> joueur = [];
    
      
       // $this-> joueur = $joueur;
       $this-> pays -> ajouterEquipe($this);
       // $this-> joueur -> ajouterEquipe($this);
       // $this -> joueur -> ajouterEquipe($this);

        

    }

    public function ajouterContrat(Contrat $contrat) {
        $this->contrats []= $contrat;
     }

    public function ajouterJoueur(Joueur $joueurs) {
        $this-> joueur[] = $joueurs;
    }

    public function afficherJoueursEquipe () {
        echo "<h2>Joueurs de l'équipe $this->nomEquipe</h2>";
        echo "<ul>";

        foreach($this->contrats as $contrat) {
           echo "<li>$contrat</li>";
        }
        
        echo "</ul>";
    }

    
     public function afficherContrat () {
        foreach($this-> contrats as $contrat) {
            echo $contrat;
        }
     }

   
        
    public function getNomEquipe() {
    return $this -> nomEquipe;
    }
    public function getDateCreation () {
        return $this -> dateCreation; 
    }

    public function __toString() {
        return "Le" . " ". $this->nomEquipe . " " ." ". "("." ". $this->dateCreation. ")";
    }

 }