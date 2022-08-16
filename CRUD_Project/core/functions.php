<?php 

    //Check the Request Method of Form.
    function check_RequestMethod($method) {
        if($_SERVER['REQUEST_METHOD'] == $method) {
            return true;
        }
        return false;
    }

    //filter the input fields and return the result.
    function sanitizeInput($input) {
        return trim(htmlspecialchars(htmlentities($input)));
    }



    


?>