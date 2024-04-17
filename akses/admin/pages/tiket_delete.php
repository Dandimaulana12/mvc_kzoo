<?php
require '../../../koneksi.php';
$id_tiket = $_GET["id_tiket"];
$hal = $_GET["halaman"];
$delete = mysqli_query($koneksi, "DELETE from tb_ticket where id_ticket='$id_tiket'");

if($delete >0){
    echo "<script>alert('Berhasil dihapus');
    document.location.href='data_tiket.php?halaman=$hal&status=berhasil';</script>";
}
?>