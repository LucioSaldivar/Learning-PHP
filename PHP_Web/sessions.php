<?php session_start();

$_SESSION['greeting'] = "Hello";


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

if(isset($_COOKIE["Manuel"])) {

    $someOne = $_COOKIE["Manuel"];

    echo $someOne;

}else {
    $someOne = "";
}





?>
</body>
</html>