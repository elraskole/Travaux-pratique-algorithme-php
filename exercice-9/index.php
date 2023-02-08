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
    <title>Exercice 9</title>
</head>

<body>

    <h1>MENU</h1>
    <ol>
        <li>Somme</li>
        <li>Produit</li>
        <li>Moyenne</li>
    </ol>

    <p>Veuillez faire un choix</p>

    <form method="POST" action="/exercice-9/traitement-index.php">

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
                    <label for="choix">Choix :</label>
                </td>
                <td>
                    <select name="choix" id="choix" class="choix">
                        <option value="">Veuillez faire un choix</option>
                        <option value="somme">Somme</option>
                        <option value="produit">Produit</option>
                        <option value="moyenne">Moyenne</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <p style="color: red;">
                        <?= (isset($erreurs["choix"]) && !empty($erreurs["choix"])) ? $erreurs["choix"] : "" ?>
                    </p>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="nombre-1">Nombre 1 :</label>
                </td>
                <td>
                    <input type="number" name="nombre-1" id="nombre-1" class="nombre-1" placeholder="Veuillez entrer le premier nombre" 
                    value="<?= (isset($donnees["nombre-1"]) && (!empty($donnees["nombre-1"]) || ["nombre-1"] == 0)) ? $donnees["nombre-1"] : "" ?>" />
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
                    <input type="number" name="nombre-2" id="nombre-2" class="nombre-2" placeholder="Veuillez entrer le deuxième nombre" 
                    value="<?= (isset($donnees["nombre-2"]) && (!empty($donnees["nombre-2"]) || ["nombre-2"] == 0)) ? $donnees["nombre-2"] : "" ?>" />
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
                    <label for="nombre-3">Nombre 3 :</label>
                </td>
                <td>
                    <input type="number" name="nombre-3" id="nombre-3" class="nombre-3" placeholder="Veuillez entrer le troisième nombre" 
                    value="<?= (isset($donnees["nombre-3"]) && (!empty($donnees["nombre-3"]) || ["nombre-3"] == 0)) ? $donnees["nombre-3"] : "" ?>" />
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <p style="color: red;">
                        <?= (isset($erreurs["nombre-3"]) && !empty($erreurs["nombre-3"])) ? $erreurs["nombre-3"] : "" ?>
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