<?php
require_once "../../model/Villa/CrudVilla.php";
if(isset($_POST["searched"])){
    $ref = $_POST["searched"];
    $crud = new CrudVilla();
    $app = $crud->RecupererVilla($ref);
}
include "../../view/Villa/rechVilla.php";