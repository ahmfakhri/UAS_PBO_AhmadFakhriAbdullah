<?php

abstract class Mahasiswa
{
    // Atribut (harus sesuai dengan kolom pada database)
    protected $id_mahasiswa;
    protected $nama_mahasiswa;
    protected $nim;
    protected $semester;
    protected $tarifUktNominal;

    // Constructor
    public function __construct($id_mahasiswa, $nama_mahasiswa, $nim, $semester, $tarifUktNominal)
    {
        $this->id_mahasiswa = $id_mahasiswa;
        $this->nama_mahasiswa = $nama_mahasiswa;
        $this->nim = $nim;
        $this->semester = $semester;
        $this->tarifUktNominal = $tarifUktNominal;
    }

    // Getter
    public function getIdMahasiswa()
    {
        return $this->id_mahasiswa;
    }

    public function getNamaMahasiswa()
    {
        return $this->nama_mahasiswa;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function getSemester()
    {
        return $this->semester;
    }

    public function getTarifUktNominal()
    {
        return $this->tarifUktNominal;
    }

    // Abstract Method
    abstract public function hitungTagihanSemester();

    abstract public function tampilkanSpesifikasiAkademik();
}

?>