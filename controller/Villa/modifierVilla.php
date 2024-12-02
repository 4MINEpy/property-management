<?php
require_once "../../model/Villa/CrudVilla.php";
require_once "../../model/Villa/Villa.php";

$ref = $_GET["id"];
$crud = new CrudVilla();
$tab = $crud->RecupererVilla($ref);
$prop = $tab[2];
$loc = $tab[3];
$surf = $tab[4];
$nbp = $tab[5];
$dmu = $tab[6];
$nbe = $tab[8];

if(isset($_POST["ok"])){
    
    $app = new Villa($ref,$_POST["prop"],$_POST["loc"],$_POST["surf"],$_POST["nbp"],$_POST["dmu"],$_POST["nbe"]);
    $res = $crud->ModifierVilla($app);
    if($res == 1){
        header("location: listVilla.php");
    }
}
include "../../view/Villa/modifierVilla.php";
