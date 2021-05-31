<?php

// $dateN= "1997-20-07";
// $affich = str_split($dateN, 4);
// print_r($affich);
// echo "<br>". $affich[0];
include("includ/connection.php");
include("fonction/fonctions.php");


// Traitement des information envoyer
$nom = securisation($_POST['nom']);
$prenom = securisation($_POST['prenom']);
// $contact_phone = securisation($_POST['contact_phone']);
// $contact_email = securisation($_POST['contact_email']);
$Genre = securisation($_POST['Genre']);
$datenaissance = securisation($_POST['datenaissance']);
$Tempdatenaissance = str_split($datenaissance, 4);
$verifdatenaissance = $Tempdatenaissance[0];
$verifdatenaissance = 2021 - $verifdatenaissance;
$LieuNaissance = securisation($_POST['LieuNaissance']);

$pays= securisation($_POST['pays']);
$LieuResid = securisation($_POST['LieuResid']);
$usern = securisation($_POST['usern']);

$password = securisation($_POST['password']);
$password = cryptageMotpasse($password);
$statutCompte = "False";

echo $verifdatenaissance;


try {
    if (!empty($nom) && isset($nom) && !empty($prenom) && isset($prenom) && !empty($password) && isset($password)) {
        // Insertion du message à l'aide d'une requête préparée
        //$req = $bdd->prepare('INSERT INTO users (nom,prenom,genre,dateNaissance,lieuNaissance,nationalite,adresseResidence,username,password,nomParent,numeroParent,mailParent,levelEnfant,etablissement,photoCniParent,AccordParent,emailAd,phoneAd,photocniAd,pointTournoi,Referencement,statutCompte)
        $req = $bdd->prepare('INSERT INTO users (nom,prenom,genre,dateNaissance,lieuNaissance,nationalite,adresseResidence,username,password,statutCompte)
        VALUES(?,?,?,?,?,?,?,?,?,?)');
        $req->execute(array($nom, $prenom, $Genre, $datenaissance, $LieuNaissance, $pays, $LieuResid, $usern, $password, $statutCompte));
        if($verifdatenaissance<21 && $verifdatenaissance>=9){
            header('Location:http://dreamland.test/register2');
        }elseif($verifdatenaissance>=21){
            header('Location:http://dreamland.test/register3');
        }
        

        exit();
    } else {
        header('Location:http://dreamland.test/error');
    }
} catch (Exception $e) {
    //die('Erreur : ' . $e->getMessage());
    header('Location:http://dreamland.test/error');
}
