<?php

$erreurs = [];

$message = "";

$donnees = $_POST;

if (!isset($_POST["couleur"]) || empty($_POST["couleur"])) {

    $erreurs["couleur"] = "Le champ couleur de feu de signalisation est vide. Veuillez le remplir.";
} else {

    $couleur = strtolower($_POST["couleur"]);

    //$donnees["couleur-miniscule"] = $couleur;

    // if ($couleur == "vert") {

    //     $message = "Le feu de signalisation est au vert. Vous pouvez passer.";

    // } else if ($couleur == "orange") {

    //     $message = "Le feu de signalisation est a l'orange. Veuillez ralentir.";

    // } else if ($couleur == "rouge") {

    //     $message = "Le feu de signalisation est au rouge. Veuillez vous arreter.";

    // }else{

    //     $erreurs["couleur"] = "La couleur du feu de signalisation est incorrecte. Veuillez entrer une couleur comprise entre vert, rouge ou orange.";

    // }


    switch ($couleur) {

        case "vert":
            $message = "Le feu de signalisation est au vert. Vous pouvez passer.";
            $donnees["color"] = "green";
            break;

        case "rouge":
            $message = "Le feu de signalisation est au rouge. Veuillez vous arreter.";
            $donnees["color"] = "red";
            break;

        case "orange":
            $message = "Le feu de signalisation est a l'orange. Veuillez ralentir.";
            $donnees["color"] = "orange";
            break;

        default:
            $erreurs["couleur"] = "La couleur du feu de signalisation est incorrecte. Veuillez entrer une couleur comprise entre vert, rouge ou orange.";
    }
}

header("location: index.php?message=$message&errors=" . json_encode($erreurs) . "&donnees=" . json_encode($donnees));
