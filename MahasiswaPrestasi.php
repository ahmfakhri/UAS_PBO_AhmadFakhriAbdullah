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

    public static function getAll($conn)
{
    $sql = "SELECT * FROM tabel_mahasiswa
            WHERE jenis_pembiayaan = 'Prestasi'";

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
            $row['nama_instansi_beasiswa'],
            $row['minimal_ipk_syarat']
        );
    }

    return $data;
}

    // Method Overriding
    public function hitungTagihanSemester()
    {
        return $this->tarifUktNominal * 0.25;
    }

    public function tampilkanSpesifikasiAkademik()
    {
        return "Instansi Beasiswa : {$this->namaInstansiBeasiswa}<br>
                Minimal IPK : {$this->minimalIpkSyarat}";
    }
}