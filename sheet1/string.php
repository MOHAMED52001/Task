<?php 
$string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis repellendus nihil hic totam! Sunt error porro? voluptas nihil iure culpa vitae. Sint ducimus facilis accusantium molestias nam numquam voluptatem eum nemo tempore! Ipsam vitae natus suscipit inventor?e delectus voluptatum amet illo pariatur voluptas fuga harum possimus error magnam nulla, perferendis ipsum quia id laboriosam quam optio dolorum tenetur? Blanditiis praesentium repellendus, asperiores temporibus nobis ipsa officia deleniti fugiat minus doloribus? Ipsum aspernatur in quae maiores nemo dolorum distinctio ea qui enim. Voluptas perferendis voluptatibus, corporis accusantium sunt obcaecati, aut iure maiores, quam reiciendis quibusdam? Placeat excepturi exercitationem enim explicabo. Sequi!";
$len = strlen($string);

//type theis string in p tag
// echo "<p>$string</p>";


//Get length of string and put it in h3.
// echo "<h3>$len</h3>";



//Split this string to 3 parts and put all parts in variables.
// $var_1 =  substr($string, 0, 257);
// $var_2 = substr($string,257,257);
// $var_3 = substr($string, 514, $len);
// echo "<h3>$var_1</h3>";
// echo "<h3>$var_2</h3>";
// echo "<h3>$var_3</h3>";


//Search about function that take random words from string and type result in span
// $random = rand(0, $len);
// $random_word = substr($string,$random);
// echo "<span>$random_word</span>";


//Check if this word (enim) exists in the string or not
// echo str_contains($string,"enim");



//Get 50 chars from string and put result in variable then type this variable in p tag
// $chars_50 = substr($string,0,50);
// echo "<p>$chars_50</p>";


//Remove any (?) from this string and type the new string in any html element.
// $new_str = str_replace('?','',$string);
// echo "<p>$new_str</p>";


$name = "mohamad khaled";
//Reverse this string and type the new string in h5
// $rev_name = strrev($name);
// echo "<h5>$rev_name</h5>";


$first_name = "amal";  $last_name = "ebraheem";

//Make a new variable called(full_name) that concatenate first name and last name
$full_name = $first_name . " " . $last_name;

//Put full_name in h1
// echo "<h1>$full_name</h1>";


$new_name = "amel ebraheem";
//Compare between Full_name and this variable
echo strcmp($new_name, $full_name);



//Write a PHP script to split the following string Sample string : '082307' Expected Output : 08:23:07
// $str = "082307";
//     $s = "";
//     for ($i=0; $i < strlen($str); $i++) { 
//         if ($i % 2 == 0 and $i != 0) {
//             $s.= ":";
//         }
//         $s .= $str[$i];
//     }
//     echo $s;



?>






<!-- //Link to another page called (new-string.php) and put the reverse in the link -->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $name?></h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text"><?= strlen($name)?></p>
    <a href="new-string.php" class="btn btn-primary">Go</a>
  </div>
</div>
</body>
</html> -->


