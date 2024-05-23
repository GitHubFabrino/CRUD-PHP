<?php

require_once('db.php');

$sql_read = "SELECT * FROM `students`";

$query = $db->prepare($sql_read);

$query->execute();

$resulta = $query->fetchAll(PDO::FETCH_ASSOC);
$a = 0;

foreach ($resulta as $student) {
    $a++;

    ?>
    <tr>
        <td><?= $student['id']?></td>
        <td><?= $student['name']?></td>
        <td><?= $student['email']?></td>
        <td><?= $student['phone']?></td>
        <td><?= $student['course']?></td>
        <td>
            <a href="view.php?id=<?= $student['id']?>" class="btn btn-info btn-sm">View</a>
            <a href="student_edit.php?id=<?= $student['id']?>" class="btn btn-success btn-sm">Edit</a>
            <a href="delete.php?id=<?= $student['id']?>" class="btn btn-danger btn-sm">Delete</a>
        </td>
    </tr>
    <?php
}
echo "<h5>Number of students : $a</h5>"


?>

