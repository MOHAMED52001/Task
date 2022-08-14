<?php

use function PHPSTORM_META\map;

$colors = ["red", "green", "blue", "black", "white"];

//Write a PHP script which will display the colors in h2
// foreach($colors as $col){
//     echo "<h2>$col</h2>";
// }



//Display previous array in ul > li
// echo "<ul>";
// foreach($colors as $col){
//     echo "<li>$col</li>";
// }
// echo "</ul>";


//Add three colors to the previous array and display colors in h3
// $colors[] = "purple";
// $colors[] = "pink";
// $colors[] = "orange";
// foreach($colors as $col){
//     echo "<h2>$col</h2>";
// }



$numbers = [10, 20, 30, 40, 50];

//Display this array in h3
// foreach($numbers as $num){
//     echo "<h2>$num</h2>";
// }



//Make a new array with these items plus 5

// $new_numbers = array_map(function($num){ return $num +5;} 
// ,$numbers);
// foreach($new_numbers as $num){
//     echo "<h2>$num</h2>";
// }


//Make a new array with these items divided by 3
// $new_numbers = array_map(function($num){ return $num / 3;} 
// ,$numbers);
// foreach($new_numbers as $num){
//     echo "<h2>$num</h2>";
// }


//add these items 60,70,80 to the array to
// $numbers[] = 60;    
// $numbers[] = 70;    
// $numbers[] = 80;


//display this array in the card
$users = [
    ["mohamed ali", 20],
    ["rana ahmad", 19],
    ["maged khaled", 25],
];




// Display these items in table
$employees = [
    ["mohamed ali", "mohamad@eraasoft.com", "01024256993", 2500],
    ["reham mohamad", "reham@eraasoft.com", "01122255448", 3000],
    ["maged hesham", "maged@eraasoft.com", "01024213361", 4000],
    ["ali mahmoud", "ali@eraasoft.com", "01142547485", 2000],
    ["nader elsayed", "nader@eraasoft.com", "01123659854", 1000],
];




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

    <!-- <?php foreach ($users as $user) : ?>
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $user[0] ?></h5>
    <p class="card-text"><?= $user[1] ?></p>
  </div>
</div>
<?php endforeach; ?> -->


    
    <!-- <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Salary</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $emp) : ?>
                <td><?= $emp[0] ?></td>
                <td><?= $emp[1] ?></td>
                <td><?= $emp[2] ?></td>
                <td><?= $emp[3] ?></td>
            </tr>
            <?php endforeach; ?>
            <tr>
            

        </tbody>
    </table> -->

</body>
</html>