<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php 
                // include_once('error.php');
                include_once('message.php');
                if (isset($_SESSION['message_delete'])):

                    ?>
                
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Success!</strong> <?=$_SESSION['message_delete']?>
                    </div>
                
                    <?php
                
                    unset($_SESSION['message_delete']);
                endif;
                ?>
                <div class="card">

                    <div class="card-header">
                        <h4>Student Details</h4>

                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Student Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Course</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include_once('read.php'); ?>
                            </tbody>
                        </table>
                        <a href="student_create.php" class="btn btn-primary">Add</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap/js/jquery-3.6.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>