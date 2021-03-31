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



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="extraction_form_info.php" method="post">
    <input type="text" name="username" placeholder="Enter Username">
    <input type="password" name="password" placeholder="Enter Password">
    <br>
    <input type="submit" name="submit">
</form>



</body>
</html>