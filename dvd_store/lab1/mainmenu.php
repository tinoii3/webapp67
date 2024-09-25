<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>This is main menu web page</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>

<?php
$conn = new mysqli('localhost','root','','student');
$conn->query("SET NAMES utf8");
if($conn->connect_error){
    die("Connection Fail God damn it ". $conn->$conn_error);
}

$sql = "SELECT * FROM studentbio";
$result = $conn->query($sql);

if(!$result) {
    die("Error : ".$conn->$conn_error);
}

?>

<h1>Student Bio</h1><br>  //create student table
        <table>
            <thead>
                <tr>
                    <th>รหัสนักศึกษา</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>ที่อยู่</th>
                    <th>เบอร์โทร</th>
                    <th> ธุรกรรม </th>
                </tr>
            </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result -> num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["sid"]."</td>"."<td>".$row["sname"]." ".$row["slastname"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["telephone"]."</td>"."<td>"."<a href='editbio.php?sid=".$row["sid"]."'><button> Edit </button></a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>  //close table
        <br>
        <a href='insertbio.php'><button> Insert Student</button></a>

</body>
</html>