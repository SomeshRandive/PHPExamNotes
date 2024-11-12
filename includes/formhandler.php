<?php


// Do npt have a closing tag its best practice.

var_dump($_SERVER["REQUEST_METHOD"]);
//
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    echo $_SERVER["REQUEST_METHOD"];
    
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favouritepet = htmlspecialchars($_POST["favouritepet"]);
    echo $firstname;
    echo "<br />";
    echo $lastname;
    echo "<br />";
    echo $favouritepet;
    echo "<br />";
}else{
    header("Location: ../form.php");
}