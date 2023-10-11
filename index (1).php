<?php

require("Pays.php");
require("Joueur.php");
require("equipe.php");
require("Contrat.php");




$pays1 = new Pays ("France");
$pays2 = new Pays ("Brésil");
$pays3 = new Pays ("l'Espagne");





$equipe1 = new Equipe ("FC Barcelone","1899/11/29", $pays3, $joueur2, $joueur3);

$equipe2 = new Equipe ("PSG", "01/01/1970", $pays1, $joueur1, $joueur2) ;
$equipe3 = new Equipe ("AS Monaco", "01/01/1924", $pays1, $joueur1);
 

$joueur1 = new Joueur ("Kylian", "Mbappe", $pays1, $equipe3, $equipe3);

$joueur2 = new Joueur("Ousmane", "Dembelé", $pays1, $equipe1, $equipe3);

$joueur3 = new Joueur("Raphael", "Belloli", $pays2, $equipe1);




//$contratMba = new Contrat("2009", $equipe3,  $joueur1);BNJ?K??K??tfghhhug











/*echo $pays1;
echo "<br>";

echo $joueur1;

echo "<br>";
echo $equipe1;
echo "<br>";
echo $equipe2;

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>"; */

echo $pays3 -> afficherEquipe(); 
echo $pays1 -> afficherEquipe(); 
echo "<br>";
echo $pays1 -> afficherJoueur();
echo "<br>";
echo $pays2 ->afficherJoueur();
echo "<br>";

//echo $joueur1 ->afficherEquipeJoueur();

//echo  $equipe1-> afficherJoueursEquipe();
echo "<br>";

//echo $equipe2 -> afficherJoueursEquipe();
echo "<br>";
echo "<br>";


echo $joueur1 -> afficherLesEquipes();

