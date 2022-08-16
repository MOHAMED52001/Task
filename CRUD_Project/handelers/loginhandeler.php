<?php
    session_start();
    include "../core/functions.php";
    include "../core/validation.php";

    $err = [];
    if(isset($_GET['signin'])){
        foreach ($_GET as $key => $value) {
            $$key = sanitizeInput($value);
        }

        $data = json_decode(file_get_contents("../db/file.json"),true);

        foreach($data as  $value) {
            if($value['email'] == $email && $value['password'] == $password) {
                $_SESSION['auth'] = true;
                $_SESSION['name'] = $value['name']; 
                $_SESSION['email'] = $email;

                header("Location:../profile.php?");
                die;
            }
            else{
                $msg ="Email or password is incorrect";
            }

        }

        $err[]= $msg;
        if (!empty($err)) {
            $_SESSION['errors'] = $err;
            header("location: ../login.php");
            die;
        } 

    }


?>