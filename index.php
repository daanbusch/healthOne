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



<div class="row">
    <div class="col-sm-8">
        <nav class="nav justify-content-center">
            <a href="#contact">contact</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
        </nav>
    </div>
    <div class="col-sm-4"></div>
</div>
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
            echo  "<img src=" . $catagory["image"] . ">";
            echo "</a>";
            echo "</div>";
        }
        echo "</div>";

        ?>
    <div class="col-sm"></div>
</div>

<a id="contact">The  name where you want to jump</a>
<footer class="bg-light text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <form action="">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-auto mb-4 mb-md-0">
                    <p class="pt-2">
                        <strong>Sign up for our newsletter</strong>
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-5 col-12 mb-4 mb-md-0">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form5Example25" class="form-control" />
                        <label class="form-label" for="form5Example25">Email address</label>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-auto mb-4 mb-md-0">
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary mb-4">
                        Subscribe
                    </button>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </form>
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>

<link rel="stylesheet" href="css/style.css">

<?php
/*
include("dbconnection.php");
global $db;


$query = $db->prepare("SELECT * FROM catagory");
$query->execute();
$result = $query->fetchAll( PDO::FETCH_ASSOC);


echo "<table>";
foreach ($result as $catagory) {
    echo "<tr>";
    echo "<td>";
    echo "<a href='product.php?id=" . $catagory['id'] . "'>";
    echo $catagory["Name"];
    echo  "<img src=" . $catagory["image"] . ">";
    echo "</a>";
    echo "</td>";
    echo "</tr>";
}
echo "</table>";

*/?>
</body>
</html>

