<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$pdo = new PDO('mysql:host=localhost;dbname=database', 'root', 'root');
 
$query = "SELECT * FROM leads";

$statement = $pdo->prepare($query);
$statement->execute();

$leads = $stm->fetch(\PDO::FETCH_ASSOC);

print_r($leads);


 
?>