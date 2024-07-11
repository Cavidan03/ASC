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
    display: flex;
    padding: 25px 0 60px 448px;
    flex-wrap: wrap;

  }

  .row2 {
    height: 30vh;
    width: 50%;
    position: fixed;
    right: -400px;
    top: 500px;
    transform: translateY(-50%);
    z-index: 1000;
  }

  .heading {
    text-align: left;
    margin-bottom: 39px;
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

  .text1 p {
    width: 58%;
    margin-top: -11px;
    margin-bottom: 10px;
    font-family: "Roboto", sans-serif !important;
    font-size: .995rem !important;
    font-weight: 530;
    letter-spacing: .5px;
    line-height: 1.75rem;
    color: black;
  }

  .text2 p {
    width: 55%;
    font-family: "Roboto", sans-serif !important;
    font-size: .995rem !important;
    font-weight: 530;
    letter-spacing: .5px;
    line-height: 1.45rem;
  }

  .text2 p a {
    color: #53A9B1;
    font-weight: 550;
  }

  @media (max-width: 1024px) {
    .altcontent {
      padding: 25px 0 60px 20px;
    }

    .row2 {
      width: 75%;
      right: -460px;

    }

    .row1 p {
      width: 66%
    }
  }

  @media (max-width: 768px) {
    .altcontent {
      padding: 25px 0 60px 20px;
    }

    .row2 {
      width: 80%;
      right: -350px;

    }

    .text1 p {
      width: 63% !important;
    }


  }


  @media (max-width: 480px) {
    .altcontent {
      flex-direction: column;
      align-items: center !important;
      padding: 25px;
    }

    .row2 {
      position: static;
      transform: translateY(0);
      width: 100%;
      top: auto;
      left:auto;
      right: auto;
      margin-top: 20px;
    }

    .heading h2 {
      width: 100%;
      font-size: 25.5px;
    }

    .text1 p,
    .text2 p {
      width: 100% !important;
      font-size: .875rem !important;
    }


    .row2 {
      bottom: auto;
      margin-bottom: 80px;
      right: 0;
    }
   .single-services .row{
      margin-left: 20px;
    }
  }

  @media (max-width: 320px) {
  .single-services .row{
      margin-left: -4px;
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
                <a class="dropdown-item text-dark active" href="idare_haqq.php">İdarəedici qurum haqqında</a>
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
          <h1> İdarəedici qurum haqqında</h1>
          <span>
            <a href="index.php">ASC</a>
            <i class="fa-solid fa-angle-right"></i>
            İdarəedici qurum haqqında
          </span>
        </div>
      </div>
    </div>
  </div>



  <div class="content">

    <div class="altcontent">

      <div class="row1">

        <div class="heading">
          <h2> İdarəedici qurum <em>haqqında</em></h2>
        </div>

        <div class="text1">
          <p>
            İdarəedici qurum - «Aqrar Sığorta Müştərək Sığorta Şirkəti» Açıq Səhmdar Cəmiyyəti
            ”
          </p><br>
          <p>Azərbaycanda dövlət dəstəyi ilə tətbiq edilən aqrar sığorta sistemi üzrə idarəedici şirkət -
            «Aqrar Sığorta Müştərək Sığorta Şirkəti» Açıq Səhmdar Cəmiyyətidir.</p> <br>
          <p>«Aqrar Sığorta Müştərək Sığorta Şirkəti» ASC – Aqrar Sığorta Fondu adından aqrar sığorta
            sisteminin idarəedilməsini həyata keçirən kommersiya hüquqi şəxsdir.</p> <br>
          <p>«Aqrar Sığorta Müştərək Sığorta Şirkəti» ASC 31 avqust 2020-ci il tarixində Azərbaycanda
            fəaliyyət göstərən 7 sığorta şirkəti (“Azərbaycan Sənaye Sığorta” ASC, “AzSığorta” ASC, “Bakı
            Sığorta” ASC, “Xalq Sığorta” ASC, “Qala Sığorta” ASC, “Meqa Sığorta” ASC, “PAŞA Sığorta” ASC)
            tərəfindən bərabər paylarla təsis edilib.</p> <br>
          <p>6 oktyabr 2020-ci ildə Azərbaycan Mərkəzi Bankı tərəfindən «Aqrar Sığorta Müştərək Sığorta
            Şirkəti» ASC-yə sığorta fəaliyyəti həyata keçirmək üçün lisenziya verilib (Lisenziyanın
            qeydiyyat nömrəsi SF-002, müddəti 5 il).</p> <br>
          <p>ASC-nin əsas fəaliyyət növü Aqrar Sığorta Fondu adından aqrar sığorta sisteminin idarəedilməsidir
            və Cəmiyyət öz adından sığorta fəaliyyətini həyata keçirə bilməz</p> <br>
          <p>Cəmiyyətin fəaliyyətinə nəzarət “Sığorta fəaliyyəti haqqında” Azərbaycan Respublikasının Qanununa
            uyğun olaraq Azərbaycan Respublikasının Mərkəzi Bankı tərəfindən həyata keçirilir.</p> <br>
          <p>«Aqrar Sığorta Müştərək Sığorta Şirkəti» ASC-nin nizamnamə kapitalı 2 187 500 (iki milyon yüz
            səksən yeddi min beş yüz) manat həcmində olmaqla, hər biri 1 (bir) manat dəyərində olan iki
            milyon yüz səksən yeddi min beş yüz ədəd adi adlı sənədsiz səhmdən ibarətdir.</p>

        </div><br>


        <div class="text2">
          <p><strong> <a title="Aqrar Sığorta Müştərək Sığorta Şirkətinin Nizamnaməsi" href="../pdf/nizamnamə 2024.pdf"
                download>
                Sığorta Müştərək Sığorta Şirkəti” ASC-nin NİZAMNAMƏSİ</a></strong></p>
        </div>


      </div>
    </div>



    <div class="row2">
      <div class="single-services">
        <div class="container">
          <div class="row" id="tab">
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
  include '../includes/footer.php';
  ?>