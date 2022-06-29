<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="jumbotron jumbotron-fluid jumbotron-image">
    <div class="container">
        <h1 class="display-4">Sportschool HealthOne</h1>
    </div>
</div>

<nav class="navbar navbar-light" style="background-color: rgb(236,197,200);">
    <li><a href="index.php">ga terug naar de homepagina</a></li>
</nav>

<div class="row">
    <div class="col-sm"></div>
        <?php

        include("dbconnection.php");
        global $db;


        $query = $db->prepare("SELECT * FROM catagory");
        $query->execute();
        $result = $query->fetchAll( PDO::FETCH_ASSOC);


        echo "<div class='row'>";
        foreach ($result as $catagory) {
            echo "<div class='col-12 col-sm-6 col-lg-3 p-3'>";
            echo "<a class='text-decoration-none text-dark' href='product.php?id=" . $catagory['id'] . "'>";
            echo "<h2>" . $catagory["Name"] . "</h2>";
            echo  "<img src=" . $catagory["Image"] . ">";
            echo "</a>";
            echo "</div>";
        }
        echo "</div>";

        ?>
    <div class="col-sm"></div>
</div>

<link rel="stylesheet" href="css/style.css">
</body>
</html>

