
<?php

// Pour connectee a la base de donnée
$host = 'localhost';
$db_name = 'crud2';
$root = 'root';
$pass = '';

try {
    $db = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $root, $pass);


} catch (PDOException $e) {
    echo 'Erreur' . $e->getMessage();
    die();
}



?>
