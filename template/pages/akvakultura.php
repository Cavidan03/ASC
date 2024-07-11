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

    .altcontent h4 {
        margin-top: 20px;
        font-family: ' Roboto', sans-serif !important;
        font-size: 1.725rem !important;
        font-weight: 799.8;
        letter-spacing: .0073529412em !important;
    }

    .firstli ul,
    .secondli ul,
    .fourthli ul {
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
    .secondli ul li,
    .fourthli ul li {
        margin-bottom: 10px;
    }

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

    .thirdli ul li {
        margin-bottom: 10px;
    }

    .thirdli ul ul li:nth-child(1),
    .thirdli ul ul li:nth-child(2),
    .fourthli p {
        width: 55%;
        font-family: "Roboto", sans-serif !important;
        font-size: .995rem !important;
        font-weight: 530;
        letter-spacing: .5px;
        line-height: 1.45rem;


    }

    .fourthli p a {
        color: #53A9B1;
        font-weight: 550
    }

    
    .thirdli ul ul  {
        list-style-type: circle;
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


        .row1 p {
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
            width: 70%;
        }

        .firstli ul,
        .secondli ul,
        .thirdli ul,
        .thirdli ul ul,
        .fourthli ul,
        .fourthli ul a {
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

        .row1 p {
            width: 75%;
            font-size: .995rem !important;
            font-weight: 500;
        }
        .firstli ul,
        .secondli ul,
        .thirdli ul,
        .fourthli ul,
        .fourthli ul a{
            font-size: .995rem !important;
            font-weight: 400!important;
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
        .row1 p,
        .firstli ul,
        .secondli ul,
        .fourthli ul{
            width:100%
        }
        
        .thirdli ul{
            width: 90%;
        }
        .thirdli ul ul{
            width:100%
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
                                <a class="dropdown-item active" href="akvakultura.php">Akvakultura</a>

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
    </header>>

    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="background-image"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Akvakultura</h1>
                    <span>
                        <a href="index.php">ASC</a>
                        <i class="fa-solid fa-angle-right"></i>
                        Akvakultura
                    </span>
                </div>
            </div>
        </div>
    </div>


    <div class="content">

        <div class="altcontent">

            <div class="row1">

                <h2>Akvakultura</h2>
                <p>Akvakultura məhsulu kimi balıqlar sığortanın predmeti hesab edilirlər.</p>
                <img src="../assets/images/akvakultura.jpg" alt="" class="bg-image">


                <h4>Hansı risklərdən sığortalana bilər?</h4>
                <div class="firstli">
                    <ul>
                        <li>kütləvi zəhərlənmə nəticəsində balıqların ölümü;</li>
                        <li>təbii fəlakətlər (zəlzələ, torpaq sürüşməsi, qasırğa, fırtına və dolu) nəticəsində
                            balıqların ölümü;</li>
                        <li>vəhşi heyvanların hücumu nəticəsində balıqların ölümü;</li>
                        <li>yanğının birbaşa və ya dolayı təsiri nəticəsində balıqların ölümü</li>
                        <li>üçüncü şəxslərin hərəkətləri nəticəsində balıqların ölümü.</li>
                        <li>Əlavə sığorta haqqı ödəməklə, yuxarıda qeyd olunmuş risklərlə yanaşı, akvakultura məhsulunun
                            oğurlanması, soyğunçuluq və quldurluq yolu ilə əldə edilməsi nəticəsində dəymiş zərərlərə də
                            təminat verilə bilər.</li>
                    </ul>
                </div>

                <h4>Sığorta müqaviləsi bağlanması</h4>
                <div class="secondli">
                    <ul>
                        <li>müəssisələrdə yetişdirilən növlər üçün suyun texniki normativ hüquqi aktlarda müəyyən
                            edilmiş tələblərə uyğun olmalıdır;</li>
                        <li>axar su və nasoslarla su təmin edilən müəssisələrdə, həmişə işlək vəziyyətdə əlavə nasos və
                            generatorun olmalıdır;</li>
                        <li>axar sularla su təmin edilən müəssisələrdə suya qarışan tullantıların kənarlaşdırılması üçün
                            alət və vasitələrin istifadəsi və gündə ən azı bir dəfə təmizlənməlidir;</li>
                        <li>axar sulardan su təmin edən müəssisələrdə suyun boşaldılması üçün kanalın inşa edilmiş
                            olmalıdır;</li>
                        <li>dənizdə yerləşən müəssisələrə münasibətdə dəniz nəqliyyatı üçün xəbərdarlıq işıqlarının və
                            fosforlu nişanlamaların mövcud olmalıdır;</li>
                        <li>vəhşi heyvanların hücumuna qarşı lazımi tədbirlər olmalıdır.</li>
                        <li>İdarəedici qurumun məsul əməkdaşı ona təqdim edildiyi sənədlər və məlumatlar əsasında
                            müqavilə bağlanması barədə qərarını Fondla razılaşdırmalıdır.</li>
                        <li>Müqavilənin bağlanmasına razılıq verildiyi halda müstəqil eskpert tərəfindən sığorta
                            predmetinə baxış keçirilir.</li>
                        <li>İdarəedici qurumun məsul əməkdaşı müstəqil ekspert tərəfindən göndərilmiş məlumat və
                            sənədləri təhlil edərək sığorta müqaviləsinin bağlanılıb-bağlanılmaması barədə qərar qəbul
                            edir.</li>
                    </ul>
                </div>

                <h4>Sığorta haqqının ödənilməsi</h4>


                <div class="thirdli">
                    <ul>
                        <li>Sığorta haqqı birdəfəlik və ya hissələrlə ödənilə bilər.</li>
                        <li>Sığorta haqqı aşağıdakı hissələrdən ibarətdir:
                            <ul>
                                <li>sığortalı tərəfindən ödənilməli olan hissə;</li>
                                <li>dövlət büdcəsinin vəsaiti hesabına ödənilən hissə, yəni sığorta haqqının 50%-i.</li>
                            </ul>
                        </li>
                        <li>Sığorta müqaviləsində başqa cür nəzərdə tutulmamışdırsa sığorta haqqı birdəfəlik ödənilir.
                        </li>
                        <li>Aqrar sığorta müqaviləsində sığorta haqqının hissə-hissə ödənilməsi nəzərdə tutulduğu halda
                            sığorta haqqının ödənilməsi qaydası həmin müqavilədə müəyyən edilir. Hər bir halda sığortalı
                            tərəfindən ödənilməli olan sığorta haqqının ilk hissəsi həmin məbləğin ən azı 25 faizini
                            təşkil edir. Sığorta haqqının sığortalı tərəfindən ödənilməli olan hissəsinin tam ödənilməsi
                            nəzərdə tutulduqda - hamısı, hissə-hissə ödənilməsi nəzərdə tutulduqda isə sığorta
                            müqaviləsində müəyyən edilmiş ilk hissəsi aqrar sığorta müqaviləsinin bağlandığı gün
                            ödənilir.</li>
                        <li>Aqrar sığorta müqaviləsində sığorta haqqının hissə hissə ödənilməsi nəzərdə tutulduqda
                            sığorta müqaviləsi sığorta haqqının ilk hissəsinin ödənilməsindən sonra və ya sığorta
                            haqqının tam ödənilməsi nəzərdə tutulduqda onun tam ödənilməsindən sonra qüvvəyə minir.</li>
                    </ul>
                </div>
                <h4>Sığorta hadisəsi olduqda</h4>

                <div class="fourthli">
                    <ul>
                        <li>Sığorta hadisələri barədə məlumatı hadisənin baş vermə tarixindən 24 saat ərzində vasitəçi
                            aqrar sığortaçıya və ya idarəedici quruma, eyni zamanda qanunvericiliyə uyğun olaraq, həmin
                            hadisə barədə məlumatlandırılmalı olan digər səlahiyyətli dövlət orqanlarına məlumat
                            verməlidir.</li>
                        <li>Zərərin araşdırılması və qiymətləndirilməsi üçün müstəqil ekspert cəlb olunur.</li>
                        <li>Müstəqil ekspert tərəfindən təqdim olunan rəy və fotoşəkillər əsasında ödəniş və ya imtina
                            edilir.</li>
                    </ul>
                    <br>

                    <p><a href="https://api.asf.gov.az/az/file/akvakultura-mehsulun-sertleri.pdf">Akvakultura
                            məhsullarının sığortası üzrə aqrar sığorta məhsulunun şərtləri</a></p>



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