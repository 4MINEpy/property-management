<?php
ob_start();
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#REF</th>
      <th scope="col">Propriétiare</th>
      <th scope="col">Localité</th>
      <th scope="col">Surface</th>
      <th scope="col">Usage</th>
      <th scope="col">Nb pièces</th>
      <th scope="col">Nb Etages</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($tab as $app) {
    ?>
    <tr>
        <td><?=$app[0]?></td>
        <td><?=$app[2]?></td>
        <td><?=$app[3]?></td>
        <td><?=$app[4]?></td>
        <td><?=$app[5]?></td>
        <td><?=$app[6]?></td>
        <td><?=$app[8]?></td>
        <td><a href="../../controller/Villa/delVilla.php?id=<?=$app[0]?>" class="btn btn-danger btn-small">Supprimer</a></td>
        <td><a href="../../controller/Villa/modifierVilla.php?id=<?=$app[0]?>" class="btn btn-info btn-small">Modifier</a></td>
    </tr>

    <?php
    }?>
  </tbody>
</table>
<?php
$contenu = ob_get_clean();
$titre = "Villa";
include "../../view/layout.php";
?>