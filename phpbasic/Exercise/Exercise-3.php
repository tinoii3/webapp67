<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercise-3</title>
</head>
<body>
    <?php
        
        function test($x, $y) {
            return ($x <= 20 || $y >= 50) || ($y <= 20 || $x >= 50);
        }
        echo "Value are in the range 20 to 50";
        echo "<br>";

        echo "20 and 84 = ";
        var_dump(test(20, 84));
        echo "<br>";

        echo "14 and 50 = ";
        var_dump(test(14, 50));
        echo "<br>";

        echo "11 and 45 = ";
        var_dump(test(11, 45));
        echo "<br>";

        echo "25 and 40 = ";
        var_dump(test(25, 40));

    ?>
</body>
</html>