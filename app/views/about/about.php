<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= BASEURL;?>/img/logo.png">
    <title>Learn More | K-ZOO</title>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="<?= BASEURL;?>/css/swiper-bundle.min.css">
    <style>
       .cover{
            background-image: url('<?= BASEURL;?>/img/Halaman-Page.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            width: 101.2%;
            position: relative;
            height: 1320px;
            background-size: 100%;
            right: 8px;
            bottom: 18px;
        }
        .latar{
            position: relative;
            top: 150px;
            left: 30px;
            width: 1200px;
        }
        .latar p{
            text-align: justify;
        }
        .latar2{
            position: relative;
            top: 150px;
            left: 41px;
            width: 1200px;
        }
        .latar2 p{
            text-align: justify;
            font-size: 20px;
        }
        .latar3{
            position: relative;
            top: 50px;
            left: 30px;
            width: 1160px;
        }
        .latar3 p{
            text-align: justify;
        }

        .zoogambar{
            width: 100px;
        }
        .logo_text{
            text-align: center;
            top: 50px;
            position: relative;
        }
        .text{
            position: relative;
            left: 10px;
            bottom: 40px;
            font-size: 40px;
            color: white;
        }
        .kotak{
            border: 0;
            border-radius: 20px;
            opacity: 40%;
            width: 1230px;
            height: 1040px;
            left: 25px;
            top: 130px;
            background-color: white;
            position: absolute;
        }
        ol{
            counter-reset: list;
        }
        .latar2 li{
            list-style-type: none;
        }
        .latar2 li:before{
            content: counter(list)")";
            counter-increment: list;
        }
        .join{
            position: absolute;
            padding: 10px 27px;
            border: 0;
            border-radius: 70px;
            background-color:darkorange;
            text-decoration: none;
            
            position: absolute;
            top: 1250px;
            left: 60px;
        }
        .join a{
            text-decoration: none;
            color: white;
        }
        .join:hover{
            background-color:chocolate;
        }
        /* css untuk menubar */
         /*start menu*/
        .nav ul{
            list-style-type: none;
        }
        .nav{
            display: inline-block;
            text-align: center;
            position: fixed;
            width: 100%;
            top: 8.7%;
            left: 53%;
            z-index: 10;
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
            position: fixed;
            left: 1050px;
            top: 50px;
            z-index: 20;
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
        /*start css tim*/
        .slide-container{
  max-width: 650px;
  width: 100%;
  top: 100px;
  position: relative;
  padding: 40px 0;
}
.slide-content{
  margin: 0 40px;
  overflow: hidden;
  border-radius: 25px;
}
.card{
  border-radius: 25px;
  background-color: #FFF;
}
.image-content,
.card-content{
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 10px 14px;
}
.image-content{
  position: relative;
  row-gap: 5px;
  padding: 25px 0;
}
.overlay{
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background-color: #4070F4;
  border-radius: 25px 25px 0 25px;
}
.overlay::before,
.overlay::after{
  content: '';
  position: absolute;
  right: 0;
  bottom: -40px;
  height: 40px;
  width: 40px;
  background-color: #4070F4;
}
.overlay::after{
  border-radius: 0 25px 0 0;
  background-color: #FFF;
}
.card-image{
  position: relative;
  height: 150px;
  width: 150px;
  border-radius: 50%;
  background: #FFF;
  padding: 3px;
}
.card-image .card-img{
  height: 100%;
  width: 100%;
  object-fit: cover;
  border-radius: 50%;
  border: 4px solid #4070F4;
}
.name{
  font-size: 18px;
  font-weight: 500;
  color: #333;
}
.description{
  font-size: 14px;
  color: #707070;
  text-align: center;
}
.button{
  border: none;
  font-size: 16px;
  color: #FFF;
  padding: 8px 16px;
  background-color: #4070F4;
  border-radius: 6px;
  margin: 14px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.button:hover{
  background: #265DF2;
}

.swiper-navBtn{
  color: #6E93f7;
  transition: color 0.3s ease;
}
.swiper-navBtn:hover{
  color: #4070F4;
}
.swiper-navBtn::before,
.swiper-navBtn::after{
  font-size: 35px;
}
.swiper-button-next{
  right: 0;
}
.swiper-button-prev{
  left: 0;
}
.swiper-pagination-bullet{
  background-color: #6E93f7;
  opacity: 1;
}
.swiper-pagination-bullet-active{
  background-color: #4070F4;
}
        /*end css tim*/
    </style>
</head>
<body>
    <div class="cover">
    	<!-- start menubar -->
        <h3><?=$nama["nama"];?></h3>
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
        <!-- end menubar -->
        <div class="kotak"></div>
        <div class="latar">
            
        </div>
        <div class="kotak2"></div>
        <div class="latar2">
            <p>&emsp;&emsp;Kebun binatang (Zoo) adalah tempat hewan dipelihara dalam lingkungan buatan, dan 
                dipertunjukkan kepada publik. Selain sebagai tempat rekreasi, kebun binatang berfungsi sebagai 
                tempat pendidikan, riset, dan tempat konservasi untuk satwa terancam punah<br> 
                &emsp;&emsp;Saat ini kebun binatang (Zoo) merupakan salah satu tempat wisata yang diminati oleh masyarakat banyak,
                terutama untuk liburan bersama keluarga tercinta. Kebun Binatang (Zoo) dinilai sebagai tempat wisata 
                yang tidak hanya menjadi sarana rekreasi, namun dapat dijadikan sebagai sarana edukasi terutama bagi 
                anak-anak. Namun ada saja keluhan para pengunjung mengenai informasi, fasilitas dan juga mengenai 
                pemesanan tiket. Disaat hari libur (weekend) telah tiba, banyak masyarakat yang berkunjung ke kebun 
                binatang, namun harus mengantre panjang untuk mendapat tiket masuk. Selain itu, pusat informasi mengenai 
                fasilitas, kegiatan, dan jam buka kandang setiap hewan kurang tersampaikan, karena hanya tersedia poster 
                atau banner saja. Maka dari itu perlu adanya teknologi baru yang memudahkan para pengunjung untuk mendapat 
                informasi atau bahkan memesan tiket tanpa harus mengantre. 
                <br>
                &emsp;&emsp;Dari latar belakang tersebut, maka penulis membuat sebuah proyek website yang bernama Komedi Zoo (K-Zoo),
                yang merupakan website kebun binatang (Zoo) yang memuat segala informasi mengenai kebun binatang mulai 
                dari informasi hewan, event (atraksi), fasilitas, peta sampai dengan pemesanan tiket yang dapat diakses oleh 
                pengunjung secara online dimanapun dan kapanpun sesuai keinginan. Website tersebut diharapkan mampu memudahkan 
                pengunjung dan menaikkan produktivitas kebun binatang.</p>
        </div>
        
        <div class="join"><a href="1_index.html">Back</a></div>

        <div class="slide-container swiper">
        	<h3 style="text-align: center;">Our Tim</h3>
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="<?=BASEURL;?>/img-tim/shaffa2.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Shaffanah Ghaniyah Miranda</h2>
                            <p class="description">Politeknik Negeri Jakarta</p>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="<?=BASEURL;?>/img-tim/anna.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name" style="width: 170px; left: 20px; position: relative;">Raudhatul Jannah</h2>
                            <br>
                            <p class="description">Politeknik Negeri Jakarta</p>
                        	
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="<?=BASEURL;?>/img-tim/dandi.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Rizka Dandi Maulana</h2>
                            <p class="description">Politeknik Negeri Jakarta</p>
                        </div>
                    </div>
                    
                   
                    
                </div>
            </div>
        </div>
    </div>
</body>
 <script>
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
<!-- Swiper JS -->
    <script src="<?=BASEURL;?>/js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="<?=BASEURL;?>/js/script.js"></script>
</html>