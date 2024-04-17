<?php
require '../../../koneksi.php';
$id_user = $_POST["id_user"];
$hal = $_POST["halaman"];
$full_name = $_POST["full_name"];
$username = $_POST["username"];
$national = $_POST["national"];
$password = $_POST["password"];
$password_hash = password_hash($password,PASSWORD_DEFAULT);


if($password == ""){
    $update = mysqli_query($koneksi, "UPDATE tb_user SET full_name='$full_name',username='$username',national='$national' where id_user ='$id_user'");
    
    if($update > 0 ){
            echo "<script>alert('Berhasil diupdate');
                    document.location.href='data_user.php?halaman=$hal&status=berhasil';</script>";
        }else{
            echo "gagal";
        }
    }else{
        $update2 = mysqli_query($koneksi, "UPDATE tb_user SET full_name='$full_name',username='$username',national='$national',password='$password_hash' where id_user ='$id_user'");
        echo "<script>alert('Berhasil mengubah password');
                    document.location.href='data_user.php?halaman=$hal&status=berhasil';</script>";
    }
?>