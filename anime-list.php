<!DOCTYPE html>
<html lang="en">

<!-- Head -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Web | Maulana adji sentosa</title>
    <link rel="stylesheet" href="bootstraps/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="bootstraps/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="fontawesome/css/all.min.css" type="text/css">
</head>
<!-- End Head -->

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">SekaiSubs</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-primary" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">SekaiSubs</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="anime-list.php">Anime List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="on-going-anime.php">Anime On-going</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="batch-anime.php">Anime Batch</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cara-mendownload.php">Cara Download</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Pencarian..." aria-label="Search">
                        <button class="btn btn-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="card-body container bg-dark text-white">

        <!-- <section class="pertama"> -->
        <div id="pertama" class="container d-flex align-items-center my-3 p-2">
            <div class="fw-bold">
                On-Going Anime
            </div>
            <div class="ms-auto bg-primary">
                <a href="on-going-anime.php" class="btn btn-primary text-white">Anime On-Going lainnya</a>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <?php
                include "conn.php";
                // Ambil data untuk index
                $no = 1;
                $query = mysqli_query($kon, "SELECT * FROM mahasiswa");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <a href="">
                                <img src="gambar/1.jpg" class="card-img-top" alt="Projects 1" />
                            </a>
                            <div class="card-body">
                                <p class="card-text">
                                    <?php echo $row['nim']; ?> <br>
                                    <?php echo $row['nama']; ?> <br>
                                    <?php echo $row['kelas']; ?> <br>
                                    <?php echo $row['jurusan']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- </section> -->

        <!-- <section id="2"> -->
        <div id="kedua" class="container d-flex align-items-center text-white bg-secondary mb-3 p-2">
            <div class="align-items-center fw-bold">
                Batch Anime
            </div>
            <div class="ms-auto bg-primary">
                <a href="batch-anime.php" class="btn text-white">Anime Batch lainnya</a>
            </div>
        </div>

        <div class="container mb-3">
            <div class="row justify-content-center">
                <?php
                include "conn.php";
                // Ambil data untuk index
                $no = 1;
                $query = mysqli_query($kon, "SELECT * FROM mahasiswa");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <a href="">
                                <img src="gambar/1.jpg" class="card-img-top" alt="Projects 1" />
                            </a>
                            <div class="card-body">
                                <p class="card-text">
                                    <?php echo $row['nim']; ?> <br>
                                    <?php echo $row['nama']; ?> <br>
                                    <?php echo $row['kelas']; ?> <br>
                                    <?php echo $row['jurusan']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <footer>
        <div>
            <small>All right reserved © Copyright 2022 - TPQ</small>
        </div>
    </footer>

</body>

</html>