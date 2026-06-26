<?php
require_once "koneksi.php";
require_once "MahasiswaMandiri.php";
require_once "MahasiswaBidikMisi.php";
require_once "MahasiswaPrestasi.php";

$conn = Database::getInstance()->getConnection();

$menu = isset($_GET['menu']) ? $_GET['menu'] : 'dashboard';

switch ($menu) {
    case 'mandiri':
        $data = MahasiswaMandiri::getAll($conn);
        $judul = "Data Mahasiswa Mandiri";
        break;

    case 'bidik':
        $data = MahasiswaBidikMisi::getAll($conn);
        $judul = "Data Mahasiswa Bidik Misi";
        break;

    case 'prestasi':
        $data = MahasiswaPrestasi::getAll($conn);
        $judul = "Data Mahasiswa Prestasi";
        break;

    default:
        $data = array_merge(
            MahasiswaMandiri::getAll($conn),
            MahasiswaBidikMisi::getAll($conn),
            MahasiswaPrestasi::getAll($conn)
        );
        $judul = "Dashboard Mahasiswa";
        break;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Sistem Pembiayaan Mahasiswa</title>

<style>

body{
    font-family:Arial, Helvetica, sans-serif;
    background:#f4f4f4;
    margin:30px;
}

h1,h2{
    text-align:center;
}

.menu{
    text-align:center;
    margin-bottom:25px;
}

.menu a{
    text-decoration:none;
    background:#0d6efd;
    color:white;
    padding:10px 18px;
    border-radius:5px;
    margin:5px;
    display:inline-block;
}

.menu a:hover{
    background:#084298;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
}

th,td{
    border:1px solid #ccc;
    padding:10px;
}

th{
    background:#0d6efd;
    color:white;
}

tr:nth-child(even){
    background:#f2f2f2;
}

</style>

</head>
<body>

<h1>SISTEM INFORMASI PEMBIAYAAN MAHASISWA</h1>

<div class="menu">

<a href="?menu=dashboard">Dashboard</a>

<a href="?menu=mandiri">Mahasiswa Mandiri</a>

<a href="?menu=bidik">Mahasiswa Bidik Misi</a>

<a href="?menu=prestasi">Mahasiswa Prestasi</a>

</div>

<h2><?= $judul ?></h2>

<table>

<tr>

<th>ID</th>
<th>Nama</th>
<th>NIM</th>
<th>Semester</th>
<th>Jenis Pembiayaan</th>
<th>Spesifikasi Akademik</th>
<th>Total Tagihan</th>

</tr>

<?php foreach($data as $mhs): ?>

<tr>

<td><?= $mhs->getIdMahasiswa(); ?></td>

<td><?= $mhs->getNamaMahasiswa(); ?></td>

<td><?= $mhs->getNim(); ?></td>

<td><?= $mhs->getSemester(); ?></td>

<td>
<?php

if($mhs instanceof MahasiswaMandiri){
    echo "Mandiri";
}
elseif($mhs instanceof MahasiswaBidikMisi){
    echo "Bidik Misi";
}
else{
    echo "Prestasi";
}

?>
</td>

<td><?= $mhs->tampilkanSpesifikasiAkademik(); ?></td>

<td>
Rp <?= number_format($mhs->hitungTagihanSemester(),0,',','.'); ?>
</td>

</tr>

<?php endforeach; ?>

</table>

</body>
</html>