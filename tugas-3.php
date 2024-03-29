<?php
$dataSiswa = [
    ['nama' => 'Tengku Muhammad', 'nim' => 210402071, 'nilai' => 98],
    ['nama' => 'Zainul Aprilizar', 'nim' => 210402072, 'nilai' => 93],
    ['nama' => 'Syaiful', 'nim' => 19126755, 'nilai' => 75],
    ['nama' => 'Andryan ST', 'nim' => 125600865, 'nilai' => 87],
    ['nama' => 'Ryan RR', 'nim' => 98651212, 'nilai' => 58],
    ['nama' => 'Alip Mulawarman', 'nim' => 328765121, 'nilai' => 65],
    ['nama' => 'Jaelani Siregar', 'nim' => 197600120, 'nilai' => 78],
    ['nama' => 'Siriyanti Yudha', 'nim' => 181965215, 'nilai' => 45],
    ['nama' => 'Putri Simanjuntak', 'nim' => 230611024, 'nilai' => 60],
    ['nama' => 'Ucok Gaming', 'nim' => 195620031, 'nilai' => 100],
    ['nama' => 'Sapardi', 'nim' => 195621241, 'nilai' => 55],
    ['nama' => 'Suryanto', 'nim' => 195620031, 'nilai' => 57],
    ['nama' => 'Supriyanto', 'nim' => 195620031, 'nilai' => 67],
    ['nama' => 'Nasiruddin', 'nim' => 195620031, 'nilai' => 66],
    ['nama' => 'Hadi Hulda', 'nim' => 195620031, 'nilai' => 34],
    ['nama' => 'Hihang Hoheng', 'nim' => 195620031, 'nilai' => 73],
    ['nama' => 'M. Iqbal Sya', 'nim' => 210402128, 'nilai' => 70],
    ['nama' => 'Muhitualdi', 'nim' => 210402051, 'nilai' => 50],
];

$thead = ['No', 'Nama', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

// Agregat
$nilaiArray = array_column($dataSiswa, 'nilai');
$nilaiMax = max($nilaiArray);
$nilaiMin = min($nilaiArray);
$totalNilai = array_sum($nilaiArray);
$jumlahSiswa = count($dataSiswa);
$nilaiRata2 = $totalNilai / $jumlahSiswa;

// tfoot
$tfoot = [
    'Nilai Tertinggi' => $nilaiMax,
    'Nilai Terendah' => $nilaiMin,
    'Nilai Rata Rata' => $nilaiRata2,
    'Jumlah Siswa' => $jumlahSiswa
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3</title>
    <link rel="stylesheet" href="css/tugas3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: #5356FF;">
    <div class="container px-5 py-5">
        <div class="row">
            <div class="card shadow-lg" style="border-radius: 25px;">
                <div class="card-body">
                    <h1 class="text-center fw-bold text-body-emphasis display-4">DAFTAR NILAI SISWA</h1>
                    <hr>
                    <table class="table table-success table-striped table-hover table-responsive">
                        <thead>
                            <tr>
                                <?php foreach ($thead as $th) { ?>
                                    <th><?= $th ?></th>
                                <?php  } ?>
                            </tr>

                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($dataSiswa as $data) {
                                $keterangan = ($data['nilai'] >= 65) ? 'Lulus' : 'Gagal'; /* Keterangan */
                                if ($data['nilai'] >= 90) { /* Grade */
                                    $grade = 'A';
                                } else if ($data['nilai'] >= 80) {
                                    $grade = 'B';
                                } else if ($data['nilai'] >= 70) {
                                    $grade = 'C';
                                } else if ($data['nilai'] >= 60) {
                                    $grade = 'D';
                                } else {
                                    $grade = 'E';
                                }

                                switch ($grade) {
                                    case 'A':
                                        $predikat = 'Memuaskan';
                                        break;
                                    case 'B':
                                        $predikat = 'Bagus';
                                        break;
                                    case 'C':
                                        $predikat = 'Cukup';
                                        break;
                                    case 'D':
                                        $predikat = 'Kurang';
                                        break;
                                    default:
                                        $predikat = 'Buruk';
                                        break;
                                }

                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['nim'] ?></td>
                                    <td><?= $data['nilai'] ?></td>
                                    <td><?= $keterangan ?></td>
                                    <td><?= $grade ?></td>
                                    <td><?= $predikat ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>

                        <tfoot>
                            <?php
                            foreach ($tfoot as $keterangan => $val) {
                            ?>
                                <tr>
                                    <th colspan="6"><?= $keterangan ?></th>
                                    <th><?= $val ?></th>
                                </tr>
                            <?php } ?>
                        </tfoot>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>