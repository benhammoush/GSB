<?php

include("vues/v_sommaire_comptable.php");

$action = $_REQUEST['action'];
$utilisateur = $_SESSION['idUtilisateur'];
$dernierMois = 6;
$leMois = getMois(date("d/m/Y"));
$numAnnee =substr( $leMois,0,4);
$numMois =substr( $leMois,4,2);

switch($action) {
    
    case "afficherVisiteursEtSixDerniersMois": {
        $visiteurs = $pdo->afficherVisiteurs();
        $lesMois = getSixDerniersMois();
        $moisASelectionner = $lesMois[0]['year'].$lesMois[0]['month'];
        $visiteursASelectionner = $visiteurs[0]['id'];
        include("vues/v_selectionnerVisiteurEtMois.php");
        break;
    }
        
    case "Valider": {
        $leMois = $_REQUEST['leMois'];
        $visiteur = $_REQUEST['visiteurs'];
        $visiteurs = $pdo->afficherVisiteurs();
        $lesMois = getSixDerniersMois();
        $moisASelectionner = $lesMois;
        $visiteursASelectionner = $visiteur;
        
        $visiteur = strval($visiteur);
        
        $lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($visiteur,$leMois);
        $lesFraisForfait= $pdo->getLesFraisForfait($visiteur,$leMois);
        $lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($visiteur,$leMois);
        $numAnnee =substr( $leMois,0,4);
        $numMois =substr( $leMois,4,2);
        $libEtat = $lesInfosFicheFrais['libEtat'];
        $montantValide = $lesInfosFicheFrais['montantValide'];
        $nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
        $dateModif =  $lesInfosFicheFrais['dateModif'];
        $dateModif =  dateAnglaisVersFrancais($dateModif);
        include("vues/v_selectionnerVisiteurEtMois.php");
        include("vues/v_fraisDuVisiteur.php");
        break;
    }

    case 'supprimer': {
            $id = $_REQUEST['id'];
            $pdo->refuserfrais($id);
            break;
        }

    case 'reporter': {
            $id = $_REQUEST['id'];
            $MoisPlus = getMoisNext($numAnnee, substr($_SESSION['lstMois'], 4, 2)); // appel de la fonction qui ajoute 1 au mois
            $pdo->getMoisSuivant($Uneannee, $lemois, $id);
            break;
        }
}

