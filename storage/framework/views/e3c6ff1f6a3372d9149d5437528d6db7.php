<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sayang Keluarga</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Prof.css">

   
</head>
<body>
<header>
    <a class="logo">SaKe</a>
    <div class="navbar" id="myNav">
        <a href="homepagelogin.html" class="menu">Beranda</a>
        <a href="Yayasan.html" class="menu">Yayasan</a>
        <a href="#tentangkami" class="menu">Tentang Kami</a>
        <a href="" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

        <div class = "profile">
            <img src="images/notes.png" class="icon">
            <div class="text">
                <button><a href="aktivitas.html">Aktivitas saya</a></button>
            </div>
            <a href="Prof.html">
                <img src="images/icon.jpg" class="account">
            </a>
        </div>


        <!-- <div class="icons">
            <i class="fas fa-bars" id="bars"></i>

        </div> -->
</header>

<div id="changesModal" class="modal">
    <div class="changes">
        <h2>Ubah Data Pribadi</h2>
        <form action="" id="search-form">
            <a href="Prof.html">
            <i class="fas fa-times" id="close"></i>
            </a>
        
       
            <img src="images/icon.jpg" alt="">
            <a href="#select photo">Ubah Foto Profil</a>
            <div class="name">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" value="Jovan Christion">
            </div>


            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" id="tgl_lahir" name="tgl_lahir" value="2004-06-23">

            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select id="jenis_kelamin" name="jenis_kelamin">
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>

            
                <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" rows="2" cols="37">JLCemora 2 No.V. Meadow Green, Jakarta Selatan</textarea>
       
          
            <div class="nik">
                <label for="nik">NIK</label>
            <input type="text" id="nik" name="nik" value="3226186206041115">

            
            </div>
            <div class="email">
                <label for="email">Email</label>
            <input type="text" id="email" name="email" value="Jovanganteng@gmail.com">
            </div>
            
            
                <label for="telepon">Nomor Telepon</label>
                <button>+62</button>
                <input type="text" id="telepon" name="phone" value="89643472289">
            


            <div class="acc"><button type="submit" onclick="showMessage()">Simpan</button></div>
        </form>
    </div> 
    </div>

    <div class="main">
        <div class="profile-header">
            <h2>Profil Saya</h2>
            <button id="UbahBtn">
                Ubah
            </button>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="identity-container">
                    <img src="./images/icon.jpg" alt="" width="140" height="110">
                    <div class="identity-info">
                        <h1>Jovan Christian</h1>
                        <p>+62 89643472289</p>
                        <p>jovanganteng@gmail.com</p>
                    </div>
                </div>

                <table>
                    <tbody>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td><p >23 Juni 2004</p></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td><p>Laki-laki</p></td>
                        </tr>
                        <tr>
                            <td>Kota/Kabupaten</td>
                            <td><p>Jakarta Selatan</p></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><p>Jl. Cemara 2 No. V,Meadow Green</p></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td><p>3226186206041115</p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        
        
    </div>


       
    <footer>
        <div class="footer">
            <div class="desc"><a>Sayang Keluarga</a>
                <div class="text">Melalui platform kami, Anda dapat menemukan informasi lengkap mengenai setiap yayasan,
                    termasuk reputasi, layanan yang disediakan, dan ulasan dari klien sebelumnya.</div>
            </div>
            <div class="explore"><a>Explore</a>
                <div class="footerLink">
                    <a class="linkcontent" href="homepagelogin.html">Beranda</a>
                    <a class="linkcontent" href="Yayasan.html">Yayasan</a>
                    <a class="linkcontent" href="">Tentang Kami</a>
                </div>
            </div>
            <div class="layanankami"><a>Layanan Kami</a>
                <div class="layanankamicontent">
                    <div class="info">Perawat Lansia</div>
                    <div class="info">Pengasuh Anak</div>
                </div>
            </div>
            <div class="kontak"><a>Kontak</a>
                <div class="isikontak">
                    <img src="images/mail.png" alt="" class="mail">
                    <div class="gmail" href="contact@sayangkeluarga@gmail.com">contact@sayangkeluarga@gmail.com</div>
                </div>
            </div>
            <div class="copyright">
                <img class="imgcopyr" src="images/Line 2.png" alt="">
                <a class="copyr">©2024</a>
                <a class="copyr">Terms of Service</a>
                <a class="copyr">Privacy Policy</a>
            </div>
        </div>
    </footer>

    <script src="Prof.js"></script>


</body>
</html><?php /**PATH C:\Users\Jovan\Downloads\hendriganteng\hendriganteng\resources\views\Prof.blade.php ENDPATH**/ ?>