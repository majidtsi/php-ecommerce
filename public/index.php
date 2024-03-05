<?php
require_once '../inc/init.php';
$page = isset($_GET['page']) ? $_GET['page'] : 'homepage';

?>


<?php include ROOT_PATH . 'public/template-parts/header.php' ?>

    <!-- Main -->
<div id="main" class="container" style="margin-top: 150px;">
    <div class="row">
        <div class="col-9">
        <?php include ROOT_PATH . 'public/pages/'.$page . '.php'; ?>
        </div>
        <?php include ROOT_PATH . 'public/template-parts/sidebar.php' ?>
    </div>
</div>
    <!-- Fin Main -->

    <?php include ROOT_PATH . 'public/template-parts/footer.php' ?>

   