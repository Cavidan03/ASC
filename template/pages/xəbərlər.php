<?php
include '../includes/header.php';
$sql = $db->prepare("SELECT * FROM `esas_sehife`");
$sql->execute();
$d = $sql->fetch(PDO::FETCH_ASSOC);
?>
<style>
  @media (max-width: 320px) {
    .service-item .down-content a {
      margin-left: -20px;
      background-color: #53a9b1;
      color: #fff;
      font-size: 9px;
      text-transform: uppercase;
      font-weight: 500;
      padding: 5px 20px;
      border-radius: 20px;
      display: inline-block;
      transition: all 0.3s;
    }

    .service-item .down-content small {
      font-size: 12px;
      margin-left: -17px;

    }


  }

  @media (max-width: 768px) {
    .service-item .down-content a {
      margin-left: -8px;
      background-color: #53a9b1;
      color: #fff;
      font-size: 9px;
      text-transform: uppercase;
      font-weight: 500;
      padding: 10px 28px;
      border-radius: 20px;
      display: inline-block;
      transition: all 0.3s;
    }


  }


  @media (max-width: 1024px) {
    .service-item .down-content a {
      margin-left: -8px;
      background-color: #53a9b1;
      color: #fff;
      font-size: 9px;
      text-transform: uppercase;
      font-weight: 500;
      padding: 10px 28px;
      border-radius: 20px;
      display: inline-block;
      transition: all 0.3s;
    }

    .service-item .down-content .grey--text {
      font-size: 12px;
      margin-left: -8px;

    }


  }

  @media (max-width: 999px) {
    .service-item .down-content .grey--text {
      font-size: 12px;
      position: relative;
      left: 12px;
      top: 5px
    }
  }
</style>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->


  <header class="background_header">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a href="index.php"><img class="logo_img" src="../../admin_panel/<?= $d['loqo'] ?>" alt="Logo"></a>
        <button class="navbar-toggler bg-transparent" type="button" data-toggle="collapse"
          data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Haqqımızda
              </a>
              <div class="dropdown-menu text-dark" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-dark" href="idare_haqq.php">İdarəedici qurum haqqında</a>
                <a class="dropdown-item text-dark" href="idare_heyet.php">İdarə heyəti</a>
                <a class="dropdown-item text-dark" href="direktorlar_surasi.php">Direktorlar şurası</a>
                <a class="dropdown-item text-dark" href="struktur.php">Təşkilati struktur</a>
                <a class="dropdown-item text-dark" href="hedef.php">Missiya və hədəflərimiz</a>
                <a class="dropdown-item text-dark" href="nizamname.php">Nizamnamə</a>
                <a class="dropdown-item text-dark" href="hesabat.php">Hesabatlar</a>


              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Məhsullarımız
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="heyvandarliq.php">Heyvandarlıq</a>
                <a class="dropdown-item" href="bitkicilik.php">Bitkiçilik</a>
                <a class="dropdown-item" href="akvakultura.php">Akvakultura</a>

              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="faq.php">FAQ</a>
            </li>

            <li class="nav-item active">
              <a class="nav-link text-dark" href="xəbərlər.php">Xəbərlər</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="e-muraciet.php">E-Müraciət</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->
  <div class="page-heading header-text">
    <div class="background-image"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Xəbərlər</h1>
          <span>
            <a href="index.php">ASC</a>
            <i class="fa-solid fa-angle-right"></i>
            Xəbərlər
          </span>
        </div>
      </div>
    </div>
  </div>


  <div class="testimonials">
    <div class="container">
      <div class="row">


        <div class="col-md-12">
          <div class="section-heading">
            <h2>Aqrar Müştərək Sığorta Fondunun <em>Xəbərləri</em></h2>
            <span>Burada Aqrar Müştərək Sığorta Fondu ilə bağlı xəbərlərlə tanış ola bilərsiniz</span>
          </div>
        </div>

        <?php
        $loop = $db->prepare("SELECT * FROM `xeber`");
        $loop->execute([]);
        while ($x = $loop->fetch(PDO::FETCH_ASSOC)) {
          ?>

          <div class="col-md-4">
            <div class="service-item">
              <img src="../../admin_panel/<?= $x['sekil'] ?>" alt="">
              <div class="down-content">
                <h4><?= $x['basliq'] ?></h4>
                <p><?= $x['alt_basliq'] ?>
                </p>
                <a href="xeber_detay.php?id=<?= $x['id'] ?>" class="filled-button">Davamını oxu</a>
                <small class="grey--text"><i aria-hidden="true" class="fa-solid fa-calendar-day"
                    style="font-size: 11px; margin-left:25px"></i>
                  <?php
                  $a = date("d-M-Y", strtotime($x['tarix']));
                  print_r($a);
                  ?>
                </small>
              </div>
            </div>
          </div>
        <?php } ?>


      </div>
    </div>
  </div>

  <?php
  include '../includes/footer.php';
  ?>