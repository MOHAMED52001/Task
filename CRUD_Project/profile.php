<?php include("./inc/header.php"); ?>
<?php include("./inc/nav.php"); ?>

    <?php
    if(empty($_SESSION['auth'])){
        header("Location: login.php");
    }
    ?>

    <h1 style="text-align: center;"><?= $_SESSION['name'] ?></h1>
    <h1 style="text-align: center;"><?= $_SESSION['email'] ?></h1>

<?php include("./inc/footer.php"); ?>