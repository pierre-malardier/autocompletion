<?php

require('./conf.php');
$id = $_GET['id'];
$query = $db->prepare("SELECT * FROM restaurant WHERE restaurant_id= '$id'");
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);
?>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<div class="card">
    <h5 class="card-header"><?= $result['restaurant_nom'] ?></h5>
    <div class="card-body">
        <h5 class="card-title">Restaurant de type : <?= $result['restaurant_type'] ?></h5>
        <p class="card-text"><?= $result['restaurant_description'] ?></p>
    </div>
</div>

</html>