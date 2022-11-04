<?php
session_start();
include('assets/includes/config.php');
$page = 'home';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TKJ SMK N1 BANTUL</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Logo-removebg-preview.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/index.css" rel="stylesheet">



</head>

<body class="selection:bg-slate-600 selection:text-white">

  <!-- ======= Top Bar ======= -->


  <!-- ======= Header ======= -->
  <?php include('assets/includes/header.php'); ?>
  <!-- End Header -->


  <!-- ***** Main Banner Area Start ***** -->
  <div class="main-banner" id="top">
    <video autoplay muted loop id="bg-video">
      <source src="assets/img/Video/vidio3.mp4" type="">
    </video>

    <div class="video-overlay header-text">
      <div class="caption">
        <h6>Kuasai teknologi, maka dunia akan menyambut kita dengan bangga</h6>
        <h2 class="">
          <span class="box"></span><span class='hi'>SELAMAT DATANG DI <br><span class="kelas">Teknik Komputer Jaringan</span> </span>
          <hr><span class="text"></span><span class="cursor">_</span>
        </h2>
        <div class="main-button scroll-to-section">
          <a href="#about" class=" animate__animated animate__fadeInUp scrollto">PELAJARI LEBIH
            LANJUT</a>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->

  <!--<main id="main">

  <section id="recent-blog-posts" class="recent-blog-posts">
  
    <div class="" data-aos="fade-up">
    
      <div class=" section-title">
        <h2>Sekilas Berita</h2>
      </div>
      <?php
      if (isset($_GET['pageno'])) {
        $pageno = $_GET['pageno'];
      } else {
        $pageno = 1;
      }
      $no_of_records_per_page = 1;
      $offset = ($pageno - 1) * $no_of_records_per_page;


      $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
      $result = mysqli_query($con, $total_pages_sql);
      $total_rows = mysqli_fetch_array($result)[0];
      $total_pages = ceil($total_rows / $no_of_records_per_page);


      $query = mysqli_query($con, "select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.postedBy,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
      while ($row = mysqli_fetch_array($query)) {
      ?>
      <div class="owl-carousel">

        <div class="col-xs-12 col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="post-item card mb-4 shadow-sm position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="assets/admin/postimages/<?php echo htmlentities($row['PostImage']); ?>" class="img-fluid" alt="">
              <span class="post-date"><?php echo htmlentities($row['postingdate']); ?></span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title"><?php echo htmlentities($row['posttitle']); ?></h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2"><?php echo htmlentities($row['postedBy']) ?></span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2"><?php echo htmlentities($row['category']) ?></span>
                </div>
              </div>

              <hr>

              <a href="news-details?nid=<?php echo htmlentities($row['pid']) ?>" class="readmore stretched-link"><span>Read More</span><i
                  class="bi bi-arrow-right"></i></a>

            </div>
          </div>


        </div>

        <?php } ?>

        

      </div>
-->
  </div>
  </div>
  </section>
  <!-- End Tentang berita -->
  <!-- ======= Penjelasan TKJ ======= -->
  <section id="about" class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2 gambarcon" data-aos="fade-left">
          <img src="assets/img/TKJ-1.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
          <h3>Pengertian <b>TKJ</b> (Teknik Komputer dan Jaringan)</h3>
          <p class="fst-italic mt-2">
            TKJ (Teknik Komputer dan Jaringan) adalah ilmu berbasis Teknologi Informasi dan Komunikasi terkait
            kemampuan algoritma, dan pemrograman komputer, perakitan komputer, perakitan jaringan komputer, dan
            pengoperasian perangkat lunak, dan internet. Teknik komputer, dan jaringan juga membutuhkan pemahaman di
            bidang teknik listrik, dan ilmu komputer sehingga mampu mengembangkan, dan mengintegrasikan perangkat
            lunak, dan perangkat keras.
          </p>
          <h3 class="mt-4">Pekerjaan Yang Cocok Dengan Jurusan <b>TKJ</b> </h3>
          <ul>
            <li><i class="bi bi-check-circle"></i> Jaringan nirkabel</li>
            <li><i class="bi bi-check-circle"></i> Administrator server</li>
            <li><i class="bi bi-check-circle"></i> Integrator komputer</li>
            <li><i class="bi bi-check-circle"></i> Integrator VOIP</li>
            <li><i class="bi bi-check-circle"></i> Administrator Linux</li>
          </ul>

        </div>
      </div>

    </div>
  </section><!-- End Pengertian TKJ -->

  <!-- ======= Sponsor TKJ ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="zoom-in">

      <div class="row d-flex align-items-center">

        <div class="col-lg-2 col-md-4 col-6">
          <a href="https://www.telkom.co.id/sites"><img src="assets/img/Sponsor/LogoTelkom-removebg-preview.png" class="img-fluid" alt=""></a>

        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <img src="assets/img/Sponsor/LogoTenda.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <img src="assets/img/Sponsor/TPLINK_Logo_2.svg" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <img src="assets/img/Sponsor/intel-logo-baru-4-removebg-preview.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <img src="assets/img/Sponsor/LogoDCi.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <img src="assets/img/Sponsor/Asus-Logo.png" class="img-fluid" alt="">
        </div>

      </div>

    </div>
  </section><!-- End Sponsor TKJ -->

  <!-- ======= Data TKJ ======= -->
  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="section-title">
        <h2>Data Tentang TKJ</h2>
      </div>

      <div class="row counters">

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
          <p>Jumlah Kelas</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="210" data-purecounter-duration="1" class="purecounter"></span>
          <p>Jumlah Siswa</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
          <p>Jumlah Guru Produktif</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
          <p>Jumlah Lab</p>
        </div>

      </div>

    </div>

    </div>
  </section><!-- End Data TKJ -->

  <!-- ======= Skills yang di kembangkan ======= -->
  <section id="skills" class="skills bg-gray-100">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Skills</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
          consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
          in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">Hadrware Komputer <i class="val">50%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Software Computer <i class="val">60%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Jaringan<i class="val">75%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">Ciso<i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Microtik<i class="val">5%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Server<i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>

        </div>

      </div>
  </section>
  <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
        <stop stop-color="rgba(229.553, 229.553, 229.553, 1)" offset="0%"></stop>
        <stop stop-color="rgba(218.169, 218.169, 218.169, 1)" offset="100%"></stop>
      </linearGradient>
    </defs>
    <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,40L48,53.3C96,67,192,93,288,93.3C384,93,480,67,576,60C672,53,768,67,864,73.3C960,80,1056,80,1152,66.7C1248,53,1344,27,1440,30C1536,33,1632,67,1728,90C1824,113,1920,127,2016,110C2112,93,2208,47,2304,40C2400,33,2496,67,2592,83.3C2688,100,2784,100,2880,103.3C2976,107,3072,113,3168,116.7C3264,120,3360,120,3456,126.7C3552,133,3648,147,3744,156.7C3840,167,3936,173,4032,160C4128,147,4224,113,4320,110C4416,107,4512,133,4608,120C4704,107,4800,53,4896,33.3C4992,13,5088,27,5184,56.7C5280,87,5376,133,5472,140C5568,147,5664,113,5760,113.3C5856,113,5952,147,6048,160C6144,173,6240,167,6336,143.3C6432,120,6528,80,6624,63.3C6720,47,6816,53,6864,56.7L6912,60L6912,200L6864,200C6816,200,6720,200,6624,200C6528,200,6432,200,6336,200C6240,200,6144,200,6048,200C5952,200,5856,200,5760,200C5664,200,5568,200,5472,200C5376,200,5280,200,5184,200C5088,200,4992,200,4896,200C4800,200,4704,200,4608,200C4512,200,4416,200,4320,200C4224,200,4128,200,4032,200C3936,200,3840,200,3744,200C3648,200,3552,200,3456,200C3360,200,3264,200,3168,200C3072,200,2976,200,2880,200C2784,200,2688,200,2592,200C2496,200,2400,200,2304,200C2208,200,2112,200,2016,200C1920,200,1824,200,1728,200C1632,200,1536,200,1440,200C1344,200,1248,200,1152,200C1056,200,960,200,864,200C768,200,672,200,576,200C480,200,384,200,288,200C192,200,96,200,48,200L0,200Z"></path>
    <defs>
      <linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0">
        <stop stop-color="rgba(243, 244, 246, 1)" offset="0%"></stop>
        <stop stop-color="rgba(243, 244, 246, 1)" offset="100%"></stop>
      </linearGradient>
    </defs>
    <path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,180L48,176.7C96,173,192,167,288,136.7C384,107,480,53,576,40C672,27,768,53,864,63.3C960,73,1056,67,1152,60C1248,53,1344,47,1440,60C1536,73,1632,107,1728,116.7C1824,127,1920,113,2016,93.3C2112,73,2208,47,2304,50C2400,53,2496,87,2592,93.3C2688,100,2784,80,2880,86.7C2976,93,3072,127,3168,120C3264,113,3360,67,3456,66.7C3552,67,3648,113,3744,113.3C3840,113,3936,67,4032,56.7C4128,47,4224,73,4320,93.3C4416,113,4512,127,4608,140C4704,153,4800,167,4896,163.3C4992,160,5088,140,5184,113.3C5280,87,5376,53,5472,43.3C5568,33,5664,47,5760,53.3C5856,60,5952,60,6048,50C6144,40,6240,20,6336,40C6432,60,6528,120,6624,140C6720,160,6816,140,6864,130L6912,120L6912,200L6864,200C6816,200,6720,200,6624,200C6528,200,6432,200,6336,200C6240,200,6144,200,6048,200C5952,200,5856,200,5760,200C5664,200,5568,200,5472,200C5376,200,5280,200,5184,200C5088,200,4992,200,4896,200C4800,200,4704,200,4608,200C4512,200,4416,200,4320,200C4224,200,4128,200,4032,200C3936,200,3840,200,3744,200C3648,200,3552,200,3456,200C3360,200,3264,200,3168,200C3072,200,2976,200,2880,200C2784,200,2688,200,2592,200C2496,200,2400,200,2304,200C2208,200,2112,200,2016,200C1920,200,1824,200,1728,200C1632,200,1536,200,1440,200C1344,200,1248,200,1152,200C1056,200,960,200,864,200C768,200,672,200,576,200C480,200,384,200,288,200C192,200,96,200,48,200L0,200Z"></path>
  </svg>

  <!-- End Skil yang di kembangkan -->

  <!--berita-->

  <section id="berita" class="berita mt-1">
    <div class="container">
      <div class="section-title">
        <h2>Berita</h2>
      </div>

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2 gambarcon" data-aos="fade-left">
          <img src="assets/img/berita.png" style="width: 400px;" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">

          <?php
          if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
          } else {
            $pageno = 1;
          }
          $no_of_records_per_page = 5;
          $offset = ($pageno - 1) * $no_of_records_per_page;


          $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
          $result = mysqli_query($con, $total_pages_sql);
          $total_rows = mysqli_fetch_array($result)[0];
          $total_pages = ceil($total_rows / $no_of_records_per_page);


          $query = mysqli_query($con, "select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
          while ($row = mysqli_fetch_array($query)) {
          ?>

            <div class="p-2 max-w-full px-8 mt-4  bg-white rounded-lg border border-gray-200 shadow-md">
              <a href="news-details.php?nid=<?php echo htmlentities($row['pid']) ?>">
                <p class="font-semibold"><?php echo htmlentities($row['posttitle']); ?></p>
              </a>

            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Pesan Guru Produktif ======= -->
<svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 220" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(229.553, 229.553, 229.553, 1)" offset="0%"></stop><stop stop-color="rgba(229.553, 229.553, 229.553, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,110L60,124.7C120,139,240,169,360,150.3C480,132,600,66,720,66C840,66,960,132,1080,157.7C1200,183,1320,169,1440,161.3C1560,154,1680,154,1800,135.7C1920,117,2040,81,2160,66C2280,51,2400,59,2520,84.3C2640,110,2760,154,2880,165C3000,176,3120,154,3240,146.7C3360,139,3480,147,3600,154C3720,161,3840,169,3960,146.7C4080,125,4200,73,4320,69.7C4440,66,4560,110,4680,139.3C4800,169,4920,183,5040,168.7C5160,154,5280,110,5400,110C5520,110,5640,154,5760,146.7C5880,139,6000,81,6120,77C6240,73,6360,125,6480,150.3C6600,176,6720,176,6840,150.3C6960,125,7080,73,7200,58.7C7320,44,7440,66,7560,62.3C7680,59,7800,29,7920,25.7C8040,22,8160,44,8280,58.7C8400,73,8520,81,8580,84.3L8640,88L8640,220L8580,220C8520,220,8400,220,8280,220C8160,220,8040,220,7920,220C7800,220,7680,220,7560,220C7440,220,7320,220,7200,220C7080,220,6960,220,6840,220C6720,220,6600,220,6480,220C6360,220,6240,220,6120,220C6000,220,5880,220,5760,220C5640,220,5520,220,5400,220C5280,220,5160,220,5040,220C4920,220,4800,220,4680,220C4560,220,4440,220,4320,220C4200,220,4080,220,3960,220C3840,220,3720,220,3600,220C3480,220,3360,220,3240,220C3120,220,3000,220,2880,220C2760,220,2640,220,2520,220C2400,220,2280,220,2160,220C2040,220,1920,220,1800,220C1680,220,1560,220,1440,220C1320,220,1200,220,1080,220C960,220,840,220,720,220C600,220,480,220,360,220C240,220,120,220,60,220L0,220Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(243, 244, 246, 1)" offset="0%"></stop><stop stop-color="rgba(243, 244, 246, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,110L60,102.7C120,95,240,81,360,84.3C480,88,600,110,720,117.3C840,125,960,117,1080,128.3C1200,139,1320,169,1440,168.7C1560,169,1680,139,1800,135.7C1920,132,2040,154,2160,157.7C2280,161,2400,147,2520,117.3C2640,88,2760,44,2880,44C3000,44,3120,88,3240,102.7C3360,117,3480,103,3600,102.7C3720,103,3840,117,3960,106.3C4080,95,4200,59,4320,69.7C4440,81,4560,139,4680,168.7C4800,198,4920,198,5040,194.3C5160,191,5280,183,5400,179.7C5520,176,5640,176,5760,165C5880,154,6000,132,6120,121C6240,110,6360,110,6480,95.3C6600,81,6720,51,6840,33C6960,15,7080,7,7200,3.7C7320,0,7440,0,7560,14.7C7680,29,7800,59,7920,69.7C8040,81,8160,73,8280,88C8400,103,8520,139,8580,157.7L8640,176L8640,220L8580,220C8520,220,8400,220,8280,220C8160,220,8040,220,7920,220C7800,220,7680,220,7560,220C7440,220,7320,220,7200,220C7080,220,6960,220,6840,220C6720,220,6600,220,6480,220C6360,220,6240,220,6120,220C6000,220,5880,220,5760,220C5640,220,5520,220,5400,220C5280,220,5160,220,5040,220C4920,220,4800,220,4680,220C4560,220,4440,220,4320,220C4200,220,4080,220,3960,220C3840,220,3720,220,3600,220C3480,220,3360,220,3240,220C3120,220,3000,220,2880,220C2760,220,2640,220,2520,220C2400,220,2280,220,2160,220C2040,220,1920,220,1800,220C1680,220,1560,220,1440,220C1320,220,1200,220,1080,220C960,220,840,220,720,220C600,220,480,220,360,220C240,220,120,220,60,220L0,220Z"></path></svg>

  <section id="testimonials" class="testimonials bg-gray-100">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Daftar Siswa</h2>
        <p></p>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
          <?php


          require('koneksi.php');
          $query1 = mysqli_query($connection, "SELECT * FROM user");


          while ($row = mysqli_fetch_array($query1)) {
          ?>
            <div class="swiper-slide">

              <div class="testimonial-item">
                <img src="assets/img/no-image.jpg" class="testimonial-img"  alt="">
                <h3><?= $row['name'] ?></h3>
                <h4><?= $row['kelas'] ?></h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?= $row['NIS'] ?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          <?php }  ?>



        </div>

        <a href="datasiswa">
          <button class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 text-center border-b-4 border-red-700 hover:border-red-500 rounded">
            Lebih Banyak
          </button></a>
      </div>


    </div>
  </section>

  <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 120" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(229.553, 229.553, 229.553, 1)" offset="0%"></stop><stop stop-color="rgba(229.553, 229.553, 229.553, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,24L34.3,38C68.6,52,137,80,206,88C274.3,96,343,84,411,78C480,72,549,72,617,78C685.7,84,754,96,823,96C891.4,96,960,84,1029,80C1097.1,76,1166,80,1234,74C1302.9,68,1371,52,1440,54C1508.6,56,1577,76,1646,80C1714.3,84,1783,72,1851,60C1920,48,1989,36,2057,28C2125.7,20,2194,16,2263,12C2331.4,8,2400,4,2469,16C2537.1,28,2606,56,2674,70C2742.9,84,2811,84,2880,74C2948.6,64,3017,44,3086,42C3154.3,40,3223,56,3291,70C3360,84,3429,96,3497,96C3565.7,96,3634,84,3703,66C3771.4,48,3840,24,3909,18C3977.1,12,4046,24,4114,40C4182.9,56,4251,76,4320,78C4388.6,80,4457,64,4526,52C4594.3,40,4663,32,4731,26C4800,20,4869,16,4903,14L4937.1,12L4937.1,120L4902.9,120C4868.6,120,4800,120,4731,120C4662.9,120,4594,120,4526,120C4457.1,120,4389,120,4320,120C4251.4,120,4183,120,4114,120C4045.7,120,3977,120,3909,120C3840,120,3771,120,3703,120C3634.3,120,3566,120,3497,120C3428.6,120,3360,120,3291,120C3222.9,120,3154,120,3086,120C3017.1,120,2949,120,2880,120C2811.4,120,2743,120,2674,120C2605.7,120,2537,120,2469,120C2400,120,2331,120,2263,120C2194.3,120,2126,120,2057,120C1988.6,120,1920,120,1851,120C1782.9,120,1714,120,1646,120C1577.1,120,1509,120,1440,120C1371.4,120,1303,120,1234,120C1165.7,120,1097,120,1029,120C960,120,891,120,823,120C754.3,120,686,120,617,120C548.6,120,480,120,411,120C342.9,120,274,120,206,120C137.1,120,69,120,34,120L0,120Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(243, 244, 246, 1)" offset="0%"></stop><stop stop-color="rgba(243, 244, 246, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,48L34.3,58C68.6,68,137,88,206,94C274.3,100,343,92,411,84C480,76,549,68,617,58C685.7,48,754,36,823,34C891.4,32,960,40,1029,48C1097.1,56,1166,64,1234,70C1302.9,76,1371,80,1440,70C1508.6,60,1577,36,1646,22C1714.3,8,1783,4,1851,8C1920,12,1989,24,2057,30C2125.7,36,2194,36,2263,46C2331.4,56,2400,76,2469,74C2537.1,72,2606,48,2674,32C2742.9,16,2811,8,2880,6C2948.6,4,3017,8,3086,10C3154.3,12,3223,12,3291,28C3360,44,3429,76,3497,80C3565.7,84,3634,60,3703,50C3771.4,40,3840,44,3909,38C3977.1,32,4046,16,4114,20C4182.9,24,4251,48,4320,58C4388.6,68,4457,64,4526,54C4594.3,44,4663,28,4731,20C4800,12,4869,12,4903,12L4937.1,12L4937.1,120L4902.9,120C4868.6,120,4800,120,4731,120C4662.9,120,4594,120,4526,120C4457.1,120,4389,120,4320,120C4251.4,120,4183,120,4114,120C4045.7,120,3977,120,3909,120C3840,120,3771,120,3703,120C3634.3,120,3566,120,3497,120C3428.6,120,3360,120,3291,120C3222.9,120,3154,120,3086,120C3017.1,120,2949,120,2880,120C2811.4,120,2743,120,2674,120C2605.7,120,2537,120,2469,120C2400,120,2331,120,2263,120C2194.3,120,2126,120,2057,120C1988.6,120,1920,120,1851,120C1782.9,120,1714,120,1646,120C1577.1,120,1509,120,1440,120C1371.4,120,1303,120,1234,120C1165.7,120,1097,120,1029,120C960,120,891,120,823,120C754.3,120,686,120,617,120C548.6,120,480,120,411,120C342.9,120,274,120,206,120C137.1,120,69,120,34,120L0,120Z"></path></svg>
  <!-- End Testimonials Section -->


<!-- Galeri Section -->
<section>
<div class="container" data-aos="fade-up">

<div class="section-title">
  <h2>Galeri</h2>
  <p></p>
</div>

<div class="galeri-slider swiper" data-aos="fade-up" data-aos-delay="100">
  <div class="swiper-wrapper">
    <?php
    require('koneksi.php');
    $query1 = mysqli_query($connection, "SELECT * FROM photos");
    while ($row = mysqli_fetch_array($query1)) {
    ?>
      <div class="swiper-slide">

        <div class="testimonial-item">
          <img src="assets/admin/uploads/<?= $row['path'] ?>" class="testimonial-img" alt="">
        </div>
      </div><!-- End testimonial item -->
    <?php }  ?>
  </div>
 
  <a href="galeri">
    <button class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 text-center border-b-4 border-red-700 hover:border-red-500 rounded">
      Lebih Banyak
    </button></a>
</div>
</div>
</section>
<!-- End Galeri Section -->



  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <?php include('assets/includes/footer.php'); ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src=" https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/TextPlugin.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/EasePack.min.js"></script>
  <script src="resources/js/jquery.min.js"></script>
  <script src="app.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    $(document).ready(function() {
      var owl = $('.owl-carousel');
      owl.owlCarousel({
        margin: 10,
        nav: true,
        loop: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 3
          },
          1000: {
            items: 5
          }
        }
      })
    })
  </script>
  <script>
    var swiper = new Swiper('.testimonials-slider', {
      speed: 500,
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false
      },
      breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 5,
            spaceBetween: 50,
          },
      slidesPerView: 6,
      slidesPerColumn: 2,
      spaceBetween: 30,

      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    },
    });
  </script>
  <script>
    var swiper = new Swiper('.galeri-slider', {
      speed: 500,
      loop: true,
      zoom: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false
      },
      breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 50,
          },
      slidesPerView: 2,
      slidesPerColumn: 2,
      spaceBetween: 30,

      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
      },
    },
    });
  </script>
</body>

</html>