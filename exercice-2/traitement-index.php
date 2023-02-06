<?php

$message = "";

$erreurs = [];

$donnees = $_POST;

if (isset($_POST["annee-naissance"]) && !empty($_POST["annee-naissance"])) {

    if (!is_numeric($_POST["annee-naissance"])) {

        $$erreurs["annee-naissance"] = "Le champ age doit contenir des chiffre. Veuillez renseigner votre age.";

    } else {

        $age = 2023 - $_POST["annee-naissance"];

        if ($age < 0) {

            $erreurs["annee-naissance"] = "Le champ année de naissance ne peut pas etre supérieure a l'année en cours : 2023. Veuillez renseigner un age valide.";

        } else if ($age >= 0 && $age < 18) {

            $message = "Vous avez $age ans. Vous etes encore mineur.";
        } else {

            $message = "Vous avez $age ans. Vous etes majeur.";
        }
    }
} else {

    $erreurs["annee-naissance"] = "Le champ age est vide. Veuillez renseigner votre age.";
}

header("location: index.php?message=$message&errors=" . json_encode($erreurs) . "&donnees=" . json_encode($donnees));
