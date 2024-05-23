<?php

require_once('db.php');

if (isset($_POST['update_etudiant'])) {
    $id = strip_tags($_POST['id']);
    $name = strip_tags($_POST['name']);
    $email = strip_tags($_POST['email']);
    $phone = strip_tags($_POST['phone']);
    $course = strip_tags($_POST['course']);

    $sql_insert = "UPDATE `students` SET `name`=$name, `email`=$email, `phone`=$phone, `course`=$course WHERE `id`=$id ";

    $query = $db->prepare($sql_insert);

    $query->execute();

    $_SESSION['message'] = "Produit Modifiée";
    header('Location: index.php'); // on revient
    $_SESSION['message'] = 'Student modifie Successfully ';
    header('Location:index.php');


} else {
    // $_SESSION['message'] = 'Student Not create';
    // header('Location:student_create.php');
}




?>