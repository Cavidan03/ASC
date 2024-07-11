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
            padding: 25px 0 0 448px;
        }

        .row1 {
            margin: 0 auto;
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
        .team-item a{
            display: flex;

        }

        .team-item img {
            object-fit: cover;
            height: 200px;
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
            display: flex;
            align-items: center;
            margin-top: 10px;
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
                                <a class="dropdown-item active" href="bitkicilik.php">Bitkiçilik</a>
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
                    <h1>Bitkiçilik</h1>
                    <span>
                        <a href="index.php">ASC</a>
                        <i class="fa-solid fa-angle-right"></i>
                        Bitkiçilik
                    </span>
                </div>
            </div>
        </div>
    </div>


    <div class="content">

        <div class="altcontent">

            <div class="row1">

                <h2>Bitkiçilik</h2>
                <p>
                    Aqrar Sığorta predmeti olaraq aşağıdakı bitkiçilik məhsulları sığortalanır</p>
                <img src="../assets/images/bitki.jpg" alt="" class="bg-image">
                <div class="text1">
                    <p>- taxıllar, paxlalılar və yağlı bitkilərdə – dən</p>
                    <p>- lifli bitkilərdə – lif;</p>
                    <p>- əsas məhsulu kök və dibində olan bitkilərdə - kök və dib;.</p>
                    <p>- əsas məhsulu yarpaq olan bitkilərdə - yarpaq;</p>
                    <p>- meyvəsi yeyilən bitkilərdə - meyvə;</p>
                    <p>- yem bitkilərində - bütün yaşıl hissə.</p>
                </div>

                <h4>Hansı bitkilər sığortalana bilər?</h4>
                <div class="text1">
                    <p>Nazirlər Kabinetinin 17 dekabr 2019-cu il tarixli 479 saylı və 22 dekabr 2021-ci il tarixli 398
                        saylı
                        qərarlarına əsasən, Azərbaycanda aqrar sığorta hazırda 41 adda bitkiçilik məhsullarını əhatə
                        edir.
                        Onlar aşağıdakılardır:</p>
                </div>
                <div class="firstli">
                    <ol>
                        <li>buğda;</li>
                        <li>arpa;</li>
                        <li>qarğıdalı;</li>
                        <li>kartof</li>
                        <li>şəkər çuğunduru;</li>
                        <li>portağal;</li>
                        <li>limon;</li>
                        <li>naringi;</li>
                        <li>çay;</li>
                        <li>çəltik;</li>
                        <li>tütün;</li>
                        <li>üzüm;</li>
                        <li>fındıq;</li>
                        <li>pambıq;</li>
                        <li>günəbaxan;</li>
                        <li>soya;</li>
                        <li>yonca;</li>
                        <li>noxud;</li>
                        <li>yaşıl noxud;</li>
                        <li>alça;</li>
                        <li>albalı;</li>
                        <li>alma;</li>
                        <li>armud;</li>
                        <li>çiyələk;</li>
                        <li>ərik;</li>
                        <li>gavalı;</li>
                        <li>gilas;</li>
                        <li>heyva;</li>
                        <li>xurma;</li>
                        <li>nar;</li>
                        <li>şaftalı;</li>
                        <li>zeytun;</li>
                        <li>badam;</li>
                        <li>qoz;</li>
                        <li>soğan;</li>
                        <li>kələm;</li>
                        <li>qarpız;</li>
                        <li>yemiş (qovun);</li>
                        <li>pomidor;</li>
                        <li>sarımsaq;</li>
                        <li>darı</li>
                        <li>ağac(kol);</li>
                        <li>ting(ştil).</li>
                    </ol>
                </div>
                <h4>Hansı risklərdən sığortalana bilər?</h4>

                <div class="secondli">
                    <ul>
                        <li>dolu;</li>
                        <li>yanğın;</li>
                        <li>zəlzələ;</li>
                        <li>torpaq sürüşməsi;</li>
                        <li>qasırğa;</li>
                        <li>fırtına;</li>
                        <li>sel və subasma;</li>
                        <li>leysan;</li>
                        <li>ildırım;</li>
                        <li>şaxtavurma (donvurma);</li>
                        <li>normadan artıq yağan qar yağıntıları;</li>
                        <li>üçüncü şəxslərin hərəkətləri.</li>
                        <li>Əlavə sığorta haqqı ödəməklə portağal, limon, naringi və üzüm bitkilərinin məhsullarında
                            dolu riski nəticəsində yaranan miqdar itkisi ilə yanaşı, keyfiyyət itkisinə də təminat
                            verilə bilər.</li>
                        <li>Əlavə sığorta haqqı ödəməklə buğda və arpa bitkilərinin dən hissəsi ilə yanaşı, gövdə
                            hissəsində də yaranan miqdar itkisinə təminat verilə bilər və bu təminat üzrə sığorta
                            məbləği bitkinin dən hissəsi üzrə sığorta məbləğinin 40% çox ola bilməz.</li>
                        <li>Əlavə sığorta haqqı ödəməklə, bitki xəstəlikləri və zərərvericilər və xüsusi təhlükəli
                            ziyanvericilərin yayılması riskləri nəticəsində yaranan miqdar itkisinə təminat verilə
                            bilər.</li>
                    </ul>
                </div>

                <h4>Sığorta müqaviləsi bağlanması</h4>
                <div class="thirdli">
                    <ul>
                        <li>Sığortalı müraciətini məhsullara, risklərə və coğrafi ərazilərə görə aqrar sığorta
                            məhsulunun şərtlərində müəyyən edilmiş və Fondun rəsmi internet səhifəsində dərc edilmiş
                            tarixlər ərzində etməlidir.</li>
                        <li>EKTİS-də qeydiyyatdan keçdikdən sonra müvafiq sığorta şirkətinə sığortalanmaqla bağlı
                            müraciət edilməlidir.</li>
                        <li>Sığorta müqaviləsi bağlamaq istəyən şəxsin təqdim etdiyi məlumatların doğruluğu həmin gün
                            ərzində vasitəçi aqrar sığortaçı tərəfindən EKTİS-də olan məlumatlarla müqayisə edilərək
                            yoxlanılır.</li>
                        <li>İdarəedici qurumun məsul əməkdaşı ona təqdim edildiyi sənədlər və məlumatlar əsasında
                            müqavilə bağlanması barədə qərarını Fondla razılaşdırmalıdır.</li>
                        <li>Müqavilənin bağlanmasına razılıq verildiyi halda müstəqil eskpert tərəfindən sığorta
                            predmetinə baxış keçirilir.</li>
                        <li>İdarəedici qurumun məsul əməkdaşı müstəqil ekspert tərəfindən göndərilmiş məlumat və
                            sənədləri təhlil edərək sığorta müqaviləsinin bağlanılıb-bağlanılmaması barədə qərar qəbul
                            edir.</li>
                    </ul>
                </div>
                <h4> Sığorta haqqının ödənilməsi</h4>

                <div class="fourthli">
                    <ul>
                        <li>Sığorta haqqı birdəfəlik və ya hissələrlə ödənilə bilər.;</li>
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
                            ödənilir</li>
                        <li>
                            Aqrar sığorta müqaviləsində sığorta haqqının hissə hissə ödənilməsi nəzərdə tutulduqda
                            sığorta müqaviləsi sığorta haqqının ilk hissəsinin ödənilməsindən sonra və ya sığorta
                            haqqının tam ödənilməsi nəzərdə tutulduqda onun tam ödənilməsindən sonra qüvvəyə minir
                        </li>
                    </ul>

                </div>

                <h4>Sığorta hadisəsi olduqda</h4>
                <div class="fifthli">
                    <ul>
                        <li>Sığorta hadisələri barədə məlumatı hadisənin baş vermə tarixindən 24 saat ərzində vasitəçi
                            aqrar sığortaçıya və ya idarəedici quruma, eyni zamanda qanunvericiliyə uyğun olaraq, həmin
                            hadisə barədə məlumatlandırılmalı olan digər səlahiyyətli dövlət orqanlarına məlumat
                            verməlidir.
                        </li>
                        <li>Zərərin araşdırılması və qiymətləndirilməsi üçün müstəqil ekspert cəlb olunur.</li>
                        <li>Müstəqil ekspert tərəfindən təqdim olunan rəy və fotoşəkillər əsasında ödəniş və ya imtina
                            edilir.</li>
                    </ul>

                    <ol>
                        <li><a title="arpa-mehsulun-sertleri"
                                href="https://api.asf.gov.az/az/file/arpa-mehsulun-sertleri-2.pdf">“Arpa bitkisinin
                                sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="bugda-mehsulun-sertleri"
                                href="https://api.asf.gov.az/az/file/bugda-mehsulun-sertleri-2.pdf">“Buğda bitkisinin
                                sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="cay-mehsulun-sertleri"
                                href="https://api.asf.gov.az/az/file/cay-mehsulun-sertleri-030921.pdf">“Çay bitkisinin
                                sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="celtik-mehsulun-sertleri"
                                href="https://api.asf.gov.az/az/file/celtik-mehsulun-sertleri-030921.pdf">“Çəltik
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="findiq-mehsulun-sertleri"
                                href="https://api.asf.gov.az/az/file/findiq-mehsulun-sertleri-030921.pdf">“Fındıq
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="kartof-mehsulun-sertleri"
                                href="https://api.asf.gov.az/az/file/kartof-mehsulun-sertleri-030921.pdf">“Kartof
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="qargidali-mehsulun-sertleri"
                                href="https://api.asf.gov.az/az/file/qargidali-mehsulun-sertleri-030921.pdf">“Qarğıdalı
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="limon-mehsulun-sertleri"
                                href="https://api.asf.gov.az/az/file/limon-mehsulun-sertleri-030921.pdf">“Limon
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="naringi-mehsulun-sertleri"
                                href="https://api.asf.gov.az/az/file/naringi-mehsulun-sertleri-030921.pdf">“Naringi
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="pambiq-mehsulun-sertleri"
                                href="https://api.asf.gov.az/az/file/pambiq-mehsulun-sertleri-29112023.pdf">“Pambıq
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="portagal-mehsulun-sertleri"
                                href="https://api.asf.gov.az/az/file/portagal-mehsulun-sertleri-030921.pdf">“Portağal
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="seker-cugunduru-mehsulun-sertleri"
                                href="https://api.asf.gov.az/az/file/seker-cugunduru-mehsulun-sertleri-030921.pdf">“Şəkər
                                çuğunduru bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="tutun-mehsulun-sertleri"
                                href="https://api.asf.gov.az/az/file/tutun-mehsulun-sertleri-030921.pdf">“Tütün
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="uzum-mehsulun-sertleri"
                                href="https://api.asf.gov.az/az/file/uzum-mehsulun-sertleri-030921.pdf">“Üzüm bitkisinin
                                sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="agac-kol-mehsul-sertleri"
                                href="https://api.asf.gov.az/az/file/agac-kol-mehsul-sertleri-2.pdf">Kənd təsərrüfatı
                                bitkiləri və bitkiçilik məhsullarının sığortası üzrə ağac (kol) təminatına dair aqrar
                                sığorta məhsulunun şərtləri;</a></li>
                        <li><a title="ting-sitil-mehsul-sertleri"
                                href="https://api.asf.gov.az/az/file/ting-sitil-mehsul-sertleri-2.pdf">Kənd təsərrüfatı
                                bitkiləri və bitkiçilik məhsullarının sığortası üzrə ting (şitil) təminatına dair aqrar
                                sığorta məhsulunun şərtləri;</a></li>
                        <li><a title="gunebaxan-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/gunebaxan-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-2.pdf">“Günəbaxan
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="soya-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/soya-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-2.pdf">“Soya
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="yonca-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/yonca-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-2.pdf">“Yonca
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="noxud-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/noxud-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-2.pdf">“Noxud
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="yasil-noxud-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/yasil-noxud-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-2.pdf">“Yaşıl
                                noxud bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="alca-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/alca-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-2.pdf">“Alça
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="albali-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/albali-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-2.pdf">“Albalı
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="alma-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/alma-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-3.pdf">“Alma
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="armud-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/armud-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-3.pdf">“Armud
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="ciyelek-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/ciyelek-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-2.pdf">“Çiyələk
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="erik-bitkisinin-sigortas"
                                href="https://api.asf.gov.az/az/file/erik-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-3.pdf">“Ərik
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="gavali-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/gavali-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-2.pdf">“Gavalı
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="gilas-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/gilas-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-3.pdf">“Gilas
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="heyva-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/heyva-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-2.pdf">“Heyva
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="xurma-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/xurma-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-2.pdf">“Xurma
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="nar-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/nar-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-2.pdf">“Nar
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="saftali-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/saftali-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-3.pdf">“Şaftalı
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="zeytun-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/zeytun-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-2.pdf">“Zeytun
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="badam-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/badam-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-2.pdf">“Badam
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="qoz-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/qoz-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-2.pdf">“Qoz
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="sogan-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/sogan-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-2.pdf">“Soğan
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="kelem-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/kelem-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-2.pdf">“Kələm
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="qarpiz-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/qarpiz-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-2.pdf">"Qarpız
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="yemis-qovun-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/yemis-qovun-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-2.pdf">“Yemiş
                                (qovun) bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="pomidor-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/pomidor-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-2.pdf">“Pomidor
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="sarimsaq-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/sarimsaq-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-2.pdf">“Sarımsaq
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”;</a></li>
                        <li><a title="dari-bitkisinin-sigortasi"
                                href="https://api.asf.gov.az/az/file/dari-bitkisinin-sigortasi-uzre-aqrar-sigorta-mehsulunun-sertleri-2.pdf">“Darı
                                bitkisinin sığortası üzrə aqrar sığorta məhsulunun şərtləri”.</a.< /li>
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

            if (scrollTop > 180) {
                row2.style.top = '200px';
            } else {
                row2.style.top = '520px';
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