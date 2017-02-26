<?php
// $hostname = 'localhost';
// $dbname = 'rizalubu_free_course';
// $username = 'rizalubu_rizal';
// $password = 'rizalganteng123';

$hostname = 'localhost';
$dbname = 'free_course';
$username = 'root';
$password = 'root';


try {
    $pdo = new PDO('mysql:host='.$hostname.';dbname='.$dbname, $username, $password, array(
        PDO::ATTR_PERSISTENT => true
    ));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch(PDOException $e) {
    echo "Ada error nih: ".$e->getMessage();
}

?>