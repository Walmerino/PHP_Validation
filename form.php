<?php
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    if(empty($user_name)){

        $name_error = 'Please, insert your username.';

    }elseif(strlen($user_name) > 10){

        $name_error = 'Your username must be less than 10 characters.';
    }
    if(empty($user_password)){

        $pass_error = 'Please, insert your password.';
        
    }elseif(strlen($user_password) < 5){

        $pass_error = 'Your username must be more than 5 characters.';
    }

    include('index.php');
?>
