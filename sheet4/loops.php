<?php

//remove the duplicates from the array.
// $ar = [1,1,2,2,3,4,5,5];
// $newA = [];
// foreach ($ar as $value) {
//     if(in_array($value, $newA)) {
//         continue;
//     }
//     $newA[] = $value;
// }
// print_r($newA);



//get the prime numberunder 1000.
// for ($i=2; $i < 1000; $i++) { 
//     $isPrime = true;
//     for ($j=2; $j < $i; $j++) { 
//         if ($i % $j == 0) {
//             $isPrime = false;
//             break;
//         }
//     }        
//     if ($isPrime) {
//         echo "$i <br>";
//     }
// }




//sum of prime numbers under 1000.
// $sum = 0;
// for ($i=2; $i < 1000; $i++) { 
//     $isPrime = true;
//     for ($j=2; $j < $i; $j++) { 
//         if ($i % $j == 0) {
//             $isPrime = false;
//             break;
//         }
//     }        
//     if ($isPrime) {
//         echo "$i <br>";
//         $sum += $i;
//     }
// }
// echo $sum;





//the first non-repeated character in a given string.
// $str = "Green";
// $chars = [];
// $len = strlen($str);
// $i = 0;
// while($i < $len){

//     $found_reap_char = false;
//     $j = $i; 

//     while($j < $len){
//         if ($str[$i] == $str[$j +1]) {
//             $found_reap_char = true;
//             $chars [] = $str[$i];
//             break;
//         }
//         $j++;
//     }
//     if (!$found_reap_char) {
//         if (in_array($str[$i],$chars)) {
//             $i++;
//             continue;
//         }
//         else{
//             echo "$str[$i] <br>";
//             break;
//         }
//     }
//     $i++;
// }



//Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line.
// for ($i = 1; $i <= 10; $i++){
//     if ($i == 10){ 
//         echo "$i";
//         break;
//     }
//     echo "$i-";
// }



//Write a program to calculate and print the factorial of a number using a for loop
// factorial of 5.    
// $fac = 1;
// for ($i = 5; $i > 0; $i--) {
//     $fac *= $i;
// }
// echo $fac;





//Write a program which will count the "a" characters in the text "eraasoft".
// $str = "eraasoft";
// $count = 0;
// $len = strlen($str);
// for ($i=0; $i < $len; $i++) { 
//     if($str[$i] == 'a') {
//         $count++;
//     }
// }
// echo $count;





// Write a PHP script that creates the bootstrap table (use for loops) ( table from 1 to 100 )
    // $p = 1;
    // echo "<table border =\"1\">";
    // for ($row = 1; $row <= 10; $row++) {
    //     echo "<tr> \n";
    //     for ($col = 1; $col <= 10; $col++) {
    //         echo "<td>$p</td> \n";
    //         $p++;
    //     }
    //     echo "</tr>";
    // }
    // echo "</table>";



    
    //Write a PHP program which iterates the integers from 1 to 50. For multiples of three print "Fizz" instead of the number and for the multiples of five print "Buzz". For numbers which are multiples of both three and five print "FizzBuzz"
    // for ($i=1; $i <= 50; $i++) { 
    //     if ($i % 3 == 0 && $i % 5 == 0) { 
    //         echo $i . "=>"."FizzBuzz"."<br>";
    //     }
    //     elseif ($i % 3 == 0){
    //         echo $i . "=>"."Fizz"."<br>";
    //     }
    //     elseif($i % 5 == 0){
    //         echo $i. "=>"."Buzz"."<br>";
    //     }
    //     else{
    //         echo $i."<br>";

    //     }
    // }
