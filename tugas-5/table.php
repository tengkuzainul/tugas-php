<?php
require_once 'mahasiswa.php';
session_start();

if (isset($_SESSION['mahasiswa'])) {
    $mahasiswa = $_SESSION['mahasiswa'];
} else {
    $mahasiswa = null;
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
                    <h1 class="text-white display-4 fw-bold border-bottom border-white rounded text-center">DAFTAR NILAI UJIAN</h1>
                    <div class="d-flex justify-content-start">
                        <a href="<?php echo isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : ''; ?>" class="btn btn-primary btn-sm mb-2"><i class="bi bi-caret-left"></i><i class="bi bi-caret-left"></i>&nbsp;&nbsp;Kembali</a>
                    </div>
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <?php
                                $thead = ['No', 'NIM', 'Nama', 'Universitas/PT', 'Mata Kuliah', 'Nilai', 'Grade', 'Predikat', 'Status'];

                                foreach ($thead as $th) {
                                    echo "<th>$th</th>";
                                }
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php if (isset($mahasiswa)) : ?>
                                    <td>1</td>
                                    <td><?php echo $mahasiswa->nim; ?></td>
                                    <td><?php echo $mahasiswa->nama; ?></td>
                                    <td><?php echo $mahasiswa->universitas; ?></td>
                                    <td><?php echo $mahasiswa->matakuliah; ?></td>
                                    <td><?php echo $mahasiswa->nilai; ?></td>
                                    <td><?php echo $mahasiswa->status(); ?></td>
                                    <td><?php echo $mahasiswa->grade(); ?></td>
                                    <td><?php echo $mahasiswa->predikat(); ?></td>
                                <?php else : ?>
                                    <td colspan="6" class="text-center fw-bold">Data mahasiswa belum tersedia.</td>
                                <?php endif; ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>