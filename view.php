<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Edit</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Details
                            <a href="index.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        include_once('verification.php');

                        ?>


                        <div class="mb-3">
                            <label for="">Student Name : <?= $student['name'] ?></label>

                        </div>
                        <div class="mb-3">
                            <label for="">Student email :<?= $student['email'] ?></label>

                        </div>
                        <div class="mb-3">
                            <label for="">Student phone : <?= $student['phone'] ?></label>

                        </div>
                        <div class="mb-3">
                            <label for="">Student course : <?= $student['course'] ?></label>

                        </div>

                        <div class="mb-3">

                        <a href="student_edit.php?id=<?= $student['id']?>" class="btn btn-success btn-sm">Edit</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>