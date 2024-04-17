<?php 
require '../../../koneksi.php';
$hal = $_GET["halaman"];
$idd = filter_var($_GET["id_user"], FILTER_SANITIZE_STRING);
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
$data = query("select * from tb_user where id_user=$idd")[0];
$negara = $data["national"];
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
 </style>


</head>
<body>
 
<form action="user_update.php" method="post" enctype="multipart/form-data">
  <div class="container">
    <div class="atas">
    <h1>UPDATE DATA USER</h1>
    </div>
    <hr >
    <input type="hidden" value="<?php echo $hal;?>" name="halaman">
     <input type="hidden" name="id_user" value="<?=$data["id_user"]?>">

    <label for="Nama"><b>Full Name :</b></label>
    <input type="text" placeholder="Masukkan Nama Barang" name="full_name" value="<?=$data['full_name']; ?>" >

    <label for="deskripsi"><b>Username : </b></label>
    <input type="text" placeholder="Ketik disini" name="username" value="<?=$data['username']; ?>"><br>
    <label for="deskripsi"><b>National :</b></label><br><br>
    <div class="styled-select">
    <select name="national">
                        <option value="<?php echo $data["national"]; ?>"><?php echo $data["national"];?></option>
                        <option value="<?php if($negara == "indonesian"){ echo "tourist"; }else{ echo "indonesian"; } ?>"><?php if($negara == "indonesian"){ echo "tourist"; }else{ echo "indonesian"; } ?></option>
                   
    </select>
    </div>
    <br>
    <label for="deskripsi"><b>Password : </b></label>
    <h5 style="position:relative; bottom:17px;">*note: Jangan diisi jika tidak ingin diubah</h5>
    
    <input style="position:relative; bottom:30px;" type="password" placeholder="*note: Jangan diisi jika tidak ingin diubah" name="password" value="">
    
  
      <hr style="position:relative;
  bottom: 30px;">
  <center>
    <button type="submit" class="registerbtn" name="submit">Simpan Data</button>
    <a href="data_user.php?halaman=<?php echo $hal; ?>" class="registerbtn2">Cancel</a>
</center>
  </div>


</form>

</body>
</html>