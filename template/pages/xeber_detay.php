<?php
include '../includes/header.php';
$id = @$_GET['id'];
$loop = $db->prepare("SELECT * FROM `xeber` WHERE id=:id");
$loop->execute([':id' => $id]);
$x = $loop->fetch(PDO::FETCH_ASSOC);
?>


<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.content {
    min-height: calc(180px - 490px);
    padding-bottom: 60px;
    overflow-x: hidden; /* Yatay kaydırmayı engellemek için */
}

.altcontent {
    display: flex;
    flex-direction: column;
    padding: 50px 0 0 380px;
    align-items: flex-start;
}

.altcontent h2 {
    width: 100%;
    font-family: 'Roboto', sans-serif !important;
    font-size: 2.125rem !important;
    font-weight: 750;
    letter-spacing: .0073529412em !important;
    line-height: 2.75rem;
}

.altcontent .subnews {
    margin-top: 17px;
    font-size: .995rem !important;
    font-weight: 530;
    display: flex;
    align-items: center;
    font-size: 17px !important;
    font-weight: 530;
    color: #474646;
    width: 100%;
    justify-content: space-between;
}

.subnews small {
    margin-right: 20px;
}

.subnews .icons {
    font-size: 21px;
    margin-bottom: 18px;
}

.subnews .icons i {
    margin-right: 10px;
}

.row1 .text p {
    width: 100%;
    margin-top: 19px;
    font-family: "Roboto", sans-serif !important;
    font-size: .995rem !important;
    font-weight: 530;
    letter-spacing: .5px;
    line-height: 1.75rem;
    color: black;
}

.altcontent p small i {
    margin-right: 5px;
}

.bg-image {
    margin-top: 18px;
    object-fit: cover;
    height: 53vh;
    width: 100%;
    border-radius: 20px;
}

.altcontent h4 {
    margin-top: 20px;
    font-family: 'Roboto', sans-serif !important;
    font-size: 1.125rem !important;
    font-weight: 599.8;
    letter-spacing: .0073529412em !important;
    width: 100%;
}

.row2 {
    height: 50px;
    width: 100%;
    position: absolute;
    right: 0;
    top: 265px;
}

.service-item a img {
    object-fit: cover;
    height: 183px;
    border-radius: 20px;
    width: 100%;
}

.down-content h5 {
    margin-bottom: 15px;
    margin-top: -10px;
    font-size: 15px;
    color: black;
    font-weight: 530;
    width: 100%;
    transition: color 0.3s ease;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: normal;
    height: 38px;
}

.down-content h5:hover {
    color: #53a9b1;
}

.down_footer {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    overflow: hidden;
    height: auto;
}

.down_footer .left {
    color: black;
    font-size: 13px;
}

.down_footer .right h6 {
    color: #53a9b1;
    font-size: 13px;
    font-weight: 520;
}

/* Responsive Styles */
@media (max-width: 1200px) {
    .altcontent {
        padding: 50px 20px;
    }

    .subnews .icons {
        margin-left: auto;
    }
}

@media (max-width: 1024px) {
    .content {
        width: 100%;
    }

    .altcontent {
        padding: 25px 20px 60px 20px; /* Adjusted padding to avoid horizontal scroll */
    }

    .row2 {
        position: absolute;
        right: 20px;
        top: 265px;
    }

    .row1 p {
        width: 100%; /* Ensure width is responsive */
    }
}

@media (max-width: 768px) {
    .altcontent {
        padding: 20px;
    }

    .altcontent h2 {
        font-size: 1.75rem;
        line-height: 2.25rem;
    }

    .subnews {
        flex-direction: column;
        align-items: flex-start;
    }

    .subnews small {
        margin-bottom: 10px;
    }

    .bg-image {
        height: auto;
    }

    .row2 {
        position: absolute;
        right: 20px;
        top: 265px;
    }
}

@media (max-width: 480px) {
    .altcontent h2 {
        font-size: 1.5rem;
        line-height: 2rem;
    }

    .row1 .text p {
        font-size: 0.875rem;
        line-height: 1.5rem;
    }

    .down-content h5 {
        font-size: 0.875rem;
        height: auto;
    }

    .row2 {
        position: static;
        margin-top: 20px;
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
    <?php
    $sql3 = $db->prepare("select * from esas_sehife");
    $sql3->execute();
    $k = $sql3->fetch(PDO::FETCH_ASSOC); ?>


    <header class="background_header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href="index.php"><img class="logo_img" src="../../admin_panel/<?= $k['loqo'] ?>" alt="Logo"></a>
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
                    <h1>Xəbər-detayı</h1>
                    <span>
                        <a href="xəbərlər.php"> Xəbərlər</a>
                        <i class="fa-solid fa-angle-right"></i>
                        <?= $x['basliq'] ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="content">

        <div class="altcontent">

            <div class="row1">

                <h2><?= $x['basliq'] ?></h2>
                <div class="subnews"><small class="grey--text"><i aria-hidden="true"
                            class="fa-solid fa-calendar-day"></i>
                        <?php
                        $a = date("d-M-Y", strtotime($x['tarix']));
                        print_r($a);
                        ?></small>
                    <div class="icons">
                        <a href="#" class="share-button" data-platform="facebook"><i
                                class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="share-button" data-platform="twitter"><i
                                class="fa-brands fa-twitter"></i></a>
                        <a style="color:limegreen" href="#" class="share-button" data-platform="whatsapp"><i
                                class="fa-brands fa-whatsapp"></i></a>
                        <a href="#" class="share-button" data-platform="linkedin"><i
                                class="fa-brands fa-linkedin"></i></a>
                    </div>

                </div>

                <img src="../../admin_panel/<?= $x['sekil'] ?>" alt="news_image" class="bg-image">

                <h4><?= $x['alt_basliq'] ?></h4>

                <div class="text">
                    <p><?= $x['mezmun'] ?></p>
                </div>

            </div>
        </div>





        <div class="row2">
            <div class="single-services">
                <div class="container">
                    <div class="row" id="tab">
                        <div class="col-md-4">
                            <div style="margin-top:26px" class="section-heading">
                                <h2>Son <em>Xəbərlər</em></h2>
                            </div>
                            <?php
                            $querry = $db->prepare("SELECT * FROM `xeber` ORDER BY `tarix` DESC LIMIT 3");
                            $querry->execute();
                            $xeberler = $querry->fetchAll(PDO::FETCH_ASSOC);

                            if (!$xeberler) {
                                echo "No news found.";
                            } else {
                                foreach ($xeberler as $xeber) {
                                    ?>
                                    <div class="service-item">
                                        <a href="xeber_detay.php?id=<?= $xeber['id'] ?>">
                                            <img src="../../admin_panel/<?= $xeber['sekil'] ?>" alt="index_news">
                                            <div class="down-content">
                                                <h5><?= $xeber['basliq'] ?></h5>
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
                                    <?php
                                }
                            }

                            ?>

                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var shareButtons = document.querySelectorAll('.share-button');
        shareButtons.forEach(function (button) {
            button.addEventListener('click', function (event) {
                event.preventDefault();
                var platform = this.getAttribute('data-platform');
                var newsId = '<?= $x['id'] ?>'; // Haberin ID'sini PHP'den alıyoruz
                var newsUrl = 'http://yourwebsite.com/news/' + newsId; // Haberin URL'si

                // Paylaşım URL'sini oluşturma
                var shareUrl;
                if (platform === 'facebook') {
                    shareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(newsUrl);
                } else if (platform === 'twitter') {
                    shareUrl = 'https://twitter.com/intent/tweet?url=' + encodeURIComponent(newsUrl);
                } else if (platform === 'whatsapp') {
                    shareUrl = 'https://api.whatsapp.com/send?text=' + encodeURIComponent(newsUrl);
                } else if (platform === 'linkedin') {
                    shareUrl = 'https://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(newsUrl);
                }

                // Haberin iletildiğini kaydetmek için AJAX çağrısı
                shareNews(newsId, platform);

                // Paylaşım linkine yönlendirme
                window.open(shareUrl, '_blank');
            });
        });
    });

    function shareNews(newsId, platform) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'update_share_status.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log('Share status updated');
            }
        };
        xhr.send('id=' + newsId + '&platform=' + platform);
    }
</script>
<?php
include '../includes/footer.php';
?>