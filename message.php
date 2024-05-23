
<?php

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


<?php
if (isset($_SESSION['message'])):

    ?>

    <div class="alert alert-success">
        <h4 class="alert-heading">Success!</h4>
        <?=$_SESSION['message']?>
    </div>

    <?php

    unset($_SESSION['message']);
endif;
?>


<?php

if (isset($_SESSION['message_edit'])):

    ?>

    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Success!</strong> <?=$_SESSION['message_edit']?>
    </div>

    <?php

    unset($_SESSION['message_edit']);
endif;
?>


<?php

if (isset($_SESSION['erreur'])):
    ?>

    <div class="alert alert-danger">
        <strong> Hey!! </strong>
        <?= $_SESSION['erreur'] ?>
    </div>
    <?php
    unset($_SESSION['erreur']);
endif;

?>


<?php

if (isset($_SESSION['message_not_edit'])):
    ?>

    <div class="alert alert-danger">
        <strong> Hey!! </strong>
        <?= $_SESSION['message_not_edit'] ?>
    </div>
    <?php
    unset($_SESSION['message_not_edit']);
endif;

?>
