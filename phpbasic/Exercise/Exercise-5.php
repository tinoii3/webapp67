<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercise-5</title>
</head>
<body>
    <?php
        
        function test($n) {
            if ($n % 3 == 0) {
                return true;
            } else if ($n % 7 == 0) {
                return true;
            } else {
                return false;
            }
        }

        echo "Is 3 divisible by 3 or 7 = ";
        var_dump(test(3));
        echo "<br>";

        echo "Is 14 divisible by 3 or 7 = ";
        var_dump(test(14));
        echo "<br>";

        echo "Is 12 divisible by 3 or 7 = ";
        var_dump(test(12));
        echo "<br>";

        echo "Is 37 divisible by 3 or 7 = ";
        var_dump(test(37));
        echo "<br>";

    ?>
</body>
</html>