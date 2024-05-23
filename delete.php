<?php
require_once('db.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = strip_tags($_GET['id']);


    $sql_verification = "DELETE FROM `students` WHERE `students`.`id` = $id";
    $requete = $db->prepare($sql_verification);
    $requete->execute();

    $_SESSION['message_delete'] = "Student deleted successfull !!!";
    header('Location:index.php');


    

} else {
    $_SESSION['erreur'] = "Id not found";
    header('Location:index.php');
    // unset($_SESSION['message']);
}




?>