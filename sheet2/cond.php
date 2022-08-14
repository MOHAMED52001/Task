<?php
$articel = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque illo, vero officiis laudantium enim minus corrupti ipsam! Veniam culpa a qui, nobis pariatur placeat beatae dolores aperiam consequatur deserunt temporibus? Pariatur nulla vel natus necessitatibus nam exercitationem eligendi expedita, provident distinctio non praesentium officiis quaerat veniam, laborum id accusamus voluptas suscipit. Accusamus, sequi cumque veniam eius atque fuga modi minus earum repellat tenetur delectus beatae explicabo natus corporis hic qui amet obcaecati suscipit, repudiandae vero sit doloremque, consequuntur aperiam? Facere amet aspernatur debitis, quisquam animi suscipit accusantium id architecto nobis, quis pariatur perferendis, molestiae distinctio quia ut beatae dicta laudantium excepturi natus! Mollitia culpa magni voluptatum maiores nulla non illo pariatur libero ipsam numquam, assumenda cumque reprehenderit exercitationem eos accusantium animi, at fugit doloremque iusto dolorum magnam officiis. Optio cumque dolor architecto blanditiis, fugiat animi tenetur. Asperiores excepturi atque earum possimus est consequatur architecto exercitationem inventore tempore nostrum dolor dolorum corrupti numquam totam, quae, reiciendis dicta, illum cupiditate vel ea enim optio. Fugiat ipsa error, deserunt officiis suscipit numquam rerum dignissimos rem, nihil quis amet aliquid temporibus? Similique numquam consequatur labore molestiae sed earum dolor, explicabo suscipit in laboriosam ut, natus architecto. Perspiciatis quia molestiae, eos voluptatibus numquam id at?";
$len = strlen($articel);
$description = "no pain , no gain ";

//Make random two numbers for ages and

// $age_1 = 21;
// $age_2 = 22;

// if ($age_1 > $age_2) {
//     echo "ahmed is older than mohmed";
// } elseif ($age_2 > $age_1) {
//     echo  "mohamed is older than ahmed";
// } else {
//     echo "age of ahmed and Mohamad is ${age_1}";
// } 




// Get random words from the articel.
$random_word_1 = substr($articel,rand(0, $len));
$len1= strlen($random_word_1);
$random_word_2 = substr($articel,rand(0, $len));
$len2= strlen($random_word_2);



// if ($len1 > 20 && $len1 < 40) {
//     echo "string is week";
// }
// elseif($len1 > 40 && $len1 < 80){
//     echo "string is good";
// }
// else{
//     echo "string is very good";
// }



//Compare between length of first and second string.
// if ($len1 > $len2) {
//     echo "first string is longer than second string";
// }
// elseif ($len1 < $len2) {
//     echo "second string is longer than second string";
// }
// else {
//     echo "first and second string are equal";
// }





//Calculator.
// if (isset($_POST['submit'])) {
//     $num1 = $_POST['number1'];
//     $num2 = $_POST['number2'];
//     $op = $_POST['opration'];
//     $result = 0;

//     if($op == '+'){
//         $result = $num1 + $num2;
//     }
//     else if($op == '-'){
//         $result = $num1 - $num2;
//     }
//     else if($op == '*'){    
//         $result = $num1 * $num2;
//     }
//     else if($op == '/'){
//         $result = $num1 / $num2;
//     }
//     elseif ($op == '%'){    
//         $result = $num1 % $num2;
//     }
//     elseif ($op == '**'){
//         $result = $num1 ** $num2;
//     }
// }




// Make a program to check from degree of student to test these cases
// $deg = 86;
// if ($deg >= 50 && $deg < 65 ) {
//     echo "accepted";
// }
// elseif($deg >= 65 && $deg < 75){
//     echo "good";
// }
// elseif($deg >= 75 && $deg < 85){
//     echo "very good";
// }
// else{
//     echo "Excellent";
// }



//Check from this string
// if (str_contains($description,'pain')) {
//     echo "Success Word <br>";
// }
// if (str_contains($description,'peen')) {
//     echo "Success Word";
// }
// else{
//     echo "wrong Word";
// }








?>










<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Calculator</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

    <div>
        <label for="number1">First Number</label>
        <input type="text" name="number1" id="number1">
    </div>
    <div>
        <label for="number2">Second Number</label>
        <input type="text" name="number2" id="number2">
    </div>
    <div>
        <label for="opration">Opration</label>
        <input type="text" name="opration" id="opration">
    </div>
    <input type="submit" value="Result" name="submit">
    <h1 style="text-align: center;"><?= $result ?? null ?></h1>
    </form>
</body>
</html> -->