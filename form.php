<?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
        if(isset($username)){
            echo "<h1 class='hello_block' style='
            text-align:center;
            background-color:white;
            color:black;'>
            Hello $username</h1>";
        }
    
?>