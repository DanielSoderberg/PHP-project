<?php

// PHP SETTINGS
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "blogg";

    // MAKE CONNECTION
    $conn = new MySQLi($host, $user, $pass, $db);
if($conn->connect_error){
    die('Database connection error: '. $conn->connect_error);
} 

//  */    try {
//         $dsn = "mysql:host=$host;dbname=$db;";
//         $dbh = new PDO($dsn, $user, $pass, $db);

//     } catch(PDOException $e) {
//         // ON ERROR
//         echo "Error! ". $e->getMessage() ."<br />";
//         die;
//     } 


?>
