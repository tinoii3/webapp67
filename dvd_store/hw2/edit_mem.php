<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    if (!isset($_GET['member_id'])) {
        header("refresh: 0; url=mem_main.php");
    }
    require 'conn.php';
    $sql = "SELECT * FROM member WHERE member_id='$_GET[member_id]'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
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
    <div class="d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
        <form method="post" action="edit_mem_suc.php" class="bg-white p-4 rounded shadow text-black">
            <div class="form-group row mb-3">
                <label for="member_id" class="col-sm-4 col-form-label text-end fs-5 fw-bold">ID</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control bg-gray" name="member_id" id="member_id" value="<?= $row['member_id']; ?>">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="first_name" class="col-sm-4 col-form-label text-end fs-5 fw-bold">ชื่อ</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="first_name" id="first_name" value="<?= $row['first_name']; ?>">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="last_name" class="col-sm-4 col-form-label text-end fs-5 fw-bold">นามสกุล</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="last_name" id="last_name" value="<?= $row['last_name']; ?>">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="address" class="col-sm-4 col-form-label text-end fs-5 fw-bold">ที่อยู่</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="address" id="address" value="<?= $row['address']; ?>">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="telephone" class="col-sm-4 col-form-label text-end fs-5 fw-bold">เบอร์โทร</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="telephone" id="telephone" value="<?= $row['telephone']; ?>">
                </div>
            </div>
            <div class="text-center">
                <input type="submit" value="บันทึก" class="btn btn-success">
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>