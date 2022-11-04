<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">smeanbtl@yahoo.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> 0274-367156
        <i class="bi bi-clock-history"><span class="ml-3" id="jam" style="font-size:24"></span></i>
      </div>
      <div class="social-links d-none d-md-block">
        <a href="https://twitter.com/skansaba_id" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://id-id.facebook.com/smknegeri1bantul/" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/smkn1bantul/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCQgXA3YAufCRhmBVXjNZisw" target="_blank" class="youtube"><i class="bi bi-youtube"></i></i></a>
        <a href="https://www.tiktok.com/@skansaba.id" target="_blank" class="linkedin"><i class="bi bi-tiktok"></i></i></a>
      </div>
    </div>
  </section>

<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <a class="navbar-brand logo me-auto flex" href="index">
            <img src="assets/img/Logo-removebg-preview.png" alt="" class="h-10 mr-3" width="51" height="70">
            <span class="self-center text-base font-semibold whitespace-nowrap" id="tkj">TEKNIK KOMPUTER JARINGAN <p class="text-xs font-light" id="tkj">SMK 1 BANTUL</p></span>
        </a>
        <!-- Uncomment below if you prefer to use an image logo -->


        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="<?php if ($page == 'home') {
                         echo 'active';    } ?>" href="index">Home</a></li>
                <li class="dropdown"><a class="<?php if ($page == 'prestasi') {
                         echo 'active';    } if ($page == 'visimisi') {
                            echo 'active';    } if ($page == 'galeri') {
                                echo 'active';    } ?>" href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a class="<?php if ($page == 'visimisi') {
                         echo 'active';    } ?>" href="visiMisi">Visi dan Misi</a></li>
                        <li><a class="<?php if ($page == 'prestasi') {
                         echo 'active';    } ?>" href="Prestasi">Prestasi</a></li>
                        <li><a class="<?php if ($page == 'galeri') {
                         echo 'active';    } ?>" href="galeri">Galeri</a></li>
                    </ul>
                <li class="dropdown"><a href="#" class="<?php if ($page == 'datasiswa') {
                         echo 'active';    } if ($page == 'dataguru') {
                            echo 'active';    } ?>"><span>Data TKJ</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a class="<?php if ($page == 'datasiswa') {
                         echo 'active';    } ?>" href="datasiswa">Data Siswa</a></li>
                        <li><a class="<?php if ($page == 'dataguru') {
                         echo 'active';    } ?>" href="dataguru">Data Guru</a></li>
                    </ul>
                <li><a class="<?php if ($page == 'berita') {
                         echo 'active';    } if ($page == 'detailberita') {
                          echo 'active';    } if ($page == 'search') {
                            echo 'active';    } ?>" href="berita.php">Berita</a></li>
                <li><a class="<?php if ($page == 'contact') {
                         echo 'active';    } ?>" href="contact">Kontak</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>