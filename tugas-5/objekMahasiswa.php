<?php
require_once 'mahasiswa.php';

if (isset($_POST['submit'])) {
    $nim = isset($_POST['nim']) ? $_POST['nim'] : '';
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $univ = isset($_POST['universitas']) ? $_POST['universitas'] : '';
    $matkul = isset($_POST['matkul']) ? $_POST['matkul'] : '';
    $nilai = isset($_POST['nilai']) ? $_POST['nilai'] : '';

    $mahasiswa = new Mahasiswa($nim, $nama, $univ, $matkul, $nilai);

    session_start();
    $_SESSION['mahasiswa'] = $mahasiswa;

    header("Location: table.php");
    exit();
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Nilai Ujian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="background-color: #222831;">
    <div class="container m-auto">
        <div class="d-flex justify-content-center my-5">
            <div class="card shadow-lg w-75" style="background-color: #8C6A5D;">
                <div class="card-body p-4">
                    <h1 class="text-white display-4 fw-bold border-bottom border-white rounded text-center">FORM NILAI UJIAN</h1>
                    <form class="mt-3" method="POST">
                        <div class="row mb-3">
                            <label for="nim" class="col-sm-3 col-form-label text-white fw-bolder">NIM</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nim" id="nim" placeholder="Enter NIM">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-3 col-form-label text-white fw-bolder">Full Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Enter Full Name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kuliah" class="col-sm-3 col-form-label text-white fw-bolder">Universitas/PT</label>
                            <div class="col-sm-9">
                                <select name="universitas" id="universitas" class="form-control">
                                    <option value="" selected disabled>--- Select Universitas / PT ---</option>
                                    <?php
                                    $listUniv = array(
                                        'Universitas Muhammadiyah Riau',
                                        'Universitas Riau',
                                    );
                                    foreach ($listUniv as $univ) {
                                        echo "<option value='$univ'>$univ</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="matkul" class="col-sm-3 col-form-label text-white fw-bolder">Mata Kuliah</label>
                            <div class="col-sm-9">
                                <select name="matkul" id="matkul" class="form-control">
                                    <option value="" selected disabled>--- Pilih Mata Kuliah ---</option>
                                    <?php
                                    $listMatkul = array(
                                        'PHP',
                                        'UI/UX',
                                        'LARAVEL',
                                        'JAVASCRIPT',
                                    );
                                    foreach ($listMatkul as $matkul) {
                                        echo "<option value='$matkul'>$matkul</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nilai" class="col-sm-3 col-form-label text-white fw-bolder">Nilai</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="nilai" id="nilai" placeholder="Enter Nilai">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-5">
                            <button type="reset" class="btn btn-outline-dark rounded-pill w-25"><i class="bi bi-arrow-counterclockwise"></i>&nbsp;&nbsp;Reset</button>
                            <button type="submit" name="submit" class="btn btn-light rounded-pill w-25"><i class="bi bi-check2-circle"></i>&nbsp;&nbsp;Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>