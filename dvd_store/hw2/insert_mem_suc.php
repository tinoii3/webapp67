<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert success page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
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
    <div class="container mt-5">
        <?php
        require 'conn.php';
        $sql_update = "INSERT INTO member(member_id,first_name,last_name,address,telephone) VALUES ('$_POST[member_id]','$_POST[first_name]','$_POST[last_name]' ,'$_POST[address]' ,'$_POST[telephone]')";

        $result = $conn->query($sql_update);

        echo '<div class="card p-4 shadow">';
        if (!$result) {
            echo '<div class="alert alert-danger" role="alert">';
            echo "Error God Damn it : " . $conn->error;
            echo '</div>';
        } else {
            echo '<div class="alert alert-success" role="alert">';
            echo "Edit Success";
            echo '</div>';
            header("refresh: 1; url=mem_main.php");
        }
        echo '</div>';
        ?>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>