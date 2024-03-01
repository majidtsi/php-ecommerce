<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'login';
?>
<?php include '../inc/init.php' ?>

<?php include ROOT_PATH . 'public/template-parts/header.php' ?>

    <!-- Main -->
<div id="main" class="container" style="margin-top: 150px;">
    <div class="row">
        <div class="col-9">
        <?php include ROOT_PATH . 'auth/pages/'.$page . '.php'; ?>
        </div>
        <?php include ROOT_PATH . 'public/template-parts/sidebar.php' ?>
    </div>
</div>
    <!-- Fin Main -->

    <?php include ROOT_PATH . 'public/template-parts/footer.php' ?>

   