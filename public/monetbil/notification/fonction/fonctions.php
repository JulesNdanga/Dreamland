<?php 
//Enleve tout les espaces inutiles, les slash et les tags
function securisation($donnee){
    $donnee = trim($donnee);
    $donnee = stripslashes($donnee);
    $donnee = strip_tags($donnee);
    return $donnee;
}
//Hash le mot de passe
function cryptageMotpasse($donnee){
    $donnee = password_hash($donnee,PASSWORD_DEFAULT);
    return $donnee;
}

//Verify si le mot de passe fournie correspond au hash
function decryptageMotpasse($pwdAverif,$pwdBd){
    $donnee = password_verify($pwdAverif,$pwdBd);
    return $donnee;
}

?>