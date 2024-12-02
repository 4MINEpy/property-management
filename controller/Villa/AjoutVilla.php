<?php
require_once "../../model/Villa/CrudVilla.php";
require_once "../../model/Villa/Villa.php";
if(isset($_POST["ok"])){
    $prop = htmlspecialchars($_POST["prop"]);
    $loc = htmlspecialchars($_POST["loc"]);
    $surf = htmlspecialchars($_POST["surf"]);
    $nbp = htmlspecialchars($_POST["nbp"]);
    $dmu = htmlspecialchars($_POST["dmu"]);
    $nbe = htmlspecialchars($_POST["nbe"]);

    $app = new Villa(NULL,$prop,$loc,$surf,$nbp,$dmu,$nbe);
    $crud = new crudVilla();
    $res = $crud->ajoutVilla($app);
    if($res == 1){
        header("location: listVilla.php");
    }
    else
    {
        echo("problem occured");
    }
}
include "../../view/Villa/AjoutVilla.php";