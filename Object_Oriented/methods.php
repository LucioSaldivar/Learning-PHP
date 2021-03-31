<?php
class Cars {
    function MoveWheels() {
        echo "Wheels move";
    }
}

if(method_exists("Cars","MoveWheels")) {
    echo "its here";
} else {
    echo "no";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>