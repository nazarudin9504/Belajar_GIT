<!DOCTYPE html>
<html>
    <title>Tugas 2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <link rel="stylesheet" href="https:/www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mooli&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html,body,h1,h2,h3,h4,h5,h6,header {font-family: "Roboto", sans-serif}
        .w3-display-bottomleft h2 {color: white;}
        body {
            background-image: url('data:image/jpeg;base64,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');
            background-size: cover; /* Untuk mengisi seluruh latar belakang */
            background-repeat: no-repeat; /* Agar gambar tidak diulang */
            background-attachment: fixed; /* Agar gambar latar belakang tetap pada tempatnya saat digulir */
        }
    </style>
    <body class="w3-light-grey">
        <header class="w3-container w3-green w3-margin-bottom" style="font-size: larger;">
            <p><b>Tugas Praktikum Pemrograman Web Dasar 2</b></p>
            <p>Nama : Nazarudin</p>
            <p>NIM : H1101221005</p>
        </header>

        <!--Page Container-->
        <div class="w3-content w3-margin-top" style="max-width:1400px;">
            <!--The Grid-->
            <div class="w3-row-padding">
                <!--Left Column-->
                <div class="w3-third">
                    <div class="w3-white w3-text-grey w3-card-4">
                        <div class="w3-display-container">
                            <img src="https://matrix.hmsifmipauntan.com/img/H1101221005.png" style="width:100%" alt="Avatar">
                            <div class="w3-display-bottomleft w3-container w3-text-black">
                                <h2><b>Nazarudin</b></h2>
                            </div>
                        </div>
                        <div class="w3-container">
                            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-green"></i>Designer</p>
                            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-green"></i>Sambas, Kalimantan Barat</p>
                            <p><i class="fa fa-envelope fa- fw w3-margin-right w3-large w3-text-green"></i> h1101221005@student.untan.ac.id</p>
                            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-green"></i>081251273413</p>
                            <hr>
                    
                            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-green"></i>Skills</b></p>
                            <p>Adobe Photoshop</p>
                            <div class="w3-light-grey w3-round-xlarge w3-small">
                                <div class="w3-container w3-center w3-round-xlarge w3-green" style="width:90%">90%</div>
                            </div>
                            <p>Photography</p>
                            <div class="w3-light-grey w3-round-xlarge w3-small">
                                <div class="w3-container w3-center w3-round-xlarge w3-green" style="width:80%">
                                    <div class="w3-center s3-text-white">80%</div>
                                </div>
                            </div>
                            <p>CORELDraw</p>
                            <div class="w3-light-grey w3-round-xlarge w3-small">
                                <div class="w3-container w3-center w3-round-xlarge w3-green" style="width:85%">85%</div>
                            </div>
                            <p>Adobe Premiere Pro</p>
                            <div class="w3-light-grey w3-round-xlarge w3-small">
                                <div class="w3-container w3-center w3-round-xlarge w3-green" style="width:78%">78%</div>
                            </div>
                            <br>
                            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-green"></i>Bahasa</b></p>
                            <p>Indonesia</p>
                            <div class="w3-light-grey w3-round-xlarge">
                                <div class="w3-round-xlarge w3-green" style="height:24px;width:100%"></div>
                            </div>
                            <p>Melayu</p>
                            <div class="w3-light-grey w3-round-xlarge">
                                <div class="w3-round-xlarge w3-green" style="height:24px;width:90%"></div>
                            </div>
                            <p>Inggris</p>
                            <div class="w3-light-grey w3-round-xlarge">
                                <div class="w3-round-xlarge w3-green" style="height:24px;width:80%"></div>
                            </div>
                            <br>
                            <p class="w3-large"><b><i class="fa fa-code fa-fw w3-margin-right w3-text-green"></i>Bahasa Pemrograman</b></p>
                            <p>Python</p>
                            <div class="w3-light-grey w3-round-xlarge w3-small">
                                <div class="w3-container w3-center w3-round-xlarge w3-green" style="width:90%">90%</div>
                            </div>
                            <p>PHP</p>
                            <div class="w3-light-grey w3-round-xlarge w3-small">
                                <div class="w3-container w3-center w3-round-xlarge w3-green" style="width:60%">
                                    <div class="w3-center s3-text-white">60%</div>
                                </div>
                            </div>
                            <p>HTML</p>
                            <div class="w3-light-grey w3-round-xlarge w3-small">
                                <div class="w3-container w3-center w3-round-xlarge w3-green" style="width:75%">75%</div>
                            </div>
                            <br>
                        </div>
                    </div><br>
                <!--End Left Column-->
                </div>  

                <!--Right Column-->
                <div class="w3-twothird">
                    <div class="w3-container w3-card w3-white w3-margin-bottom">
                        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-green"></i>Pengalaman Kerja</h2>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Desain Grafis</b></h5>
                            <h6 class="w3-text-green"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2009 - <span class="w3-tag w3-green w3-round">Sekarang</span></h6>
                            <p>Saya memiliki pengalaman yang luas dalam bidang desain grafis selama lebih dari lima tahun. Selama periode ini, saya telah bekerja di berbagai perusahaan dan proyek yang memungkinkan saya untuk mengembangkan keterampilan desain grafis saya secara signifikan.</p>
                            <hr>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Photo Editor</b></h5>
                            <h6 class="w3-text-green"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2012 - <span class="w3-tag w3-green w3-round">Sekarang</span></h6>
                            <p>Sebagai seorang photo editor dengan pengalaman lebih dari tiga tahun, saya telah bekerja di berbagai lingkungan dan proyek yang menuntut presisi, kreativitas, dan pemahaman mendalam tentang editing foto.</p>
                            <hr>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Tutor</b></h5>
                            <h6 class="w3-text-green"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2016 - 2020</span></h6>
                            <p>Saya telah mengajar sebagai tutor selama lima tahun di berbagai konteks, dari tingkat sekolah menengah hingga perguruan tinggi. Pengalaman ini memberi saya kesempatan untuk berinteraksi dengan berbagai siswa dan mahasiswa, dan saya sangat menikmati memberikan bantuan dalam pembelajaran mereka.</p>
                            <hr>
                        </div>
                    </div>

                    <div class="w3-container w3-card w3-white">
                        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-green"></i>Pendidikan</h2>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Sekolah Dasar</b></h5>
                            <h6 class="w3-text-green"><i class="fa fa-calendar fa-fw w3-margin-right"></i>SDN Negeri 08 Semperiuk B</h6>
                            <p>SDN 08 Semperiuk B adalah tahap pertama dalam pendidikan formal. Sekolah ini memiliki peran penting dalam pembentukan dasar pengetahuan dan keterampilan saya.</p>
                            <hr>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Sekolah Menengah Pertama</b></h5>
                            <h6 class="w3-text-green"><i class="fa fa-calendar fa-fw w3-margin-right"></i>SMPN 03 Jawai Selatan</h6>
                            <p>SMPN 03 Jawai Selatan adalah tahap berikutnya dalam pendidikan. Ini adalah saat di mana saya memperdalam pengetahuan dan keterampilan saya.</p>
                            <hr>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Sekolah Menengah Atas</b></h5>
                            <h6 class="w3-text-green"><i class="fa fa-calendar fa-fw w3-margin-right"></i>SMAN 01 Jawai Selatan</h6>
                            <p>SMAN 01 Jawai Selatan adalah tingkat pendidikan yang lebih tinggi yang mempersiapkan saya untuk pendidikan tingkat lebih lanjut atau masuk ke dunia kerja.</p>
                            <hr>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Perguruan Tinggi</b></h5>
                            <h6 class="w3-text-green"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Universitas Tanjungpura</h6>
                            <p>Universitas Tanjungpura adalah tahap tertinggi dalam pendidikan tinggi. Disini saya mengambil program studi Sistem Informasi</p>
                            <hr>
                        </div>
                    </div>
                <!--End Right Column-->
                </div>      
            <!--End Grid-->
            </div>
        <!--End Page Container-->
        </div>

        <footer class="w3-container w3-green w3-center w3-margin-top">
            <p>Media Sosial</p>
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-whatsapp w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <p>Tugas PWD : Copyright by badoystudio.com <a href="https://www/w3schools.com/w3css/default/asp" target="_blank">w3.css</a></p>
        </footer>

    </body>
</html>