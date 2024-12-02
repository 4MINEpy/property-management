<?php
require_once "../../model/Appartement/CrudAppartement.php";
require_once "../../model/Appartement/Appartement.php";

$ref = $_GET["id"];
$crud = new CrudAppartement();
$tab = $crud->RecupererApp($ref);
$prop = $tab[2];
$loc = $tab[3];
$surf = $tab[4];
$nbp = $tab[5];
$dmu = $tab[6];
$surfcomm = $tab[7];

if(isset($_POST["ok"])){
    
    $app = new Appartement($ref,$_POST["prop"],$_POST["loc"],$_POST["surf"],$_POST["nbp"],$_POST["dmu"],$_POST["surfcomm"]);
    $res = $crud->ModifierApp($app);
    if($res == 1){
        header("location: listApp.php");
    }
}
include "../../view/Appartement/modifierApp.php";
