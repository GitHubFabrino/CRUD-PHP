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
                        <h4>Student Edit
                            <a href="index.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        include_once('verification.php');

                        ?>


                        <form method="post">
                            <div class="mb-3">
                                <label for="">Student Name</label>
                                <input type="text" name="name" required class="form-control"
                                    value="<?= $student['name'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="">Student email</label>
                                <input type="text" name="email" required class="form-control"
                                    value="<?= $student['email'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="">Student phone</label>
                                <input type="text" name="phone" required class="form-control"
                                    value="<?= $student['phone'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="">Student course</label>
                                <input type="text" name="course" required class="form-control"
                                    value="<?= $student['course'] ?>">
                            </div>
                            <input type="hidden" name="id" value="<?= $student['id'] ?>">
                            <div class="mb-3">

                                <button type="submit" name="update_etudiant" class="btn btn-primary">Save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>