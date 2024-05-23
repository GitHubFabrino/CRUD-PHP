<?php
if (isset($_SESSION['erreur'])) :
    ?>

    <div class="alert alert-danger">
        <strong> Hey!! </strong>
        <?= $_SESSION['erreur'] ?>
    </div>
<?php
 unset($_SESSION['message']);
endif;

?>