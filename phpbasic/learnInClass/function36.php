<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dynamic Function Call</title>
</head>
<body>
    
    <?php
        function sayHello() {
            print("Hello");
        }

        $function_hello = "sayHello";
        $function_hello();
    ?>

</body>
</html>