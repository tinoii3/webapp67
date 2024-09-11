<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercise-1</title>
</head>
<body>
    <?php
        function test($str) {
            $result = substr($str, strlen($str) - 1);
            return $result.$str.$result;
        }

        echo "Before: Red";
        echo "<br>";
        echo "After: ".test("Red");

        echo "<br>";
        echo "-------------------";
        echo "<br>";

        echo "Before: Green";
        echo "<br>";
        echo "After: ".test("Green")."\n";
    ?>
</body>
</html>