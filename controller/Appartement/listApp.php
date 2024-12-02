<?php
require_once "../../model/Appartement/CrudAppartement.php";
$crud = new CrudAppartement();
$tab = $crud->listerApp();
include "../../view/Appartement/listApp.php";
