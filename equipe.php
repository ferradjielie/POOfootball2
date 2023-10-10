<?php
 class Equipe {

    private $nomEquipe;
    private $dateCreation;
    private  $pays;
    private array $contrat;
   // private $joueur = [];
  //  private $joueur ;
   


    public function __construct(string $nomEquipe, string $dateCreation, Pays $pays) {
        $this -> nomEquipe = $nomEquipe;
        $this->dateCreation = date('d/m/Y', strtotime($dateCreation));
        $this -> pays = $pays;
      
      
        //$this-> joueur = $joueur;
        $this-> pays -> ajouterEquipe($this);
       // $this -> joueur -> ajouterEquipe($this);

        

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