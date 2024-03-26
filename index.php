<?php
$nama = 'Tengku Muhammad Zainul Aprilizar';
$umur = 21 . ' Tahun';
$hobi = 'Nonton, Ngoding, Futsal, Travelling';
$email = 'tengkumzainul@gmail.com';
$dreamJob = 'Web Developer';
$navImage = 'https://i.pinimg.com/originals/41/ff/08/41ff08e482a4314896060bebbe40c46e.jpg';
$ttl = 'Pasir pengarayan ' . 23 . ' April ' . 2003;
$prodi = 'Sistem Informasi';
$univ = 'Universitas Muhammadiyah Riau';
$mbkm = 'Studi Independen Bersetifikat';
$batch = 'Batch ' . 6;
$mitra = 'Nurul Fikri Program Akademi Fullstack Web Developer';
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP 1</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg px-5">
        <div class="container-fluid">
            <a class="navbar-brand text-dark" href="index.php">
                <img src="<?= $navImage ?>" alt="Logo" width="30" height="24" class="d-inline-block">
                <?= $nama ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav d-flex gap-4">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Me</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container col-xxl-12 px-3 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="img/4.jpg" class="d-block mx-lg-auto img-fluid rounded" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-2 mb-3">Hi, I'm <?= $nama ?></h1>
                <p class="lead">Saya merupakan mahasiswa <?= $prodi ?> di <?= $univ ?> yang terletak di Kota Pekanbaru. Saya lahir di <?= $ttl ?>.</p>
                <p class="lead">Saya saat ini sedang mengikuti program <?= $mbkm ?> <?= $batch ?> di Mitra <?= $mitra ?>.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="./img/CV MBKM.pdf" class="btn btn-primary-1 btn-lg px-4 me-md-2" download="">Download CV&nbsp;&nbsp;&nbsp;<i class="bi bi-arrow-down-circle"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container col-xl-10 col-xxl-12 px-3 py-2" id="about">
        <h1 class="display-4 fw-bold lh-2 text-body-emphasis">About Me</h1>
        <ul class="list-group list-group-flush rounded mt-4">
            <li class=" list-group-item h3">Full Name : <?= $nama ?></li>
            <li class="list-group-item h3">Age : <?= $umur ?></li>
            <li class="list-group-item h3">Email : <?= $email ?></li>
            <li class="list-group-item h3">Hobby : <?= $hobi ?></li>
            <li class="list-group-item h3">Dream Job : <?= $dreamJob ?></li>
        </ul>
    </div>

    <div class="container col-xl-10 col-xxl-12 px-3 py-5" id="contact">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-2 text-body-emphasis mb-3">Let's Hire Me!</h1>
                <p class="col-lg-10 fs-4">Anda tertarik dengan saya, saya bisa menjadi seorang <?= $dreamJob ?> untuk membantu anda menyelesaikan sebuah masalah. Terimakasih</p>
                <p class="lead" style="font-size: 13px;">~<?= $nama ?></p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
                    <hr class="my-4">
                    <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
                </form>
            </div>
        </div>
    </div>

    <footer class="d-flex flex-wrap justify-content-between align-items-center px-4 py-3 my-4 border-top border-dark">
        <div class="col-md-5 d-flex align-items-center">
            <a href="/" class="mb-3 me-1 mb-md-0 text-body-secondary text-decoration-none">
                <i class="bi bi-code-slash"></i>
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary fw-bold">&copy; 2024 <?= $nama ?> Company, Inc</span>
        </div>

        <ul class="nav col-md-5 justify-content-end list-unstyled d-flex gap-4">
            <li class="ms-3"><a class="text-primary" href="#"><i class="bi bi-twitter 53"></i></a></li>
            <li class="ms-3"><a class="text-primary" href="#"><i class="bi bi-instagram h5"></i></a></li>
            <li class="ms-3"><a class="text-primary" href="#"><i class="bi bi-linkedin h5"></i></a></li>
        </ul>
    </footer>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>