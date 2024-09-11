<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercise-4</title>
</head>
<body>
    <?php
        
        function test($s) {
            $ctr_aa = 0;
            $i = 0;

            while ($i < strlen($s) - 1) {
                if (substr($s, $i, 2) == "aa") {
                    $ctr_aa++;
                    $i += 2;
                } else {
                    $i++;
                }
            }
            return $ctr_aa;
        }

        echo "Counting occurrences of 'aa' in a string";
        echo "<br>";

        echo "The string 'bbaaccaag' contains ".test("bbaaccaag")."<br>";

        echo "The string 'jjkiaaasew' contains ".test("jjkiaaasew")."<br>";

        echo "The string 'JSaaakoiaa' contains ".test("JSaaakoiaa")."<br>";
        

    ?>
</body>
</html>