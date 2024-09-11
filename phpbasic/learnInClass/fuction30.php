<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Passing Argument By Reference</title>
</head>
<body>
    
    <?php
        function addFive($num) {
            $num += 5;
        }

        function addSix(&$num) {
            $num += 6;
        }

        $originalNum = 10;

        addFive($originalNum);
        echo "Original Value is $originalNum <br>";

        addSix($originalNum);
        echo "Original Value is $originalNum <br>";
    ?>

</body>
</html>