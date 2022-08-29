<?php
session_start();

// name , price , quantity  
$products = [
    ["product number 1",300,50],
    ["product number 2",250,1000],
    ["product number 3",30,1200],
    ["product number 4",1500,10],
    ["product number 5",450,300],
];

$_SESSION["products"] = $products;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>T | D</title>
</head>
<body style="color:#41adff;">
    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Price</td>
                <td>Quantity</td>
                <td></td>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($products as $key => $product): ?>
                <tr>
                    <td><?=$product[0]?></a></td>
                    <td><?=$product[1]?></a></td>
                    <td><?=$product[2]?></a></td>
                    <td><a href="showProduct.php?id=<?=$key?>">Show Product</a></td>
                </tr>
            <?php endforeach; ?>   
        </tbody>
    </table>
</body>
</html>