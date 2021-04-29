<form method="POST">
    <input name="nom">
    <input name="type">
    <input name="description">
    <input type="submit" name="add">
</form>
<?php

$dsn = 'mysql:dbname=autocompletion;host=localhost';
$username = 'root';
$pass = '';


$db = new PDO($dsn, $username, $pass);

$nom = $_POST['nom'];
$type = $_POST['type'];
$description = $_POST['description'];

if (isset($_POST['add'])) {
    $query = $db->prepare("INSERT INTO `restaurant`(`restaurant_nom`, `restaurant_type`, `restaurant_description`) VALUES ('$nom','$type','$description')");
    $query->execute();
}
?>