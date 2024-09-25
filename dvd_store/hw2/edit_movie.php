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
    if (!isset($_GET['movie_id'])) {
        header("refresh: 0; url=movie_main.php");
    }
    require 'conn.php';
    $sql = "SELECT * FROM movie WHERE movie_id='$_GET[movie_id]'";
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
        <form method="post" action="edit_movie_suc.php" class="bg-white p-4 rounded shadow text-black">
            <div class="form-group row mb-3">
                <label for="movie_id" class="col-sm-4 col-form-label text-end fs-5 fw-bold">ID</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control bg-gray" name="movie_id" id="movie_id" value="<?= $row['movie_id']; ?>">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="title" class="col-sm-4 col-form-label text-end fs-5 fw-bold">ชื่อเรื่อง</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="title" id="title" value="<?= $row['title']; ?>">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="genre" class="col-sm-4 col-form-label text-end fs-5 fw-bold">ประเภท</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="genre" id="genre" value="<?= $row['genre']; ?>">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="price" class="col-sm-4 col-form-label text-end fs-5 fw-bold">ราคา</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="price" id="price" value="<?= $row['price']; ?>">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="stock" class="col-sm-4 col-form-label text-end fs-5 fw-bold">คงเหลือ</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="stock" id="stock" value="<?= $row['stock']; ?>">
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