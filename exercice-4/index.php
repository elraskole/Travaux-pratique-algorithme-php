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
    <title>Valeur absoule de la différence de deux nombre</title>
</head>

<body>

    <form method="POST" action="/exercice-4/traitement-index.php">
        <table>

            <tr>
                <td colspan="2">
                    <h1>Valeur absoule de la différence de deux nombre</h1>
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
                    <label for="nombre-1">Nombre 1 :</label>
                </td>
                <td>
                    <input type="number" name="nombre-1" id="nombre-1" 
                    class="nombre-1" placeholder="Veuillez entrer le premier nombre" 
                    value="<?= (isset($donnees["nombre-1"]) && !empty($donnees["nombre-1"])) ? $donnees["nombre-1"] : "" ?>"
                    required
                    />
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <p style="color: red;">
                        <?= (isset($erreurs["nombre-1"]) && !empty($erreurs["nombre-1"])) ? $erreurs["nombre-1"] : "" ?>
                    </p>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="nombre-2">Nombre 2 :</label>
                </td>
                <td>
                    <input type="number" name="nombre-2" id="nombre-2" 
                    class="nombre-2" placeholder="Veuillez entrer le deuxième nombre" 
                    value="<?= (isset($donnees["nombre-2"]) && !empty($donnees["nombre-2"])) ? $donnees["nombre-2"] : "" ?>"
                    />
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <p style="color: red;">
                        <?= (isset($erreurs["nombre-2"]) && !empty($erreurs["nombre-2"])) ? $erreurs["nombre-2"] : "" ?>
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