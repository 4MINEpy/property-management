<?php
require_once "../../model/Villa/CrudVilla.php";
$crud = new CrudVilla();
$tab = $crud->listerVilla();
include "../../view/Villa/listVilla.php";