<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?php

function init() {


    say_Something();
    calculate();

}

function calculate() {
    echo 456 + 345;
}

function say_Something() {
    echo 'Hello, do you like the way the code works? No? Ok...';
}

init();

?>



</body>
</html>