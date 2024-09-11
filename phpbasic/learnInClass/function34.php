<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Writing PHP Function which return result</title>
</head>
<body>
    
    <?php
        function printMe($param = NULL) {
            print $param;
        }

        print("This is the default value : ");
        printMe();
    ?>

</body>
</html>