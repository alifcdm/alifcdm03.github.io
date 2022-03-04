<?php
    include "php.php";
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Style CSS-->
    <link rel="stylesheet" href="style.css">
    <title>Ruang Temu</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Ruang Temu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center bg-dark">
        <h1 class="display-4 text-light">Ruang Temu</h1>
        <p class="lead mx-5 text-light">
            <p></p>
            <hr>
            <p class="text-white">Temukan teman sefrekuensimu di Unindra hanya di Ruang Temu!</p>
        </p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,192L40,160C80,128,160,64,240,69.3C320,75,400,149,480,170.7C560,192,640,160,720,133.3C800,107,880,85,960,101.3C1040,117,1120,171,1200,165.3C1280,160,1360,96,1400,64L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col">
                    <h2>About Ruang Temu</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <p>Adalah website untuk kamu mahasiswa unindra yang sedang mencari teman yang
                        memiliki hobi
                        maupun
                        kepribadian yang sama denganmu, sehingga memudahkan kamu untuk dapat berkenalan antar mahasiswa,
                        dan
                        juga
                        dapat sharing tentang hobi kalian kepada mereka yang juga memiliki hobi yang sama denganmu!</p>
                </div>
                <div class="col">
                    <p>Seru bukan? Yuk langsung aja daftarin dirimu! Daftar, dan langsung temukan
                        mahasiswa
                        unindra yang
                        memiliki
                        hobi yang sama denganmu!</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,160L40,170.7C80,181,160,203,240,186.7C320,171,400,117,480,80C560,43,640,21,720,42.7C800,64,880,128,960,154.7C1040,181,1120,171,1200,149.3C1280,128,1360,96,1400,80L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- Akhir About -->

    <!-- Sign Up -->
    <section class="signup mt-5">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Daftarkan Dirimu!</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="php.php" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email">
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password<i class="bi bi-chat-left-text"></i></label>
                            <input type="password" class="form-control" id="pass" aria-describedby="password">
                        </div>
                        <div class="mb-3">
                            <label for="pass2" class="form-label">Re-Password<i
                                    class="bi bi-chat-left-text"></i></label>
                            <input type="password" class="form-control" id="pass2" aria-describedby="password2">
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Sign Up -->

    <!-- Error Login -->
    <?php if ( isset($error) ) : ?>
        <script>alert("Username / Password Salah!");</script>
    <?php endif; ?>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>