<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>BTS SNIR - Dev WEB</title>
        <link rel="stylesheet" type="text/css" href="CSS/formulaire.css">
        

    </head>

    <body>
        <h1>Inscrivez-vous !</h1>
        <form action="rest.php" method="post" id="form_inscription">
            <label for="nom">Nom : </label>
            <input type="text" id="nom" name="nom_utilisateur">
            <label for="prenom">Prénom : </label>
            <input type="text" id="prenom" name="prenom_utilisateur">
            <label for="date">Date de naissance : </label>
            <input type="date" id="date" name="date">
            <label for="email">Adresse mail : </label>
            <input type="email" id="email" name="email">
            <label for="pseudo">Pseudo : </label>
            <input type="text" id="pseudo" name="pseudo_utilisateur">
            <label for="mdp1">Mot de passe : </label>
            <input type="password" id="mdp1" name="mdp1_utilisateur">
            <label for="mdp2">Ressaisir le mot de passe : </label>
            <input type="password" id="mdp2" name="mdp2_utilisateur">
            <button id="bouton_inscription" class="fond_bleu police_blanche" type="submit" name="inscription">M'inscrire !</button>
        </form>
        <script src="JS/formulaire_inscription.js"></script>
    </body>
</html>