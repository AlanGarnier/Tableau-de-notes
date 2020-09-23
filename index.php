<?php

/*
 * URL attendues :
 * index.php?action=index
 * index.php?action=article/article1
 */
//charge la configuration des repertoires attendus dans le site
//require_once 'conf.php';
//test si une url est saisie
if (!isset($_GET["action"])) {
    $_GET["action"] = "debut";
}
//associe  l'url à un controller
switch ($_GET["action"]) {
    case "debut":
        //chargement du controller c_debut.php
        include 'controleurs/c_debut.php';
        break;
    case "r":
        //chargement du controller c_r.php
        include 'controleurs/c_r.php';
        break;
    case "a":
        //chargement du controller c_r.php
        include 'controleurs/c_a.php';
        break;
    case "M":
        //chargement du controller c_r.php
        include 'controleurs/c_M.php';
        break;
    case "min":
        //chargement du controller c_r.php
        include 'controleurs/c_min.php';
        break;
     case "l":
        //chargement du controller c_r.php
        include 'controleurs/c_statsL.php';
        break;
     case "ln":
        //chargement du controller c_r.php
        include 'controleurs/c_statsLn.php';
        break;

    default:
        //chargement de la page d'erreur si le controleur n'existe pas
        include 'controleurs/c_erreur.php';
}
?>
