<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Writing PHP Function which return result</title>
</head>
<body>
    
    <?php
        function addSum($num1, $num2) {
            $result = $num1 + $num2;
            return $result;
        }

        $return_value = addSum(10, 20);
        echo "Returned value from the function : $return_value ";
    ?>

</body>
</html>