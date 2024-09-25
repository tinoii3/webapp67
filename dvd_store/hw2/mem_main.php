<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Main Menu - Member</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <?php
    $conn = new mysqli('localhost', 'root', '', 'dvd_store');

    $conn->set_charset("utf8");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM member";
    $result = $conn->query($sql);

    if (!$result) {
        die("Query error: " . $conn->error);
    }
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a href="index.html" class="ps-2 col-6 text-decoration-none text-white">DVD Store</a href="index.html">
            <main class="col-6">
                <div class="row">
                    <div class="d-flex justify-content-end">
                        <div class="p-2 g-col-6">
                            <a href="mem_main.php"><button>Member</button></a>
                        </div>
                        <div class="me-5 pe-5 p-2 g-col-6">
                            <a href="movie_main.php"><button>Movies</button></a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </nav>

    <div class="position-absolute top-50 start-50 translate-middle">
        <h1>Member Info</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">ชื่อ-นามสกุล</th>
                    <th scope="col">ที่อยู่</th>
                    <th scope="col">เบอร์โทร</th>
                    <th scope="col">แก้ไข</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["member_id"] . "</td>";
                        echo "<td>" . $row["first_name"] . " " . $row["last_name"] . "</td>";
                        echo "<td>" . $row["address"] . "</td>";
                        echo "<td>" . $row["telephone"] . "</td>";
                        echo "<td><a href='edit_mem.php?member_id=" . $row["member_id"] . "'><button>Edit</button></a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No results found</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
        <br>
        <a href='insert_mem.php'><button>Add Member</button></a>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>