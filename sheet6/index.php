<?php 
    
    if(!empty($_GET)){
        foreach($_GET as $key=>$value){
            $$key = $value;
        }
        if ($name == '' || $email == '') {
            echo "<div  style='color:red; text-align:center'>Enter The Input Fields Data</div>";
        }
        else{
            echo "<h3>$name</h3>";
            echo "<h3>$email</h3>";
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
    <title>GLOBALS</title>
</head>
<body>
    <form style="display: flex;align-items: center;justify-content: center;flex-direction: column;" action=<?= $_SERVER['PHP_SELF']?> method="get">
        <fieldset>
            <legend for="">Data</legend>
                <input type="text" name= "name" placeholder="Name">
                <input type="enail" name ="email" placeholder="Email Address">
        </fieldset>
        <button>Submit</button>
    </form>
</body>
</html>