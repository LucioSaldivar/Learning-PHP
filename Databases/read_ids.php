<?php
$connection = mysqli_connect('docker-db', 'root', 'root','phplesson');
if($connection) {
    echo "we are connected";
} else {
    die("Database connection failed");
}

$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

while($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];

    echo "<option value='$id'>$id</option>";
}

?>


</body>
</html>