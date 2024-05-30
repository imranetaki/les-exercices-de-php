<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre d'or</title>
    <style>
    </style>
</head>
<body>
    <fieldset>
        <legend>Donnez votre avis sur PHP 8 !</legend>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="nom">Nom : </label>
            <input type="text" name="nom" id="nom" ><br>
            <label for="email">Mail : </label>
            <input type="email" name="email" id="email" ><br>
            <label for="comment">Vos commentaires sur le site :</label><br>
            <textarea name="comment" id="comment" cols="70" rows="10" ></textarea><br>
            <button type="submit" name="submit">Envoyer</button>
            <button type="submit" name="display">Afficher les avis</button>
        </form>
    </fieldset>
    <br><br><br>

    <?php
    // Vérifier si le formulaire est soumis
    if (isset($_POST['submit'])) {
        // Récupérer les données du formulaire
        $nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $comment = htmlspecialchars($_POST['comment']);
        $date = date("d/m/y H:i:s");

        // Format de l'avis à enregistrer
        $avis = "$date | $nom | $email | $comment\n";

        // Enregistrer l'avis dans un fichier
        file_put_contents("avis.txt", $avis, FILE_APPEND);
    }

    // Afficher les avis si le bouton "Afficher les avis" est cliqué
    if (isset($_POST['display'])) {
        // Lire les avis depuis le fichier
        if (file_exists("avis.txt")) {
            $avisArray = file("avis.txt");

            // Afficher les cinq derniers avis
            echo "<table>";
            echo "<tr><th>Numéro</th><th>Détails</th></tr>";
            $numAvis = count($avisArray);
            for ($i = max(0, $numAvis - 5); $i < $numAvis; $i++) {
                $avis = explode(" | ", $avisArray[$i]);
                echo "<tr><td>" . ($i + 1) . "</td><td>";
                echo "de : " . htmlspecialchars($avis[1]) . "<br>";
                echo "Mail : " . htmlspecialchars($avis[2]) . "<br>";
                echo "le : " . htmlspecialchars($avis[0]) . "<br>";
                echo "Commentaire : " . htmlspecialchars($avis[3]);
                echo "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "Aucun avis n'a été donné pour le moment.";
        }
    }
    ?>
</body>
</html>
