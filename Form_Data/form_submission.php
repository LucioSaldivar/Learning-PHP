<?php
if(isset($_POST['submit'])){
    echo "yes it works";
}



?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="form_submission.php" method="post">
    <input type="text" placeholder="Enter Username">
    <input type="password" placeholder="Enter Password">
    <br>
    <input type="submit" name="submit">
</form>



</body>
</html>