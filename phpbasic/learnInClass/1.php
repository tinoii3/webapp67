<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hello php!</title>
</head>
<body>
    <?php
    define("MINSIZE", 50);
    echo MINSIZE;
    echo "<br>";
    echo "this is the value of constant ==> ", constant("MINSIZE");
    ?>
</body>
</html>