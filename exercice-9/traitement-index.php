<?php

$erreurs = [];

$message = "";

$donnees = $_POST;

if (!isset($_POST["choix"]) || (empty($_POST["choix"]))) {

    $erreurs["choix"] = "Le champ choix est vide. Veuillez le remplir.";

}

if (!isset($_POST["nombre-1"]) || (empty($_POST["nombre-1"]) && $_POST["nombre-1"] != 0)) {

    $erreurs["nombre-1"] = "Le champ nombre 1 est vide. Veuillez le remplir.";

} else if (!is_numeric($_POST["nombre-1"])) {

    $erreurs["nombre-1"] = "Le champ nombre 1 doit contenir des chiffres. Veuillez le remplir.";
}

if (!isset($_POST["nombre-2"]) || (empty($_POST["nombre-2"]) && $_POST["nombre-2"] != 0)) {

    $erreurs["nombre-2"] = "Le champ nombre 2 est vide. Veuillez le remplir.";
} else if (!is_numeric($_POST["nombre-2"])) {

    $erreurs["nombre-2"] = "Le champ nombre 2 doit contenir des chiffres. Veuillez le remplir.";
}

if (!isset($_POST["nombre-3"]) || (empty($_POST["nombre-3"]) && $_POST["nombre-3"] != 0)) {

    $erreurs["nombre-3"] = "Le champ nombre 3 est vide. Veuillez le remplir.";
} else if (!is_numeric($_POST["nombre-3"])) {

    $erreurs["nombre-3"] = "Le champ nombre 3 doit contenir des chiffres. Veuillez le remplir.";
}

if (empty($erreurs)) {

    if ($_POST["choix"] == "somme"){
        
        $message = "La somme des trois nombre est égale a : " . $_POST["nombre-1"] + $_POST["nombre-2"] + $_POST["nombre-3"];

    }else if ($_POST["choix"] == "produit"){

        $message = "Le produit des trois nombre est égale a : " . $_POST["nombre-1"] * $_POST["nombre-2"] * $_POST["nombre-3"];

    }else if ($_POST["choix"] == "moyenne"){

        $message = "Le produit des trois nombre est égale a : " . ($_POST["nombre-1"] + $_POST["nombre-2"] + $_POST["nombre-3"]) / 3;

    }else{

        $erreurs["choix"] = "Le champ choix contient une mauvaise valeur. Ce champ doit avoir un valeur comprise entre somme, produit et moyenne.";

    }

}

header("location: index.php?message=$message&errors=" . json_encode($erreurs) . "&donnees=" . json_encode($donnees));
