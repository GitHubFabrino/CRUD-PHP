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

    <div class="container mt-5">

        <?php include('message.php');?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Add
                            <a href="index.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="post">
                            <div class="mb-3">
                                <label for="">Student Name</label>
                                <input type="text" name="name" required class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Student email</label>
                                <input type="text" name="email" required class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Student phone</label>
                                <input type="text" name="phone" required class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Student course</label>
                                <input type="text" name="course" required class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_etudiant" class="btn btn-primary">Save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>