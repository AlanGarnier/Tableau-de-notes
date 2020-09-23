<?php

/*
 * Chargement du tableau de notes
 */
session_start();
$NB_NOTES=24;
$valSup=20;
$tabNotes=array();
for ($i=0;$i<$NB_NOTES;$i++){
    $tabNotes[$i]=abs(((int)(cos((float)$i+1)*1000))%$valSup);    
}
$_SESSION['notes']=$tabNotes;
$_GET['message']="le tableau est chargé";
$_GET['vue']="v_bienvenue";
include 'c_affichage.php';
?>
