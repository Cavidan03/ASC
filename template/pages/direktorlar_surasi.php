<?php
include '../includes/header.php';
$sql = $db->prepare("SELECT * FROM `esas_sehife`");
$sql->execute();
$d = $sql->fetch(PDO::FETCH_ASSOC);
?>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .altcontent {
    padding: 25px 0 0 430px;
  }

  .row1 {
    margin: 0 auto;
  }

  .row2 {
    height: 30vh;
    width: 50%;
    position: fixed;
    right: -440px;
    top: 500px;
    transform: translateY(-50%);
    z-index: 1000;
  }

  .heading {
    text-align: left;
    margin-bottom: 24px;
  }

  .heading h2 {
    font-size: 30.5px;
    font-weight: 600;
    color: #1e1e1e;
    margin-top: 34px;
  }

  .heading em {
    font-style: normal;
    color: #53a9b1;
  }

  .team {
    display: block;
    width: 100%;
  }

  .team-item {
    display: block;
    background-color: #f8f8f8;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .flex {
    display: flex;

  }


  .team-item img {
    object-fit: cover;
    height: 250px;
    width: 20%;
    border-radius: 8px;

  }

  .down-content {
    margin-top: 20px;
  }

  .down-content h4 {
    color: black;
  }

  .first,
  .second {
    width: 90%;
    display: flex;
    align-items: center;
    margin-top: 20px;
  }


  .first i,
  .second i {
    margin-right: 10px;
  }

  .row1 p {
    margin-top: 2px;
    font-family: "Roboto", sans-serif !important;
    font-size: .995rem !important;
    font-weight: 530;
    letter-spacing: .0698571429em !important;
    line-height: 1.25rem;
    color: black;
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
                <a class="dropdown-item text-dark  active" href="direktorlar_surasi.php">Direktorlar şurası</a>
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

            <li class="nav-item">
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
          <h1>Direktorlar Şurası</h1>
          <span>
            <a href="index.php">ASC</a>
            <i class="fa-solid fa-angle-right"></i> Direktorlar Şurası
          </span>
        </div>
      </div>
    </div>
  </div>



  <div class="content">

    <div class="altcontent">
      <div class="row1">
        <div class="heading">
          <h2> Aqrar Müştərək Sığorta Şirkətinin <em>Direktorlar Şurası</em></h2>
        </div>
        <p>Aqrar Müştərək Sığorta Şirkətinin Direktorlar Şurası</p>
        <div class="team">
          <?php
          $loop = $db->prepare("SELECT * FROM `direktorlar_surasi`");
          $loop->execute([]);
          while ($i = $loop->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <div class="team-item">
              <div class="flex">
                <img src="../../admin_panel/<?= $i['sekil'] ?>" alt="">
                <div class="down-content">
                  <h4><?= $i['ad'] ?></h4>
                  <div class="first">
                    <i class="fa-solid fa-briefcase"></i>
                    <p><?= $i['hazirki_vezife'] ?></p>
                  </div>
                  <div class="second">
                    <i class="fa-solid fa-id-badge"></i>
                    <p><?= $i['e-mail'] ?></p>
                  </div>
                </div>
              </div>

            <?php } ?>
          </div>
        </div>
      </div>


      <div class="row2">
        <div class="single-services">
          <div class="container">
            <div class="row" id="tab">
              <div class="col-md-4">
                <ul>
                  <li><a href='idare_haqq.php'><span>İdarəedici qurum haqqında</span><i style="margin-left:30px"
                        class="fa-solid fa-circle-info"></i></a></li>
                  <li><a href='idare_heyet.php'><span>İdarə heyəti</span><i style="margin-left:75px"
                        class="fa-solid fa-users"></i></a></li>
                  <li><a href='direktorlar_surasi.php'><span>Direktorlar şurası</span><i style="margin-left:38px"
                        class="fa-solid fa-users"></i></a></li>
                  <li><a href='struktur.php'><span>Təşkilati struktur</span><i style="margin-left:38px"
                        class="fa-solid fa-sitemap"></i></a></li>
                  <li><a href='hedef.php'><span>Missiya və hədəflərimiz</span><i style="margin-left:38px"
                        class="fa-solid fa-bullseye"></i></a></li>
                  <li><a href='nizamname.php'><span>Nizamnamə</span><i style="margin-left:38px"
                        class="fa-solid fa-pen-to-square"></i></a></li>
                  <li><a href='hesabat.php'><span>Hesabatlar</span><i style="margin-left:38px"
                        class="fa-solid fa-pen-to-square"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    window.addEventListener('scroll', function () {
      var scrollTop = window.scrollY;
      var row2 = document.querySelector('.row2');

      // Yukarı kaydırma durumunda
      if (scrollTop > 190) {
        row2.style.top = '200px'; // Yukarı doğru hareket
      } else {
        row2.style.top = '500px'; // Orijinal konuma geri dön
      }
    });

    document.addEventListener('DOMContentLoaded', function () {
      // Mevcut sayfanın adı
      var currentPage = window.location.pathname.split('/').pop();

      // Navigasyon bağlantılarını seç
      var navLinks = document.querySelectorAll('#tab ul li a');

      // Her bağlantıyı kontrol et
      navLinks.forEach(function (link) {
        var linkPage = link.getAttribute('href').split('/').pop();
        if (linkPage === currentPage) {
          link.classList.add('active');
        }
      });
    });
  </script>

  <?php
  include '../includes/footer.php'
    ?>