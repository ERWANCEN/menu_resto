<?php

// tableau fourni
$menu = array(
    "Entrées" => array("Pain", "Légumes", "Toast"),
    "Plats" => array("Agneau", "Kebab", "Pizza"),
    "Desserts" => array("Tiramisu", "Glace")
);

// fonction debug
/*
echo '<pre>';
print_r($menu);
echo '</pre>';
*/

// boucle foreach qui permet de parcourir un tableau
foreach ($menu as $key => $plats) { 
    // j'indique que je vais réaliser la boucle dans le tableau "$menu"
    // que pour chaque répétition, je crée une variable temporaire $key qui représente chaque clé du tableau à laquelle j'associe chacun de ses éléments associé
    echo "<ul><li>$key :"; // je crée donc une liste désordonnée dans laquelle je place un liste qui affichera la clé correspondante avec un point à côté
    foreach ($plats as $plat) { 
        // création d'une deuxième boucle foreach
        // j'indique que je vais parcourir le tableau correspondant à la variable "$plats" et que j'associe chacun de ses éléments à la variable temporaire "$plat"
        echo "<ul><li>$plat</li></ul>"; // je crée une autre liste dans la liste qui va me permettre d'obtenir l'indentation nécessaire à l'obtention des points vides
    }
    echo "</li></ul>"; // je ferme la grande liste
}

// EXPERIMENTATIONS

/*
foreach ($menu as $key => $value) {
    echo "<ul>$key :</ul>";
}

foreach ($menu as $key => $value) {
    echo "<ul><li>$key</li></ul>";
    foreach ($value as $subKey => $subValue) {
        echo "<li>$subValue</li>";
    }
}
*/

/* foreach ($key as $value) {

} */