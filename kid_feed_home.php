<?php
$page_handle = 'homepage';
include ('./elements/head.php');
include ('./elements/header.php');
?>
<div class="container">
    <div class="row flex-column flex-md-row align-items-center ">
        <?php include ('./elements/user_left_sidebar.php'); ?>
        <main>
        </main>
        <?php include ('./elements/user_right_sidebar.php'); ?>
    </div>
</div>


<?php
include ('./elements/footer.php');
?>
