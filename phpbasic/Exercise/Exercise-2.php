<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercise-2</title>
</head>
<body>
    <?php
        
        function test($temp1, $temp2) {
            if ($temp1 < 0 && $temp2 > 100) {
                return true;
            }
            else if ($temp2 < 0 && $temp1 > 100) {
                return true;
            } else {
                return false;
            }
        }

        echo "Temperature 120 and -1 = ";
        var_dump(test(120, -1));
        echo "<br>";

        echo "Temperature -1 and 120 = ";
        var_dump(test(-1, 120));
        echo "<br>";

        echo "Temperature 2 and 120 = ";
        var_dump(test(2, 120));

    ?>
</body>
</html>