<?php
require_once "../../model/Appartement/CrudAppartement.php";
if(isset($_POST["searched"])){
    $ref = $_POST["searched"];
    $crud = new CrudAppartement();
    $app = $crud->RecupererApp($ref);
}
include "../../view/Appartement/rechApp.php";