<?php

// Début de la tamporisation de sortie
ob_start();

if (!empty($_GET['module'])) {

	$module = dirname(__FILE__).'/modules/'.$_GET['module'].'/';
	
	// Si l'action est specifiée, on l'utilise, sinon, on tente une action par défaut
	$action = (!empty($_GET['action'])) ? $_GET['action'].'.php' : 'index.php';
	
	// Si l'action existe, on l'exécute
	if (is_file($module.$action)) {

		include $module.$action;

	// Sinon, on affiche la page d'accueil !
	} else {

		include 'global/accueil.php';
	}

// Module non specifié ou invalide ? On affiche la page d'accueil !
} else {

	include '..//frontend//vue//accueil_generee.php';
    //header( "Location" . "..\\frontend\\vue\\accueil.php" );
}

// Fin de la tamporisation de sortie
$contenu = ob_get_clean();

// Début du code HTML
include '..//frontend//vue//header.php';

echo $contenu;

// Fin du code HTML
include '..//frontend//vue//footer.php';


/*
    1/ coder la connexion des utilisateurs
        -> classe <Utilisateur>
        -> controleurUtilisateur
        -> modelUtilisateur (entity)
        -> vueUtilisateur
    2/ coder la connexion à la base de données
        -> modelUtilisateur (model)
    3/ URL rewrite de Apache


1       http://www.netcole.fr/offres_list.php
             |
            \ /
        http://www.netcole.fr/index.php?1module=offres&action=liste
    

?>



