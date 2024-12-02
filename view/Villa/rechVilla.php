<?php
ob_start();
?>

<form action="../../controller/Villa/rechVilla.php" method="post">
    <input type="search" name="searched" id="" class="form-control" value="1">
    <button type="submit" name="ok" class="btn btn-primary">Seach</button>
</form>
<?php
if(isset($app)){
?>
<div class="container">
    Propriétaire : <?=$app[2]?>
</div>


<?php
}
$contenu = ob_get_clean();
$titre = "Recherche";
include "../../view/layout.php";
?>