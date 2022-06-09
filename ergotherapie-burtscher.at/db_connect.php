<?php


// server info
$server = 'localhost';
$user = 'KontaktFormular';
$pass = 'Getmore1';
$db = 'kontaktburtscher';

// connect to the database
$mysqli = new mysqli($server, $user, $pass, $db);

// show errors (remove this line if on a live site)
mysqli_report(MYSQLI_REPORT_ERROR);



// $user = "KontaktFormular";
// $pass = "7GJe6k8SxfdsJmA1";

// try
// {

// $dbh = new PDO('mysql:host=localhost;dbname=kontaktburtscher;charset=utf8', $user, $pass);
// $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// }
// catch (PDOExecption $e)
 // {

 // print "Error!: " . $e->getMessage() . "<br/>";
 // die();


// } 

?>