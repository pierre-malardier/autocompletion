<?php
require('./conf.php');
if (isset($_POST['search'])) {
    $response = "<ul><li>no data found</li></ul>";

    $input = $_POST['input'];

    $query = $db->prepare("SELECT * FROM restaurant WHERE restaurant_nom LIKE '%$input%'");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if ($result > 0) {

        $response = "<ul class='response'>";

        foreach ($result as $restaurant) {
            $resto = $restaurant['restaurant_nom'];
            $response .= "<li><a href='pages/recherche.php?search=$resto'>" . $restaurant['restaurant_nom'] . "</a></li>";
        }
        $response .= "</ul>";
    }

    exit($response);
}
