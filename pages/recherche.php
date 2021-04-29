<?php
require('./conf.php');
$resto = $_GET['search'];

$query = $db->prepare("SELECT * FROM restaurant WHERE restaurant_nom = '$resto'");
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

$id = $result['restaurant_id'];
$nom = $result['restaurant_nom'];

?>
<a href="element.php?id=<?php echo $id; ?>"><?php echo $nom ?> : Restaurant à marseille </a>