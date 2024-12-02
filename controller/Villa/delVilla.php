<?php
require_once "../../model/Villa/CrudVilla.php";
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $crud = new CrudVilla();
    $res = $crud->supprimerVilla($id);
    if($res == 1){
        header("location: listVilla.php");
    }
    else{
        echo("problem");
    }
}