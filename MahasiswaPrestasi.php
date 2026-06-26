<?php

require_once "Mahasiswa.php";

class MahasiswaPrestasi extends Mahasiswa
{
    protected $namaInstansiBeasiswa;
    protected $minimalIpkSyarat;

    public function __construct(
        $id_mahasiswa,
        $nama_mahasiswa,
        $nim,
        $semester,
        $tarifUktNominal,
        $namaInstansiBeasiswa,
        $minimalIpkSyarat
    ) {
        parent::__construct(
            $id_mahasiswa,
            $nama_mahasiswa,
            $nim,
            $semester,
            $tarifUktNominal
        );

        $this->namaInstansiBeasiswa = $namaInstansiBeasiswa;
        $this->minimalIpkSyarat = $minimalIpkSyarat;
    }

    public function hitungTagihanSemester()
    {
        return 0;
    }

    public function tampilkanSpesifikasiAkademik()
    {
        return "Instansi Beasiswa : {$this->namaInstansiBeasiswa}<br>
                Minimal IPK : {$this->minimalIpkSyarat}";
    }
}