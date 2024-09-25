<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>status connect database</title>
</head>
<body>
    <?php 
    $conn = new mysqli('localhost', 'root', '', 'student');
    $conn -> query("SET NAMES utf8");
    if ($conn -> connect_error) {
        die("Connection Fail God damn it ".$conn -> $conn_error);
    }

    ?>
</body>
</html>