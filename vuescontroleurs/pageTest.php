<?php

include_once '../modeles/mesFonctionsAccesBDD.php';
$lePDO = connexionBDD();

$ref_bien = $_GET['ref'];

$requete = "SELECT * FROM biens WHERE ref=$ref_bien";


//$affich = affichageUnBien($lePDO, $ref_bien);
//include_once '../inc/entete.inc';


//var_dump($affich);

//include_once '../inc/piedDePage.inc';
