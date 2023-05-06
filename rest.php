<?php

$mydb=new PDO('mysql:host=localhost;dbname=MW04_drone_rayane;charset=utf8','rayanebesrour','rayane'); 
if(!empty($_POST))
{
    if (isset($_POST['valider']))
    {
        print_r($_POST);  

        $pseudo=$_POST['pseudo_utilisateur'];
        $mdp=$_POST['mdp_utilisateur'];
        $req="select nom,prenom from utilisateur where pseudo=? and mdp=?";
        $reqpreparer=$mydb->prepare($req);
        $tableauDeDonnees=array($pseudo,$mdp);
        $reqpreparer->execute($tableauDeDonnees);
        $reponse=$reqpreparer->fetchALL(PDO::FETCH_ASSOC);
        //print_r($req);
        $reponsedb=count($reponse);
        if($reponsedb<1){

            echo"erreur";
            header("Location:formulaire_connexion.php?erreur=pseudo");
        }
        else{
            echo"good";
            header("Location:formulaire_connexion.php?bien_jouer");
       
        }
        $reqpreparer->closeCursor();
    }
}



            // Partie Inscription


            if (isset($_POST['inscription']))
            {   

                print_r($_POST); 

                // $mydb = new PDO('mysql:host=localhost;dbname=MW04_drone_rayane;charset_utf8','rayanebesrour','rayane');
                $nom = $_POST["nom_utilisateur"];
                $prenom=$_POST["prenom_utilisateur"];
                $naissance=$_POST["date"];
                $mail=$_POST["email"];
                $pseudo=$_POST["pseudo_utilisateur"];
                $mdp=$_POST["mdp1_utilisateur"];
                $req="select nom,prenom from utilisateur where pseudo=?";




                $req='SELECT nom from utilisateur where pseudo=?';
                $reqpreparer=$mydb->prepare($req);
                $tableauDeDonnees=array($pseudo);
                $reqpreparer->execute($tableauDeDonnees);
                $reponse=$reqpreparer->fetchALL(PDO::FETCH_ASSOC);

            
                    if (count($reponse)!=0)
                    {
                        header("location:formulaire_inscription.php?erreur=pseudo");
                    }
                    else
                    {
                    $req="INSERT INTO utilisateur (pseudo,nom,mdp) values (?,?,?)";
                    $req=$mydb->prepare($req);
                    $tableauDeDonnees=array($pseudo,$nom,$prenom);
                    $reqpreparer->execute($tableauDeDonnees);
                    header("Location:formulaire_inscription.php?pseudo=.$pseudo");

                    }
                }

              