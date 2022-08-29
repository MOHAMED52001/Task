<?php

    if(!empty($_GET)){
        foreach($_GET as $key=>$value){
            $$key = $value;
        }

        if (!empty($name)) {
            echo "<h3>$name</h3>";
        }
        if (!empty($email)) {
            echo "<h3>$email</h3>";
        }
        if (!empty($phone)) {
            echo "<h3>$phone</h3>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>3 | Links</title>
</head>
<body>
    <a href="<?= $_SERVER['PHP_SELF']?>?name=ameen"><button>Name</button></a>
    <a href="<?= $_SERVER['PHP_SELF']?>?email=ameen@gmail.com"><button>E-mail</button></a>
    <a href="<?= $_SERVER['PHP_SELF']?>?phone=01142565236"><button>Phone</button></a>
</body>
</html>