<?php
require '../../../koneksi.php';
$id_user = $_GET["id_user"];
$hal = $_GET["halaman"];
$delete = mysqli_query($koneksi, "DELETE from tb_user where id_user ='$id_user'");

if($delete >0){
    echo "<script>alert('Berhasil dihapus');
    document.location.href='data_user.php?halaman=$hal&status=berhasil';</script>";
}
?>