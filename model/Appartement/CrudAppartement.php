<?php
require_once "../../model/config.php";
require_once "Appartement.php";

class CrudAppartement{
    private $pdo;

    function __construct(){
        $cnx = new Config();
        $this->pdo = $cnx->getConfig();
        
    }

    function listerApp(){
        $sql = "SELECT * FROM immobilier where Type = 'Appartement'";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }

    function ajoutApp(Appartement $app){
        $prop = $app->getPropriétaire();
        $loc = $app->getLocalité();
        $surf = $app->getSurface();
        $nbp = $app->getNbPieces();
        $dmu = $app->getDomaineUsage();
        $surfcomm = $app->getSurfaceEspaceCommun();
        $sql = "INSERT INTO `immobilier` (`Reference`, `Type`, `Proprietaire`, `Localite`, `Surface`, `NbPieces`, `DomaineUsage`, `SurfaceEspaceCommun`, `NbEtages`) 
        VALUES (NULL, 'Appartement', '$prop', '$loc', '$surf', '$nbp', '$dmu', '$surfcomm', NULL);";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function RecupererApp($ref){
        $sql = "SELECT * FROM immobilier where Reference=$ref and Type = 'Appartement'";
        $res = $this->pdo->query($sql);
        return $res->fetch(PDO::FETCH_NUM);
    }
    function supprimerApp($ref){
        $sql = "DELETE FROM immobilier where Reference=$ref";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function ModifierApp(Appartement $app){
        $ref = $app->getReference();
        $prop = $app->getPropriétaire();
        $loc = $app->getLocalité();
        $surf = $app->getSurface();
        $nbp = $app->getNbPieces();
        $dmu = $app->getDomaineUsage();
        $surfcomm = $app->getSurfaceEspaceCommun();
        $sql = "UPDATE immobilier SET Proprietaire='$prop', Localite = '$loc', Surface = $surf, NbPieces = $nbp, 
        DomaineUsage = '$dmu', SurfaceEspaceCommun = $surfcomm
        WHERE Reference = $ref";
        $res = $this->pdo->exec($sql);
        return $res;
    }
}