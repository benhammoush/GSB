<?php
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");
include("vues/v_entete.php") ;
session_start();
$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();

if(!isset($_REQUEST['uc']) || !$estConnecte){ // $_REQUEST est une variable globale (partagée de page en page) qui comprend  tous les POST et les GET
     $_REQUEST['uc'] = 'connexion'; // uc = use case = cas d'utilisation = ensemble d'actions possibles pour un utilisateur donné
}	 
$uc = $_REQUEST['uc'];

switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");break; // Un nom de controleur commence par "c_"
	}
	case 'gererFrais' :{
		include("controleurs/c_gererFrais.php");break;
	}
	case 'etatFrais' :{
		include("controleurs/c_etatFrais.php");break; 
	}
        case 'validerFrais' : {
            include("controleurs/c_validerFrais.php"); break;
        }
        
}
include("vues/v_pied.php") ;
?>

