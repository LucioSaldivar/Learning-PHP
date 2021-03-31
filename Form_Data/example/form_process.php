<?php
if(isset($_POST['submit'])){
    $min= 5;
    $max= 10;

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(strlen($username) < $min) {
        echo 'Username has to be longer than five';
    }

    if(strlen($username) < $max) {
        echo 'Username cannot be longer than ten';
    }

    $name = array('Manuel','Andrea','Tom','Mark');

    if(!in_array($username, $name)) {
        echo "Sorry, no name exists";
    } else {
        echo "Welcome " . $name;
    }


}



?>