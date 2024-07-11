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
        padding: 80px 0 60px 498px;
    }

    .row2 {
        height: 30vh;
        width: 50%;
        position: fixed;
        right: -400px;
        top: 520px;
        transform: translateY(-50%);
        z-index: 1000;
        transition: top 0.3s;
        /* Animasyon süresi */
    }



    . .altcontent h2 {
        font-family: ' Roboto', sans-serif !important;
        font-size: 2.125rem !important;
        font-weight: 750;
        letter-spacing: .0073529412em !important;
    }

    .altcontent p {
        margin-top: 19px;
        font-family: "Roboto", sans-serif !important;
        font-size: .995rem !important;
        font-weight: 530;
        letter-spacing: .0698571429em !important;
        line-height: 1.25rem;
        color: black
    }

    .bg-image {
        margin-top: 35px;
        margin-left: -32px;
        object-fit: cover;
        height: 53vh;
        width: 61%;

    }

    .text1 p {
        width: 58%;
        margin-top: 19px;
        margin-bottom: 10px;
        font-family: "Roboto", sans-serif !important;
        font-size: .995rem !important;
        font-weight: 530;
        letter-spacing: .5px;
        line-height: 1.75rem;
        color: black;
    }

    .altcontent h4 {
        margin-top: 20px;
        font-family: ' Roboto', sans-serif !important;
        font-size: 1.725rem !important;
        font-weight: 799.8;
        letter-spacing: .0073529412em !important;
    }

    .firstli ul,
    .thirdli ul {
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

    .firstli ul li,
    .thirdli ul li {
        margin-bottom: 10px;
    }

    .secondli ul {
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

    .secondli ul li {
        margin-bottom: 10px;
    }

    .secondli ul ul li:nth-child(1),
    .secondli ul ul li:nth-child(2) {
        list-style-type: circle;
    }


    .thirdli ol {
        width: 55%;
        font-family: "Roboto", sans-serif !important;
        font-size: .995rem !important;
        font-weight: 530;
        letter-spacing: .5px;
        line-height: 1.45rem;


    }

    .thirdli ol li a {
        color: #53A9B1;
        font-weight: 550
    }

    @media (max-width: 1024px) {
        .altcontent {
            padding: 25px 0 60px 80px;
        }

        .row2 {
            width: 75%;
            right: -490px;

        }

        .bg-image {
            height: 380px;
            margin-left: 1px;

        }

        .altcontent p {
            width: 64%;
            margin-top: 19px;
            font-family: "Roboto", sans-serif !important;
            font-size: 1.185rem !important;
            font-weight: 530;

        }


        .text1 p {
            width: 68%;
            margin-top: 19px;
            margin-bottom: 10px;
            font-family: "Roboto", sans-serif !important;
            font-size: 1.185rem !important;
            font-weight: 530;
        }

        .altcontent h4 {
            margin-left: -10px;
            font-size: 1.925rem !important;
            width: 80%;
        }

        .firstli ul,
        .secondli ul,
        .thirdli ul,
        .thirdli ol {
            width: 70%;
            font-family: "Roboto", sans-serif !important;
            font-size: 1.205rem !important;
            letter-spacing: .18px;

        }
    }


    @media (max-width: 768px) {
        .altcontent {
            padding: 25px 0 60px 20px;
        }

        .row2 {
            width: 90%;
            right: -450px;

        }

        .heading h2 {
            font-size: 28.5px;
            width: 70%;
        }

        .row1 p,
        .text1 p,
        .firstli ul,
        .secondli ul,
        .secondli ul ul,
        .thirdli ul,
        .thirdli ol a {
            font-size: .995rem !important;
            font-weight: 500;
            width: 66%;
        }
    }

    @media (max-width: 480px) {
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

        .bg-image {
            margin-top: 35px;
            margin-left: -12px;
            object-fit: cover;
            height: 300px;
            width: 100%;
        }

        .row1 p {
            width: 100%;
            margin-top: 19px;
            font-size: 0.955rem !important;
            font-weight: 530;

        }

        .text1 p {
            width: 100%;
            margin-top: 19px;
            margin-bottom: 10px;
            font-size: .905rem !important;
            font-weight: 530;
        }

        .altcontent h4 {
            margin-left: -10px;
            font-size: 1.625rem !important;
            width: 100%;
        }

        .firstli ul,
        .secondli ul,
        .secondli ul ul,
        .thirdli ul,
        .thirdli ol {
            width: 95%;
            font-size: .955rem !important;
            letter-spacing: .7px;
        }


        .footer {
            margin-top: 1px;

        }

        .row2 {
            bottom: auto;
            margin-bottom: 20px;

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
                                <a class="dropdown-item  active" href="heyvandarliq.php">Heyvandarlıq</a>
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

    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="background-image"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1> Heyvandarlıq</h1>
                    <span>
                        <a href="index.php">ASC</a>
                        <i class="fa-solid fa-angle-right"></i>
                        Heyvandarlıq
                    </span>
                </div>
            </div>
        </div>
    </div>


    <div class="content">

        <div class="altcontent">

            <div class="row1">

                <h2>Heyvandarlıq</h2>
                <p>Aqrar Sığorta predmeti olaraq aşağıdakı kənd təsərrüfatı heyvanları sığortalanır:</p>
                <img src="../assets/images/heyvan.jpg" alt="" class="bg-image">
                <div class="text1">
                    <p>Nazirlər Kabinetinin 17 dekabr 2019-cu il tarixli 479 sayılı&nbsp;<span lang="AZ-LATIN">və 22
                            dekabr
                            2021-ci il tarixli 398 sayılı&nbsp;</span>qərarlarına əsasən, Azərbaycanda&nbsp;<span
                            lang="AZ-LATIN">a</span>qrar&nbsp;<span lang="AZ-LATIN">s</span>ığorta&nbsp;<span
                            lang="AZ-LATIN">hazırda aşağıdakı&nbsp;</span>heyvandarlıq məhsullarını əhatə edir:</p>

                    <p>- 11-ci gündən 7 yaşa qədər südlük mal-qara (inəklər və camışlar);</p>
                    <p>- 11-ci gündən 3 yaşa qədər ətlik mal-qara (danalar);</p>
                    <p>- 11-ci gündən 5 yaşa qədər xırdabuynuzlu heyvanlar (qoyun və keçilər).</p>
                </div>

                <h4>Aqrar sığorta heyvanları hansı risklərdən sığortalayır?</h4>
                <p>Aşağıdakı risklərin baş verməsi nəticəsində sığortalanmış heyvanın ölümü:</p>

                <div class="firstli">
                    <ul>
                        <li>Azərbaycan Respublikası Nazirlər Kabinetinin 2006-cı il 7 mart tarixli 65 nömrəli və 2007-ci
                            il
                            16
                            aprel tarixli 66 nömrəli Qərarlarda təsdiq edilmiş və göstərilmiş karantin və xüsusi
                            təhlükəli
                            yoluxucu xəstəliklərin siyahısına daxil olan xəstəliklər istisna olmaqla, digər yoluxucu
                            xəstəliklər;</li>
                        <li>ilan və ya həşərat sancması;</li>
                        <li>zəhərli otlar və ya yemlərdən zəhərlənmə;</li>
                        <li>kimyəvi maddələrin təsirindən zəhərlənmə;&nbsp;</li>
                        <li>təbii fəlakətlər (zəlzələ, torpaq sürüşməsi, qasırğa, fırtına və dolu);</li>
                        <li>yanğın;</li>
                        <li>vəhşi heyvanların hücumu;</li>
                        <li>üçüncü şəxslərin hərəkətləri;</li>
                        <li>əlavə sığorta haqqı ödəməklə nəzərdə tutulmuş risklərlə yanaşı oğurluq, soyğunçuluq və
                            quldurluq
                            yolu ilə əldə edilməsi nəticəsində dəymiş zərərlərə də təminat verilə bilər.</li>
                    </ul>
                </div>

                <h4>Sığorta haqqının ödənilməsi</h4>

                <div class="secondli">
                    <ul>
                        <li>sığorta haqqı <strong>birdəfəlik və ya hissələrlə</strong> ödənilə bilər;</li>
                        <li>sığorta haqqı aşağıdakı hissələrdən ibarətdir:
                            <ul>
                                <li>Sığortalı tərəfindən ödənilməli olan hissə;</li>
                                <li>Dövlət büdcəsinin vəsaiti hesabına ödənilən hissə, yəni sığorta haqqının 50%-i;</li>
                            </ul>
                        </li>
                        <li>sığorta müqaviləsində başqa hal nəzərdə tutulmamışdırsa, sığorta haqqı birdəfəlik
                            ödənilir.<br><br>Aqrar sığorta müqaviləsində sığorta haqqının hissə-hissə ödənilməsi nəzərdə
                            tutulduğu halda sığorta haqqının ödənilməsi qaydası həmin müqavilədə müəyyən edilir.
                            <strong>Hər
                                bir halda sığortalı tərəfindən ödənilməli olan sığorta haqqının ilk hissəsi həmin
                                məbləğin
                                ən azı 25 faizini təşkil edir.</strong> Sığorta haqqının sığortalı tərəfindən ödənilməli
                            olan hissəsinin tam ödənilməsi nəzərdə tutulduqda - hamısı, hissə-hissə ödənilməsi nəzərdə
                            tutulduqda isə sığorta müqaviləsində müəyyən edilmiş ilk hissəsi aqrar sığorta müqaviləsinin
                            bağlandığı gün ödənilir;
                        </li>
                        <li>aqrar sığorta müqaviləsində sığorta haqqının hissə hissə ödənilməsi nəzərdə tutulduqda
                            sığorta
                            müqaviləsi sığorta haqqının ilk hissəsinin ödənilməsindən sonra və ya sığorta haqqının tam
                            ödənilməsi nəzərdə tutulduqda, onun tam ödənilməsindən sonra qüvvəyə minir.</li>
                    </ul>
                </div>

                <h4>Sığorta hadisəsi olduqda</h4>
                <div class="thirdli">
                    <ul>
                        <li>sığorta hadisələri barədə məlumatı hadisənin baş vermə tarixindən 24 saat ərzində vasitəçi
                            aqrar
                            sığortaçıya və ya idarəedici quruma, eyni zamanda qanunvericiliyə uyğun olaraq, həmin hadisə
                            barədə məlumatlandırılmalı olan digər səlahiyyətli dövlət orqanlarına məlumat verməlidir;
                        </li>
                        <li>zərərin araşdırılması və qiymətləndirilməsi üçün müstəqil ekspert cəlb olunur;</li>
                        <li>müstəqil ekspert tərəfindən təqdim olunan rəy və fotoşəkillər əsasında ödəniş və ya imtina
                            edilir;</li>
                    </ul>

                    <ol>
                        <li><a href="https://api.asf.gov.az/az/file/iribuynuzlu-heyvanlarin-mehsul-sertleri-3.pdf">Kənd
                                təsərrüfatı heyvanları və kənd təsərrüfatı məqsədilə yetişdirilən heyvanların sığortası
                                üzrə
                                aqrar sığorta məhsulunun şərtləri</a></li>
                        <li>
                            <p><a href="https://api.asf.gov.az/az/file/xirdabuynuzlu-heyvanlarin-mehsul-sertleri-4.pdf">Kənd
                                    təsərrüfatı heyvanları və kənd təsərrüfatı məqsədilə yetişdirilən xırdabuynuzlu
                                    heyvanların sığortası üzrə aqrar sığorta məhsulunun şərtləri</a></p>
                        </li>
                    </ol>
                </div>
            </div>



        </div>



        <div class="row2">
            <div class="single-services">
                <div class="container">
                    <div class="row" id="tab">
                        <div class="col-md-4">
                            <ul>
                                <li><a href='heyvandarliq.php'><span>Heyvandarlıq</span><i style="margin-left:30px"
                                            class="fa-solid fa-cow"></i></a></li>
                                <li><a href='bitkicilik.php'><span>Bitkiçilik</span><i style="margin-left:75px"
                                            class="fa-solid fa-seedling"></i></a></li>
                                <li><a href='akvakultura.php'><span>Akvakultura</span><i style="margin-left:38px"
                                            class="fa-solid fa-fish-fins"></i></a></li>
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
            if (scrollTop > 180) {
                row2.style.top = '200px'; // Yukarı doğru hareket
            } else {
                row2.style.top = '520px'; // Orijinal konuma geri dön
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