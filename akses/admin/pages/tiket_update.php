<?php
require '../../../koneksi.php';
$id_tiket = $_POST["id_tiket"];
$hal = $_POST["halaman"];
$tanggal = $_POST["tanggal"];
$regular = $_POST["regular"];
$platinum = $_POST["platinum"];
$gold = $_POST["gold"];
$jumlah_tiket = $_POST["jumlah_tiket"];
$total_harga = $_POST["total_harga"];

    $update = mysqli_query($koneksi, "UPDATE tb_ticket SET tanggal_book='$tanggal',regular_tiket='$regular',platinum_tiket='$platinum',gold_tiket='$gold',jumlah_tiket='$jumlah_tiket',harga_tiket='$total_harga' where id_ticket ='$id_tiket'");
    if($update > 0 ){
            echo "<script>alert('Berhasil diupdate');
                    document.location.href='data_tiket.php?halaman=$hal&status=berhasil';</script>";
        }else{
            echo "gagal";
        }
?>