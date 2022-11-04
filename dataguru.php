<?php
include_once("koneksi.php");

// AMBIL DATA DARI DATABASE BERDASARKAN DATA TERAKHIR DI INPUT
$result = mysqli_query($connection, "SELECT * FROM users ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Guru</title>
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
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />


  <!-- Template Main CSS File -->
  <link href="assets/css/DataSiswa.css" rel="stylesheet">

  <!-- =======================================================
 
  ======================================================== -->
</head>

<body class="selection:bg-slate-600 selection:text-white">

  <!-- ======= Header ======= -->
  <?php include('assets/includes/header.php'); ?>
  <!-- End Header -->


  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Data Guru</h2>
        <ol>
          <li><a href="index">Home</a></li>
          <li>Data Guru</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Guru Produktif ======= -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-8 col-lg-6">
        <!-- Section Heading-->
        <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
          <h3>Our Creative <span> Team</span></h3>
          <p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
          <div class="line"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
      $no = 0;
      while ($res = mysqli_fetch_array($result)) {
        $no++;
      ?>
        <!-- Single Advisor-->
        <div class="col-12 col-sm-6 col-lg-3" data-bs-toggle="modal" data-bs-target="#exampleModalCenter<?= $no ?>">
          <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <!-- Team Thumb-->
            <div class="advisor_thumb"><?php echo "<img height='500' width='350' src='assets/admin/image/" . $res['gambar'] . "'"; ?>
              <!-- Social Info-->
              <div class="social-info">
                <p><?= $res['pendidikan'] ?></p>
              </div>
            </div>
            <!-- Team Details-->
            <div class="single_advisor_details_info">
              <h6><?= $res['nama'] ?></h6>
              <p class="designation">Mengajar Pelajaran <?= $res['mata_pelajaran'] ?></p>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade modal-lg" id="exampleModalCenter<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <div style="border-radius: .5rem;">
                  <div class="row g-0">
                    <div class="col-md-4  text-center text-white">
                      <?php echo "<img height='500' style='border-radius: 8%;' width='350' src='assets/admin/image/" . $res['gambar'] . "'"; ?>
                      <!-- <img src="HmZu4TERI6CWcfTN8yP__oRMiznX.png" alt="Avatar" class="img-fluid mt-5" style="border-radius: 20%;"> -->
                    </div>
                    <div class="col-md-8 mt-5">
                      <div class="card-body p-4">
                        <h6>Information</h6>
                        <hr class="mt-0 mb-4">
                        <div class="row pt-1">
                          <div class="col-6 mb-3">
                            <h6>Nama</h6>
                            <p class="text-muted" style="word-wrap:break-word"><?= $res['nama'] ?></p>
                          </div>
                          <div class="col-6 mb-3">
                            <h6>Nip</h6>
                            <p class="text-muted" style="word-wrap:break-word"><?= $res['nip'] ?></p>
                          </div>
                          <div class="col-6 mb-3">
                            <h6>Pendidikan</h6>
                            <p class="text-muted" style="word-wrap:break-word"><?= $res['pendidikan'] ?></p>
                          </div>
                          <div class="col-6 mb-3">
                            <h6>Mengajar</h6>
                            <p class="text-muted" style="word-wrap:break-word"><?= $res['mata_pelajaran'] ?></p>
                          </div>
                          <div class="col-6 mb-3">
                            <h6>Phone</h6>
                            <p class="text-muted" style="word-wrap:break-word"><?= $res['hp'] ?></p>
                          </div>
                          <div class="col-6 mb-3">
                            <h6>Alamat</h6>
                            <p class="text-muted" style="word-wrap:break-word"><?= $res['alamat'] ?></p>
                          </div>
                          <div class="col-6 mb-3">
                            <h6>Tanggal Lahir</h6>
                            <p class="text-muted" style="word-wrap:break-word"><?= $res['tangal_lahir'] ?></p>
                          </div>
                          <div class="col-6 mb-3">
                            <h6>Tempat Lahir</h6>
                            <p class="text-muted" style="word-wrap:break-word"><?= $res['tempat_lahir'] ?></p>
                          </div>
                        </div>
                        <hr class="mt-0 mb-4">
                        <div class="row pt-1">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      <?php } ?>
    </div>
  </div>



  <!-- ======= Footer ======= -->
  <?php include('assets/includes/footer.php'); ?>
  <!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="jam.js"></script>
  <script type="text/javascript" src="assets/js/jam.js"></script>
</body>

</html>