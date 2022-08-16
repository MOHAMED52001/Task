<?php
include "../core/functions.php";
include "../core/validation.php";

session_start();
$err = [];
if (check_RequestMethod("POST")) {
    // get the fields from the POST request.    
    foreach ($_POST as $key => $value) {
        $$key = sanitizeInput($value);
    }

    // validate the name.
    if (empty($name)) {
        $err[] = "Please enter a name.";
    } elseif (!max_Length($name, 25)) {
        $err[] = "Name must be at most 25 characters long.";
    } elseif (!min_Length($name, 3)) {
        $err[] = "Name must be at least 3 characters long.";
    }

    // validate Email.
    if (empty($email)) {
        $err[] = "Please enter a email.";
    } elseif (!val_Email($email)) {
        $err[] = "Email is not valid.";
    }

    //validate the password
    if (empty($password)) {
        $err[] = "Please enter a password.";
    } elseif (!min_Length($password, 8)) {
        $err[] = "Password must be at least 8.";
    } elseif (!max_Length($password, 20)) {
        $err[] = "Password must be at most 20.";
    }

    if ($password !== $password1) {
        $err[] = "Password not match.";
    }



    if (!empty($err)) {
        $_SESSION['errors'] = $err;
        header("location: ../register.php");
        die;
    } else {

        

        $new_person = [
            "name" => $name,
            "email" => $email,
            "password" => $password,
        ];
        $data = json_decode(file_get_contents("../db/file.json"),true); 
        foreach ($data as  $value) {
            if ($value['email'] == $email) {
                $msg = "Email is already taken.";
                $err[] = $msg;
                $_SESSION['errors'] = $err;
                header("Location:../register.php?");
                die;
            }
        }

        //save the the data in json file.

        if (filesize("../db/file.json") == 0) {
            $first_record = array($new_person);
            $data_to_save = $first_record;
        } else {
            $old_records = json_decode(file_get_contents("../db/file.json"));
            array_push($old_records, $new_person);
            $data_to_save = $old_records;
        }

        $encoded_data = json_encode($data_to_save, JSON_PRETTY_PRINT);

        if (!file_put_contents("../db/file.json", $encoded_data, LOCK_EX)) {
            $error = "Error storing message, please try again";
        } else {
            $success =  "Message is stored successfully";
            header("location:../login.php");
        }
    }
} else {
    echo "NOT SUPPORTED METHOD ";
}
