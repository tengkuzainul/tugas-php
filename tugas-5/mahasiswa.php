<?php
class Mahasiswa
{
    public $nim;
    public $nama;
    public $universitas;
    public $matakuliah;
    public $nilai;

    public function __construct($nim, $nama, $universitas, $matakuliah, $nilai)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->universitas = $universitas;
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai;
    }

    public function status()
    {
        if ($this->nilai >= 65) {
            return 'Lulus';
        } else {
            return 'Tidak Lulus';
        }
    }

    public function grade()
    {
        if ($this->nilai >= 85) {
            return 'A';
        } else if ($this->nilai >= 75) {
            return 'B';
        } else if ($this->nilai >= 60) {
            return 'C';
        } else if ($this->nilai >= 55) {
            return 'D';
        } else {
            return 'E';
        }
    }

    public function predikat()
    {
        if ($this->nilai >= 85) {
            return 'Sangat Memuaskan';
        } else if ($this->nilai >= 75) {
            return 'Memuaskan';
        } else if ($this->nilai >= 60) {
            return 'Cukup';
        } else if ($this->nilai >= 55) {
            return 'Kurang';
        } else {
            return 'Sangat Kurang';
        }
    }
}
