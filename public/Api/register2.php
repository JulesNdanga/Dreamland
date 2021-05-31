<?php

// $dateN= "1997-20-07";
// $affich = str_split($dateN, 4);
// print_r($affich);
// echo "<br>". $affich[0];
include("includ/connection.php");
include("fonction/fonctions.php");


// Traitement des information envoyer
$nomp = securisation($_POST['nomp']);
$contact_phoneP = securisation($_POST['contact_phoneP']);
$contact_emailP = securisation($_POST['contact_emailP']);
$school= securisation($_POST['school']);
$institute = securisation($_POST['institute']);
$photo = $_POST['photo'];
$usern = securisation($_POST['usern']);

try {
    if (!empty($nomp) && isset($nomp) && !empty($contact_phoneP) && isset($contact_phoneP) && !empty($contact_emailP) && isset($contact_emailP)) {
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                // Insert image file name into database
                $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('" . $fileName . "', NOW())");
                if ($insert) {
                    $statusMsg = "The file " . $fileName . " has been uploaded successfully.";
                } else {
                    $statusMsg = "File upload failed, please try again.";
                }
            } else {
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        } else {
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }

        // Insertion du message à l'aide d'une requête préparée
        $bdd->query("UPDATE users SET nomParent='" . $nomp."',numeroParent='" . $contact_phoneP ."',mailParent='" . $contact_emailP ."',levelEnfant='" . $school ."',etablissement='" . $institute ."',photoCniParent='" . $photo . "' where username='" . $usern . "' limit 1");
        
            header('Location:http://dreamland.test/register4');
        exit();
    } else {
        header('Location:http://dreamland.test/error');
    }
} catch (Exception $e) {
    //die('Erreur : ' . $e->getMessage());
    header('Location:http://dreamland.test/error');
}
