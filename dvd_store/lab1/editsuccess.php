<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>edit success page</title>
</head>
<body>
<?php
    require 'conn.php';
    $sql_update="UPDATE studentbio SET sname='$_POST[sname]',slastname='$_POST[slastname]' ,address='$_POST[address]' 
        ,telephone='$_POST[telephone]' WHERE sid='$_POST[sid]' ";
    $result= $conn->query($sql_update);

    if(!$result) {
        die("Error God Damn it : ". $conn->error);
    } else {
        echo "Edit Success <br>";
        header("refresh: 1; url=mainmenu.php");
    }
    ?>
</body>
</html>