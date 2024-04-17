<?php
// session_start();
$nama = @$_SESSION['id_user'];
             
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= BASEURL;?>/img/logo.png">
    <title>Ticket | K-ZOO</title>
    <link rel="stylesheet" href="<?= BASEURL;?>/swiper-css/swiper-bundle.min.css" />
    <style>
        html{
            font-family: Arial, Helvetica, sans-serif;
        }
        .cover{
            background-image: url('<?=BASEURL;?>/img/Login-Page1.jpg');
            background-repeat: no-repeat;
            position: fixed;
            width: 100%;
            height: 100%;
            background-size: 100%;
            right: 0.5px;
            bottom: 0.5px;
        }
        .all_table{
            position: relative;
            margin: 250px 450px;
            text-align: center;
        }
        .tiket_masuk{
            background: rgba(75, 122, 71, 1);;
            width: 80px;
            height: 50px;
            color: white;
            font-size: 20px;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
        }
        .kolom_kendaraan{
            background: rgba(157, 193, 131, 1);
            text-align: center;
            height: 40px;
            border-bottom: 2px solid black;
        }
        .kolom_kendaraan2{
            background: rgba(157, 193, 131, 1);
            text-align: center;
            height: 40px;
        }
        .kolom_harga{
            background: rgba(157, 193, 131, 1);
            text-align: center;
            height: 40px;
            border-bottom: 2px solid black;
        }
        .kolom_harga2{
            background: rgba(157, 193, 131, 1);
            text-align: center;
            height: 40px;
        }
         /* css untuk menubar */
          /*start menu*/
        .nav ul{
            list-style-type: none;
        }
        .nav{
            z-index: 10;
            display: inline-block;
            text-align: center;
            position: absolute;
            width: 100%;
            top: 8.5%;
            left: 53%;
            transform: translate(-50%,-50%);
        }
        .nav li:hover{
            background:chocolate;
        }
        .nav > ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: inline-block;
        }
        .nav > ul > li{
            position: relative;
            cursor: pointer;
            float: left;
            border: 0;
            border-radius: 70px;
            width: 130px;
            height: 35px;
            margin-right: 10px;
            line-height: 35px;
            background:darkorange;
            
        }
        .nav > ul > li > a{
          color: white;
          text-decoration: none;
            display: inline-block;
            text-align: center;
            position: absolute;
            width: 100%;
            top: 50.5%;
            left: 53%;
            transform: translate(-50%,-50%);
        }
        .dropdown{
            position: absolute;
            top: 100%;
            left: 0%;
            width: 100%;
            padding: 0;

        }
        .dropdown li{
            background: yellow;
            border-radius: 70px;
            background-color:darkorange;
            width: 180px;
            height: 36px;
            margin-top: 15px;
            right: 25px;
            line-height: 34px;
            position: relative;
        }
        .dropdown li a{
            color: white;
            text-decoration: none;
        }
        .dropdown li:hover{
            background:chocolate;
        }
        .dropdown li{
            display: none;
        }
        .nav li:hover > .dropdown li{
            display: block;
        }
        .nav li:hover > .dropdown{
            perspective: 1000px;
        }
        .nav li:hover > .dropdown li{
            transform-origin: top left;
            opacity: 0;
        }
        .nav li:hover > .dropdown li:nth-child(1){
            animation: animate 300ms ease-in-out forwards;
            animation-delay: -45ms;
        }
        .nav li:hover > .dropdown li:nth-child(2){
            animation: animate 300ms ease-in-out forwards;
            animation-delay: 0ms;
        }
        .nav li:hover > .dropdown li:nth-child(3){
            animation: animate 300ms ease-in-out forwards;
            animation-delay: 45ms;
        }
        .nav li:hover > .dropdown li:nth-child(4){
            animation: animate 300ms ease-in-out forwards;
            animation-delay: 90ms;
        }
        .nav li:hover > .dropdown li:nth-child(5){
            animation: animate 300ms ease-in-out forwards;
            animation-delay: 135ms;
        }
        @keyframes animate{
            0%{
                opacity: 0;
                transform: rotateZ(90deg);
            }
            70%{
                transform: skewX(10deg);
            }
            100%{
                opacity: 1;
                transform: rotateZ(0deg);
            }
        }
        /*end menu*/
        .gambar_ig{
            position: absolute;
            left: 1050px;
            top: 45px;
        }
        .gambar_ig svg{
            padding-right: 10px;
        }
        .gambar_ig a{
            text-decoration: none;
        }

        svg:hover path{
            fill: black;
            
        }
        /* end css menubar */

        /* css order ticket*/
    .swiper {
      width: 100%;
      height: 65%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      width: 100%;
      height: 100%;
    }
    .kotak-img{
      width: 100%;
      height: 72%;
      position: relative;
      bottom: 8px;
    }
    .kotak-ticket{
            padding: 10px 10px;
            width: 435px;
            height: 520px;
            left: 35px;
            bottom: 210px;
            margin: 300px auto;
            text-align: center;
            border-radius: 8px;
            position: relative;
            background: rgba(209, 234, 197, 0.5);
            color: rgba(75, 122, 71, 1);
    }
    .pilih-paket a{
        text-decoration: none;
        color: rgba(75, 122, 71, 1);
            font-size: 20px;
    }
    .pilih-paket{
        position: absolute;
        bottom: 0px;
    }
    .jenis-paket{
        position: absolute;
        width: 150px;
        bottom: 294px;
    }
    .minus-order{
        border-radius: 200px;
        width: 22px;
        height: 22px;
        padding: 0;
        background-color: white;
        position: absolute;
        left: 75px;
    }
    .minus-order a{
        position: relative;
        bottom: 22px;
        color: black;
        font-size: 50px;
    }
    .plus-order{
        border-radius: 200px;
        width: 22px;
        height: 22px;
        padding: 0;
        background-color: white;
        position: absolute;
        left: 125px;
        bottom: 2px;
    }
    .plus-order a{
        position: relative;
        color: black;
        bottom: 6px;
        font-size: 28px;
    }
    .plus-order:hover{
        background-color: black;
    }
    .plus-order a:hover{
        color: white;
        position: relative;
        font-weight: bold;
        font-size: 28px;
    }
    .plus-order:hover{
        background-color: black;
    }
    .plus-order a:hover{
        color: white;
        position: relative;
        bottom: 6px;
        font-weight: bold;
        font-size: 28px;
    }
    .minus-order:hover{
        background-color: black;
    }
    .minus-order a:hover{
        color: white;
        position: relative;
        font-weight: bold;
        font-size: 50px;  
        right: 1px;  
    }
    .angka{
        border: none;
        background: none;
        width:11px;
        font-size: 20px;
    }
    .swiper-button-next{
        color:darkorange;
    }
    .swiper-button-prev{
        color:darkorange;
    }
    .swiper-pagination-bullet .swiper-pagination-bullet-active{
        color:darkorange;
    }
    input[type="date"]{
    background: rgba(157, 193, 131, 0.7);
    padding: 9px;
    /*position: absolute;*/
    /*transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;*/
    font-family: Arial, Helvetica, sans-serif;
    color: rgba(75, 122, 71, 1);
    font-size: 20px;
    border: none;
    outline: none;
    position: relative;
    border-radius: 5px;
    }
    ::-webkit-calendar-picker-indicator{
    background-color: #ffffff;
    padding: 5px;
    cursor: pointer;
    border-radius: 3px;
    }
    /* end css border ticket*/
    .tb-order{
     text-align: left;
    }
    .label-jml-org{
        font-size: 20px;
    }
    .label-tgl-kunjung{
        font-size: 20px;
    }
    .inp-jml-org{
        border:  none;
        position: relative;
        background: rgba(157, 193, 131, 0.7);
        border-radius: 4px;
        width: 230px;
        height: 35px;
        color: rgba(75, 122, 71, 1);
        font-size: 20px;
    }
    .kotak_submit .submit_tiket:hover{
            background: rgba(157, 193, 131, 1);
            cursor: pointer;
            color: white;
    }
    .submit_tiket{
            border:  none;
            position: relative;
            background: rgba(157, 193, 131, 0.7);
            border-radius: 15px;
            width: 150px;
            height: 40px;
            margin-top: 5px;
            margin-left: 135px;
            color: rgba(75, 122, 71, 1);
            font-size: 20px;
        }
    </style>
    <link rel="stylesheet" href="<?= BASEURL;?>/aos/dist/aos.css" />
</head>

<body>
    
    <div class="cover">
         <!-- start menubar -->
           <div class="nav">
            <ul>
                <li><a href="<?= BASEURL;?>/home">HOME</a></li>
                <li><a href="<?= BASEURL;?>/gallery">GALLERY</a></li>
                <li><a href="#">TICKETS</a>
                    <ul class="dropdown">
                        <li><a href="<?= BASEURL;?>/pesan">Pembelian Ticket</a></li>
                        <li><a href="<?= BASEURL;?>/riwayat">Riwayat Ticket</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo BASEURL;?>/about">ABOUT US</a></li>
                <li class="login" style="display:block;" id="login"><a href="<?=BASEURL;?>/login" >LOGIN</a></li>  
                <li class="login" style="display:block;" id="profile"><a href="<?=BASEURL;?>/profile" >PROFILE</a></li>
            </ul>
        </div>
        <div class="gambar_ig">
            <a href="https://www.instagram.com"><svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16"> <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" fill="white"></path> </svg>
            </a>
            <a href="https://www.twitter.com"><svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16"> <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" fill="white"></path> </svg>
            </a>
            <a href="https://www.facebook.com"><svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16"> <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" fill="white"></path> </svg>
            </a>
        </div>
        
        <div class="kotak"></div>
        <form action="<?=BASEURL;?>/ticket/tambah" method="post">
        <div class="kotak-ticket">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" style="bottom:45px;">
                    <div class="kotak-img"><img src="<?=BASEURL;?>/img/1.png"></div>
                    <br>
                    <div class="pilih-paket">
                        <div ><a href="#">Add Tickets (IDR 50.000)</a></div>
                        <div class="minus-order"><a href="#" id="minus" onclick="handleMinus()">-</a></div>
                        <input class="angka" type="text" name="hasil_regular" value="0" id="regular" min="0">
                        <div class="plus-order"><a href="#" id="plus" onclick="handlePlus()">+</a></div>
                    </div>
                  </div>
                  <div class="swiper-slide" style="bottom:45px;">
                      <div class="kotak-img"><img src="<?=BASEURL;?>/img/2.png"></div>
                    <br>
                    <div class="pilih-paket">
                        <div ><a href="#">Add Tickets (IDR 90.0000)</a></div>
                        <div class="minus-order" style="left:80px;"><a href="#" onclick="handleMinus2()">-</a></div>
                        <input class="angka" type="text" name="hasil_platinum" value="0" id="platinum">
                        <div class="plus-order" style="left:135px;"><a href="#" onclick="handlePlus2()">+</a></div>
                    </div>
                  </div>
                  <div class="swiper-slide" style="bottom:45px;">
                      <div class="kotak-img"><img src="<?=BASEURL;?>/img/3.png"></div>
                    <br>
                    <div class="pilih-paket">
                        <div ><a href="#">Add Tickets (IDR 120.000)</a></div>
                        <div class="minus-order"><a href="#" onclick="handleMinus3()">-</a></div>
                        <input class="angka" type="text" name="hasil_gold" value="0" id="gold">
                        <div class="plus-order" style="left:135px;"><a href="#" onclick="handlePlus3()">+</a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="order-tiket">
                
                    <table class="tb-order">
                    <tr>
                        <div class="jml-org">
                            <td>
                            <label class="label-jml-org" >Number of Visitor  </label>
                            </td>
                            <td>
                            <input type="text" name="jumlah_pengunjung" class="inp-jml-org" value="" id="jumlah_pengunjung">
                            </td>
                        </div>
                    </tr>
                    <tr>
                        <div class="jml-org">
                            <td>
                            <label class="label-jml-org" >Total Harga  </label>
                            </td>
                            <td>
                            <input type="text" name="total_harga1" class="inp-jml-org" value="" id="total" disabled>
                            <input type="hidden" name="total_harga" class="inp-jml-org" value="" id="total2">
                            </td>
                        </div>
                    </tr>
                    <tr>
                        <div class="tgl-kunjung">
                            <td>
                            <label class="label-tgl-kunjung">Visitor Date  </label>
                            </td>

                            <td>
                            <input type="date" name="tanggal">
                            </td>
                        </div>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="kotak_submit">
                                <button type="submit" class="submit_tiket" name="submit">Book Now</button>
                            </div>
                        </td>
                    </tr>
                    </table>
                </form>
           </div>
        </div>
    </div>
    <script type="text/javascript">
        <?php 
        if(isset($_SESSION['id_user']) == ""){
        ?>
        var login = document.getElementById("login");
        var profile = document.getElementById("profile");

        login.style.display = "block";
        profile.style.display = "none";
        <?php
        }else{
        ?>
        login.style.display = "none";
        profile.style.display = "block";
        <?php
        }
        ?>

    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    
  <script>

    var regular = document.getElementById("regular");
    var platinum = document.getElementById("platinum");
    var gold = document.getElementById("gold");
    var jumlah_pengunjung = document.getElementById("jumlah_pengunjung");
    var jumlah_harga = document.getElementById("total");
    var jumlah_harga2 = document.getElementById("total2");

    var count_num_regular = parseInt(regular.value);
    var count_num_platinum = parseInt(platinum.value);
    var count_num_gold = parseInt(gold.value);

    function handlePlus() {
        regular.value = ++count_num_regular;
        updateTotal();
    }

    function handlePlus2() {
        platinum.value = ++count_num_platinum;
        updateTotal();
    }
    function handlePlus3() {
        gold.value = ++count_num_gold;
        updateTotal();
    }

    function handleMinus() {
        if (regular.value == 0) {
            regular.value = 0;
        } else {
            regular.value = --count_num_regular;
            updateTotal();
        }
    }

    function handleMinus2() {
        if (platinum.value == 0) {
            platinum.value = 0;
        } else {
            platinum.value = --count_num_platinum;
            updateTotal();
        }
    }
    function handleMinus3() {
        if (gold.value == 0) {
            gold.value = 0;
        } else {
            gold.value = --count_num_gold;
            updateTotal();
        }
    }

    function updateTotal() {
        var harga_regular = 50000;
        var harga_platinum = 90000;
        var harga_gold = 120000;
        harga_regular *= count_num_regular;
        harga_platinum *= count_num_platinum;
        harga_gold *= count_num_gold;
        var total_harga = harga_regular + harga_platinum + harga_gold;
        jumlah_harga.value = "Rp."+total_harga;
        jumlah_harga2.value = total_harga;

        var total = count_num_regular + count_num_platinum + count_num_gold;
        jumlah_pengunjung.value = total;
    }
   

    // var jumlah = regular2.value;
    // var jumlah = parseInt(regular) + parseInt(platinum) + parseInt(gold);
    // var jumlah_pengunjung = document.getElementById("jumlah_pengunjung").value = jumlah;

    // var harga_regular = 50000;
    // var harga_platinum = 90000;
    // var harga_gold = 120000;
    
    // harga_regular *= parseInt(regular);
    // harga_platinum *= parseInt(platinum);
    // harga_gold *= parseInt(gold);

    // var total = harga_regular + harga_platinum + harga_gold;
    // var total_harga = document.getElementById("total").value = "Rp."+total;
    // var total_harga2 = document.getElementById("total2").value = total;

    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      keyboard: {
        enabled: true,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
    <script src="<?=BASEURL;?>/aos/dist/aos.js"></script>
    <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>
</body>
</html>