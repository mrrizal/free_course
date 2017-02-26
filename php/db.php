<?php
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