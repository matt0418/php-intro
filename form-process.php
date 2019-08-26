<?php 
    
    if(isset($_POST["submit"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (!$username || !$password) {
            echo "Please submit both password and username";
        } else {
            echo "welcome";
        }
    } else {
        echo "Nope";
    }
    
    
    
?>