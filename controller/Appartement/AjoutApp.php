<?php
require_once "../../model/Appartement/CrudAppartement.php";
require_once "../../model/Appartement/Appartement.php";
if(isset($_POST["ok"])){
    $prop = htmlspecialchars($_POST["prop"]);
    $loc = htmlspecialchars($_POST["loc"]);
    $surf = htmlspecialchars($_POST["surf"]);
    $nbp = htmlspecialchars($_POST["nbp"]);
    $dmu = htmlspecialchars($_POST["dmu"]);
    $surfcomm = htmlspecialchars($_POST["surfcomm"]);

    $app = new Appartement(NULL,$prop,$loc,$surf,$nbp,$dmu,$surfcomm);
    $crud = new CrudAppartement();
    $res = $crud->ajoutApp($app);
    if($res == 1){
        header("location: listApp.php");
    }
    else
    {
        echo("problem occured");
    }
}
include "../../view/Appartement/AjoutApp.php";