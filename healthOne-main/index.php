<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<body>
<header>
    <img src="img/logo.png" class="profile-img">
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <li><a href="#hero">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="category.php">Bestellen</a></li>
    </nav>
</header>

<main>
    <section id="hero">
        <div class="section-inner">
            <img src="img/logo.png" class="profile-img">
            <h1>Welkom bij HealtOne</h1>
            <h2>Wij helpen u bij het vinden van het juiste sportapparaat wat bij u past.</h2>
        </div>
    </section>
    <section id="about">
        <h2>Laat ons weten wat u van ons vind.</h2> <br>
        <div class="section-inner">
            <form method="post" action="">
                <label>voornaam</label>
                <input class="text" type="text" name="Naam"><br>
                <br>
                <label>review</label>
                <input class="text" type="text" name="review"><br>
                <br>

                <input class="submit" type="submit" name="verzenden" value="Opslaan">
            </form>
        </div>
    </section>
    <section id="about">
        <div class="section-inner">
            <h2>Over ons</h2>
            <p>HealtOne is opgericht in 2022 te Den Haag. Als startende onderneming proberen wij u zo goed mogelijk te helpen</p>
            <h3>contact</h3>
            <ul>
                <li><a href="https://twitter.com/">Twitter</a></li>
                <li><a href="https://www.reddit.com/">Reddit</a></li>
                <li><a href="https://www.instagram.com/">Instagram</a></li>
                <li><a href="302527348@student.rocmondriaan.nl">Stuur een mail</a></li>
            </ul>

        </div>
    </section>
</main>
<link rel="stylesheet" href="css/index.css">
</body>
</head>
</html>

<?php
try {
    $db = new PDO("mysql:host=localhost; dbname=healthone", "root", "");

    if (isset($_POST['verzenden'])) {
        $Naam = filter_input(INPUT_POST, "Naam", FILTER_SANITIZE_STRING);
        $review = filter_input(INPUT_POST, "review", FILTER_SANITIZE_STRING);

        $query = $db->prepare("INSERT INTO reviews(Naam, review)  
                            VALUES(:Naam, :review)");
        $query->bindParam("Naam", $Naam);
        $query->bindParam("review", $review);

        if ($result = true) {
            session_start();
            $_SESSION['Naam'] = $Naam;
            $_SESSION['review'] = $review;
        } else {
            echo "something went wrong";
        }

        if ($query->execute()) {
            echo "de nieuwe gegevens zijn toegevoegd";
        } else {
            echo "er is een fout opgetreden";
        }

        echo "<br>";
    }
} catch (PDOException $e) {
    die("Error!: " . $e->getMessage());
}

?>