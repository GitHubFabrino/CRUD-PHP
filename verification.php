<?php

require_once('db.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = strip_tags($_GET['id']);


    $sql_verification = "SELECT * FROM `students` WHERE id = $id";
    $requete = $db->prepare($sql_verification);
    $requete->execute();

    $verif = $requete->rowCount();

    if ($verif == 1) {


        $sql_read = "SELECT * FROM `students` WHERE id = $id";

        $query = $db->prepare($sql_read);

        $query->execute();

        $student = $query->fetch();

    }else if ($verif == 0) {
        $_SESSION['erreur'] = "Id not existing";
        header('Location:index.php');
        //unset($_SESSION['message']);
    }

} else {
    $_SESSION['erreur'] = "Id not found";
    header('Location:index.php');
    // unset($_SESSION['message']);
}


if (isset($_POST['update_etudiant'])) {
    $id = strip_tags($_POST['id']);
    $name = strip_tags($_POST['name']);
    $email = strip_tags($_POST['email']);
    $phone = strip_tags($_POST['phone']);
    $course = strip_tags($_POST['course']);

    $sql_insert = "UPDATE `students` SET name='$name',email='$email',phone='$phone',course='$course' WHERE `id`='$id' ";

    $query = $db->prepare($sql_insert);

    $query->execute();

    $_SESSION['message_edit'] = "Student Edit successfull!!";
    header('Location: index.php'); // on revient

} 


?>