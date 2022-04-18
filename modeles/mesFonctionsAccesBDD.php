<?php

function connexionBDD() {
    $bdd = 'mysql:host=localhost;dbname=bdd_mission3langamezianemiroux';
    $user = 'root';
    $password = '';
    try {
        $ObjConnexion = new PDO($bdd, $user, $password, array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    } catch (PDOException $e) {
        echo $e->getMessage();
        echo 'Connexion échoué';
    }
    return $ObjConnexion;
}

function deconnexionBDD($cnx) {
    $cnx = null;
}

function getLesTypes($ObjConnexion) {
    $searchTypes = $ObjConnexion->prepare("SELECT id, libelle FROM type_biens");
    $execution = $searchTypes->execute();
    $lesTypes = $searchTypes->fetchAll();
    return $lesTypes;
}

function getLesVilles($ObjConnexion) {
    $searchVille = $ObjConnexion->prepare("SELECT DISTINCT ville FROM biens");
    $execution = $searchVille->execute();
    $lesVilles = $searchVille->fetchAll();
    return $lesVilles;
}

function testMail($ObjConnexion, $email, $mdp) {
    $pdoState = $ObjConnexion->prepare("SELECT count(*) as nbMail From utilisateur where email=:lemail and mdp=:lemdp");
    $bv1 = $pdoState->bindValue(':lemail', $email);
    $bv2 = $pdoState->bindValue(':lemdp', $mdp);
    $execution = $pdoState->execute();
    $resultatRequete = $pdoState->fetch();
    if ($resultatRequete['nbMail'] == 0) {
        $mailtrouve = false; // s'il existe pas  dans la bdd renvoie faux
    } else {
        $mailtrouve = true; // s'il existe renvoie vrai
    }
    return $mailtrouve;
}

function testVille($ObjConnexion, $ville) {
    $searchVille = $ObjConnexion->prepare("SELECT * FROM biens WHERE ville=:ville");
    $bvVille = $searchVille->bindValue(':ville', $ville);
    $execution = $searchVille->execute();
    $resultat = $searchVille->fetchAll();
    return $resultat;
}

function testType($ObjConnexion, $type) {
    $pdoStatement = $ObjConnexion->prepare("SELECT * FROM biens WHERE type=:letype");
    $bvType = $pdoStatement->bindValue(':letype', $type);
    $execution = $pdoStatement->execute();
    $resultat = $pdoStatement->fetchAll();
    return $resultat;
}

function getLesBiens($ObjConnexion) {
    $allBiens = $ObjConnexion->prepare("SELECT * FROM biens JOIN type_biens ON type_biens.id = biens.type");
    $execution = $allBiens->execute();
    $lesBiens = $allBiens->fetchAll();
    return $lesBiens;
}

function testPrix($ObjConnexion, $min, $max) {
    $pdoStatement = $ObjConnexion->prepare("SELECT * FROM biens WHERE prix between :min and :max");
    $bvType = $pdoStatement->bindValue(':min', $min);
    $bvz = $pdoStatement->bindValue('max', $max);
    $execution = $pdoStatement->execute();
    $resultat = $pdoStatement->fetchAll();
    return $resultat;
}

function testTypeVille($ObjConnexion, $type, $ville, $jardin, $min, $max) {
    $requete = "SELECT * FROM biens JOIN type_biens ON type_biens.id = biens.type WHERE 1=1 ";
    if ($type != 0) {
        $requete .= " and type=:type";
    }
    if ($ville != "0") {
        $requete .= " and ville=:ville";
    }
    if ($jardin < 2) {
        $requete .= " AND jardin=:jardin";
    }
    if ($min != "" && $max != "") {
        $requete .= " AND prix between :min and :max";
    }
    $recherche = $ObjConnexion->prepare($requete);
    if ($type != 0) {
        $bvtype = $recherche->bindValue(':type', $type);
    }
    if ($ville != "0") {
        $bvville = $recherche->bindValue(':ville', $ville);
    }
    if ($jardin < 2) {
        $bvjardin = $recherche->bindValue(':jardin', $jardin);
    }
    if ($min != "" && $max != "") {
        $bvmin = $recherche->bindValue(':min', $min);
        $bvmax = $recherche->bindValue(':max', $max);
    }
    $execution = $recherche->execute();
    $resultat = $recherche->fetchAll();
    return $resultat;
}

function affichageUnBien($ObjConnexion, $ref_bien) {
    $pdoState = $ObjConnexion->prepare("SELECT * From biens where ref=:laref");
    $bv1 = $pdoState->bindValue(':laref', $ref_bien);
    $execution = $pdoState->execute();
    $resultatRequete = $pdoState->fetch();
    return $resultatRequete;
}

function getImage($ObjConnexion, $id) {
    $requete = $ObjConnexion ->prepare("select * from image where idBien=:id");
    $bv = $requete->bindValue(':id', $id);
    $execution = $requete->execute();
    $resultat = $requete->fetchAll();
    return $resultat;
}