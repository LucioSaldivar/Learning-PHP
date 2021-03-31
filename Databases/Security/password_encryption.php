//to see more of php encryption visit php.net/manual/en/function.crypt.php

<?php
if(isset($_POST['submit'])) {
    global $connection;
    $connection = mysqli_connect('docker-db', 'root', 'root','phplesson');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $hashFormat = "$2y$10$";

    $salt = "iusesomecrazystrings22";

    $hashF_and_salt = $hashFormat . $salt;

    $password = crypt($password, $hashF_and_salt);


    $query = "INSERT INTO users(username, password)";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED: ' . mysqli_error());
    } else {
        echo "DONE";
    }
}
?>