<?php

$erreurs = [];

if (isset($_GET["errors"]) && !empty($_GET["errors"])) {

    $erreurs = json_decode($_GET["errors"], true);
}

$donnees = [];

if (isset($_GET["donnees"]) && !empty($_GET["donnees"])) {

    $donnees = json_decode($_GET["donnees"], true);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul d'age | Mineur</title>
</head>

<body>

    <form method="POST" action="/exercice-2/traitement-index.php">
        <table>

            <tr>
                <td colspan="2">
                    <h1>Calcul d'age et determination de majorité</h1>
                </td>
            </tr>

            <?php if (isset($_GET["message"]) && !empty($_GET["message"])) { ?>
                <tr>
                    <td colspan="2">
                        <p style="background-color: green; color: white; padding: 10px">
                            <?php echo $_GET["message"]; ?>
                        </p>
                    </td>
                </tr>
            <?php } ?>

            <tr>
                <td>
                    <label for="annee-naissance">Année de naissance :</label>
                </td>
                <td>
                    <input type="number" name="annee-naissance" id="annee-naissance" 
                    class="annee-naissance" placeholder="Veuillez entrer votre année de naissance" 
                    value="<?= (isset($donnees["annee-naissance"]) && !empty($donnees["annee-naissance"])) ? $donnees["annee-naissance"] : "" ?>"/>
                </td>
            </tr>



            <tr>
                <td colspan="2">
                    <p style="color: red;">
                        <?= (isset($erreurs["annee-naissance"]) && !empty($erreurs["annee-naissance"])) ? $erreurs["annee-naissance"] : "" ?>
                    </p>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="reset" value="Annuler">
                </td>
                <td>
                    <input type="submit" value="Envoyer" />
                </td>
            </tr>

        </table>
    </form>

</body>

</html>