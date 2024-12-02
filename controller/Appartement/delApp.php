<?php
require_once "../../model/Appartement/CrudAppartement.php";
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $crud = new CrudAppartement();
    $res = $crud->supprimerApp($id);
    if($res == 1){
        header("location: listApp.php");
    }
    else{
        echo("problem");
    }
}