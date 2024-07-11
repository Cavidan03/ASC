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

    .altcontent p {
        margin-top: -15px;
        font-family: "Roboto", sans-serif !important;
        font-size: .995rem !important;
        font-weight: 530;
        letter-spacing: .0698571429em !important;
        line-height: 1.25rem;
        color: black;
    }

    .altcontent h4 {
        margin-top: 20px;
        font-family: 'Roboto', sans-serif !important;
        font-size: 1.725rem !important;
        font-weight: 799.8;
        letter-spacing: .0073529412em !important;
    }

    .text1 p {
        width: 58%;
        margin-top: 13px;
        font-family: "Roboto", sans-serif !important;
        font-size: .995rem !important;
        font-weight: 530;
        letter-spacing: .5px;
        line-height: 1.75rem;
        color: black;
    }

    .mission ul {
        list-style-type: disc;
        margin-left: 20px;
        margin-top: 19px;
        width: 55%;
        font-family: "Roboto", sans-serif !important;
        font-size: .995rem !important;
        font-weight: 530;
        letter-spacing: .5px;
        line-height: 1.45rem;
        color: black;
    }

    .mission ul li {
        margin-bottom: 10px;
    }

    /* Tablet Styles */
    @media (max-width: 1025px) {
        .altcontent {
            padding: 25px 0 60px 20px;
        }

        .row2 {
            width: 75%;
            right: -490px;

        }

        .row1 p {
            width: 66%
        }
    }

    @media (max-width: 769px) {
        .altcontent {
            padding: 25px 0 60px 20px;
        }

        .row2 {
            width: 79%;
            right: -350px;

        }

        .heading h2 {
            font-size: 28.5px;
            width: 70%;


        }
    }


    @media (max-width: 426px) {
        .altcontent {
            flex-direction: column;
            align-items: center;
            padding: 25px;
        }

        .row2 {
            position: static;
            transform: translateY(0);
            width: 100%;
            top: auto;
            left: auto;
            right: auto;
            margin-top: 20px;
        }

        .heading h2 {
            width: 100%;
            font-size: 25.5px;
        }

        .altcontent p {
            font-size: .905rem !important;
            width: 100%;

        }

        .mission ul {
            width: 100%;

        }

        p {
            font-size: .905rem !important;
            width: 100%;
            font-family: "Roboto", sans-serif !important;
            font-weight: 530;


        }



        .footer {
            margin-top: 6px;

        }

        .row2 {
            bottom: auto;
            margin-bottom: 110px;

        }
    }
</style>

</head>

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
                                <a class="dropdown-item text-dark active" href="hedef.php">Missiya və hədəflərimiz</a>
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
                    <h1> Missiya və hədəflərimiz</h1>
                    <span>
                        <a href="index.php">ASC</a>
                        <i class="fa-solid fa-angle-right"></i>
                        Missiya və hədəflərimiz
                    </span>
                </div>
            </div>
        </div>
    </div>




    <div class="content">

        <div class="altcontent">

            <div class="row1">

                <div class="heading">
                    <h2>Aqrar Müştərək Sığortanın <em>Missiya və Hədəfləri</em></h2>
                </div>
                <p>
                    Kənd təsərrüfatı məhsullarının istehsalçıları üçün yüksək keyfiyyətli sığorta xidmətləri göstərmək
                </p>

                <h4>Missiyamız:</h4>
                <div class="text1">
                    <p>Aqrar Müştərək Sığortanın əsas missiyası davamlı biznes inkişafını təşviq edərək kənd təsərrüfatı
                        məhsullarının istehsalçıları üçün yüksək keyfiyyətli sığorta xidmətləri göstərmək və hər zaman
                        öz öhdəliklərini yerinə yetirməkdir.</p>
                </div>
                <h4>Hədəflərimiz:</h4>
                <div class="mission">
                    <ul>
                        <li>Kənd təsərrüfatı məhsullarının istehsalının davamlılığını və dayanıqlılığını təmin etmək;
                        </li>
                        <li>İstehlakçıların maliyyə maraqlarının keyfiyyətli qorunmasını təmin etmək;</li>
                        <li>Sığorta bazarında keyfiyyət standartlarına və yüksək mövqelərə nail olmaq;</li>
                        <li>Kənd təsərrüfatı istehsalının artırılmasına dəstək olmaq;</li>
                        <li>Kənd təsərrüfatının qeyri-neft ÜDM-də payının artmasına nail olmaq;</li>
                        <li>Ərzaq təhlükəsizliyinin təmin edilməsi;</li>
                        <li>Kəndlilərin həyat səviyyəsinin yüksəldilməsinə dəstək olmaq;</li>
                        <li>Miqrasiya səviyyəsinin aşağı salınması;</li>
                        <li>Urbanizasiya səviyyəsinin aşağı salınması;</li>
                        <li>Aqrar sektora investisiya cəlbediciliyinin yüksəldilməsi;</li>
                        <li>Kənd təsərrüfatı məhsulları üzrə idxaldan ixraca keçilməsi;</li>
                        <li>Kənd təsərrüfatında böhranın idarəolunmasından riskin idarə oluması metoduna keçilməsi;</li>
                    </ul>
                </div> <br>
                <p>Maliyyəyə çıxış imkanlarının genişləndirilməsi.</p>


            </div>
        </div>



        <div class="row2">
            <div class="single-services">
                <div class="container">
                    <div class="row" id="tab">
                        <div class="col-md-4">
                            <ul>
                                <li><a href='idare_haqq.php'><span>İdarəedici qurum haqqında</span><i
                                            style="margin-left:30px" class="fa-solid fa-circle-info"></i></a></li>
                                <li><a href='idare_heyet.php'><span>İdarə heyəti</span><i style="margin-left:75px"
                                            class="fa-solid fa-users"></i></a></li>
                                <li><a href='direktorlar_surasi.php'><span>Direktorlar şurası</span><i
                                            style="margin-left:38px" class="fa-solid fa-users"></i></a></li>
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