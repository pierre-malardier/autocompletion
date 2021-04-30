<?php
require('./conf.php');
if (isset($_POST['search'])) {
    $response = "<ul><li>no data found</li></ul>";

    $input = $_POST['input'];

    $query = $db->prepare("SELECT * FROM restaurant WHERE restaurant_nom LIKE '$input%'");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if ($result > 0) {

        $response = "<ul class='response'>";

        foreach ($result as $restaurant) {
            $resto = $restaurant['restaurant_nom'];
            $response .= "<li><a href='recherche.php?search=$resto'>" . $restaurant['restaurant_nom'] . "</a></li>";
        }
        $response .= "</ul>";
    }

    exit($response);
}

$id = $_GET['id'];
$query = $db->prepare("SELECT * FROM restaurant WHERE restaurant_id= '$id'");
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);
?>
<html>
<link href="../ressources/css/style.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">Marseille</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Les restaurants marseillais</a>
                </li>
                <div class=""><i class="bi bi-search"></i><input class="" type="text" id="search"></div>
            </ul>
        </div>
    </div>
</nav>
<div class="" id="response"></div>

<div class="card">
    <h5 class="card-header"><?= $result['restaurant_nom'] ?></h5>
    <div class="card-body">
        <h5 class="card-title">Restaurant de type : <?= $result['restaurant_type'] ?></h5>
        <p class="card-text"><?= $result['restaurant_description'] ?></p>
    </div>
</div>
<script src="../ressources/script/script.js"></script>

</html>