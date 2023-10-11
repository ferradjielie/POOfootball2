<?php
 class Equipe {

    private $nomEquipe;
    private $dateCreation;
    private  $pays;
    private $joueur= [];
    private array $contrat;
   // private $joueur = [];
  //  private $joueur ;
   


    public function __construct(string $nomEquipe, string $dateCreation, Pays $pays, Joueur $joueur) {
        $this -> nomEquipe = $nomEquipe;
        $this->dateCreation = date('d/m/Y', strtotime($dateCreation));
        $this -> pays = $pays;
      
      
        $this -> joueur = [];
        $this -> joueur = $joueur;
      
        //$this-> joueur = $joueur;
        $this-> pays -> ajouterEquipe($this);
        $this-> joueur -> ajouterEquipe($this);
       // $this -> joueur -> ajouterEquipe($this);

        

    }
    public function ajouterJoueur(Joueur $joueurs) {
        $this-> joueur[] = $joueurs;
    }
    public function afficherJoueursEquipe (){
        echo $this-> nomEquipe;
        foreach($this->joueur as $joueurs) {
           echo $joueurs ."<br>";
        }
    }

    public function ajouterContrat(Contrat $contrats) {
        $this->contrat []= $contrats;
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