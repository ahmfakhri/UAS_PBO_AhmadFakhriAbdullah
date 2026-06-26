<?php

require_once "Mahasiswa.php";

class MahasiswaBidikMisi extends Mahasiswa
{
    protected $nomorKipKuliah;
    protected $danaSakuSubsidi;

    public function __construct(
        $id_mahasiswa,
        $nama_mahasiswa,
        $nim,
        $semester,
        $tarifUktNominal,
        $nomorKipKuliah,
        $danaSakuSubsidi
    ) {
        parent::__construct(
            $id_mahasiswa,
            $nama_mahasiswa,
            $nim,
            $semester,
            $tarifUktNominal
        );

        $this->nomorKipKuliah = $nomorKipKuliah;
        $this->danaSakuSubsidi = $danaSakuSubsidi;
    }

    // Method Overriding
    public function hitungTagihanSemester()
    {
        return 0;
    }

    public function tampilkanSpesifikasiAkademik()
    {
        return "Nomor KIP Kuliah : {$this->nomorKipKuliah}<br>
                Dana Saku Subsidi : Rp " . number_format($this->danaSakuSubsidi, 0, ',', '.');
    }
}