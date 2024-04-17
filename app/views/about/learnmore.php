<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= BASEURL;?>/img/logo.png">
    <title>Learn More | K-ZOO</title>
    <style>
       .cover{
            background-image: url('<?= BASEURL;?>/img/Halaman-Page.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            width: 100%;
            height: 1320px;
            background-size: 100%;
        }
        .latar{
            position: relative;
            top: 50px;
            left: 30px;
            width: 1200px;
        }
        .latar p{
            text-align: justify;
        }
        .latar2{
            position: relative;
            top: 50px;
            left: 30px;
            width: 1200px;
        }
        .latar2 p{
            text-align: justify;
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
            top: 260px;
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
    </style>
</head>
<body>
    <div class="cover">
        <div class="logo_text">
            <h3><?= $data["nama"];?></h3>
            <img src="<?= BASEURL;?>/img/logo.png" alt="" class="zoogambar">
            <h3 class="text">K-ZOO</h3>

        </div>
        <div class="kotak"></div>
        <div class="latar">
            <h3>
                Latar Belakang
            </h3>
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
        <div class="kotak2"></div>
        <div class="latar2">
            <h3>
                Tujuan
            </h3>
            <p>
                <ol>
                    <li>
                        &nbsp;Dapat membuat layanan website Kebun Binatang (K-Zoo) yang informatif dan User Friendly
                    </li>
                    <li>
                        &nbsp;Memudahkan pengunjung untuk memesan tiket secara online, bisa dimanapun dan kapanpun tanpa harus mengantri ke loket terlebih dahulu
                    </li>
                    <li>
                        &nbsp;Memberikan informasi kepada pengunjung mengenai koleksi hewan yang terdapat dalam kebun binatang (K-Zoo)</li>
                    <li>
                        &nbsp;Memberikan pelayanan informasi seputar event (atraksi) serta fasilitas kebun binatang (K-Zoo)</li>
                    <li>
                        &nbsp;Memberikan informasi mengenai berita ataupun artiket terkini mengenai hewan-hewan dalam kebun binatang (K-Zoo) dan letak kandang hewan dalam bentuk peta (Map)</li>
                    <li>
                        &nbsp;Memudahkan pengunjung untuk memesan tiket secara online, bisa dimanapun dan kapanpun tanpa harus mengantri ke loket terlebih dahulu
                    </li>
                    <li>
                        &nbsp;Dapat membuat layanan website Kebun Binatang (K-Zoo) yang informatif dan User Friendly
                    </li>
                    <li>
                        &nbsp;Memudahkan pengunjung untuk memesan tiket secara online, bisa dimanapun dan kapanpun tanpa harus mengantri ke loket terlebih dahulu
                    </li>
                </ol>
            </p>
        </div>
        <div class="kotak3"></div>
        <div class="latar3">
            <h3>
                Target Pasar
            </h3>
            <p>
                &emsp;&emsp;Website K-Zoo ini ditujukan untuk para pengujung di segala usia dan kalangan terutama pelajar ataupun mahasiswa yang ingin melakukan Study Tour, penelitian atau sekedar rekreasi sambil belajar mengenai satwa dalam Komedi Zoo (K-Zoo)
            </p>
        </div>
        <div class="kotak3"></div>
        <div class="latar3">
            <h3>
                Menu Website
            </h3>
            <ul>
                <li>Home</li>
            </ul>
            <p style="position: relative; left: 40px;">
                Home atau biasa disebut sebagai homepage adalah halaman depan atau halaman utama dari website K-Zoo. Halaman home digunakan untuk menarik perhatian dan memberitahu pengunjung tentang Website K-Zoo. Pada Home Page menampilkan menu seperti Gallery, Ticket dan Informasi mengenai Zoo.
            </p>
            <ul>
                <li>Gallery</li>
            </ul>
            <p style="position: relative; left: 40px;">
                Gallery memiliki fungsi menyediakan fasilitas foto dan para satwa dalam Zoo pada website tersebut.</p>
            <ul>
                <li>Ticket</li>
            </ul>
            <p style="position: relative; left: 40px;">
                Tiket atau bisa juga disebut tanda masuk digunakan agar bisa  memasuki suatu kawasan atau event dalam Zoo. </p>
            <ul>
                <li>About Us</li>
            </ul>
            <p style="position: relative; left: 40px;">
                Fungsi dari about us adalah untuk mengenalkan informasi penggunaan serta website identitas pembuat website 
            </p>
            <ul>
                <li>Login Page</li>
            </ul>
            <p style="position: relative; left: 40px;">
                Login adalah halaman untuk pengguna agar masuk atau mendaftarkan akun nya terlebih dahulu untuk dapat menggunakan fasilitas dalam website K-Zoo
            </p>    
        </div>
        <div class="join"><a href="<?= BASEURL;?>/home">Back</a></div>
    </div>
</body>
</html>