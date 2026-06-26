<?php

require_once "Mahasiswa.php";

class MahasiswaMandiri extends Mahasiswa
{
    protected $golonganUkt;
    protected $namaWali;

    public function __construct(
        $id_mahasiswa,
        $nama_mahasiswa,
        $nim,
        $semester,
        $tarifUktNominal,
        $golonganUkt,
        $namaWali
    ) {
        parent::__construct(
            $id_mahasiswa,
            $nama_mahasiswa,
            $nim,
            $semester,
            $tarifUktNominal
        );

        $this->golonganUkt = $golonganUkt;
        $this->namaWali = $namaWali;
    }

    public static function getAll($conn)
{
    $sql = "SELECT * FROM tabel_mahasiswa
            WHERE jenis_pembiayaan = 'Mandiri'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $data = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $data[] = new self(
            $row['id_mahasiswa'],
            $row['nama_mahasiswa'],
            $row['nim'],
            $row['semester'],
            $row['tarif_ukt_nominal'],
            $row['golongan_ukt'],
            $row['nama_wali']
        );
    }

    return $data;
}

    // Method Overriding
    public function hitungTagihanSemester()
    {
        return $this->tarifUktNominal + 100000;
    }

    public function tampilkanSpesifikasiAkademik()
    {
        return "Golongan UKT : {$this->golonganUkt}<br>
                Nama Wali : {$this->namaWali}";
    }
}