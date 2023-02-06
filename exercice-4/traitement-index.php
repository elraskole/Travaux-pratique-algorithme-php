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

    $resultat = abs($_POST["nombre-1"] - $_POST["nombre-2"]);

    $message = "La valeur absolue de " . $_POST['nombre-1'] . " et de " . $_POST['nombre-2']  . " est : " . $resultat . " (|" . $_POST['nombre-1'] . " - " . $_POST['nombre-2']  . "| = " . $resultat . ")";
}

header("location: index.php?message=$message&errors=" . json_encode($erreurs) . "&donnees=" . json_encode($donnees));
