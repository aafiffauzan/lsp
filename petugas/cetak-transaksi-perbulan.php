<?php
session_start();
require_once 'Petugas.php';

if(!isset($_SESSION['id'])) {
    header('Location: ../');
}

$petugas = new Petugas;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cetak Transaksi Perbulan</title>
</head>
<body>
    <h3>Laporan Pembayaran SPP</h3><br/>
    <hr/>

    <?php
    $siswa = $petugas->getDataSiswaByNIS($_GET['nis']);
    $dt_s = mysqli_fetch_assoc($siswa);
    ?>

    <table>
        <tr>
            <td>Nama
        </tr>
    </table>

</body>
</html>