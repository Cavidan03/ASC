<?php
include '../includes/header.php';
$info = $db->prepare("SELECT * FROM `haqqimizda`,`esas_sehife`");
$info->execute();
$write = $info->fetch(PDO::FETCH_ASSOC);

?>

<style>
  .left-image_container {
    display: flex;

    align-items: center !important;
    justify-content: center;
  }

  .info_btn {

    background-color: #53a9b1;
    color: #fff;
    font-size: 13px;
    text-transform: uppercase;
    font-weight: 700;
    padding: 12px 30px;
    border-radius: 30px;
    display: inline-block;
    transition: all 0.3s;
  }



  .about_wrapper {
    box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
  }

  .right-content {
    padding: 0px 45px 25px 30px !important;

  }

  .left-image_container {
    background-color: #fff !important;
    margin: 0 !important;
    padding: 0 !important;
  }

  .owl-stage {}

  .text-content {
    display: flex;
    flex-direction: column !important;

    align-items: start !important;
    justify-content: center;
  }

  .text-content .basliq {
    font-size: 36px !important;
    width: 60% !important;
    height: auto !important;
    color: #fff;
    font-weight: 600;
    overflow: hidden;
    animation: fadeOutLeft 1s both;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    /* 2 satırla sınırlamak için */
    -webkit-box-orient: vertical;
    text-overflow: ellipsis;
    white-space: normal;
    margin-bottom: 15px;
  }

  .desc_basliq {
    font-size: 21px !important;
    width: 100%;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    /* 2 satırla sınırlamak için */
    -webkit-box-orient: vertical;
    text-overflow: ellipsis;
    white-space: normal;
    overflow: hidden;
  }

  .service-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: nowrap;
    max-height: 60vh
  }

  .service-item1 {
    width: 32.3%;
    display: flex;
    margin-bottom: 20px;
    height: 380px
  }

  .product_image {
    width: 200px;
    height: 220px !important;
    border-radius: 10px;
  }



  .down-content {
    min-height: 200px;
  }

  .down-content h5,
  .down-content p,
  .down_footer {
    margin: 10px 0;
  }

  .down-content h5 {
    font-size: 17px;
    color: black;
    font-weight: 530;
    width: 100%;
    height: 42px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    /* 2 satırla sınırlamak için */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: normal;
  }

  .down-content p {
    margin-top: 10px;
    font-family: "Roboto", sans-serif !important;
    font-size: .895rem !important;
    font-weight: 530;
    letter-spacing: .5px;
    line-height: 1.75rem;
    color: black;
    height: 92px;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    /* 3 satırla sınırlamak için */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: normal;
  }




  .down-content.active h5 {
    opacity: 1;
    transform: translateY(0);

  }

  .down-content h5:hover {
    color: #53a9b1;

  }

  .down_footer {
    width: 80%;
    margin-left: 7px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    overflow: hidden;
    height: auto;
    /* veya istediğiniz bir yükseklik değeri */
  }



  .down_footer .left {
    color: black;
    font-size: 15px;
  }

  .down_footer .right h6 {
    color: #53a9b1;
    font-size: 15px;
    font-weight: 520;

  }




  @media (max-width: 768px) {
    .text-content div {
      font-size: 24px !important;
      width: 80% !important;
      color: #fff;

    }

    .right-content h2 em {
      font-size: 24px !important;

    }

    .right-content>p {
      font-size: 18px !important;

    }


    .text-content {
      display: flex;
      flex-direction: column !important;

      align-items: start !important;
      justify-content: center;
    }

    .text-content .basliq {
      font-size: 28px !important;
      width: 80% !important;
      height: auto !important;
      color: #fff;
      font-weight: 600;
    }

    .desc_basliq {
      font-size: 16px !important;
    }

    .product_image {
      width: 200px;
      height: 150px !important;
    }

    .service_container {
      padding: 10px !important;
    }

    .section-heading h2 {
      font-size: 26px !important;

    }

    .count-digit {
      font-size: 20px !important;

    }

    .count-title {
      font-size: 18px !important;

    }
    .count-area-content{
      height:180px
    
    }

    .left-content h2 {
      font-size: 28px !important;

    }

    .text-content .filled-button {
      font-size: 12px;
      padding: 12px 15px;
      background-color: #53a9b1;
      color: #fff;
      text-transform: uppercase;
      font-weight: 700;
      border-radius: 30px;
      display: inline-block;
      transition: all 0.3s;
      width: 30%;
      text-align: center;

    }


    .down-content .filled-button {
      font-size: 12px;
      padding: 8px 15px;
      background-color: #53a9b1;
      color: #fff;
      text-transform: uppercase;
      font-weight: 700;
      border-radius: 30px;
      display: inline-block;
      transition: all 0.3s;
      width: 90%;
      text-align: center;
      margin-left: -10px;
    }

    .down-content {
      background-color: #f7f7f7;
      padding: 20px !important;
    }


    .about_img {
      width: 300px !important;
      height: auto !important;
      margin-top: 60px;
      margin-left: 30px
    }

    .left-image {
      margin-top: 100px !important;
    }

    .right_container {
      background-color: #f7f7f7;

    }

    .right-content h2 {
      font-size: 34px !important;
    }

    .down_footer {
      width: 94%;
    }

    .down_footer .left {
      font-size: 12px !important;
    }

    .down_footer .right h6 {
      font-size: 12px !important;
    }

    .down-content {
      padding: 14px !important;
    }

    .services {
      margin-top: 80px;
    }

    .more-info .right-content p {
      margin-bottom: 30px;
      width: 100%;
      margin-top: -16px;
      font-family: "Roboto", sans-serif !important;
      font-size: 16px !important;
      font-weight: 530;
      letter-spacing: .2px;
      color: black;
    }

    .down-content>h5 {
      font-size: 18px !important;
      height: 60%;
      margin-bottom: 20px;

    }

    .down-content>p {
      font-size: 14px !important;

    }
  }

  @media (max-width: 450px) {


    .text-content .basliq {
      font-size: 18px !important;
      width: 80% !important;
      height: auto !important;
      color: #fff;
      font-weight: 600;
    }

    .desc_basliq {
      font-size: 12px !important;
    }

    .text-content {
      margin-top: 40px;
      height: 80% !important;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .product_image {
      height: 210px !important;
    }

    .service_container {
      padding: 10px !important;

    }

    .text-content .filled-button {
      font-size: 12px;
      padding: 10px 13px;
      background-color: #53a9b1;
      color: #fff;
      text-transform: uppercase;
      font-weight: 550;
      border-radius: 30px;
      display: inline-block;
      transition: all 0.3s;
      width: 70%;
      text-align: center;

    }

    .down-content .filled-button {
      font-size: 12px;
      padding: 10px 13px;
      background-color: #53a9b1;
      color: #fff;
      text-transform: uppercase;
      font-weight: 420;
      border-radius: 30px;
      display: inline-block;
      transition: all 0.3s;
      width: 70%;
      text-align: center;


    }

    .right_container .filled-button {
      font-size: 12px;
      padding: 10px 13px;
      background-color: #53a9b1;
      color: #fff;
      text-transform: uppercase;
      font-weight: 420;
      border-radius: 30px;
      display: inline-block;
      transition: all 0.3s;
      width: 70%;
      text-align: center;
      margin-left: -30px;

    }

    .info_btn {
      font-size: 12px;
      padding: 13px 15px;
      background-color: #53a9b1;
      color: #fff;
      text-transform: uppercase;
      font-weight: 700;
      border-radius: 30px;
      display: inline-block;
      transition: all 0.3s;
      width: 90%;
      text-align: center;
      margin-left: 14px;
    }

    .down-content {
      background-color: #f7f7f7;
      padding: 20px !important;
    }

    .info_btn {

      background-color: #53a9b1;
      color: #fff;
      font-size: 13px;
      text-transform: uppercase;
      font-weight: 700;
      padding: 12px 30px;
      border-radius: 30px;
      display: inline-block;
      transition: all 0.3s;
    }

    .section-heading h2 {
      font-size: 18px !important;
    }

    .section-heading span {
      font-size: 14px !important;
    }

    .service-container {
      display: flex;
      flex-direction: column;

      align-items: center;
      justify-content: center;
    }

    .down-content h4,
    .down-content p {
      font-size: 18px !important;

    }

    .down-content p {
      font-size: 14px !important;

    }

    .down-content {
      padding: 14px !important;
    }

    .down-content>h5 {
      font-size: 18px !important;
      height: 60%;
      margin-bottom: 20px;

    }

    .down-content>p {
      font-size: 12px !important;

    }

    .left-image_container {
      display: none;
    }

    .about_wrapper {
      box-shadow: none;
    }

    .right-content {
      padding: 0px 24px 25px 24px !important;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;

    }

    .right-content h2 {
      font-size: 28px !important;
    }

  }
</style>

<header class="background_header">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a active href="index.php"><img class="logo_img" src="../../admin_panel/<?= $write['loqo'] ?>" alt="Logo"></a>
      <button class="navbar-toggler bg-transparent" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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

          <li class="nav-item ">
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

<!-- Banner Starts Here -->
<div class="main-banner header-text" id="top">
  <div class="Modern-Slider">
    <!-- Item -->
    <!-- // Item -->
    <!-- Item -->

    <?php
    $query = $db->prepare("SELECT * FROM `xeber` WHERE `status` = 1");
    $query->execute([]);
    $xeberler = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($xeberler as $xeber) {
      ?>

      <div class="item item">
        <div class="img-fill">
          <img src="../../admin_panel/<?= $xeber['sekil'] ?>" alt="Modern_Slider">
          <div class="text-content">
            <div class="basliq"><?= $xeber['basliq'] ?></div>
            <div class="line"></div>
            <p class="desc_basliq"><?= htmlspecialchars($xeber['alt_basliq']) ?></p>
            <a href="xeber_detay.php?id=<?= $xeber['id'] ?>" class="filled-button">Davamını oxu</a>
          </div>
        </div>
      </div>
      <?php
    }
    ?>
    <!-- // Item -->
    <!-- Item -->

    <!-- // Item -->
  </div>
</div>
<!-- Banner Ends Here -->



<div class="services">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-heading">
          <h2>Məhsullarımız</h2>
          <span>Məhsullarımız
            Aqrar sığorta bitkiçilik, heyvandarlıq və akvakultura sahələrini əhatə edir</span>
        </div>
      </div>
      <?php
      $query = $db->prepare("SELECT * FROM `mehsul`");
      $query->execute([]);
      $mehsullar = $query->fetchAll(PDO::FETCH_ASSOC);

      foreach ($mehsullar as $mehsul) {
        ?>
        <div class="col-12 col-md-4 service_container">
          <div class="service-item">
            <img class="product_image" src="<?= $mehsul['mehsul_sekil'] ?>" alt="">
            <div class="down-content">
              <h4 style="height:25px"><?= $mehsul['mehsul_ad'] ?></h4>
              <p style="height:60px"><?= $mehsul['mehsul_altbasliq'] ?></p>
              <a href="<?= $mehsul['mehsul_url'] ?>" class="filled-button">
                Ətraflı məlumat
              </a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

<div class="fun-facts">
  <div class="background-image"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="left-content">
          <h2> <em>2024-cü ildə</em> buraxılan müqavilələr barədə məlumat</h2>
        </div><br>
      </div>
      <div class="col-md-12 align-self-left">
        <div class="row">
          <div class="col-md-10">
            <h3 class="section-title">Bitkiçilik:</h3>
          </div>
          <div class="col-md-3">
            <div class="count-area-content">
              <div class="count-digit">49158</div>
              <div class="count-title">Müqavilə sayı</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="count-area-content">
              <div class="count-digit">380149,78</div>
              <div class="count-title">Predmet sayı (ha və ya baş)</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="count-area-content">
              <div class="count-digit">9596927,75</div>
              <div class="count-title">Sığorta haqqı (AZN)</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="count-area-content">
              <div class="count-digit">403848181,87</div>
              <div class="count-title">Sığorta məbləği (AZN)</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 align-self-left">
        <div class="row">
          <div class="col-md-10">
            <h3 class="section-title">Heyvandarlıq:</h3>
          </div>
          <div class="col-md-3">
            <div class="count-area-content">
              <div class="count-digit"> 65</div>
              <div class="count-title">Müqavilə sayı</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="count-area-content">
              <div class="count-digit"> 1100</div>
              <div class="count-title">Predmet sayı (ha və ya baş)</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="count-area-content">
              <div class="count-digit"> 658891,02</div>
              <div class="count-title">Sığorta haqqı (AZN)</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="count-area-content">
              <div class="count-digit"> 6474097,19</div>
              <div class="count-title">Sığorta məbləği (AZN)</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


<div class="more-info">
  <div class="container">
    <div class="row about_wrapper">
      <div class="col-md-12">
        <div class="more-info-content">
          <div class="row ">
            <div class="col-md-6 left-image_container ">
              <div class="left-image">
                <img class="about_img" src="<?= $write['sekil'] ?>" alt="">
              </div>
            </div>
            <div class="right_container col-md-6 align-self-center">
              <div class="right-content">
                <span>Haqqımızda</span>
                <h2><em><?= $write['ad'] ?></em> </h2>
                <p><?= $write['alt_basliq'] ?>
                </p>
                <a href="<?= $write['url'] ?>" class="filled-button"> Ətraflı məlumat</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="services">
  <div class="container">
    <div class="row">

      <div class="col-12">
        <div class="section-heading">
          <h2>Aqrar Müştərək Sığorta Fondunun <em> Son Xəbərləri</em></h2>
          <span>Burada Aqrar Müştərək Sığorta Fondu ilə bağlı son xəbərlərlə tanış ola bilərsiniz</span>
        </div>



      </div>
      <?php
      $query = $db->prepare("SELECT * FROM `xeber` ORDER BY `tarix` DESC LIMIT 3");
      $query->execute([]);
      $xeberler = $query->fetchAll(PDO::FETCH_ASSOC);

      foreach ($xeberler as $xeber) {
        ?>
        <div class="col-12 col-md-4 service_container">
          <div class="service-item">
            <a href="xeber_detay.php?id=<?= $xeber['id'] ?>">
              <img class="product_image" src="../../admin_panel/<?= $xeber['sekil'] ?>" alt="index_news">
              <div class="down-content">
                <h5><?= $xeber['basliq'] ?></h5>
                <p><?= $xeber['alt_basliq'] ?></p>
                <div class="down_footer">
                  <div class="left">
                    <?php
                    $a = date("d-M-Y", strtotime($xeber['tarix']));
                    print_r($a);
                    ?>
                  </div>
                  <div class="right">
                    <h6>DAVAMINI OXU</h6>
                  </div>
                </div>
              </div>

            </a>
          </div>

        </div>
      <?php } ?>
    </div>
  </div>
</div>

<div class="col-md-12">
  <div style="margin-top:20px" class="section-heading">
    <h2>Vasitəçi <em>Aqrar Sığortaçılar</em></h2>
  </div>
</div>

<div class="partners d-flex flex-row align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="owl-partners owl-carousel">

          <a href="https://www.aiic.az/" target="_blank">
            <div class="partner-item">
              <img src="../assets/images/aiic-2.png">
            </div>
          </a>
          <a href="https://azsigorta.az/" target="_blank">
            <div class="partner-item">
              <img src="../assets/images/azsighorta.png">
            </div>
          </a>
          <a href="https://www.xalqsigorta.az/" target="_blank">
            <div class="partner-item">
              <img src="../assets/images/khalg-2.png">
            </div>
          </a>
          <a href="https://meqasigorta.az/" target="_blank">
            <div class="partner-item">
              <img src="../assets/images/meqa.png">
            </div>
          </a>
          <a href="https://www.pasha-insurance.az/az" target="_blank">
            <div class="partner-item">
              <img src="../assets/images/pasha.png">
            </div>
          </a>
          <a href="https://bakisigorta.az/" target="_blank">
            <div class="partner-item">
              <img src="../assets/images/baku.png">
            </div>
          </a>
          <a href="https://qala-insurance.az/" target="_blank">
            <div class="partner-item">
              <img style="height:100px" src="../assets/images/logo-qala-2.png">
            </div>
          </a>
        </div>

      </div>
    </div>
  </div>
</div>


<?php
include '../includes/footer.php'
  ?>