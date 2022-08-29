<?php
session_start();
if(isset($_GET['id'])){
$id = $_GET['id'];


foreach($_SESSION as $key => $value){
    $$key = $value;
}

$product = $products[$id];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Product Detail</title>
</head>
<body>
    <h2>Product ID : <?=$id?></h2>
    <h3>Product Name : <?=$product[0]?></h3>
    <h3>Product Price : <?=$product[1]?>$</h3>
    <h3>Product Quantity : <?=$product[2]?></h3>

    <a href="tabledata.php"><button>Go Back</button></a>
</body>
</html>