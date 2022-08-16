<?php

    function max_Length($name,$length){
        if (strlen($name) > $length){
            return false;
        }
        return true;
    }

    function min_Length($name,$length){
        if (strlen($name) < $length){
            return false;
        }
        return true;
    }

    function val_Email($email){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }

   
   

?>