<?php
    ob_start();
?>
<form action="../../controller/Appartement/modifierApp.php?id=<?=$ref?>" method="post" enctype="multipart/form-data" class="form-control">
    <label for="">Proprietaire</label><input type="text" name="prop" id="" class="form-control" value="<?=$prop?>"><br>
    <label for="">Localite</label><input type="text" name="loc" id="" class="form-control" value="<?=$loc?>"><br>
    <label for="">Surface</label><input type="text" name="surf" id="" class="form-control" value="<?=$surf?>"><br>
    <label for="">Nombre de pieces</label><input type="text" name="nbp" id="" class="form-control" value="<?=$nbp?>"><br>
    <label for="">Domaine Usage</label><input type="text" name="dmu" id="" class="form-control" value="<?=$dmu?>"><br>
    <label for="">Surface d'espace commun</label><input type="text" name="surfcomm" id="" class="form-control" value="<?=$surfcomm?>"><br>
    <input type="submit" value="Modifier" name="ok" class="btn btn-primary btn-lg">
</form>
<?php
$contenu = ob_get_clean();
$titre = "modifier d'un appartement";
include "../../view/layout.php";