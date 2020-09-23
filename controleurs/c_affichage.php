<?php
/*
 * Controleur qui gére l'affichage général * 
 */

require_once 'modele/m_liensAffichage.php';

//mise en cache du contenu
ob_start();
include "vues/".$_GET["vue"].".php";
$contenu=  ob_get_contents();
ob_end_clean();

//affichage de la page d'acceuil c'est le patron de presentation
include "vues/v_accueil.php";
?>
