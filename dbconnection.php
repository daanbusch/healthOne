<?php
try{
    $db = new PDO("mysql:host=localhost; dbname=healthOne","root","");
}
catch (PDOExeption $e){
    die($e->getMessage());
}