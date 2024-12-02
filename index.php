<?php
ob_start();
?>


<a href="controller/Appartement/listApp.php"><button type="button" class="btn btn-primary btn-lg">Consulter les appartements</button></a>
<a href="controller/Appartement/AjoutApp.php"><button type="button" class="btn btn-primary btn-lg">Ajout appartements</button></a>
<br>
<br>
<a href="controller/Villa/listVilla.php"><button type="button" class="btn btn-primary btn-lg">Consulter les villas</button></a>
<a href="controller/Villa/AjoutVilla.php"><button type="button" class="btn btn-primary btn-lg">Ajouter Villa</button></a>



<?php
$contenu = ob_get_clean();
$titre = "Bienvenu";
include "view/layout.php";
?>