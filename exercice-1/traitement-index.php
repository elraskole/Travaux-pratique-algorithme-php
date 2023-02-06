<?php

$erreurs = [];

$message = "";

$donnees = $_POST;

if (!isset($_POST["nombre-1"]) || empty($_POST["nombre-1"])) {

    $erreurs["nombre-1"] = "Le champ nombre 1 est vide. Veuillez le remplir.";
} else if (!is_numeric($_POST["nombre-1"])) {

    $erreurs["nombre-1"] = "Le champ nombre 1 doit contenir des chiffres. Veuillez le remplir.";
}

if (!isset($_POST["nombre-2"]) || empty($_POST["nombre-2"])) {

    $erreurs["nombre-2"] = "Le champ nombre 2 est vide. Veuillez le remplir.";
} else if (!is_numeric($_POST["nombre-2"])) {

    $erreurs["nombre-2"] = "Le champ nombre 2 doit contenir des chiffres. Veuillez le remplir.";
}

if (empty($erreurs)) {

    if ($_POST["nombre-1"] > $_POST["nombre-2"]) {

        $message = "Le nombre 1 est le plus grand";
    } else if ($_POST["nombre-1"] < $_POST["nombre-2"]) {

        $message = "Le nombre 2 est le plus grand";
    } else {

        $message = "Le nombre 1 est égale au nombre 2";
    }
}

header("location: index.php?message=$message&errors=" . json_encode($erreurs) . "&donnees=" . json_encode($donnees));
