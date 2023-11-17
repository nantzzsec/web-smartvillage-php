<?php
$koneksi = mysqli_connect("localhost", "root", "", "smartvillage");
if (isset($_POST['simpan'])) {
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $subject = mysqli_real_escape_string($koneksi, $_POST['subject']);
    $pesan = mysqli_real_escape_string($koneksi, $_POST['pesan']);

    $simpan = mysqli_query($koneksi, "INSERT INTO komentar_page VALUES('$nama','$email','$subject','$pesan')");

    if ($simpan) {
        echo "<script>window.alert('Data berhasil disimpan'); window.location='/smartvillage/index.php';</script>";
    } else {
        echo "<script>window.alert('Data Gagal disimpan'); window.location='/smartvillage/index.php';</script>";
    }
}
?>


<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Base</title>
    <meta name="description" content="Unika - Responsive One Page HTML5 Template">
    <meta name="keywords" content="HTML5, Bootsrtrap, One Page, Responsive, Template, Portfolio" />
    <meta name="author" content="imransdesign.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="inc/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="inc/animations/css/animate.min.css">
    <link rel="stylesheet" href="inc/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="inc/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="inc/owl-carousel/css/owl.theme.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/skin/cool-gray.css">

</head>

<body data-spy="scroll" data-target="#main-navbar">
    <div class="page-loader"></div>
    <div class="body">
        <header id="header" class="header-main">
            <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand page-scroll" href="index.html">Smart Village</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll" href="body">Home</a></li>
                            <li><a class="page-scroll" href="#about-section">News</a></li>
                            <li><a class="page-scroll" href="#portfolio-section">gallery</a></li>
                            <li><a class="page-scroll" href="#informasi-section">informasi</a></li>
                            <li><a class="page-scroll" href="#team-section">Team</a></li>
                            <li><a class="page-scroll" href="#contact-section">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/slider-bg.jpg);">
            <div class="container">
                <div class="caption text-center text-white" data-stellar-ratio="0.7">
                    <div id="owl-intro-text" class="owl-carousel">
                        <div class="item">
                            <h1>Mengelola Desa Lebih Mudah</h1>
                            <p>Penuhi Kebutuhan anda dengan berbagai solusi layanan digital dari smart village </p>
                            <div class="extra-space-l"></div>
                            <a class="btn btn-blank" href="/smartvillage/form.php" target="_blank" role="button">COBA LAYANAN</a>
                        </div>
                        <div class="item">
                            <h1>Lihat Statistik Penduduk?</h1>
                            <p>Statistik Penduduk Di Salah Satu Desa</p>
                            <div class="extra-space-l"></div>
                            <a class="btn btn-blank" href="/smartvillage/js/index.php" target="_blank" role="button">LIHAT STATISTIK PENDUDUK</a>
                        </div>
                        <div class="item">
                            <h1>Smart Village</h1>
                            <p>Lebih Mudah Dan menyenangkan</p>
                            <div class="extra-space-l"></div>
                            <a class="btn btn-blank" href="/smartvillage/form.php" target="_blank" role="button">COBA LAYANAN</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about-section" class="page bg-style1">
            <div class="page-header-wrapper">
                <div class="container">
                    <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                        <h2>NEWS</h2>
                        <div class="devider"></div>
                        <p class="subtitle">Information</p>
                    </div>
                </div>
            </div>
            <div class="rotate-box-1-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <a href="berita/smart_goverment.php" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0">
                                <span class="rotate-box-icon"><i class="fa fa-university"></i></span>
                                <div class="rotate-box-info">
                                    <h4>Smart Goverment</h4>
                                    <p>Akses ke semua layanan untuk proses administrasi dan pelayanan publik yang lebih efisien.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="berita/smart_economy.php" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.2s">
                                <span class="rotate-box-icon"><i class="fa fa-suitcase"></i></span>
                                <div class="rotate-box-info">
                                    <h4>Smart Economy</h4>
                                    <p>Kemudahan akses untuk memasarkan berbagai produk unggulan desa.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="berita/smart_society.php" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.4s">
                                <span class="rotate-box-icon"><i class="fa fa-users"></i></span>
                                <div class="rotate-box-info">
                                    <h4>Smart Society</h4>
                                    <p>Kemudahan akses layanan sosial untuk meningkatkan kualitas warga desa.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="berita/infrastructure.php" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.6s">
                                <span class="rotate-box-icon"><i class="fa fa-train"></i></span>
                                <div class="rotate-box-info">
                                    <h4>Infrastructure</h4>
                                    <p>pengelolaan fasilitas pendukung desa agar terjaga dan tepat guna.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="rotate-box-2-wrapper">
            <div class="container">
                <div class="extra-space-l"></div>
                <div class="text-center">
                    <a class="btn btn-default btn-lg-xl" href="/smartvillage/data-statistik-penduduk/index.php" target="_blank" role="button">Lihat Statistik Penduduk</a>
                </div>
            </div>
        </div>
        <div class="extra-space-l"></div>
        <hr size="10px">
        </section>


        <section id="portfolio-section" class="page bg-style1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="portfolio">
                            <div class="page-header-wrapper">
                                <div class="container">
                                    <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                        <h2>gallery</h2>
                                        <div class="devider"></div>
                                        <p class="subtitle">What we are proud of</p>
                                    </div>
                                </div>
                            </div>
                            <div class="portfoloi_content_area">
                                <div class="portfolio_content">
                                    <div class="row" id="portfolio">
                                        <div class="col-xs-12 col-sm-4 appsDevelopment">
                                            <div class="portfolio_single_content">
                                                <img src="img/portfolio/p1.jpg" alt="title" />
                                                <div>
                                                    <a class="btn btn-blank" href="gambar-berita/desapintar.php" target="_blank" role="button">Selengkapnya</a>
                                                    <span>
                                                        <h4>Desa Pintar </h4>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 GraphicDesign">
                                            <div class="portfolio_single_content">
                                                <img src="img/portfolio/p2.jpg" alt="title" />
                                                <div>
                                                    <a class="btn btn-blank" href="gambar-berita/teknologidaninovasi.php" target="_blank" role="button">Selengkapnya</a>
                                                    <span>
                                                        <h4>Teknologi Dan Inovasi</h4>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 responsive">
                                            <div class="portfolio_single_content">
                                                <img src="img/portfolio/p3.jpg" alt="title" />
                                                <div>
                                                    <a class="btn btn-blank" href="gambar-berita/pertanianmodern.php" target="_blank" role="button">Selengkapnya</a>
                                                    <span>
                                                        <h4>Pertanian Modern</h4>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 webDesign websites">
                                            <div class="portfolio_single_content">
                                                <img src="img/portfolio/p4.jpg" alt="title" />
                                                <div>
                                                    <a class="btn btn-blank" href="gambar-berita/konseppengembangan.php" target="_blank" role="button">Selengkapnya</a>
                                                    <span>
                                                        <h4>Konsep Pengembangan Desa</h4>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 appsDevelopment websites">
                                            <div class="portfolio_single_content">
                                                <img src="img//portfolio/p5.jpg" alt="title" />
                                                <div>
                                                    <a class="btn btn-blank" href="gambar-berita/teknologimaju.php" target="_blank" role="button">Selengkapnya</a>
                                                    <span>
                                                        <h4>Teknologi Maju</h4>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 GraphicDesign">
                                            <div class="portfolio_single_content">
                                                <img src="img/portfolio/p6.jpg" alt="title" />
                                                <div>
                                                    <a class="btn btn-blank" href="gambar-berita/transformasidigitaldesa.php" target="_blank" role="button">Selengkapnya</a>
                                                    <span>
                                                        <h4>Transformasi Digital Desa</h4>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 responsive">
                                            <div class="portfolio_single_content">
                                                <img src="img/portfolio/p7.jpg" alt="title" />
                                                <div>
                                                    <a class="btn btn-blank" href="gambar-berita/desawisatatanahhijau.php" target="_blank" role="button">Selengkapnya</a>
                                                    <span>
                                                        <h4>Desa Wisata</h4>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 GraphicDesign">
                                            <div class="portfolio_single_content">
                                                <img src="img/portfolio/p8.jpg" alt="title" />
                                                <div>
                                                    <a class="btn btn-blank" href="gambar-berita/pengelolaanpemerintah.php" target="_blank" role="button">Selengkapnya</a>
                                                    <span>
                                                        <h4>Pengelolaan Pemerintah</h4>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 websites">
                                            <div class="portfolio_single_content">
                                                <img src="img/portfolio/p9.jpg" alt="title" />
                                                <div>
                                                    <a class="btn btn-blank" href="gambar-berita/membukajendelabaru.php" target="_blank" role="button">Selengkapnya</a>
                                                    <span>
                                                        <h4>Menuju Desa Unggul</h4>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="informasi-section" class="page bg-style1">
            <div class="page-header-wrapper">
                <div class="container">
                    <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                        <h2>INFORMASI SMART VILLAGE</h2>
                        <div class="devider"></div>
                        <p class="subtitle">Information</p>
                    </div>
                </div>
            </div>
            <div class="rotate-box-2-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <a href="" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                <span class="rotate-box-icon"><i class="fa fa-globe"></i></span>
                                <div class="rotate-box-info">
                                    <h4>Peningkatan Ekonomi & Ketahanan Pangan Desa</h4>
                                    <p>Membantu proses pemasaran produk unggulan serta mengoptimalisasi pendapatan desa melalui evaluasi kegiatan desa.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                <span class="rotate-box-icon"><i class="fa fa-pie-chart"></i></span>
                                <div class="rotate-box-info">
                                    <h4>Peningkatan Pemerdayaan Masyarakat Desa</h4>
                                    <p>Meningkatkan pemberdayaan kehidupan masyarakat desa melalui solusi layanan digital di bidang pendidikan, kesehatan, keamanan, dan kenyamanan warga.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                <span class="rotate-box-icon"><i class="fa fa-home"></i></span>
                                <div class="rotate-box-info">
                                    <h4>Tata Kelola Pemerintahan Desa Yang Efektif Dan Efisien</h4>
                                    <p>Meningkatkan efisiensi proses pelayanan pemerintahan dan masyarakat desa serta mendorong kolaborasi dua arah sehingga dapat meningkatkan partisipasi warga.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                <span class="rotate-box-icon"><i class="fa fa-cloud"></i></span>
                                <div class="rotate-box-info">
                                    <h4>Integrasi Data Level Desa</h4>
                                    <p>Membantu pengelolaan data desa secara terpusat dan terintegrasi.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="extra-space-l"></div>
            <hr size="10px">
        </section>

        <section id="counter-section">
            <div id="counter-up-trigger" class="counter-up text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/counter-bg.jpg);">
                <div class="cover"></div>
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2></h2>
                            <div class="devider"></div>
                            <p class="subtitle"></p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="fact text-center col-md-3 col-sm-6">
                            <div class="fact-inner">
                                <i class="fa fa-users fa-3x"></i>
                                <div class="extra-space-l"></div>
                                <span class="counter">6745</span>
                                <p class="lead">Desa Terdigitalisasi</p>
                            </div>
                        </div>
                        <div class="fact text-center col-md-3 col-sm-6">
                            <div class="fact-inner">
                                <i class="fa fa-leaf fa-3x"></i>
                                <div class="extra-space-l"></div>
                                <span class="counter">15</span>
                                <p class="lead">Sebaran Provinsi</p>
                            </div>
                        </div>
                        <div class="fact text-center col-md-3 col-sm-6">
                            <div class="fact-inner">
                                <i class="fa fa-trophy fa-3x"></i>
                                <div class="extra-space-l"></div>
                                <span class="counter">55</span>
                                <p class="lead">Warga Desa Tergabung</p>
                            </div>
                        </div>
                        <div class="fact last text-center col-md-3 col-sm-6">
                            <div class="fact-inner">
                                <i class="fa fa-coffee fa-3x"></i>
                                <div class="extra-space-l"></div>
                                <span class="counter">8888</span>
                                <p class="lead">Transaksi UMKM dan MitraBumdes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="team-section" class="page">
            <div class="page-header-wrapper">
                <div class="container">
                    <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                        <h2>Our Team</h2>
                        <div class="devider"></div>
                        <p class="subtitle">Meet our experts</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="team-items">
                        <div class="col-md-2">
                            <div class="team-container wow bounceIn" data-wow-delay="0.2s">
                                <div class="team-item">
                                    <div class="team-triangle">
                                        <div class="content">
                                            <img src="img/team/2.jpg" alt="title"/>
                                            <div class="team-hover text-center">
                                                <li> <a href="https://www.instagram.com/gede.ananda_24"><span class="rotate-box-icon"><i class="fa fa-instagram"></i></span></a></li>
                                                <p>Gede Ananda</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="team-container wow bounceIn" data-wow-delay="0.3s">
                                <div class="team-item">
                                    <div class="team-triangle">
                                        <div class="content">
                                            <img src="img/team/4.jpg" alt="title" />
                                            <div class="team-hover text-center">
                                                <li> <a href="https://www.instagram.com/_kocuu"><span class="rotate-box-icon"><i class="fa fa-instagram"></i></span></a></li>
                                                <p>Ryan Satria Pratama</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="team-container wow bounceIn" data-wow-delay="0.4s">
                                <div class="team-item">
                                    <div class="team-triangle">
                                        <div class="content">
                                            <img src="img/team/3.jpg" alt="title" />
                                            <div class="team-hover text-center">
                                                <li> <a href="https://www.instagram.com/valenpatrice"><span class="rotate-box-icon"><i class="fa fa-instagram"></i></span></a></li>
                                                <p>Valencia Patrice </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="team-container wow bounceIn" data-wow-delay="0.5s">
                                <div class="team-item">
                                    <div class="team-triangle">
                                        <div class="content">
                                            <img src="img/team/5.jpg" alt="title" />
                                            <div class="team-hover text-center">
                                                <li> <a href="https://www.instagram.com/__syifaz"><span class="rotate-box-icon"><i class="fa fa-instagram"></i></span></a></li>
                                                <p>Syifa Azzahra</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="team-container wow bounceIn" data-wow-delay="0.6s">
                                <div class="team-item">
                                    <div class="team-triangle">
                                        <div class="content">
                                            <img src="img/team/6.jpg" alt="title" />
                                            <div class="team-hover text-center">
                                                <li> <a href="https://www.instagram.com/nikenamndaa"><span class="rotate-box-icon"><i class="fa fa-instagram"></i></span></a></li>
                                                <p>Niken Amanda</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="prices-section" class="page">
            <div class="page-header-wrapper">
                <div class="container">
                    <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                        <h2>END PAGE</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact-section" class="page text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/map-bg.jpg);">
            <div class="cover"></div>
            <div class="page-header-wrapper">
                <div class="container">
                    <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                        <h2>Contacts</h2>
                        <div class="devider"></div>
                        <p class="subtitle">All to contact us</p>
                    </div>
                </div>
            </div>
            <div class="contact wow bounceInRight" data-wow-delay="0.4s">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contact-info">
                                <h4>Our Address</h4>
                                <ul class="contact-address">
                                    <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; Perumahan, Desa Sumbernadi, Kecamatan Ketapang <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lampung selatan,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lampung, Indonesia</li>
                                    <li><i class="fa fa-phone"></i>&nbsp; +62 85896873540</li>
                                    <li><i class="fa fa-print"></i>&nbsp; +62 85896873540</li>
                                    <li><i class="fa fa-envelope"></i> gedeananda003@gmail.com</li>
                                    <li><i class="fa fa-skype"></i> NantzzSecurity</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="contact-form">
                                <h4>Write to us</h4>
                                <form role="form" method="post">
                                    <div class="form-group">
                                        <input type="text" name="nama" class="form-control input-lg" placeholder="Your Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control input-lg" placeholder="E-mail" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control input-lg" placeholder="Subject" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="pesan" class="form-control input-lg" rows="5" placeholder="Message" required></textarea>
                                    </div>
                                    <button type="submit" name="simpan" class="btn wow bounceInRight" data-wow-delay="0.8s">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="text-off-white">
            <div class="footer-top">
                <div class="container">
                    <div class="row wow bounceInLeft" data-wow-delay="0.4s">
                        <div class="col-sm-12 col-md-4">
                            <h4>Recent Instagram</h4>
                            <div class="single-tweet">
                                <div class="tweet-content"><span>@gede.ananda_24</span> Excepteur sint occaecat cupidatat non proident</div>
                                <div class="tweet-date">1 Hour ago</div>
                            </div>
                            <div class="single-tweet">
                                <div class="tweet-content"><span>@gede.ananda_24</span> Excepteur sint occaecat cupidatat non proident uku shumaru</div>
                                <div class="tweet-date">1 Hour ago</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
                    <p class="copyright">Copyright 2023 - Designed By <a href="https://www.instagram.com/gede.ananda_24" class="theme-author">Gede Ananda</a> &amp; Developed by <a href="http://www.instagram.com/gede.ananda_24" class="theme-author">NantzzSecurity</a></p>
                </div>
            </div>
        </footer>
        <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a>
    </div>

    <script src="inc/jquery/jquery-1.11.1.min.js"></script>
    <script src="inc/bootstrap/js/bootstrap.min.js"></script>
    <script src="inc/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="inc/stellar/js/jquery.stellar.min.js"></script>
    <script src="inc/animations/js/wow.min.js"></script>
    <script src="inc/waypoints.min.js"></script>
    <script src="inc/isotope.pkgd.min.js"></script>
    <script src="inc/classie.js"></script>
    <script src="inc/jquery.easing.min.js"></script>
    <script src="inc/jquery.counterup.min.js"></script>
    <script src="inc/smoothscroll.js"></script>

    <script src="js/theme.js"></script>

</body>


</html>