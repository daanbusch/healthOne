


<!doctype html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="jumbotron jumbotron-fluid jumbotron-image">
    <div class="container">
        <h1 class="display-4">Welkom op de producten pagina.</h1>
    </div>
</div>



<?php

include("dbconnection.php");
global $db;

$query = $db->prepare("SELECT * FROM products where catagory_id = :id");
$query->bindParam('id', $_GET['id']);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

echo "<div class='row'>";
foreach ($result as $products) {
    echo "<div class='col-12 col-sm-6 col-lg-3 p-3'>";
    echo "<a class='text-decoration-none text-dark' href='detail.php?id=" . $products['catagory_id'] . "'>";
    echo "<h2>" . $products["Name"]. "</h2>";
    echo "<img src=" . $products["image"] . ">";
    echo "</a>";
    echo "</div";
}
echo "</table>";

?>
<a href="index.php">Terug naar de master pagina</a>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
</body>
</html>
