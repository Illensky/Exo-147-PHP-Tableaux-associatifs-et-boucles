<?php

/*****************************************/
/********** Les boucles : Foreach ********/
/*****************************************/
//Parcourir un tableau simple

$couleurs = ['rouge', 'bleu', 'vert', 'orange', 'marron', 'noir', 'blanc'];
echo "5.Les couleurs : <br>";
foreach ($couleurs as $value) {
    echo $value."<br>";
}
echo "<br><br>";



//----------------------------------------
//parcourir un tableau associatif

$vehicule = array(
  //clé => valeur
  "nom" => "Aventador LP 700-4",
  "marque" => "Lamborghini",
  "puissance" => 700,
  "prix" => 200000,
);
echo "6.Spécificité de ma voiture : <br>";
//syntaxe : foreach($tableau as $cle => $valeur )
foreach ($vehicule as $propriete => $valeur) {
    echo $propriete." : ".$valeur."<br>";
}
echo "<br><br>";


//Parcourir un tableau associatif multidimensionnel

$vehiculeConcession = array(
  'Bas de gamme' => array(
    'nom' => 'C1',
       'marque' => 'Citroen',
       'puissance' => 70,
       'prix' => 10000,
  ),
  'Milieu de gamme' => array(
    'nom' => 'Golf',
       'marque' => 'VW',
       'puissance' => 140,
       'prix' => 270000,
  ),
  'Haut de gamme' => array(
    'nom' => 'Aventador LP 700-4',
       'marque' => 'Lamborghini',
       'puissance' => 700,
       'prix' => 200000,
  ),
);

echo "7.Les voitures dans la concession :";
foreach ($vehiculeConcession as $gamme => $voiture) {
    echo "<br>".$gamme;
    echo "<br>";
    foreach ($voiture as $propriete => $valeur) {
        echo $propriete." : ".$valeur."<br>";
    }
}
echo "<br><br>";


/*###############################################*/
/*################# ACTIVITÉS ###################*/
/*###############################################*/

//----------------------------------------
//Créer un tableau pour les mois de l'année et afficher tous les mois de Janvier à Décembre;
//Modifier et/ou remplacer les éléments ci-dessous
$monthArray = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Nomvembre", "Décembre"];

echo "8.Les mois depuis le début de l'année : <br>";
foreach ($monthArray as $month) {
    echo $month."<br>";
}
echo "<br>";

//Afficher les mois de la fin de l'année jusqu'au début de l'année
//Modifier et/ou remplacer les éléments ci-dessous

echo "9.Les mois depuis la fin de l'année : <br>";

foreach (array_reverse($monthArray) as $month) {
    echo $month."<br>";
}