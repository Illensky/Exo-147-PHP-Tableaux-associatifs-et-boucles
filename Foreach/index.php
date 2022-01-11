<?php

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
$videotheque = array(
    array(
        'nom' => 'Independance day',
        'date' => 1996,
        'realisateur' => 'Roland Emmerich',
        'acteurs' => array(
            'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
        ),
    ),
    array(
        'nom' => 'Bienvenue a Gattaca',
        'date' => 1998,
        'realisateur' => 'Andrew Niccol',
        'acteurs' => array(
            'Ethan Hawke', 'Uma Thurman', 'Jude Law',
        ),
    ),
    array(
        'nom' => 'Forrest Gump',
        'date' => 1994,
        'realisateur' => 'Robert Zemeckis',
        'acteurs' => array(
            'Tom Hanks', 'Gary Sinise',
        ),
    ),
    array(
        'nom' => '12 hommes en colere',
        'date' => 1957,
        'realisateur' => 'Sidney Lumet',
        'acteurs' => array(
            'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
        ),
    ),
    array(
        'nom' => 'Fight Club',
        'date' => 2019,
        'realisateur' => "David Fincher",
        'acteurs' => array("Brad Pitt", "Edward Norton", "Helena Bonham Carter")
    ),
    array(
        'nom' => 'Inception',
        'date' => 2010,
        'realisateur' => "Christopher Nolan",
        'acteurs' => array("Leonardo DiCaprio", "Marion Cotillard", "Elliot Page")
    ),
    array(
        'nom' => 'The dark knight',
        'date' => 2008,
        'realisateur' => "Christopher Nolan",
        'acteurs' => array("Christian Bale", "Heath Ledger", "Aaron Eckhart")
    )
);

echo '12.Mes films : <br><br>';
//ajoutez votre code ici
foreach ($videotheque as $film) {
    foreach ($film as $infoLabel => $info) {
        if ($infoLabel === 'acteurs') {
            echo "Acteurs : ".implode(", ",$info);
        }
        else{
            echo $infoLabel." : ".$info."<br>";
        }
    }
    echo "<br><br>";
}

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis

echo '13.Mes films : <br><br>';
//ajoutez votre code ici

for ($i = 4 ; $i < count($videotheque) ; $i++) {
    foreach ($videotheque[$i] as $infoLabel => $info) {
        if ($infoLabel === 'acteurs') {
            echo "Acteurs : ".implode(", ",$info);
        }
        else{
            echo $infoLabel." : ".$info."<br>";
        }
    }
    echo "<br><br>";
}
