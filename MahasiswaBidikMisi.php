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

    public static function getAll($conn)
{
    $sql = "SELECT * FROM tabel_mahasiswa
            WHERE jenis_pembiayaan = 'BidikMisi'";

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
            $row['nomor_kip_kuliah'],
            $row['dana_saku_subsidi']
        );
    }

    return $data;
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