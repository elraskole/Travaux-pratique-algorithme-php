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
    <title>Feux signalisation</title>
</head>

<body>

    <form method="POST" action="/exercice-5/traitement-index.php">
        <table>

            <tr>
                <td colspan="2">
                    <h1>Feux signalisation</h1>
                </td>
            </tr>

            <?php if (isset($_GET["message"]) && !empty($_GET["message"])) { ?>
                <tr>
                    <td colspan="2">
                        <p style="background-color: <?= (isset($donnees["color"]) && !empty($donnees["color"])) ? $donnees["color"] : "green" ?> ; color: white; padding: 10px">
                            <?php echo $_GET["message"]; ?>
                        </p>
                    </td>
                </tr>
            <?php } ?>

            <tr>
                <td>
                    <label for="couleur">Couleur du feux signalisation</label>
                </td>
                <td>
                    <input type="text" name="couleur" id="couleur" class="couleur" placeholder="Veuillez entrer le couleur du feux signalisation" value="<?= (isset($donnees["couleur"]) && !empty($donnees["couleur"])) ? $donnees["couleur"] : "" ?>" />
                </td>
            </tr>

            <!-- <tr>
                <td>
                    <label for="couleur">Couleur du feux signalisation</label>
                </td>
                <td>
                    <select name="couleur" id="couleur">
                        <option value="vert">Vert</option>
                        <option value="orange">Orange</option>
                        <option value="rouge">Rouge</option>
                    </select>
                </td>
            </tr> -->

            <tr>
                <td colspan="2">
                    <p style="color: red;">
                        <?= (isset($erreurs["couleur"]) && !empty($erreurs["couleur"])) ? $erreurs["couleur"] : "" ?>
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