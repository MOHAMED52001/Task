<?php include("./inc/header.php"); ?>
<?php include("./inc/nav.php"); ?>
<?php
    if(empty($_SESSION['auth'])){
        header("Location: login.php");
    }
    ?>

    <h1>Home</h1>

<?php include("./inc/footer.php"); ?>