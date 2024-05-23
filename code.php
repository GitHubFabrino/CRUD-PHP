<?php

session_start();
require_once('db.php');

if (isset($_POST['save_etudiant'])) {
    $name = strip_tags($_POST['name']);
    $email = strip_tags($_POST['email']);
    $phone = strip_tags($_POST['phone']);
    $course = strip_tags($_POST['course']);

    $sql_insert = "INSERT INTO `students` ( `name`, `email`, `phone`, `course`) VALUES ('$name', '$email', '$phone', '$course')";

    $query = $db->prepare($sql_insert);

    // $query->bindValue(':name', $name, PDO::PARAM_STR);
    // $query->bindValue(':email', $email, PDO::PARAM_STR);
    // $query->bindValue(':phone', $phone, PDO::PARAM_INT);
    // $query->bindValue(':course', $course, PDO::PARAM_STR);

    $query->execute();

    $_SESSION['message'] = 'Student <strong>'.$name.'</strong>  are create Successfully  ';
    header('Location:student_create.php');


} else {
    $_SESSION['message'] = 'Student Not create';
    header('Location:student_create.php');
}



?>