<?php 
require '../../../koneksi.php';
$hal = $_GET["halaman"];
$idd = filter_var($_GET["id_tiket"], FILTER_SANITIZE_STRING);
if (!is_numeric($idd)) {
   echo "Yah.. Di Patch...";
   exit;
}
function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

$data_tiket = query("select * from tb_ticket where id_ticket=$idd")[0];
$id_user = $data_tiket["user_id"];
$data_user = query("select * from tb_user where id_user=$id_user")[0];
?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
 <style>
   
   * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

.styled-select { 
  width: 200px; 
  height: 34px; 
  overflow: hidden; 
  background: no-repeat right #f1f1f1; 
  border: 1px solid #ccc; 
  border-radius: 5px; 
  -webkit-border-radius: 5px; 
  transition:ease all 0.3s; 
  -webkit-transition:ease all 0.3s; } 
.styled-select:hover{ 
    box-shadow:0 0 7px 5px #f1f1f1; } 
.styled-select select { 
  background: transparent; 
  width: 200px; 
  padding: 5px; 
  font-size: 16px; 
  line-height: 1; 
  border: 0; 
  border-radius: 0; 
  height: 34px; 
  /* -webkit-appearance: none;  */
} 
.styled-select select { 
  color: black; 
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 11px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
  opacity: 0.9;
  position:relative;
  bottom: 40px;
}
a{
    text-decoration:none;
}
.registerbtn2 {
  background-color:#e32a00;
  color: white;
  padding: 9.5px 230px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
  opacity: 0.9;
  position:relative;
  bottom: 39.5px;
}
.registerbtn:hover {
  opacity:1;
}
.registerbtn2:hover {
  opacity:4;
}
/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.atas{
  text-align: center;
  padding: 12px;
} 

input[type="date"]{
    background: no-repeat right #f1f1f1; 
    padding: 7px;
    /*position: absolute;*/
    /*transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;*/
    position:relative;
    top:5px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    border: none;
    outline: none;
    position: relative;
    /* border-radius: 5px; */
    }
 </style>


</head>
<body>
 
<form action="tiket_update.php" method="post" enctype="multipart/form-data">
  <div class="container">
    <div class="atas">
    <h1>UPDATE DATA TICKET</h1>
    </div>
    <hr >
   
    <label for="deskripsi"><b>Full Name : </b></label>
    <input type="text" placeholder="Ketik disini" name="full_name2" value="<?=$data_user['username']; ?>" disabled><br>
    
    <label for="deskripsi"><b>Username : </b></label>
    <input type="text" placeholder="Ketik disini" name="username2" value="<?=$data_user['username']; ?>" disabled><br>
   
    <label for="deskripsi"><b>Visitor Date : </b></label><br>
    <input type="date" name="tanggal" value="<?php echo $data_tiket['tanggal_book']; ?>"><br><br>

    <label for="Nama"><b>Regular Ticket :</b></label>
    <input type="text" placeholder="Masukkan Nama Barang" name="regular" value="<?=$data_tiket['regular_tiket']; ?>" >

    <label for="deskripsi"><b>Platinum Ticket : </b></label>
    <input type="text" placeholder="Ketik disini" name="platinum" value="<?=$data_tiket['platinum_tiket']; ?>"><br>
    
    <label for="deskripsi"><b>Gold Ticket : </b></label>
    <input type="text" placeholder="Ketik disini" name="gold" value="<?=$data_tiket['gold_tiket']; ?>"><br>

    <label for="deskripsi"><b>Jumlah Ticket : </b></label>
    <input type="text" placeholder="Ketik disini" name="jumlah_tiket" value="<?=$data_tiket['jumlah_tiket']; ?>"><br>

    <label for="deskripsi"><b>Total Harga : </b></label>
    <input type="text" placeholder="Ketik disini" name="total_harga" value="<?=$data_tiket['harga_tiket']; ?>"><br>
  
      <hr style="position:relative;">
  <center>
    <br>
    <br>
    <button type="submit" class="registerbtn" name="submit">Simpan Data</button>
    <a href="data_tiket.php?halaman=<?php echo $hal; ?>" class="registerbtn2">Cancel</a>
</center>
  </div>
     <input type="hidden" value="<?php echo $hal;?>" name="halaman">
     <input type="hidden" name="id_tiket" value="<?=$data_tiket["id_ticket"]?>">

</form>

</body>
</html>