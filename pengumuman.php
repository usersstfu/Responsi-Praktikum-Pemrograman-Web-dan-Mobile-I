<?php
require 'function.php';
$id = $_GET["id"];
$umumkan = query("SELECT * FROM umumkan where id=$id")[0];
$pengumuman_baru = array_reverse($umumkan);
?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
   ================================================== -->
    <meta charset="utf-8">
    <title>Pengumuman - TheSIX</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
   ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">


    <!-- script
   ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
	================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

    <!-- header 
   ================================================== -->
    <header class="short-header">

        <div class="gradient-block"></div>

        <div class="row header-content">

            <div class="logo">
                <a href="index.html">Author</a>
            </div>

            <nav id="main-nav-wrap">
                <ul class="main-navigation sf-menu">
                    <li><a href="index.html" title="">Home</a></li>
                    <li class="has-children">
                        <a href="cat-ber.html" title="">Berita</a>
                        <ul class="sub-menu">
                            <li><a href="berita-panas.html">Berita Terpanas Hari Ini</a></li>
                            <li><a href="seputar-teknologi.html">Seputar Teknologi</a></li>
                            <li><a href="seputar-olahraga.html">Seputar Olahraga</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="cat-pro.html" title="">Profil</a>
                        <ul class="sub-menu">
                            <li><a href="visi-misi.html">Visi dan Misi</a></li>
                            <li><a href="sejarah.html">Sejarah</a></li>
                            <li><a href="dokumentasi.html">Dokumentasi</a></li>
                        </ul>
                    </li>
                    <li class="has-children current">
                        <a href="cat-peng.php" title="">Pengumuman</a>
                        <ul class="sub-menu">
                            <li><a href="cat-peng.php">List Pengumuman</a></li>
                            <li><a href="login-page.php">Sunting Pengumuman
                                </a></li>
                        </ul>
                </ul>
            </nav> <!-- end main-nav-wrap -->
            </nav> <!-- end main-nav-wrap -->
    </header> <!-- end header -->


    <!-- page header
   ================================================== -->
    <section id="page-header">
        <div class="row current-cat">
            <div class="col-full">
                <h1>Pengumuman</h1>
            </div>
        </div>
    </section>


    <!-- masonry
   ================================================== -->
    <section id="content-wrap" class="blog-single">
        <div class="row">
            <div class="col-twelve">

                <article class="format-standard">
                    <h1 class="page-title"><?php echo $umumkan["judul"]; ?></h1>
                    <p><?php echo $umumkan["isi"]; ?> </p>
                    <footer>
                        <div class="footer-main">
                            <div class="row">
                                <div class="col-four tab-full mob-full footer-info">
                                    <h4>About Our Site</h4>
                                    <p>
                                        Website ini berisikan berita ngawur dan agak ngehayal sebenarnya, profilnya juga agak mengada-ada tapi visi dan misinya serius loh kak.
                                    </p>
                                </div>

                            </div> <!-- end row -->
                        </div> <!-- end footer-main -->

                        <div class="footer-bottom">
                            <div class="row">

                                <div class="col-twelve">
                                    <div class="copyright">
                                        <span>© Copyright TheSIX 2022</span>
                                        <span>Design by <a href="">TheSIX</a></span>
                                    </div>

                                    <div id="go-top">
                                        <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon icon-arrow-up"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- end footer-bottom -->

                    </footer>

                    <div id="preloader">
                        <div id="loader"></div>
                    </div>

                    <!-- Java Script
                    ================================================== -->
                    <script src="js/jquery-2.1.3.min.js"></script>
                    <script src="js/plugins.js"></script>
                    <script src="js/jquery.appear.js"></script>
                    <script src="js/main.js"></script>

</body>

</html>