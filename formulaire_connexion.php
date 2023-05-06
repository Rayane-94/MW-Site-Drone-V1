<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>BTS SNIR - Dev WEB</title>
        <link rel="stylesheet" type="text/css" href="CSS/formulaire.css">
    </head>

    <body>
        <h1>Identifiez-vous !</h1>
        <form id="form_connexion" action="rest.php" method="POST">
            <label for="pseudo">Pseudo : </label>
            <input type="text" id="pseudo" name="pseudo_utilisateur">
            <label for="mdp">Mot de passe : </label>
            <input type="password" id="mdp" name="mdp_utilisateur">
            <button id="bouton_connexion" class="fond_bleu police_blanche" type="submit" name="valider">Valider</button>
            <?php
            if(isset($GET["erreur"]))
            {echo "<p>Login ou mdp incorrect</p>";
            }
            ?>


        </form>
        
    </body>
</html>