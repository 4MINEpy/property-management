<?php
require_once "../../model/config.php";
require_once "Villa.php";

class CrudVilla{
    private $pdo;

    function __construct(){
        $cnx = new Config();
        $this->pdo = $cnx->getConfig();
        
    }

    function listerVilla(){
        $sql = "SELECT * FROM immobilier WHERE Type = 'Villa'";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }

    function ajoutVilla(Villa $app){
        $prop = $app->getPropriétaire();
        $loc = $app->getLocalité();
        $surf = $app->getSurface();
        $nbp = $app->getNbPieces();
        $dmu = $app->getDomaineUsage();
        $nbe = $app->getNbEtage();
        $sql = "INSERT INTO `immobilier` (`Reference`, `Type`, `Proprietaire`, `Localite`, `Surface`, `NbPieces`, `DomaineUsage`, `SurfaceEspaceCommun`, `NbEtages`) 
        VALUES (NULL, 'Villa', '$prop', '$loc', '$surf', '$nbp', '$dmu',NULL, '$nbe');";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function RecupererVilla($ref){
        $sql = "SELECT * FROM immobilier where Reference=$ref and Type = 'Villa'";
        $res = $this->pdo->query($sql);
        return $res->fetch(PDO::FETCH_NUM);
    }
    function supprimerVilla($ref){
        $sql = "DELETE FROM immobilier where Reference=$ref";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function ModifierVilla(Villa $app){
        $ref = $app->getReference();
        $prop = $app->getPropriétaire();
        $loc = $app->getLocalité();
        $surf = $app->getSurface();
        $nbp = $app->getNbPieces();
        $dmu = $app->getDomaineUsage();
        $nbe = $app->getNbEtage();
        $sql = "UPDATE immobilier SET Proprietaire='$prop', Localite = '$loc', Surface = $surf, NbPieces = $nbp, 
        DomaineUsage = '$dmu', NbEtages = $nbe
        WHERE Reference = $ref";
        $res = $this->pdo->exec($sql);
        return $res;
    }
}