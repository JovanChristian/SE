<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/aktivitasAfter.css')); ?>">
    <title>SayangKeluarga</title>
    <style>
        body{
            background-color: white; 
        }
    </style>
</head>
<body>
    <!-- toolbar section starts -->
    <header>
        <a class="logo">SaKe</a>
        <nav class = "navbar">
            <a href = "homepagelogin.html">Beranda</a>
            <a href = "InsanMedika.html">Yayasan</a>
            <a href = "#tentangkami">Tentang Kami</a>
        </nav> 
        
        
        <div class = "profile">
            <img src="<?php echo e(asset('image/notes.png')); ?>" class="icon">
            <div class="text">Aktivitas saya</div>
        </div>
        <a href="Prof.html">
            <img src="<?php echo e(asset("image/icon.jpg")); ?>" class="account">
        </a>
    </header>

    <section>
        <div class="title">Kontrak Saya</div>
        <button id="buttonTambah">
            <a href="#tambah"\>Tambahkan Kontrak</a>
        </button> 
        <?php
            $count = 1;
        ?>
        <?php $__currentLoopData = $listActivity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $la): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="kontrak<?php echo e($count); ?>">
            <?php if($la->namaYayasan === 'Nanny Care'): ?>
                <img src="<?php echo e(asset("image/new-logo.png")); ?>" alt="logoInsan" class="dis">
            <?php elseif($la->namaYayasan === 'My Nurze'): ?>
                <img src="<?php echo e(asset("image/photo1654222896.jpg")); ?>" alt="" class="dis" >
            <?php elseif($la->namaYayasan === 'Insan Medika'): ?>
                <img src="<?php echo e(asset('image/insanmedika.jpg')); ?>" alt="" class="dis">
            <?php elseif($la->namaYayasan === 'Putra Insan'): ?>
            <img src="<?php echo e(asset("image/yayasan4.png")); ?>" alt="" class="dis">
            <?php elseif($la->namaYayasan === 'Caregiver ID'): ?>
            <img src="<?php echo e(asset("image/images.jpg")); ?>" alt="" class="dis">
            <?php elseif($la->namaYayasan === 'Captain Care'): ?>
            <img src="<?php echo e(asset("image/Capten-Care-Logo-Low-px.jpg")); ?>" alt="" class="dis">
            <?php endif; ?>

            <div class="nama">
                <a><?php echo e($la->namaYayasan); ?></a>
            </div>
            <a class="tanggal">Kontrak dibuat pada tanggal <?php echo e($la->created_at); ?></a>
            <a class="kota">Jakarta Selatan</a>
            <div class="tag1">
                 <a>Pengasuh <?php echo e($la->jenisPengasuh); ?></a>
            </div>
            <div class="durasi">
                <a>Kontrak <?php echo e($la->durasiKontrak); ?></a>
            </div>
            <div class="status">
                <a>BUKTI KONTRAK SUDAH TERVERIFIKASI</a>
           </div>
           <img src="<?php echo e(asset("image/check.png")); ?>" alt="logoCheck" class="dis2">
           <button class="buttonLapor">
                <a href="#lapor"\>LAPOR MASALAH</a>
            </button>  
        </div>
        <?php
            $count++;
        ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        
    </section>

    <div id="registerModal" class="modal2">
        <div class="modal2-content">
            <span class="close">&times;</span>
            <a class="titleregister">
                Tambahkan&nbsp;<span class="highlight">Kontrak</span>
            </a>
            <form action="<?php echo e(route('aktivitas.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
            
                <div class="namabox">
                    <a>Nama Yayasan</a>
                    <input type="text" id="namaYayasan" name="namaYayasan" required>
                </div>
            
                <div class="datebox">
                    <a>Tanggal Lahir</a>
                    <input type="date" id="tanggalLahir" name="tanggalLahir" required>
                </div>
            
                <div class="genderbox">
                    <a>Jenis Pengasuh</a>
                    <select id="jenisPengasuh" name="jenisPengasuh">
                        <option value="Anak">Anak</option>
                        <option value="Lansia">Lansia</option>
                    </select>
                </div>
            
                <div class="durasiKontrak">
                    <a>Durasi Kontrak</a>
                    <select id="durasiKontrak" name="durasiKontrak">
                        <option value="3 bulan">3 bulan</option>
                        <option value="6 bulan">6 bulan</option>
                        <option value="12 bulan">12 bulan</option>
                    </select>
                </div>
                
                <button type="submit" class="daftar2">Tambahkan</button>
            
                <img src="<?php echo e(asset('image/upload.png')); ?>" id="tandaDoang" class="uploadPhoto">
                <div class="upload">
                    <a>Unggah kontrak</a>
                </div>
                <label for="image">Pilih gambar</label>
                <input type="file" accept="image/jpeg, image/png, image/jpg" id="image" name="image" required>
            </form>
            
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
                    <a class="linkcontent" href="homepage.html">Beranda</a>
                    <a class="linkcontent" href="YayasanLogin.html">Yayasan</a>
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
                    <img src="<?php echo e(asset("image/mail.png")); ?>" alt="" class="mail">
                    <div class="gmail" href="contact@sayangkeluarga@gmail.com">contact@sayangkeluarga@gmail.com</div>
                </div>
            </div>
            <div class="copyright">
                <img class="imgcopyr" src="<?php echo e(asset("image/Line 2.png")); ?>" alt="">
                <a class="copyr">©2024</a>
                <a class="copyr">Terms of Service</a>
                <a class="copyr">Privacy Policy</a>
            </div>
        </div>
    </footer>

    <script src="<?php echo e(asset('js/scriptAktivitas.js')); ?>"></script>
</body><?php /**PATH C:\Users\Jovan\Downloads\hendriganteng\hendriganteng\resources\views/aktivitasAfter.blade.php ENDPATH**/ ?>