<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/NannycareAfter.css')}}">
    <script src="{{asset('js/NannycareAfter.js')}}"></script> 
    <script src="https://unpkg.com/feather-icons"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>NannycareLogin Page</title>
</head>
<body>
    <!-- header start -->
    <header>
        <a class="logo">SaKe</a>
        <nav class = "navbar">
            <a href = "homepagelogin.html">Beranda</a>
            <a href = "InsanMedika.html">Yayasan</a>
            <a href = "#tentangkami">Tentang Kami</a>
        </nav> 
        <div class = "profile">
            <img src="{{asset('image/notes.png')}}" class="icon">
            <a href="akivitasAfter.html" style="text-decoration: none;"><div class="text">Aktivitas saya</div></a>       
        </div>
        <a href="Prof.html">
            <img src="{{asset('image/icon.jpg')}}" class="account">
        </a>
    </header>

     <!-- header end -->
      <!-- text start -->
    <div class="text">
        <h1>Nannycare</h1>
    </div>
       <!-- text end -->
      <!-- content start -->
       <div class="wrapper">
        <div class="sectionA">
            <!-- image -->
            <img src="{{asset('image/Nannycarebanner.jpg')}}" alt="">
            <!-- container start -->
            <div class="tab_container">
                <!-- tombol tab -->
                <div class="tab_box">
                    <button class="tab-btn">Profile</button>
                    <button class="tab-btn">Pengasuh</button>
                </div>
                <!-- content button tabs  start-->
                <div class="content_box">
                    <!-- content profile -->
                    <div class="tab_content">
                        <div class="info">
                            <h3>Tentang Yayasan</h3>
                            <p>                              
                                 Hi! Kami adalah Anak-anak Muda yang memiliki Visi & Misi untuk  mewujudkan Indonesia yang lebih baik. Kami ingin memberikan sumbangsih  kami kepada negara tercinta ini dengan memberikan Layanan Kesehatan  Terbaik bagi masyarakat, khususnya bagi mereka yang membutuhkan layanan  Perawatan di Rumah yang menjangkau seluruh kota di Indonesia. Selain  itu, kami ingin berkontribusi memberikan dampak besar bagi Indonesia  dengan menciptakan kesempatan kerja sebesar-besarnya bagi anak-anak muda  yang memiliki jiwa untuk melayani sesama manusia, tidak hanya bagi  mereka lulusan kesehatan tetapi juga bagi yang lulusan sekolah/ kampus  non kesehatan dengan mengikuti pelatihan caregiver
                            </p>
                            <p>                              
                                Nannycare Adalah Agency Penyalur Perawat Home Care Yang Melayani Perawatan  Pasien di Rumah Selama 24 Jam. Kami Menghadirkan Layanan Perawat Home  Care Live-In Mulai Dari Perawat Orang Tua, Perawat Orang Sakit, Perawat  Semi Medis Hingga Pasien Medis Atau Pasien Yang Terpasang Alat/ ICU.                               
                            </p>
                        </div>
                        <div class="penghargaan">
                            <h3>Penghargaan</h3>
                            <ol class="penghargaan-list">
                                <li>"Penghargaan Layanan Kesehatan Terbaik" - Indonesia 2023</li>
                                <li>"Layanan Kesehatan Rumah Terbaik di Dunia pada Tahun 2024" - London 2024</li>
                                <li>"Penghargaan Inovasi dalam Pelayanan Medis" - Bekasi 2023</li>
                                <li>"Penghargaan Kontribusi dalam Meningkatkan Kesehatan Masyarakat" - Jakarta 2024</li>
                                <li>"Penghargaan Layanan Perawat Terbaik" - NYC 2022</li>
                            </ol>                            
                        </div>
                        <div class="sosmed">
                            <h3>Sosial Media</h3>
                            <div class="data">
                                <i class='bx bxl-instagram'></i>
                                <span>@Nannycare</span>
                            </div>
                            <div class="data">
                                <i class='bx bxl-youtube' ></i>
                                <span>Nannycare</span>                               
                            </div>
                            <div class="data">
                                <i class='bx bxl-facebook-circle' ></i>
                                <span>Nannycare</span>                               
                            </div>
                            <div class="data">
                                <i class='bx bxl-twitter'></i>
                                <span>@Nannycare</span>                               
                            </div>
                        </div>
                    </div>
                    <!-- content pengasuh -->
                    <div class="tab_content">
                        <div class="pengasuh_box">
                            <!-- pengasuh 1 start -->
                            <div class="pengasuh">
                                <!-- detail pengasuh start -->
                                <div class="pengasuh_detail">
                                    <div class="pengasuh_img">
                                        <img src="{{asset('image/team24.jpg')}}" alt="">
                                    </div>
                                    <div class="info_pengasuh">
                                        <h4>Karin Issabela, A.MD.KEP.</h4>
                                        <div class="p_profile">
                                            <div class="p_data">
                                                <i class='bx bx-first-aid'></i>
                                                <span>2 tahun</span>
                                            </div>
                                            <div class="p_data">
                                                <p>Tinggi</p>
                                                <span>: 150 cm</span>                               
                                            </div>
                                            <div class="p_data">
                                                <i class='bx bxs-graduation'></i>
                                                <span>D3 Keperawatan</span>                               
                                            </div>
                                            <div class="p_data">
                                                <p>Berat</p>
                                                <span>: 43 kg</span>                               
                                            </div>
                                            <div class="p_data">
                                                <i class='bx bx-user-circle'></i>
                                                <span>23 tahun</span>                               
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            <!-- detail pengasuh end -->
                                <div class="pengalaman">
                                    <h3>Pengalaman Kerja dan Magang</h3>
                                    <ol class="pengalaman-list">
                                        <li>Praktek RST Dr. Soedjono Magelang</li>
                                        <li>Praktek RSUD Hj. Anna Lasmanah Banjarnegara</li>
                                        <li>Praktek RS PKU Muhammadiyah Temanggung</li>
                                        <li>Praktek RSUD KRT. Setjonegoro</li>
                                    </ol>                            
                                </div>
                            </div>
                            <!-- pengasuh 1 end -->
                             <!-- pengasuh 2 start -->
                             <div class="pengasuh">
                                <div class="pengasuh_detail">
                                    <div class="pengasuh_img">
                                        <img src="{{asset('image/team25.jpg')}}" alt="">                                  
                                    </div>
                                    <div class="info_pengasuh">
                                        <h4>Wati Terina, S.KEP.</h4>
                                        <div class="p_profile">
                                            <div class="p_data">
                                                <i class='bx bx-first-aid'></i>
                                                <span>1 tahun</span>
                                            </div>
                                            <div class="p_data">
                                                <p>Tinggi</p>
                                                <span>: 160 cm</span>                               
                                            </div>
                                            <div class="p_data">
                                                <i class='bx bxs-graduation'></i>
                                                <span>S3 Keperawatan</span>                               
                                            </div>
                                            <div class="p_data">
                                                <p>Berat</p>
                                                <span>: 56 kg</span>                               
                                            </div>
                                            <div class="p_data">
                                                <i class='bx bx-user-circle'></i>
                                                <span>25 tahun</span>                               
                                            </div>
                                        </div>
                                    </div>                                
                                </div>
                                <div class="pengalaman">
                                    <h3>Pengalaman Kerja dan Magang</h3>
                                    <ol class="pengalaman-list">
                                        <li>Praktek di RS. Ibnu Sina Bojonegoro</li>
                                        <li>Praktek di RSUD Soegiri Lamongan</li>
                                        <li>Praktek di RSJD SOLO</li>
                                        <li>Praktek di PSTW (Panti Jompo) Magetan</li>
                                        <li>Praktek di RSUD Soeprapto Cepu</li>
                                    </ol>                            
                                </div>
                            </div>
                              <!-- pengasuh 2 end -->
                               <!-- pengasuh 3 start -->
                               <div class="pengasuh">
                                <div class="pengasuh_detail">
                                    <div class="pengasuh_img">
                                        <img src="{{asset('image/team26.jpeg')}}" alt="">                                   
                                    </div>
                                    <div class="info_pengasuh">
                                        <h4>Ningsih Soekartika</h4>
                                        <div class="p_profile">
                                            <div class="p_data">
                                                <i class='bx bx-first-aid'></i>
                                                <span>1 tahun</span>
                                            </div>
                                            <div class="p_data">
                                                <p>Tinggi</p>
                                                <span>: 166 cm</span>                               
                                            </div>
                                            <div class="p_data">
                                                <i class='bx bxs-graduation'></i>
                                                <span>SMK Kesehatan</span>                               
                                            </div>
                                            <div class="p_data">
                                                <p>Berat</p>
                                                <span>: 60 kg</span>                               
                                            </div>
                                            <div class="p_data">
                                                <i class='bx bx-user-circle'></i>
                                                <span>26 tahun</span>                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pengalaman">
                                    <h3>Pengalaman Kerja dan Magang</h3>
                                    <ol class="pengalaman-list">
                                        <li>Pengalaman Pelatihan di Insan Medika Academy selama 1 bulan</li>
                                        <li>Pengalaman PKL di UPT Tresna Werda Banyuwangi</li>
                                    </ol>                            
                                </div>
                            </div>
                                <!-- pengasuh 3 end -->
                                 <!-- pengasuh 4 start -->
                                 <div class="pengasuh">
                                    <div class="pengasuh_detail">
                                        <div class="pengasuh_img">
                                            <img src="{{asset('image/team27.jpg')}}" alt="">                                   
                                        </div>
                                        <div class="info_pengasuh">
                                            <h4>Mina Waryalani</h4>
                                            <div class="p_profile">
                                                <div class="p_data">
                                                    <i class='bx bx-first-aid'></i>
                                                    <span>1 tahun</span>
                                                </div>
                                                <div class="p_data">
                                                    <p>Tinggi</p>
                                                    <span>: 166 cm</span>                               
                                                </div>
                                                <div class="p_data">
                                                    <i class='bx bxs-graduation'></i>
                                                    <span>SMK Kesehatan</span>                               
                                                </div>
                                                <div class="p_data">
                                                    <p>Berat</p>
                                                    <span>: 60 kg</span>                               
                                                </div>
                                                <div class="p_data">
                                                    <i class='bx bx-user-circle'></i>
                                                    <span>26 tahun</span>                               
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pengalaman">
                                        <h3>Pengalaman Kerja dan Magang</h3>
                                        <ol class="pengalaman-list">
                                            <li>Pengalaman Pelatihan di Insan Medika Academy selama 1 bulan</li>
                                            <li>Pengalaman PKL di UPT Tresna Werda Banyuwangi</li>
                                        </ol>                            
                                    </div>
                                </div>
                                  <!-- pengasuh 4 end -->
                                   <!-- pengasuh 5 start -->
                                   <div class="pengasuh">
                                    <div class="pengasuh_detail">
                                        <div class="pengasuh_img">
                                            <img src="{{asset('image/team28.jpg')}}" alt="">                                   
                                        </div>
                                        <div class="info_pengasuh">
                                            <h4>Meriska Cut Riska</h4>
                                            <div class="p_profile">
                                                <div class="p_data">
                                                    <i class='bx bx-first-aid'></i>
                                                    <span>1 tahun</span>
                                                </div>
                                                <div class="p_data">
                                                    <p>Tinggi</p>
                                                    <span>: 166 cm</span>                               
                                                </div>
                                                <div class="p_data">
                                                    <i class='bx bxs-graduation'></i>
                                                    <span>SMK Kesehatan</span>                               
                                                </div>
                                                <div class="p_data">
                                                    <p>Berat</p>
                                                    <span>: 60 kg</span>                               
                                                </div>
                                                <div class="p_data">
                                                    <i class='bx bx-user-circle'></i>
                                                    <span>26 tahun</span>                               
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pengalaman">
                                        <h3>Pengalaman Kerja dan Magang</h3>
                                        <ol class="pengalaman-list">
                                            <li>Pengalaman Pelatihan di Insan Medika Academy selama 1 bulan</li>
                                            <li>Pengalaman PKL di UPT Tresna Werda Banyuwangi</li>
                                        </ol>                            
                                    </div>
                                </div>
                                    <!-- pengasuh 5 end -->
                                     <!-- pengasuh 6 start -->
                                   <div class="pengasuh">
                                    <div class="pengasuh_detail">
                                        <div class="pengasuh_img">
                                            <img src="{{asset('image/team29.jpg')}}" alt="">                                   
                                        </div>
                                        <div class="info_pengasuh">
                                            <h4>Hina Moroco</h4>
                                            <div class="p_profile">
                                                <div class="p_data">
                                                    <i class='bx bx-first-aid'></i>
                                                    <span>1 tahun</span>
                                                </div>
                                                <div class="p_data">
                                                    <p>Tinggi</p>
                                                    <span>: 166 cm</span>                               
                                                </div>
                                                <div class="p_data">
                                                    <i class='bx bxs-graduation'></i>
                                                    <span>SMK Kesehatan</span>                               
                                                </div>
                                                <div class="p_data">
                                                    <p>Berat</p>
                                                    <span>: 60 kg</span>                               
                                                </div>
                                                <div class="p_data">
                                                    <i class='bx bx-user-circle'></i>
                                                    <span>26 tahun</span>                               
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pengalaman">
                                        <h3>Pengalaman Kerja dan Magang</h3>
                                        <ol class="pengalaman-list">
                                            <li>Pengalaman Pelatihan di Insan Medika Academy selama 1 bulan</li>
                                            <li>Pengalaman PKL di UPT Tresna Werda Banyuwangi</li>
                                        </ol>                            
                                    </div>
                                </div>
                                    <!-- pengasuh 6 end -->
                        </div>
                    </div>
                </div> 
                <!-- content button tabs end -->
            </div>
            <!-- container end -->
        </div>
        <!-- section a end -->
         <!-- section b start -->
        <div class="sectionB">
            <!-- container start -->
            <div class="container">
                <!-- ulasan -->
                <div class="box1">
                    <p>Dengan <span>ulasan</span> sebanyak</p>
                    <h1>5/5</h1>
                </div>
                <!-- kontrak -->
                <div class="box2">
                    <p><span>Kontrak </span>yang sudah tercatat di <span>Sake</span> sebanyak</p>
                    <h1>200</h1>
                </div>
                <!-- maps start -->
                <div class="maps">
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.926965376636!2d106.76981497357647!3d-6.273334061408029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1a11fd2c69f%3A0x90a9a11d19a287a1!2sNanny%20Care%20ID%20%7C%20Nanny%20%26%20Babysitter%20Agency!5e0!3m2!1sid!2sid!4v1718973875809!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- detail maps start -->
                    <div class="detail">
                        <div class="icons">
                            <i class='bx bxs-location-plus' ></i> 
                            <span>Jl. Deplu Raya No. AR 34, RT.1/RW.5, Pd. Pinang, Kec. Kby. Lama, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12310</span>                       
                            <!-- <i data-feather="map-pin"></i> -->
                        </div>
                        <div class="icons">
                            <i class='bx bx-time-five'></i>
                            <span>09:00 - 17.00</span>
                            <!-- <i data-feather="clock"></i> -->
                        </div>
                        <div class="icons">
                            <i class='bx bx-message-rounded-dots'></i>
                            <span>02129125707</span>
                            <!-- <i data-feather="message-square"></i> -->
                        </div>
                    </div>
                    <!-- detail maps end -->
                </div>
                <!-- maps end -->
            </div>
            <!-- container end -->
            <!-- button kontrak start -->
            <!-- <div class="btn-box">
                <div class="btn" data-name="p1"> -->
                    <a href="akivitasAfter.html"><button class="btn">Unggah Kontrak</button></a>
                <!-- </div>
            </div> -->
             <!-- button kontrak end -->
        </div>
        <!-- section b end -->
       </div>
       <!-- content end -->
      <!-- footer start -->
      <div class="footer">
        <div class="desc"><a>Sayang Keluarga</a>
            <div class="text">Melalui platform kami, Anda dapat menemukan informasi lengkap mengenai setiap yayasan,
                termasuk reputasi, layanan yang disediakan, dan ulasan dari klien sebelumnya.</div>
        </div>
        <div class="explore"><a>Explore</a>
            <div class="footerLink">
                <a class="linkcontent" href="homepage.html">Beranda</a>
                <a class="linkcontent" href="">Yayasan</a>
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
                <img src="{{asset('image/mail.png')}}" alt="" class="mail">
                <div class="gmail" href="contact@sayangkeluarga@gmail.com">contact@sayangkeluarga@gmail.com</div>
            </div>
        </div>
        <div class="copyright">
            <img class="imgcopyr" src="{{asset('image/Line 2.png')}}" alt="">
            <a class="copyr">©2024</a>
            <a class="copyr">Terms of Service</a>
            <a class="copyr">Privacy Policy</a>
        </div>
    </div>
       <!-- footer end -->
</body>
</html>